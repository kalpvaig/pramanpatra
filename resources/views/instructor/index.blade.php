@extends('adminlte::page')

@section('title', 'Instructors | Pramanpatra')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <div class="container">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Courses</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/instructor/create') }}" class="btn btn-success btn-sm" title="Add New Instructor">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a><br />

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <table class="table table-border table-stripped table-responsive">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($instructors as $item)
                                    <tr>
                                        <td><img src='{{ asset("images/$item->photo_url") }}' class="img img-responsive" width="100" height="80" /></td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone}}</td>
                                        <td >
                                            <div class="col-md-4">
                                                <a href='{{ url("/admin/instructor/$item->id") }}' title="View instructor"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{ url('/admin/instructor/' . $item->id . '/edit') }}" title="Edit instructor"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            </div>
                                            <div class="col-md-4"> 
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/instructor', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => 'Delete instructor',
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
