@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>View Certificate</h1>
@stop
@section('content')
    <div class="container">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">instructor {{ $instructor->id }}</div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <img src='{{ asset("images/$instructor->photo_url") }}' height="250" class="img img-response" />
                    </div>
                    <div class="col-md-8">
                        <h3>{{$instructor->name}}</h3>
                        <p>
                            <span class="fa fa-envelope"></span> &nbsp;<b>{{$instructor->email}}</b> <br />
                            <span class="fa fa-phone"></span> &nbsp;<i>{{$instructor->phone}}</i> <br />
                            <span class="fa fa-address-book"></span> &nbsp; {{$instructor->address}}<br/>
                            <span class="fa fa-user"></span> &nbsp; {{$instructor->age}}<br />
                            <span class="fa fa-male"></span> &nbsp;{{$instructor->gender}} <br />
                            <a href="{{$instructor->social1_url}}" class="btn btn-primary">{{$instructor->social1_name}}</a> &nbsp; <a href="{{$instructor->social2_url}}" class="btn btn-info">{{$instructor->social2_name}}</a> &nbsp; <a href="{{$instructor->social3_url}}" class="btn btn-success">{{$instructor->social3_name}}</a><br /><br />
                            <b>Verification Number: </b>&nbsp; {{$instructor->verification_no}}  <br />
                            <a href='{{ asset("verification_docs/$instructor->verification_doc_url") }}' class="btn btn-primary">Verification Docs</a> &nbsp;
                            <a href='{{ asset("resume/$instructor->resume") }}' class="btn btn-info">Resume </a> <br />
                        </p>
                    </div>
                                   
                </div>
            </div>
        </div>
    </div>
@endsection
