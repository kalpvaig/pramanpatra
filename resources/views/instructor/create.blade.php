@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Instructor</h1>
@stop

@section('content')
    <div class="container">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Instructor</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/instructor') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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

                        {!! Form::open(['url' => '/admin/instructor/create', 'class' => 'form-horizontal', 'files' => true]) !!}
                            @include ('instructor.form')
                            <div class="col-md-offset-4 col-md-4">
                                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            
        </div>
    </div>
@endsection
