@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <div class="container">
            <div class="col-md-9">
             <div class="panel panel-default">
                    <div class="panel-heading">Edit course #{{ $course->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/course') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($course, [
                            'method' => 'PATCH',
                            'url' => ['/admin/course', $course->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}
                            @include ('course.form')
                            <div class="col-md-offset-4 col-md-4">
                                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Update', ['class' => 'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}

                    </div>
                
            </div>
        </div>
    </div>
@endsection
