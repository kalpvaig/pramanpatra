@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>View Student</h1>
@stop
@section('content')
    <div class="container">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">student #{{ $student->id }}</div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <img src='{{ asset("images/$student->photo_url") }}' height="250" class="img img-response" />
                    </div>
                    <div class="col-md-8">
                        <h3>{{$student->name}}</h3>
                        <p>
                            <span class="fa fa-envelope"></span> &nbsp;<b>{{$student->email}}</b> <br />
                            <span class="fa fa-phone"></span> &nbsp;<i>{{$student->phone1}}</i>, &nbsp;<i>{{$student->phone2}}</i> <br />
                            <span class="fa fa-address-book"></span> &nbsp; {{$student->address}}<br/>
                            <span class="fa fa-user"></span> &nbsp; {{$student->age}}<br />
                            <span class="fa fa-female"></span> &nbsp;{{$student->gender}} <br />
                            <a href="{{$student->social1_url}}" class="btn btn-primary">{{$student->social1_name}}</a> &nbsp; <a href="{{$student->social2_url}}" class="btn btn-info">{{$student->social2_name}}</a> &nbsp; <a href="{{$student->social3_url}}" class="btn btn-success">{{$student->social3_name}}</a><br /><br />
                            <b>Verification Number: </b>&nbsp; {{$student->id_proof}}  <br />
                            <a href='{{ asset("verification_docs/$student->verification_doc_url") }}' class="btn btn-primary">Verification Docs</a> <br />
                        </p>
                    </div>              
                </div>
            </div>
        </div>
    </div>
@endsection
