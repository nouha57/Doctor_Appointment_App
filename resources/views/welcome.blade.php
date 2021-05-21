@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/online-medicine-concept_160901-152.jpg" class="img-fluid" style="border:1px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2>Create an account & Book your appointment</h2>
            <p> With My Doctors application, you can easily create and account and book an appointment
                with a blink of an eye from the confort of your home. You can choose the right doctor for you
            based of their desciption and their availability that suits you. Say good bye to the old calls and negociations! </p>
            <div class="mt-5">
               <a href="{{url('/register')}}"> <button class="btn btn-success">Register as Patient</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a>
            </div>
        </div>
    </div>
    <hr>

  <!--date picker component-->
  <find-doctor></find-doctor>
</div>
@endsection
