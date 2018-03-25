@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>View Course</h1>
@stop
@section('content')
    <div class="container">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">course {{ $course->id }}</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr><th>Course Name</th><td>{{ $course->name }}</td></tr>
                                <tr><th> Course Description </th><td> {{ $course->description }} </td></tr>
                            </tbody>
                        </table>
                    </div>                
                </div>
            </div>
        </div>
    </div>
@endsection
