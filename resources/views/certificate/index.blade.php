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
                        <a href="{{ url('/admin/certificate/create') }}" class="btn btn-success btn-sm" title="Add New certificate">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a><br />
                        
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            <table class="table table-border table-stripped table-responsive">
                               
                                    <tr>
                                        <th>Certificate Number</th>
                                        <th>Student Name</th>
                                        <th>Student Phone</th>
                                        <th>Course Name</th>
                                        <th>Valid From</th>
                                        <th>Rating</th>
                                        <th>Action</th>
                                    </tr>
                                @foreach($certificates as $item)
                                    <tr>
                                        <td>{{ $item->certification_number}}</td>
                                        <td>{{ $item->student_name }}</td>
                                        <td>{{ $item->student_phone }}</td>
                                        <td>{{ $item->course_name }}</td>
                                        <td>{{ $item->valid_from }}</td>
                                        <td>{{ $item->rating }}</td>
                                        <td width="300px">
                                            <div class="col-md-4">
                                                <a href="{{ url('/admin/certificate/' . $item->id) }}" title="View certificate"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{ url('/admin/certificate/' . $item->id . '/edit') }}" title="Edit certificate"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            </div>
                                            <div class="col-md-4"> 
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/certificate', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete certificate',
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
