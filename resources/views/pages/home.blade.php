@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading"><h4>Jokes Management System</h4></div>

                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item clearfix"><a href="{{url('jokes')}}">Manage Jokes</a></li>
                        <li class="list-group-item clearfix"><a href="{{url('authors')}}">Manage Authors</a></li>
                        <li class="list-group-item clearfix"><a href="{{url('categories')}}">Manage Categories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
