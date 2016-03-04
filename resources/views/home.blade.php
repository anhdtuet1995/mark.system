@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
        
                <div class="panel-body">
                    You are logged in!
                </div>
                @role('admin')
                <li><a href="{{url('/admin/user')}}">Manage Users</a></li>
                <li><a href="{{url('/admin/post')}}">Manage Posts</a></li>
                @endrole
                @role('teacher')
                <li><a href="/admin/post">Manage Posts</a></li>
                @endrole
            </div>
        </div>
    </div>
</div>
@endsection
