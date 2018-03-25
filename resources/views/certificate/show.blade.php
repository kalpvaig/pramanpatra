@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>View Certificate</h1>
@stop
@section('content')
    <div class="container">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">certificate {{ $certificate->id }}</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr><th>Certificat Number</th><td>{{ $certificate->certificate_number }}</td></tr>
                                <tr><th> Student Name </th><td> {{ $student->name }} </td></tr>
                            </tbody>
                        </table>
                    </div>                
                </div>
            </div>
        </div>
    </div>
@endsection
