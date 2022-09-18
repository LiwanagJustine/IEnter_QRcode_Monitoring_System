@extends('front-end.layouts.sign-in')

@section('content')
    <div class="container">
        <div class="cont1">
            <div class="welcomeTxt">
                <h2>Welcome back!</h2>
            </div>
            <img src="../images/3.png" alt="">
        </div>
        <div class="cont2">
            <div class="formContainer">
                <div class="contTxt">
                    <h3>Sign in your account</h3>
                </div>
                <div class="form">
                    <form action="" method="get">
                        <p for="">Email</p>
                        <input type="text" placeholder="Email">
                        <br><br>
                        <p for="">Password</p>
                        <input type="password" placeholder="Password">
                    </form>
                </div>
                <div class="checkBox">
                    <form action="" method="get">
                        <input type="checkbox" name="" id="">
                        <span for="">Remember me</span>
                        <!-- forgotPass -->
                        <a href="">Forgot Password?</a>
                    </form>
                </div>
                <a href="{{ route('student.account')}}">
                    <button type=""  class="signinBtn" >Sign in</button>
                </a>
                <div class="visit">
                    <a href="{{ route('visitor.declaration-form')}}">Visitor</a>
                </div>
            </div>
            <div class="signUp">
                <h4>Don't have an account?
                    <a href="{{ route('sign-up.index')}}">Sign up!</a>
                </h4>
            </div>
        </div>
    </div>
@endsection
