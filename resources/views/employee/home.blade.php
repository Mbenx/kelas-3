@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Employee</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employee</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <a href="/employee/create">
                <button class="btn btn-block btn-info">Tambah Data</button>
            </a>
        </div>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Striped Full Width Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Phone</th>
                            <th>email</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $d)
                        <tr>
                            <td> #</td>
                            <td><a href="/employee/show/{{$d->id}}">
                                {{$d->name}} </a>
                            </td>
                            <td>{{$d->alamat}}</td>
                            <td>{{$d->phone}}</td>
                            <td>{{$d->email}}</td>
                            <td>
                            <a href="/employee/edit/{{$d->id}}">EDIT </a> 
                                | 
                            <a href="/employee/destroy/{{$d->id}}">DELETE</a>
                            </td>
                        </tr>    
                        @endforeach                        
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>
@endsection