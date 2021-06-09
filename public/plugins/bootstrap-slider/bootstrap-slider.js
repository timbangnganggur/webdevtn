icks);
				}
			}

			if (Array.isArray(this.options.value)) {
				this.options.range = true;
				this._state.value = this.options.value;
			} else if (this.options.range) {
				// User wants a range, but value is not an array
				this._state.value = [this.options.value, this.options.max];
			} else {
				this._state.value = this.options.value;
			}

			this.trackLow = sliderTrackLow || this.trackLow;
			this.trackSelection = sliderTrackSelection || this.trackSelection;
			this.trackHigh = sliderTrackHigh || this.trackHigh;

			if (this.options.selection === 'none') {
				this._addClass(this.trackLow, 'hide');
				this._addClass(this.trackSelection, 'hide');
				this._addClass(this.trackHigh, 'hide');
			} else if (this.options.selection === 'after' || this.options.selection === 'before') {
				this._removeClass(this.trackLow, 'hide');
				this._removeClass(this.trackSelection, 'hide');
				this._removeClass(this.trackHigh, 'hide');
			}

			this.handle1 = sliderMinHandle || this.handle1;
			this.handle2 = sliderMaxHandle || this.handle2;

			if (updateSlider === true) {
				// Reset classes
				this._removeClass(this.handle1, 'round triangle');
				this._removeClass(this.handle2, 'round triangle hide');

				for (i = 0; i < this.ticks.length; i++) {
					this._removeClass(this.ticks[i], 'round triangle hide');
				}
			}

			var availableHandleModifiers = ['round', 'triangle', 'custom'];
			var isValidHandleType = availableHandleModifiers.indexOf(this.options.handle) !== -1;
			if (isValidHandleType) {
				this._addClass(this.handle1, this.options.handle);
				this._addClass(this.handle2, this.options.handle);

				for (i = 0; i < this.ticks.length; i++) {
					this._addClass(this.ticks[i], this.options.handle);
				}
			}

			this._state.offset = this._offset(this.sliderElem);
			this._state.size = this.sliderElem[this.sizePos];
			this.setValue(this._state.value);

			/******************************************
   				Bind Event Listeners
   	******************************************/

			// Bind keyboard handlers
			this.handle1Keydown = this._keydown.bind(this, 0);
			this.handle1.addEventListener("keydown", this.handle1Keydown, false);

			this.handle2Keydown = this._keydown.bind(this, 1);
			this.handle2.addEventListener("keydown", this.handle2Keydown, false);

			this.mousedown = this._mousedown.bind(this);
			this.touchstart = this._touchstart.bind(this);
			this.touchmove = this._touchmove.bind(this);

			if (this.touchCapable) {
				this.sliderElem.addEventListener("touchstart", this.touchstart, false);
				this.sliderElem.addEventListener("touchmove", this.touchmove, false);
			}

			this.sliderElem.addEventListener("mousedown", this.mousedown, false);

			// Bind window handlers
			this.resize = this._resize.bind(this);
			window.addEventListener("resize", this.resize, false);

			// Bind tooltip-related handlers
			if (this.options.tooltip === 'hide') {
				this._addClass(this.tooltip, 'hide');
				this._addClass(this.tooltip_min, 'hide');
				this._addClass(this.tooltip_max, 'hide');
			} else if (this.options.tooltip === 'always') {
				this._showTooltip();
				this._alwaysShowTooltip = true;
			} else {
				this.showTooltip = this._showTooltip.bind(this);
				this.hideTooltip = this._hideTooltip.bind(this);

				if (this.options.ticks_tooltip) {
					var callbackHandle = this._addTickListener();
					//create handle1 listeners and store references in map
					var mouseEnter = callbackHandle.addMouseEnter(this, this.handle1);
					var mouseLeave = callbackHandle.addMouseLeave(this, this.handle1);
					this.handleCallbackMap.handle1 = {
						mouseEnter: mouseEnter,
						mouseLeave: mouseLeave
					};
					//create handle2 listeners and store references in map
					mouseEnter = callbackHandle.addMouseEnter(this, this.handle2);
					mouseLeave = callbackHandle.addMouseLeave(this, this.handle2);
					this.handleCallbackMap.handle2 = {
						mouseEnter: mouseEnter,
						mouseLeave: mouseLeave
					};
				} else {
					this.sliderElem.addEventListener("mouseenter", this.showTooltip, false);
					this.sliderElem.addEventListener("mouseleave", this.hideTooltip, false);

					if (this.touchCapable) {
						this.sliderElem.addEventListener("touchstart", this.showTooltip, false);
						this.sliderElem.addEventListener("touchmove", this.showTooltip, false);
						this.sliderElem.addEventListener("touchend", this.hideTooltip, false);
					}
				}

				this.handle1.addEventListener("focus", this.showTooltip, false);
				this.handle1.addEventListener("blur", this.hideTooltip, false);

				this.handle2.addEventListener("focus", this.showTooltip, false);
				this.handle2.addEventListener("blur", this.hideTooltip, false);

				if (this.touchCapable) {
					this.handle1.addEventListener("touchstart", this.showTooltip, false);
					this.handle1.addEventListener("touchmove", this.showTooltip, false);
					this.handle1.addEventListener("touchend", this.hideTooltip, false);

					this.handle2.addEventListener("touchstart", this.showTooltip, false);
					this.handle2.addEventListener("touchmove", this.showTooltip, false);
					this.handle2.addEventListener("touchend", this.hideTooltip, false);
				}
			}

			if (this.options.enabled) {
				this.enable();
			} else {
				this.disable();
			}
		}

		/*************************************************
  				INSTANCE PROPERTIES/METHODS
  	- Any methods bound to the prototype are considered
  part of the plugin's `public` interface
  	**************************************************/
		Slider.prototype = {
			_init: function _init() {}, // NOTE: Must exist to support bridget

			constructor: Slider,

			defaultOptions: {
				id: "",
				min: 0,
				max: 10,
				step: 1,
				precision: 0,
				orientation: 'horizontal',
				value: 5,
				range: false,
				selection: 'before',
				tooltip: 'show',
				tooltip_split: false,
				lock_to_ticks: false,
				handle: 'round',
				reversed: false,
				rtl: 'auto',
				enabled: true,
				formatter: function formatter(val) {
					if (Array.isArray(val)) {
						return val[0] + " : " + val[1];
					} else {
						return val;
					}
				},
				natural_arrow_keys: false,
				ticks: [],
				ticks_positions: [],
				ticks_labels: [],
				ticks_snap_bounds: 0,
				ticks_tooltip: false,
				scale: 'linear',
				focus: false,
				tooltip_position: null,
				labelledby: null,
				rangeHighlights: []
			},

			getElement: function getElement() {
				return this.sliderElem;
			},

			getValue: function getValue() {
				if (this.options.range) {
					return this._state.value;
				} else {
					return this._state.value[0];
				}
			},

			setValue: function setValue(val, triggerSlideEvent, triggerChangeEvent) {
				if (!val) {
					val = 0;
				}
				var oldValue = this.getValue();
				this._state.value = this._validateInputValue(val);
				var applyPrecision = this._applyPrecision.bind(this);

				if (this.options.range) {
					this._state.value[0] = applyPrecision(this._state.value[0]);
					this._state.value[1] = applyPrecision(this._state.value[1]);

					if (this.ticksAreValid && this.options.lock_to_ticks) {
						this._state.value[0] = this.options.ticks[this._getClosestTickIndex(this._state.value[0])];
						this._state.value[1] = this.options.ticks[this._getClosestTickIndex(this._state.value[1])];
					}

					this._state.value[0] = Math.max(this.options.min, Math.min(this.options.max, this._state.value[0]));
					this._state.value[1] = Math.max(this.options.min, Math.min(this.options.max, this._state.value[1]));
				} else {
					this._state.value = applyPrecision(this._state.value);

					if (this.ticksAreValid && this.options.lock_to_ticks) {
						this._state.value = this.options.ticks[this._getClosestTickIndex(this._state.value)];
					}

					this._state.value = [Math.max(this.options.min, Math.min(this.options.max, this._state.value))];
					this._addClass(this.handle2, 'hide');
					if (this.options.selection === 'after') {
						this._state.value[1] = this.options.max;
					} else {
						this._state.value[1] = this.options.min;
					}
				}

				// Determine which ticks the handle(s) are set at (if applicable)
				this._setTickIndex();

				if (this.options.max > this.options.min) {
					this._state.percentage = [this._toPercentage(this._state.value[0]), this._toPercentage(this._state.value[1]), this.options.step * 100 / (this.options.max - this.options.min)];
				} else {
					this._state.percentage = [0, 0, 100];
				}

				this._layout();
				var newValue = this.options.range ? this._state.value : this._state.value[0];

				this._setDataVal(newValue);
				if (triggerSlideEvent === true) {
					this._trigger('slide', newValue);
				}

				var hasChanged = false;
				if (Array.isArray(newValue)) {
					hasChanged = oldValue[0] !== newValue[0] || oldValue[1] !== newValue[1];
				} else {
					hasChanged = oldValue !== newValue;
				}

				if (hasChanged && triggerChangeEvent === true) {
					this._trigger('change', {
						oldValue: oldValue,
						newValue: newValue
					});
				}

				return this;
			},

			destroy: function destroy() {
				// Remove event handlers on slider elements
				this._removeSliderEventHandlers();

				// Remove the slider from the DOM
				this.sliderElem.parentNode.removeChild(this.sliderElem);
				/* Show original <input> element */
				this.element.style.display = "";

				// Clear out custom event bindings
				this._cleanUpEventCallbacksMap();

				// Remove data values
				this.element.removeAttribute("data");

				// Remove JQuery handlers/data
				if ($) {
					this._unbindJQueryEventHandlers();
					if (autoRegisterNamespace === NAMESPACE_MAIN) {
						this.$element.removeData(autoRegisterNamespace);
					}
					this.$element.removeData(NAMESPACE_ALTERNATE);
				}
			},

			disable: function disable() {
				this._state.enabled = false;
				this.handle1.removeAttribute("tabindex");
				this.handle2.removeAttribute("tabindex");
				this._addClass(this.sliderElem, 'slider-disabled');
				this._trigger('slideDisabled');

				return this;
			},

			enable: function enable() {
				this._state.enabled = true;
				this.handle1.setAttribute("tabindex", 0);
				this.handle2.setAttribute("tabindex", 0);
				this._removeClass(this.sliderElem, 'slider-disabled');
				this._trigger('slideEnabled');

				return this;
			},

			toggle: function toggle() {
				if (this._state.enabled) {
					this.disable();
				} else {
					this.enable();
				}
				return this;
			},

			isEnabled: function isEnabled() {
				return this._state.enabled;
			},

			on: function on(evt, callback) {
				this._bindNonQueryEventHandler(evt, callback);
				return this;
			},

			off: function off(evt, callback) {
				if ($) {
					this.$element.off(evt, callback);
					this.$sliderElem.off(evt, callback);
				} else {
					this._unbindNonQueryEventHandler(evt, callback);
				}
			},

			getAttribute: function getAttribute(attribute) {
				if (attribute) {
					return this.options[attribute];
				} else {
					return this.options;
				}
			},

			setAttribute: function setAttribute(attribute, value) {
				this.options[attribute] = value;
				return this;
			},

			refresh: function refresh(options) {
				var currentValue = this.getValue();
				this._removeSliderEventHandlers();
				createNewSlider.call(this, this.element, this.options);
				// Don't reset slider's value on refresh if `useCurrentValue` is true
				if (options && options.useCurrentValue === true) {
					this.setValue(currentValue);
				}
				if ($) {
					// Bind new instance of slider to the element
					if (autoRegisterNamespace === NAMESPACE_MAIN) {
						$.data(this.element, NAMESPACE_MAIN, this);
						$.data(this.element, NAMESPACE_ALTERNATE, this);
					} else {
						$.data(this.element, NAMESPACE_ALTERNATE, this);
					}
				}
				return this;
			},

			relayout: function relayout() {
				this._resize();
				return this;
			},

			/******************************+
   				HELPERS
   	- Any method that is not part of the public interface.
   - Place it underneath this comment block and write its signature like so:
   		_fnName : function() {...}
   	********************************/
			_removeTooltipListener: function _removeTooltipListener(event, handler) {
				this.handle1.removeEventListener(event, handler, false);
				this.handle2.removeEventListener(event, handler, false);
			},
			_removeSliderEventHandlers: function _removeSliderEventHandlers() {
				// Remove keydown event listeners
				this.handle1.removeEventListener("keydown", this.handle1Keydown, false);
				this.handle2.removeEventListener("keydown", this.handle2Keydown, false);

				//remove the listeners from the ticks and handles if they had their own listeners
				if (this.options.ticks_tooltip) {
					var ticks = this.ticksContainer.getElementsByClassName('slider-tick');
					for (var i = 0; i < ticks.length; i++) {
						ticks[i].removeEventListener('mouseenter', this.ticksCallbackMap[i].mouseEnter, false);
						ticks[i].removeEventListener('mouseleave', this.ticksCallbackMap[i].mouseLeave, false);
					}
					if (this.handleCallbackMap.handle1 && this.handleCallbackMap.handle2) {
						this.handle1.removeEventListener('mouseenter', this.handleCallbackMap.handle1.mouseEnter, false);
						this.handle2.removeEventListener('mouseenter', this.handleCallbackMap.handle2.mouseEnter, false);
						this.handle1.removeEventListener('mouseleave', this.handleCallbackMap.handle1.mouseLeave, false);
						this.handle2.removeEventListener('mouseleave', this.handleCallbackMap.handle2.mouseLeave, false);
					}
				}

				this.handleCallbackMap = null;
				this.ticksCallbackMap = null;

				if (this.showTooltip) {
					this._removeTooltipListener("focus", this.showTooltip);
				}
				if (this.hideTooltip) {
					this._removeTooltipListener("blur", this.hideTooltip);
				}

				// Remove event listeners from sliderElem
				if (this.showTooltip) {
					this.sliderElem.removeEventListener("mouseenter", this.showTooltip, false);
				}
				if (this.hideTooltip) {
					this.sliderElem.removeEventListener("mouseleave", this.hideTooltip, false);
				}

				this.sliderElem.removeEventListener("mousedown", this.mousedown, false);

				if (this.touchCapable) {
					// Remove touch event listeners from handles
					if (this.showTooltip) {
						this.handle1.removeEventListener("touchstart", this.showTooltip, false);
						this.handle1.removeEventListener("touchmove", this.showTooltip, false);
						this.handle2.removeEventListener("touchstart", this.showTooltip, false);
						this.handle2.removeEventListener("touchmove", this.showTooltip, false);
					}
					if (this.hideTooltip) {
						this.handle1.removeEventListener("touchend", this.hideTooltip, false);
						this.handle2.removeEventListener("touchend", this.hideTooltip, false);
					}

					// Remove event listeners from sliderElem
					if (this.showTooltip) {
						this.sliderElem.removeEventListener("touchstart", this.showTooltip, false);
						this.sliderElem.removeEventListener("touchmove", this.showTooltip, false);
					}
					if (this.hideTooltip) {
						this.sliderElem.removeEventListener("touchend", this.hideTooltip, false);
					}

					this.sliderElem.removeEventListener("touchstart", this.touchstart, false);
					this.sliderElem.removeEventListener("touchmove", this.touchmove, false);
				}

				// Remove window event listener
				window.removeEventListener("resize", this.resize, false);
			},
			_bindNonQueryEventHandler: function _bindNonQueryEventHandler(evt, callback) {
				if (this.eventToCallbackMap[evt] === undefined) {
					this.eventToCallbackMap[evt] = [];
				}
				this.eventToCallbackMap[evt].push(callback);
			},
			_unbindNonQueryEventHandler: function _unbindNonQueryEventHandler(evt, callback) {
				var callbacks = this.eventToCallbackMap[evt];
				if (callbacks !== undefined) {
					for (var i = 0; i < callbacks.length; i++) {
						if (callbacks[i] === callback) {
							callbacks.splice(i, 1);
							break;
						}
					}
				}
			},
			_cleanUpEventCallbacksMap: function _cleanUpEventCallbacksMap() {
				var eventNames = Object.keys(this.eventToCallbackMap);
				for (var i = 0; i < eventNames.length; i++) {
					var eventName = eventNames[i];
					delete this.eventToCallbackMap[eventName];
				}
			},
			_showTooltip: function _showTooltip() {
				if (this.options.tooltip_split === false) {
					this._addClass(this.tooltip, 'in');
					this.tooltip_min.style.display = 'none';
					this.tooltip_max.style.display = 'none';
				} else {
					this._addClass(this.tooltip_min, 'in');
					this._addClass(this.tooltip_max, 'in');
					this.tooltip.style.display = 'none';
				}
				this._state.over = true;
			},
			_hideTooltip: function _hideTooltip() {
				if (this._state.inDrag === false && this._alwaysShowTooltip !== true) {
					this._removeClass(this.tooltip, 'in');
					this._removeClass(this.tooltip_min, 'in');
					this._removeClass(this.tooltip_max, 'in');
				}
				this._state.over = false;
			},
			_setToolTipOnMouseOver: function _setToolTipOnMouseOver(tempState) {
				var self = this;
				var formattedTooltipVal = this.options.formatter(!tempState ? this._state.value[0] : tempState.value[0]);
				var positionPercentages = !tempState ? getPositionPercentages(this._state, this.options.reversed) : getPositionPercentages(tempState, this.options.reversed);
				this._setText(this.tooltipInner, formattedTooltipVal);

				this.tooltip.style[this.stylePos] = positionPercentages[0] + "%";

				function getPositionPercentages(state, reversed) {
					if (reversed) {
						return [100 - state.percentage[0], self.options.range ? 100 - state.percentage[1] : state.percentage[1]];
					}
					return [state.percentage[0], state.percentage[1]];
				}
			},
			_copyState: function _copyState() {
				return {
					value: [this._state.value[0], this._state.value[1]],
					enabled: this._state.enabled,
					offset: this._state.offset,
					size: this._state.size,
					percentage: [this._state.percentage[0], this._state.percentage[1], this._state.percentage[2]],
					inDrag: this._state.inDrag,
					over: this._state.over,
					// deleted or null'd keys
					dragged: this._state.dragged,
					keyCtrl: this._state.keyCtrl
				};
			},
			_addTickListener: function _addTickListener() {
				return {
					addMouseEnter: function addMouseEnter(reference, element, index) {
						var enter = function enter() {
							var tempState = reference._copyState();
							// Which handle is being hovered over?
							var val = element === reference.handle1 ? tempState.value[0] : tempState.value[1];
							var per = void 0;

							// Setup value and percentage for tick's 'mouseenter'
							if (index !== undefined) {
								val = reference.options.ticks[index];
								per = reference.options.ticks_positions.length > 0 && reference.options.ticks_positions[index] || reference._toPercentage(reference.options.ticks[index]);
							} else {
								per = reference._toPercentage(val);
							}

							tempState.value[0] = val;
							tempState.percentage[0] = per;
							reference._setToolTipOnMouseOver(tempState);
							reference._showTooltip();
						};
						element.addEventListener("mouseenter", enter, false);
						return enter;
					},
					addMouseLeave: function addMouseLeave(reference, element) {
						var leave = function leave() {
							reference._hideTooltip();
						};
						element.addEventListener("mouseleave", leave, false);
						return leave;
					}
				};
			},
			_layout: function _layout() {
				var positionPercentages;
				var formattedValue;

				if (this.options.reversed) {
					positionPercentages = [100 - this._state.percentage[0], this.options.range ? 100 - this._state.percentage[1] : this._state.percentage[1]];
				} else {
					positionPercentages = [this._state.percentage[0], this._state.percentage[1]];
				}

				this.handle1.style[this.stylePos] = positionPercentages[0] + "%";
				this.handle1.setAttribute('aria-valuenow', this._state.value[0]);
				formattedValue = this.options.formatter(this._state.value[0]);
				if (isNaN(formattedValue)) {
					this.handle1.setAttribute('aria-valuetext', formattedValue);
				} else {
					this.handle1.removeAttribute('aria-valuetext');
				}

				this.handle2.style[this.stylePos] = positionPercentages[1] + "%";
				this.handle2.setAttribute('aria-valuenow', this._state.value[1]);
				formattedValue = this.options.formatter(this._state.value[1]);
				if (isNaN(formattedValue)) {
					this.handle2.setAttribute('aria-valuetext', formattedValue);
				} else {
					this.handle2.removeAttribute('aria-valuetext');
				}

				/* Position highlight range elements */
				if (this.rangeHighlightElements.length > 0 && Array.isArray(this.options.rangeHighlights) && this.options.rangeHighlights.length > 0) {
					for (var _i = 0; _i < this.options.rangeHighlights.length; _i++) {
						var startPercent = this._toPercentage(this.options.rangeHighlights[_i].start);
						var endPercent = this._toPercentage(this.options.rangeHighlights[_i].end);

						if (this.options.reversed) {
							var sp = 100 - endPercent;
							endPercent = 100 - startPercent;
							startPercent = sp;
						}

						var currentRange = this._createHighlightRange(startPercent, endPercent);

						if (currentRange) {
							if (this.options.orientation === 'vertical') {
								this.rangeHighlightElements[_i].style.top = currentRange.start + "%";
								this.rangeHighlightElements[_i].style.height = currentRange.size + "%";
							} else {
								if (this.options.rtl) {
									this.rangeHighlightElements[_i].style.right = currentRange.start + "%";
								} else {
									this.rangeHighlightElements[_i].style.left = currentRange.start + "%";
								}
								this.rangeHighlightElements[_i].style.width = currentRange.size + "%";
							}
						} else {
							this.rangeHighlightElements[_i].style.display = "none";
						}
					}
				}

				/* Position ticks and labels */
				if (Array.isArray(this.options.ticks) && this.options.ticks.length > 0) {

					var styleSize = this.options.orientation === 'vertical' ? 'height' : 'width';
					var styleMargin;
					if (this.options.orientation === 'vertical') {
						styleMargin = 'marginTop';
					} else {
						if (this.options.rtl) {
							styleMargin = 'marginRight';
						} else {
							styleMargin = 'marginLeft';
						}
					}
					var labelSize = this._state.size / (this.options.ticks.length - 1);

					if (this.tickLabelContainer) {
						var extraMargin = 0;
						if (this.options.ticks_positions.length === 0) {
							if (this.options.orientation !== 'vertical') {
								this.tickLabelContainer.style[styleMargin] = -labelSize / 2 + "px";
							}

							extraMargin = this.tickLabelContainer.offsetHeight;
						} else {
							/* Chidren are position absolute, calculate height by finding the max offsetHeight of a child */
							for (i = 0; i < this.tickLabelContainer.childNodes.length; i++) {
								if (this.tickLabelContainer.childNodes[i].offsetHeight > extraMargin) {
									extraMargin = this.tickLabelContainer.childNodes[i].offsetHeight;
								}
							}
						}
						if (this.options.orientation === 'horizontal') {
							this.sliderElem.style.marginBottom = extraMargin + "px";
						}
					}
					for (var i = 0; i < this.options.ticks.length; i++) {

						var percentage = this.options.ticks_positions[i] || this._toPercentage(this.options.ticks[i]);

						if (this.options.reversed) {
							percentage = 100 - percentage;
						}

						this.ticks[i].style[this.stylePos] = percentage + "%";

						/* Set class labels to denote whether ticks are in the selection */
						this._removeClass(this.ticks[i], 'in-selection');
						if (!this.options.range) {
							if (this.options.selection === 'after' && percentage >= positionPercentages[0]) {
								this._addClass(this.ticks[i], 'in-selection');
							} else if (this.options.selection === 'before' && percentage <= positionPercentages[0]) {
								this._addClass(this.ticks[i], 'in-selection');
							}
						} else if (percentage >= positionPercentages[0] && percentage <= positionPercentages[1]) {
							this._addClass(this.ticks[i], 'in-selection');
						}

						if (this.tickLabels[i]) {
							this.tickLabels[i].style[styleSize] = labelSize + "px";

							if (this.options.orientation !== 'vertical' && this.options.ticks_positions[i] !== undefined) {
								this.tickLabels[i].style.position = 'absolute';
								this.tickLabels[i].style[this.stylePos] = percentage + "%";
								this.tickLabels[i].style[styleMargin] = -labelSize / 2 + 'px';
							} else if (this.options.orientation === 'vertical') {
								if (this.options.rtl) {
									this.tickLabels[i].style['marginRight'] = this.sliderElem.offsetWidth + "px";
								} else {
									this.tickLabels[i].style['marginLeft'] = this.sliderElem.offsetWidth + "px";
								}
								this.tickLabelContainer.style[styleMargin] = this.sliderElem.offsetWidth / 2 * -1 + 'px';
							}

							/* Set class labels to indicate tick labels are in the selection or selected */
							this._removeClass(this.tickLabels[i], 'label-in-selection label-is-selection');
							if (!this.options.range) {
								if (this.options.selection === 'after' && percentage >= positionPercentages[0]) {
									this._addClass(this.tickLabels[i], 'label-in-selection');
								} else if (this.options.selection === 'before' && percentage <= positionPercentages[0]) {
									this._addClass(this.tickLabels[i], 'label-in-selection');
								}
								if (percentage === positionPercentages[0]) {
									this._addClass(this.tickLabels[i], 'label-is-selection');
								}
							} else if (percentage >= positionPercentages[0] && percentage <= positionPercentages[1]) {
								this._addClass(this.tickLabels[i], 'label-in-selection');
								if (percentage === positionPercentages[0] || positionPercentages[1]) {
									this._addClass(this.tickLabels[i], 'label-is-selection');
								}
							}
						}
					}
				}

				var formattedTooltipVal;

				if (this.options.range) {
					formattedTooltipVal = this.options.formatter(this._state.value);
					this._setText(this.tooltipInner, formattedTooltipVal);
					this.tooltip.style[this.stylePos] = (positionPercentages[1] + positionPercentages[0]) / 2 + "%";

					var innerTooltipMinText = this.options.formatter(this._state.value[0]);
					this._setText(this.tooltipInner_min, innerTooltipMinText);

					var innerTooltipMaxText = this.options.formatter(this._state.value[1]);
					this._setText(this.tooltipInner_max, innerTooltipMaxText);

					this.tooltip_min.style[this.stylePos] = positionPercentages[0] + "%";

					this.tooltip_max.style[this.stylePos] = positionPercentages[1] + "%";
				} else {
					formattedTooltipVal = this.options.formatter(this._state.value[0]);
					this._setText(this.tooltipInner, formattedTooltipVal);

					this.tooltip.style[this.stylePos] = positionPercentages[0] + "%";
				}

				if (this.options.orientation === 'vertical') {
					this.trackLow.style.top = '0';
					this.trackLow.style.height = Math.min(positionPercentages[0], positionPercentages[1]) + '%';

					this.trackSelection.style.top = Math.min(positionPercentages[0], positionPercentages[1]) + '%';
					this.trackSelection.style.height = Math.abs(positionPercentages[0] - positionPercentages[1]) + '%';

					this.trackHigh.style.bottom = '0';
					this.trackHigh.style.height = 100 - Math.min(positionPercentages[0], positionPercentages[1]) - Math.abs(positionPercentages[0] - positionPercentages[1]) + '%';
				} else {
					if (this.stylePos === 'right') {
						this.trackLow.style.right = '0';
					} else {
						this.trackLow.style.left = '0';
					}
					this.trackLow.style.width = Math.min(positionPercentages[0], positionPercentages[1]) + '%';

					if (this.stylePos === 'right') {
						this.trackSelection.style.right = Math.min(positionPercentages[0], positionPercentages[1]) + '%';
					} else {
						this.trackSelection.style.left = Math.min(positionPercentages[0], positionPercentages[1]) + '%';
					}
					this.trackSelection.style.width = Math.abs(positionPercentages[0] - positionPercentages[1]) + '%';

					if (this.stylePos === 'right') {
						this.trackHigh.style.left = '0';
					} else {
						this.trackHigh.style.right = '0';
					}
					this.trackHigh.style.width = 100 - Math.min(positionPercentages[0], positionPercentages[1]) - Math.abs(positionPercentages[0] - positionPercentages[1]) + '%';

					var offset_min = this.tooltip_min.getBoundingClientRect();
					var offset_max = this.tooltip_max.getBoundingClientRect();

					if (this.options.tooltip_position === 'bottom') {
						if (offset_min.right > offset_max.left) {
							this._removeClass(this.tooltip_max, 'bottom');
							this._addClass(this.tooltip_max, 'top');
							this.tooltip_max.style.top = '';
							this.tooltip_max.style.bottom = 22 + 'px';
						} else {
							this._removeClass(this.tooltip_max, 'top');
							this._addClass(this.tooltip_max, 'bottom');
							this.tooltip_max.style.top = this.tooltip_min.style.top;
							this.tooltip_max.style.bottom = '';
						}
					} else {
						if (offset_min.right > offset_max.left) {
							this._removeClass(this.tooltip_max, 'top');
							this._addClass(this.tooltip_max, 'bottom');
							this.tooltip_max.style.top = 18 + 'px';
						} else {
							this._removeClass(this.tooltip_max, 'bottom');
							this._addClass(this.tooltip_max, 'top');
							this.tooltip_max.style.top = this.tooltip_min.style.top;
						}
					}
				}
			},
			_createHighlightRange: function _createHighlightRange(start, end) {
				if (this._isHighlightRange(start, end)) {
					if (start > end) {
						return { 'start': end, 'size': start - end };
					}
					return { 'start': start, 'size': end - start };
				}
				return null;
			},
			_isHighlightRange: function _isHighlightRange(start, end) {
				if (0 <= start && start <= 100 && 0 <= end && end <= 100) {
					return true;
				} else {
					return false;
				}
			},
			_resize: function _resize(ev) {
				/*jshint unused:false*/
				this._state.offset = this._offset(this.sliderElem);
				this._state.size = this.sliderElem[this.sizePos];
				this._layout();
			},
			_removeProperty: function _removeProperty(element, prop) {
				if (element.style.removeProperty) {
					element.style.removeProperty(prop);
				} else {
					element.style.removeAttribute(prop);
				}
			},
			_mousedown: function _mousedown(ev) {
				if (!this._state.enabled) {
					return false;
				}

				if (ev.preventDefault) {
					ev.preventDefault();
				}

				this._state.offset = this._offset(this.sliderElem);
				this._state.size = this.sliderElem[this.sizePos];

				var percentage = this._getPercentage(ev);

				if (this.options.range) {
					var diff1 = Math.abs(this._state.percentage[0] - percentage);
					var diff2 = Math.abs(this._state.percentage[1] - percentage);
					this._state.dragged = diff1 < diff2 ? 0 : 1;
					this._adjustPercentageForRangeSliders(percentage);
				} else {
					this._state.dragged = 0;
				}

				this._state.percentage[this._state.dragged] = percentage;

				if (this.touchCapable) {
					document.removeEventListener("touchmove", this.mousemove, false);
					document.removeEventListener("touchend", this.mouseup, false);
				}

				if (this.mousemove) {
					document.removeEventListener("mousemove", this.mousemove, false);
				}
				if (this.mouseup) {
					document.removeEventListener("mouseup", this.mouseup, false);
				}

				this.mousemove = this._mousemove.bind(this);
				this.mouseup = this._mouseup.bind(this);

				if (this.touchCapable) {
					// Touch: Bind touch events:
					document.addEventListener("touchmove", this.mousemove, false);
					document.addEventListener("touchend", this.mouseup, false);
				}
				// Bind mouse events:
				document.addEventListener("mousemove", this.mousemove, false);
				document.addEventListener("mouseup", this.mouseup, false);

				this._state.inDrag = true;
				var newValue = this._calculateValue();

				this._trigger('slideStart', newValue);

				this.setValue(newValue, false, true);

				ev.returnValue = false;

				if (this.options.focus) {
					this._triggerFocusOnHandle(this._state.dragged);
				}

				return true;
			},
			_touchstart: function _touchstart(ev) {
				this._mousedown(ev);
			},
			_triggerFocusOnHandle: function _triggerFocusOnHandle(handleIdx) {
				if (handleIdx === 0) {
					this.handle1.focus();
				}
				if (handleIdx === 1) {
					this.handle2.focus();
				}
			},
			_keydown: function _keydown(handleIdx, ev) {
				if (!this._state.enabled) {
					return false;
				}

				var dir;
				switch (ev.keyCode) {
					case 37: // left
					case 40:
						// down
						dir = -1;
						break;
					case 39: // right
					case 38:
						// up
						dir = 1;
						break;
				}
				if (!dir) {
					return;
				}

				// use natural arrow keys instead of from min to max
				if (this.options.natural_arrow_keys) {
					var isHorizontal = this.options.orientation === 'horizontal';
					var isVertical = this.options.orientation === 'vertical';
					var isRTL = this.options.rtl;
					var isReversed = this.options.reversed;

					if (isHorizontal) {
						if (isRTL) {
							if (!isReversed) {
								dir = -dir;
							}
						} else {
							if (isReversed) {
								dir = -dir;
							}
						}
					} else if (isVertical) {
						if (!isReversed) {
							dir = -dir;
						}
					}
				}

				var val;
				if (this.ticksAreValid && this.options.lock_to_ticks) {
					var index = void 0;
					// Find tick index that handle 1/2 is currently on
					index = this.options.ticks.indexOf(this._state.value[handleIdx]);
					if (index === -1) {
						// Set default to first tick
						index = 0;
						window.console.warn('(lock_to_ticks) _keydown: index should not be -1');
					}
					index += dir;
					index = Math.max(0, Math.min(this.options.ticks.length - 1, index));
					val = this.options.ticks[index];
				} else {
					val = this._state.value[handleIdx] + dir * this.options.step;
				}
				var percentage = this._toPercentage(val);
				this._state.keyCtrl = handleIdx;
				if (this.options.range) {
					this._adjustPercentageForRangeSliders(percentage);
					var val1 = !this._state.keyCtrl ? val : this._state.value[0];
					var val2 = this._state.keyCtrl ? val : this._state.value[1];
					// Restrict values within limits
					val = [Math.max(this.options.min, Math.min(this.options.max, val1)), Math.max(this.options.min, Math.min(this.options.max, val2))];
				} else {
					val = Math.max(this.options.min, Math.min(this.options.max, val));
				}

				this._trigger('slideStart', val);

				this.setValue(val, true, true);

				this._trigger('slideStop', val);

				this._pauseEvent(ev);
				delete this._state.keyCtrl;

				return false;
			},
			_pauseEvent: function _pauseEvent(ev) {
				if (ev.stopPropagation) {
					ev.stopPropagation();
				}
				if (ev.preventDefault) {
					ev.preventDefault();
				}
				ev.cancelBubble = true;
				ev.returnValue = false;
			},
			_mousemove: function _mousemove(ev) {
				if (!this._state.enabled) {
					return false;
				}

				var percentage = this._getPercentage(ev);
				this._adjustPercentageForRangeSliders(percentage);
				this._state.percentage[this._state.dragged] = percentage;

				var val = this._calculateValue(true);
				this.setValue(val, true, true);

				return false;
			},
			_touchmove: function _touchmove(ev) {
				if (ev.changedTouches === undefined) {
					return;
				}

				// Prevent page from scrolling and only drag the slider
				if (ev.preventDefault) {
					ev.preventDefault();
				}
			},
			_adjustPercentageForRangeSliders: function _adjustPercentageForRangeSliders(percentage) {
				if (this.options.range) {
					var precision = this._getNumDigitsAfterDecimalPlace(percentage);
					precision = precision ? precision - 1 : 0;
					var percentageWithAdjustedPrecision = this._applyToFixedAndParseFloat(percentage, precision);
					if (this._state.dragged === 0 && this._applyToFixedAndParseFloat(this._state.percentage[1], precision) < percentageWithAdjustedPrecision) {
						this._state.percentage[0] = this._state.percentage[1];
						this._state.dragged = 1;
					} else if (this._state.dragged === 1 && this._applyToFixedAndParseFloat(this._state.percentage[0], precision) > percentageWithAdjustedPrecision) {
						this._state.percentage[1] = this._state.percentage[0];
						this._state.dragged = 0;
					} else if (this._state.keyCtrl === 0 && this._toPercentage(this._state.value[1]) < percentage) {
						this._state.percentage[0] = this._state.percentage[1];
						this._state.keyCtrl = 1;
						this.handle2.focus();
					} else if (this._state.keyCtrl === 1 && this._toPercentage(this._state.value[0]) > percentage) {
						this._state.percentage[1] = this._state.percentage[0];
						this._state.keyCtrl = 0;
						this.handle1.focus();
					}
				}
			},
			_mouseup: function _mouseup(ev) {
				if (!this._state.enabled) {
					return false;
				}

				var percentage = this._getPercentage(ev);
				this._adjustPercentageForRangeSliders(percentage);
				this._state.percentage[this._state.dragged] = percentage;

				if (this.touchCapable) {
					// Touch: Unbind touch event handlers:
					document.removeEventListener("touchmove", this.mousemove, false);
					document.removeEventListener("touchend", this.mouseup, false);
				}
				// Unbind mouse event handlers:
				document.removeEventListener("mousemove", this.mousemove, false);
				document.removeEventListener("mouseup", this.mouseup, false);

				this._state.inDrag = false;
				if (this._state.over === false) {
					this._hideTooltip();
				}
				var val = this._calculateValue(true);

				this.setValue(val, false, true);
				this._trigger('slideStop', val);

				// No longer need 'dragged' after mouse up
				this._state.dragged = null;

				return false;
			},
			_setValues: function _setValues(index, val) {
				var comp = 0 === index ? 0 : 100;
				if (this._state.percentage[index] !== comp) {
					val.data[index] = this._toValue(this._state.percentage[index]);
					val.data[index] = this._applyPrecision(val.data[index]);
				}
			},
			_calculateValue: function _calculateValue(snapToClosestTick) {
				var val = {};
				if (this.options.range) {
					val.data = [this.options.min, this.options.max];
					this._setValues(0, val);
					this._setValues(1, val);
					if (snapToClosestTick) {
						val.data[0] = this._snapToClosestTick(val.data[0]);
						val.data[1] = this._snapToClosestTick(val.data[1]);
					}
				} else {
					val.data = this._toValue(this._state.percentage[0]);
					val.data = parseFloat(val.data);
					val.data = this._applyPrecision(val.data);
					if (snapToClosestTick) {
						val.data = this._snapToClosestTick(val.data);
					}
				}

				return val.data;
			},
			_snapToClosestTick: function _snapToClosestTick(val) {
				var min = [val, Infinity];
				for (var i = 0; i < this.options.ticks.length; i++) {
					var diff = Math.abs(this.options.ticks[i] - val);
					if (diff <= min[1]) {
						min = [this.options.ticks[i], diff];
					}
				}
				if (min[1] <= this.options.ticks_snap_bounds) {
					return min[0];
				}
				return val;
			},

			_applyPrecision: function _applyPrecision(val) {
				var precision = this.options.precision || this._getNumDigitsAfterDecimalPlace(this.options.step);
				return this._applyToFixedAndParseFloat(val, precision);
			},
			_getNumDigitsAfterDecimalPlace: function _getNumDigitsAfterDecimalPlace(num) {
				var match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
				if (!match) {
					return 0;
				}
				return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
			},
			_applyToFixedAndParseFloat: function _applyToFixedAndParseFloat(num, toFixedInput) {
				var truncatedNum = num.toFixed(toFixedInput);
				return parseFloat(truncatedNum);
			},
			/*
   	Credits to Mike Samuel for the following method!
   	Source: http://stackoverflow.com/questions/10454518/javascript-how-to-retrieve-the-number-of-decimals-of-a-string-number
   */
			_getPercentage: function _getPercentage(ev) {
				if (this.touchCapable && (ev.type === 'touchstart' || ev.type === 'touchmove' || ev.type === 'touchend')) {
					ev = ev.changedTouches[0];
				}

				var eventPosition = ev[this.mousePos];
				var sliderOffset = this._state.offset[this.stylePos];
				var distanceToSlide = eventPosition - sliderOffset;
				if (this.stylePos === 'right') {
					distanceToSlide = -distanceToSlide;
				}
				// Calculate what percent of the length the slider handle has slid
				var percentage = distanceToSlide / this._state.size * 100;
				percentage = Math.round(percentage / this._state.percentage[2]) * this._state.percentage[2];
				if (this.options.reversed) {
					percentage = 100 - percentage;
				}

				// Make sure the percent is within the bounds of the slider.
				// 0% corresponds to the 'min' value of the slide
				// 100% corresponds to the 'max' value of the slide
				return Math.max(0, Math.min(100, percentage));
			},
			_validateInputValue: function _validateInputValue(val) {
				if (!isNaN(+val)) {
					return +val;
				} else if (Array.isArray(val)) {
					this._validateArray(val);
					return val;
				} else {
					throw new Error(ErrorMsgs.formatInvalidInputErrorMsg(val));
				}
			},
			_validateArray: function _validateArray(val) {
				for (var i = 0; i < val.length; i++) {
					var input = val[i];
					if (typeof input !== 'number') {
						throw new Error(ErrorMsgs.formatInvalidInputErrorMsg(input));
					}
				}
			},
			_setDataVal: function _setDataVal(val) {
				this.element.setAttribute('data-value', val);
				this.element.setAttribute('value', val);
				this.element.value = val;
			},
			_trigger: function _trigger(evt, val) {
				val = val || val === 0 ? val : undefined;

				var callbackFnArray = this.eventToCallbackMap[evt];
				if (callbackFnArray && callbackFnArray.length) {
					for (var i = 0; i < callbackFnArray.length; i++) {
						var callbackFn = callbackFnArray[i];
						callbackFn(val);
					}
				}

				/* If JQuery exists, trigger JQuery events */
				if ($) {
					this._triggerJQueryEvent(evt, val);
				}
			},
			_triggerJQueryEvent: function _triggerJQueryEvent(evt, val) {
				var eventData = {
					type: evt,
					value: val
				};
				this.$element.trigger(eventData);
				this.$sliderElem.trigger(eventData);
			},
			_unbindJQueryEventHandlers: function _unbindJQueryEventHandlers() {
				this.$element.off();
				this.$sliderElem.off();
			},
			_setText: function _setText(element, text) {
				if (typeof element.textContent !== "undefined") {
					element.textContent = text;
				} else if (typeof element.innerText !== "undefined") {
					element.innerText = text;
				}
			},
			_removeClass: function _removeClass(element, classString) {
				var classes = classString.split(" ");
				var newClasses = element.className;

				for (var i = 0; i < classes.length; i++) {
					var classTag = classes[i];
					var regex = new RegExp("(?:\\s|^)" + classTag + "(?:\\s|$)");
					newClasses = newClasses.replace(regex, " ");
				}

				element.className = newClasses.trim();
			},
			_addClass: function _addClass(element, classString) {
				var classes = classString.split(" ");
				var newClasses = element.className;

				for (var i = 0; i < classes.length; i++) {
					var classTag = classes[i];
					var regex = new RegExp("(?:\\s|^)" + classTag + "(?:\\s|$)");
					var ifClassExists = regex.test(newClasses);

					if (!ifClassExists) {
						newClasses += " " + classTag;
					}
				}

				element.className = newClasses.trim();
			},
			_offsetLeft: function _offsetLeft(obj) {
				return obj.getBoundingClientRect().left;
			},
			_offsetRight: function _offsetRight(obj) {
				return obj.getBoundingClientRect().right;
			},
			_offsetTop: function _offsetTop(obj) {
				var offsetTop = obj.offsetTop;
				while ((obj = obj.offsetParent) && !isNaN(obj.offsetTop)) {
					offsetTop += obj.offsetTop;
					if (obj.tagName !== 'BODY') {
						offsetTop -= obj.scrollTop;
					}
				}
				return offsetTop;
			},
			_offset: function _offset(obj) {
				return {
					left: this._offsetLeft(obj),
					right: this._offsetRight(obj),
					top: this._offsetTop(obj)
				};
			},
			_css: function _css(elementRef, styleName, value) {
				if ($) {
					$.style(elementRef, styleName, value);
				} else {
					var style = styleName.replace(/^-ms-/, "ms-").replace(/-([\da-z])/gi, function (all, letter) {
						return letter.toUpperCase();
					});
					elementRef.style[style] = value;
				}
			},
			_toValue: function _toValue(percentage) {
				return this.options.scale.toValue.apply(this, [percentage]);
			},
			_toPercentage: function _toPercentage(value) {
				return this.options.scale.toPercentage.apply(this, [value]);
			},
			_setTooltipPosition: function _setTooltipPosition() {
				var tooltips = [this.tooltip, this.tooltip_min, this.tooltip_max];
				if (this.options.orientation === 'vertical') {
					var tooltipPos;
					if (this.options.tooltip_position) {
						tooltipPos = this.options.tooltip_position;
					} else {
						if (this.options.rtl) {
							tooltipPos = 'left';
						} else {
							tooltipPos = 'right';
						}
					}
					var oppositeSide = tooltipPos === 'left' ? 'right' : 'left';
					tooltips.forEach(function (tooltip) {
						this._addClass(tooltip, tooltipPos);
						tooltip.style[oppositeSide] = '100%';
					}.bind(this));
				} else if (this.options.tooltip_position === 'bottom') {
					tooltips.forEach(function (tooltip) {
						this._addClass(tooltip, 'bottom');
						tooltip.style.top = 22 + 'px';
					}.bind(this));
				} else {
					tooltips.forEach(function (tooltip) {
						this._addClass(tooltip, 'top');
						tooltip.style.top = -this.tooltip.outerHeight - 14 + 'px';
					}.bind(this));
				}
			},
			_getClosestTickIndex: function _getClosestTickIndex(val) {
				var difference = Math.abs(val - this.options.ticks[0]);
				var index = 0;
				for (var i = 0; i < this.options.ticks.length; ++i) {
					var d = Math.abs(val - this.options.ticks[i]);
					if (d < difference) {
						difference = d;
						index = i;
					}
				}
				return index;
			},
			/**
    * Attempts to find the index in `ticks[]` the slider values are set at.
    * The indexes can be -1 to indicate the slider value is not set at a value in `ticks[]`.
    */
			_setTickIndex: function _setTickIndex() {
				if (this.ticksAreValid) {
					this._state.tickIndex = [this.options.ticks.indexOf(this._state.value[0]), this.options.ticks.indexOf(this._state.value[1])];
				}
			}
		};

		/*********************************
  		Attach to global namespace
  	*********************************/
		if ($ && $.fn) {
			if (!$.fn.slider) {
				$.bridget(NAMESPACE_MAIN, Slider);
				autoRegisterNamespace = NAMESPACE_MAIN;
			} else {
				if (windowIsDefined) {
					window.console.warn("bootstrap-slider.js - WARNING: $.fn.slider namespace is already bound. Use the $.fn.bootstrapSlider namespace instead.");
				}
				autoRegisterNamespace = NAMESPACE_ALTERNATE;
			}
			$.bridget(NAMESPACE_ALTERNATE, Slider);

			// Auto-Register data-provide="slider" Elements
			$(function () {
				$("input[data-provide=slider]")[autoRegisterNamespace]();
			});
		}
	})($);

	return Slider;
});
