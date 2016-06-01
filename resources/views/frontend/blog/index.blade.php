@extends('layouts.master')

@section('title')
     Blog Index
@endsection

@section('content')
    <article>
        <h3>Post Title</h3>
        <span class = "subtitle">Post Author | Date</span>
        <p>Post Body</p>
        <a href = "#">Read More</a>
    </article>
    <section class = "pagination">
        Pagination
    </section>
@endsection