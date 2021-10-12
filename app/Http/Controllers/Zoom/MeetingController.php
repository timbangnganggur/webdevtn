<?php

namespace App\Http\Controllers\Zoom;

use App\Http\Controllers\Controller;
use App\Traits\ZoomJWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MeetingController extends Controller
{
    use ZoomJWT;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

    // public function list(Request $request) { /**/ }
    // public function create(Request $request) { /**/ }
    // public function get(Request $request, string $id) { /**/ }
    // public function update(Request $request, string $id) { /**/ }
    // public function delete(Request $request, string $id) { /**/ }

    public function edit()
    {
        return view('zoom.create');
    }

    public function edit2(Request $request, $id)
    {
        $path = 'users/me/meetings';
        $response = $this->zoomGet($path);
        $data = json_decode($response->body(), true);

        return view('zoom.update')->with('response', json_decode($response, true));
    }

    public function list(Request $request)
    {
        $path = 'users/me/meetings';
        $response = $this->zoomGet($path);
        $data = json_decode($response->body(), true);
        $data['meetings'] = array_map(function ($m) {
        $m['start_at'] = $this->toUnixTimeStamp($m['start_time'], $m['timezone']);
        return $m;
    }, $data['meetings']);

        return view('zoom.index')->with('response', json_decode($response, true));

        // [
        //     'success' => $response->ok(),
        //     'data' => $data,
        // ];
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'topic' => 'required|string',
            'start_time' => 'required|date',
            'agenda' => 'string|nullable',
        ]);
        
        if ($validator->fails()) {
            return [
                'success' => false,
                'data' => $validator->errors(),
            ];
        }
        $data = $validator->validated();

        $path = 'users/me/meetings';
        $response = $this->zoomPost($path, [
            'topic' => $data['topic'],
            'type' => self::MEETING_TYPE_SCHEDULE,
            'start_time' => $this->toZoomTimeFormat($data['start_time']),
            'duration' => 30,
            'agenda' => $data['agenda'],
            'settings' => [
                'host_video' => false,
                'participant_video' => false,
                'waiting_room' => true,
            ]
        ]);

        return redirect('api/meetings');
        // view('zoom.meetings', compact('response'));
        // redirect($response['start_url']);
        
        
        // [
        //     'success' => $response->status() === 201,
        //     'data' => json_decode($response->body(), true),
        // ];
    }

    public function get(Request $request, string $id)
    {
        $path = 'meetings/' . $id;
        $response = $this->zoomGet($path);

        $data = json_decode($response->body(), true);
        if ($response->ok()) {
            $data['start_at'] = $this->toUnixTimeStamp($data['start_time'], $data['timezone']);
        }

        return view('zoom.meetings', compact('response', 'data'))->with('response', json_decode($response, true));

        // redirect($response['join_url']);

        // [
        //     'success' => $response->ok(),
        //     'data' => $data,
        // ];
    }

    public function update(Request $request, string $id)
    {


        $validator = Validator::make($request->all(), [
            'topic' => 'required|string',
            'start_time' => 'required|date',
            'agenda' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return [
                'success' => false,
                'data' => $validator->errors(),
            ];
        }
        $data = $validator->validated();
        $path = 'meetings/' . $id;
        $response = $this->zoomPatch($path, [
            'topic' => $data['topic'],
            'type' => self::MEETING_TYPE_SCHEDULE,
            'start_time' => (new \DateTime($data['start_time']))->format('Y-m-d\TH:i:s'),
            'duration' => 30,
            'agenda' => $data['agenda'],
            'settings' => [
                'host_video' => false,
                'participant_video' => false,
                'waiting_room' => true,
            ]
        ]);

        return redirect('api/meetings');

        // [
        //     'success' => $response->status() === 204,
        //     'data' => json_decode($response->body(), true),
        // ];
    }

    public function delete(Request $request, string $id)
    {
        $path = 'meetings/' . $id;
        $response = $this->zoomDelete($path);

        return back();

        // [
        //     'success' => $response->status() === 204,
        //     'data' => json_decode($response->body(), true),
        // ];
    }
}
