@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>View Certificate</h1>
@stop
@section('content')
    <div class="container">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">certificate #{{ $certificate->certificate_id }}</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <img src='{{ asset("images/$certificate->student_photo_url")}}' height="100" />
                                <tr><th>Certificat Number</th><td>{{ $certificate->certification_number }}</td></tr>
                                <tr><th> Student Name </th><td> {{ $certificate->student_name }} </td></tr>
                            </tbody>
                        </table>
                    </div>                
                </div>
            </div>
        </div>
    </div>
@endsection
