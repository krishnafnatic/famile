@extends('adminlte::page')

@section('title', 'Famile Admin Panel')

@section('content_header')
@stop

@section('content')
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Document</th>
      <th scope="col">Profile</th>
      <th scope="col">Created_at</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($documents as $document)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$document['document']}}</td>
      @foreach($users as $user)
      @if($user['id'] == $document['profile_id'])
      <td>{{$user['name']}}</td>
      @endif
      @endforeach
      <td>{{$document['created_at']}}</td>
      <td>Not Converted</td>
      <td><a href="/admin/docview/{{$document['id']}}">View Details</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop

@section('css')
@stop

@section('js')
@stop