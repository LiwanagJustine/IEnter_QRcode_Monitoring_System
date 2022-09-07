@extends('front-end.layouts.sign-up')

@section('content')
<div class="signUpCont">
    <div class="container">
        <div class="nextSlide">
            <div class="slide1"></div>
            <div class="slide2"></div>
        </div>
        <!-- user type page -->
        <div class="cont1">
            <img src="images/Environmental audit-pana.png" alt="">
        </div>
        <div class="cont2">
            <div class="userType">
                <h3>Let's get started. <br> Select your user type</h3>
                <button id="btnUser1">
                    <img src="/images/student.png" class="icon1" alt="">
                    <span class="span1" >I am employee</span>
                </button>
                <button id="btnUser2">
                    <img src="/images/student.png" class="icon2" alt="">
                    <span class="span2">I am a student</span>
                </button>
                <div class="signIn">
                    <h4>Already have an account?
                        <a href="{{ route('sign-in.index')}}">Sign in!</a>
                    </h4>
                </div>
            </div>
        </div>
        <!-- survey form page  -->
        <div class="cont3">
            <div class="welcomeTxt">
                <h4>Welcome!</h4><p>Tell us about yourself</p>
            </div>
            <div class="forms">
                <form action="">
                    <div class="row1">
                        <div class="col1">
                            <p id="num" class="num" >Student number</p>
                            <input type="text" required>
                        </div>
                        <div class="col1">
                            <p>Email Address</p>
                            <input type="text" required>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="col2">
                            <p>Fullname</p>
                            <input type="text" placeholder="First name" required>
                            <input type="text" placeholder="Middle name">
                            <input type="text" placeholder="Last name" required>
                            <select name="suffix" id="">
                                <option value="" selected disabled>Suffix </option>
                                <option value="">a</option>
                                <option value="">b</option>
                            </select>
                        </div>
                    </div>
                    <div class="row3">
                        <div class="col3">
                            <p>Birthday</p>
                            <input type="date">
                        </div>
                        <div class="col3">
                            <p>Gender</p>
                            <select name="" id="">
                                <option value="" selected disabled>Gender</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>
                        <div class="col3">
                            <p>Mobile No</p>
                            <input type="tel" placeholder="+63">
                        </div>
                    </div>
                    <div class="row4">
                        <div class="col4">
                            <p>Complete Address</p>
                            <input type="text" placeholder="House No.">
                            <input type="text" placeholder="Barangay">
                            <input type="text" placeholder="City">
                            <input type="text" placeholder="Province">
                        </div>
                    </div>
                </form>
            </div>
            <div class="btnBack">
                <label class="back" for="">&lt;</label>
                <button class="back" id="btnBack">Back</button>
            </div>
        </div>
        <!-- line -->
        <div class="cont4"></div>
        <!-- ID and Card -->
        <div class="cont5">
            <p class="req" id="ID">Student ID: </p>
            <div class="ID">
                <form action="" method="POST">
                    <img src="/images/upload.png" alt="">
                    <h5>Drag and Drop files here</h5>
                    <div class="side"></div>
                    <input type="file">
                    <button>Browse Files</button>
                </form>
            </div>
            <p class="req">Vaccination Card</p>
            <div class="card">
                <form action="" method="POST">
                    <img src="/images/upload.png" alt="">
                    <h5>Drag and Drop files here</h5>
                    <div class="side"></div>
                    <input type="file">
                    <button>Browse Files</button>
                </form>
            </div>
            <div class="btnSignup">
                    <button class="btnSubmit" id="btnSubmit">Sign up</button>
            </div>
        </div>
        {{-- Registraation Done --}}
        <div class="registerDone">
            <div class="cont6">
                <div class="box1">
                    <img src="/images/Mail sent-bro.png "alt="">
                </div>
                <div class="box2">
                    <h4>Registration Sent!</h4>
                    <p>You've entered <strong> rowan@sampleemail.com</strong> as <br> your email address </p>
                    <p>A confirmation messaage and password for <br> your account will be send to you once your <br> registration has been verified and approved.</p>

                    <button class="btnDone"><a href="{{ route('sign-in.index') }}">Done</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
