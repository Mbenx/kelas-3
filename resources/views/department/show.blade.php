@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Department</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Department</a></li>
        <li class="active">Show</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Department {{$data->name}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama Position</th>
                        </tr>
                        <?php $i=1;?>
                        @foreach ($data->position as $a)                            
                        <tr>
                        <td>{{$i}}</td>
                        <td>{{$a->name}}</td>
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