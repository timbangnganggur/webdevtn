@extends('general.master')
@section('dataTablesCSS')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.9.9/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.9.9/css/react-select.css" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="origin-trial" content="">

@endsection
@section('title') 
Zoom Meetings
@endsection
@section('content')
  <div class="mh-100" style="height: 100px";></div>
	 <iframe src="https://zoom.us/wc/{{$response['id']}}/join?prefer=0&pwd={{$response['password']}}"
            style="border: 0; width: 100%; height:80vh; text-align:center;"
            allow="microphone; camera; fullscreen"
            sandbox="allow-forms allow-scripts allow-same-origin">
     </iframe>

@endsection
@section('dataTablesScript')
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="https://source.zoom.us/1.9.9/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/1.9.9/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/1.9.9/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/1.9.9/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/1.9.9/lib/vendor/lodash.min.js"></script>
    <script src="https://source.zoom.us/zoom-meeting-1.9.9.min.js"></script>
    <script src="js/tool.js"></script>
    <script src="js/vconsole.min.js"></script>
    <script src="js/meeting.js"></script>
@endsection
@section('script')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
@endsection
