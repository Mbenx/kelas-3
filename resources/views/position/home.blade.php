@extends('layouts.master')

@section('content-header')
<section class="content-header">
        <h1>
            Dashboard
            <small>Position</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>    
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <a href="/position/create">
                <button class="btn btn-block btn-info">Tambah Data</button>
            </a>
        </div>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Position</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                        <?php $i=1;?>
                        @foreach ($data as $d)                            
                        <tr>
                            <td>{{$i}}</td>
                            <td>
                            <a href="position/show/{{$d->id}}">{{$d->name}}
                            </td>
                            <td>{{$d->department->name}}</td>
                            <td>
                                <a href="position/edit/{{$d->id}}"> EDIT </a> |
                                <a href="position/destroy/{{$d->id}}"> DELETE </a>
                            </td>
                        </tr>
                        <?php $i++;?>    
                        @endforeach                        
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>

@endsection
