@extends('layout/layout-common')

@section('space-work')


    @if($errors->any())
        @foreach($errors->all() as $error)
        <p style="color:rgb(145, 69, 163);">{{ $error }}</p>
        @endforeach
    @endif
    
    <form action="{{ route('studentRegister') }}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Enter Name">
        <br><br>
        <input type="email" name="email" placeholder="Enter Email">
        <br><br>
        <input type="password" name="password" placeholder="Enter Password">
        <br><br>
        <input type="password" name="password_confirmation" placeholder="Enter Confirm Password">
        <br><br>
        <input type="submit" value="Register">

    </form>

<!DOCTYPE html>
<html>
<head>
    <title> Signup </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

</head>
<body>
  
<div class="wrapper">
  
    <!--  Header  -->
   
  
      <!--  Sign Up  -->
      <section class="section sign-up">
        @if($errors->any())
        @foreach($errors->all() as $error)
        <p style="color:rgb(145, 69, 163);">{{ $error }}</p>
        @endforeach
    @endif
    
    <form action="{{ route('studentRegister') }}" method="POST">
        @csrf
          <input type="text" name="name" placeholder="Name">
          <input type="text" name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Password">
          <input type="password" name="confirm" placeholder="Confirm Password">
        
          <input type="button" value="Register">
          
          
        </form>
        
    @if(Session::has('success'))
    <p style="color:green;">{{ Session::get('success') }}</p>
@endif

@endsection
      </section>
      
    
  </div>
 
</body>
</html>


