@extends('admin.main')
@section('title')
    activated user
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('content')
<section class="content-wrapper">
    <div class="container">
        <h1>Laravel Update User Status Using Toggle Button</h1>
        <table class="table table-bordered">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
               </tr> 
            </thead>
            <tbody>
               @foreach($users as $user)
                  <tr>
                     <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                     <td>{{ $user->email }}</td>
                        <td>
                        <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="belum aktivasi" data-off="sudah diaktivasi" {{ $user->status ? 'checked' : '' }}>
                     </td>
                  </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
@section('script')
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ URL::to('admin/users/edit')}}',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
@endsection