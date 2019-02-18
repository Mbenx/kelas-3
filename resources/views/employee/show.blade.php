@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Employee</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Employee</a></li>
        <li class="active">Show</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <!-- Profile Image -->
    <div class="box box-primary">
        <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" 
            src="{{ asset('/storage/employee/'.$data->picture)}}"
                alt="User profile picture">

            <h3 class="profile-username text-center">
                {{$data->name}}</h3>
            <p class="text-muted text-center">
                {{$data->mail}}</p>
        </div>
        <!-- /.box-body -->
    </div>
</section>
@endsection