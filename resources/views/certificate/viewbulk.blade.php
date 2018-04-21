@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bulk Certificate</h1>
@stop

@section('content')
    <div class="container">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Bulk Certificates</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/certificate/') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <a href="/tmp/sample3.xlsx" class="btn btn-success">Download Sample Excel </a>
                        {!! Form::open(['url' => '/admin/certificate/bulk', 'class' => 'form-horizontal', 'files' => true]) !!}
                                
                            <div class="form-group" >
                                <label class="col-md-6 control-label" >Select Course</label>
                                <div class="col-md-6">
                                <select name="course_id" class="form-control">
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label class="col-md-4" for="excel_file">Choose Excel Document</label>
                                <div class="col-md-6">    
                                    <input type="file" name="excel_file" class="form-control" />
                                </div>
                            </div>
                            <br />
                            <p>* Students will be created and a certificate number is generated after that. Please copy the certificate number and distribute the students.</p>
                                
                            <div class="col-md-offset-4 col-md-4">
                                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            
        </div>
    </div>
@endsection
