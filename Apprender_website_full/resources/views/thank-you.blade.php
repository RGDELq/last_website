@extends('layout/layout-common')

@section('space-work')

    <div class="container">
        <div class="text-center">
            <br><br>
            <h2>Thanks for submit your Exam, {{ Auth::user()->name }}</h2>
            
            <p>We will review your Exam, and update you soon by your result .</p>
            <a href="/dashboard" class="btn btn-info">Go Back</a>
        </div>
        <img style="align-content: center" src="{{ asset('img/giphy.gif') }}" class="books" style="width:500; height: ;">

    </div>

@endsection