@extends('layouts.master')

@section('title')
    About me
@endsection

@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/form.css')}}" type="text/css" />
@endsection

@section('content')
    @include('includes.info-box')
    <form action = "" method = "post" id = "contact-form">
        <input type="text" name=""/>
        <input type="submit" value="Submit"/>
    </form>
@endsection