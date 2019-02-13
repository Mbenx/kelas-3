@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Position</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Position</a></li>
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
                    <h3 class="box-title">Create Employee</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/position/store" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="_method" value="POST" />
                        </div>
                        <div class="form-group">
                            <label>Name Of Position </label>
                            <input type="text" name="name" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-control" name="department_id">
                                @foreach ($data as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>    
                                @endforeach
                                
                            </select>
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