@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>View Certificate Numbers</h1>
@stop
@section('content')
    <div class="container">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">certificates </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tr><th>Student Name</th><th>Student Phone</th><th>Rating</th><th> Certificate Number </th></tr>
                            @foreach($certis as $certi)
                            <tr>
                                <td>{{$certi['name']}}</td>
                                <td>{{$certi['phone1']}}</td>
                                <td>{{$certi['rating']}}</td>
                                <td>{{$certi['certification_number']}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>                
                </div>
            </div>
        </div>
    </div>
@endsection
