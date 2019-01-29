@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Employee</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Employee</a></li>
        <li class="active">Create</li>
    </ol>
</section>
@endsection

@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Employee</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/employee/update" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="id" value="{{$data->id}}" />
                            <input type="hidden" name="_method" value="PUT" />
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                        <input type="text" name="name" value="{{$data->nama}}"
                            class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" value="{{$data->alamat}}"
                            class="form-control" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{$data->phone}}"
                            class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" value="{{$data->jabatan}}"
                            class="form-control" placeholder="Jabatan">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
    </div>
</section>

@endsection