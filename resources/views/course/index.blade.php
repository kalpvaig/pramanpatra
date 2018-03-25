@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <div class="container">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Courses</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/course/create') }}" class="btn btn-success btn-sm" title="Add New course">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a><br /><br />

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            <table class="table table-border table-stripped table-responsive">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Duration Hours/Days</th>
                                        <th>Intructor Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $item)
                                    <tr>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>@if($item->duration_type==1)
                                                {{ $item->duration_days}} 
                                            @else 
                                                {{ $item->duration_hours }}
                                            @endif
                                        </td>
                                        <td>{{ $item->instructor_name }}</td>
                                        <td width="300px">
                                            <div class="col-md-4">
                                                <a href="{{ url('/admin/course/' . $item->id) }}" title="View course"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{ url('/admin/course/' . $item->id . '/edit') }}" title="Edit course"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            </div>
                                            <div class="col-md-4"> 
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/course', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete course',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper">  </div>
                        </div>

                    </div>
                </div>
            
        </div>
    </div>
@endsection
