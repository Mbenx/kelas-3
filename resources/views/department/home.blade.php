@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Department</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Department</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <a href="/organization/create">
                <button class="btn btn-block btn-info">Tambah Data</button>
            </a>
        </div>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{$data}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Merk</th>
                        </tr>
                        @foreach ($car as $c)
                        @if ($c != 'Volvo')                            
                        <tr>
                            <td> </td>
                            <td>{{$c}}</td>
                        </tr>    
                        @endif
                        
                        @endforeach                        
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>



@endsection