<div class="container">
    <form id="regForm" action="">
        <h1>Health Declaration </h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <h4>Check appropriate answer</h4>
            <div class="check-box">
                <div class="question">
                    <input type="checkbox" id="q1">
                    <label for="q1"> Have you been in close contact with a confirmed case/s of COVID-19?</label>
                </div>
                <div class="question">
                    <input type="checkbox" id="q2">
                    <label for="q2">  Have you been in close contact with persons in quarantine/probable case of COVID-19</label>
                </div>
                <div class="question">
                    <input type="checkbox" id="q3">
                    <label for="q3"> Have you been in close contact with a confirmed case/s of COVID-19?</label>
                </div>
                {{-- dropdown --}}
                <div class="multiSelect">
                    <div class="selectBox" onclick="show()">
                        <select name="" id="">
                            <option>Do you have the following signs and symptoms within the last 14 days?</option>
                        </select>
                        <div class="overselect"></div>
                    </div>
                    <div id="checkboxes">
                        <div class="box">
                            <input type="checkbox" id="q4">
                            <label for="q4">Fever</label>
                        </div>
                        <div class="box">
                            <input type="checkbox" id="q5">
                            <label for="q5">Cough</label>
                        </div>
                        <div class="box">
                            <input type="checkbox" id="q6">
                            <label for="q6">Runny Nose</label>
                        </div>
                        <div class="box">
                            <input type="checkbox" id="q7">
                            <label for="q7">Sore Throat</label>
                        </div>
                        <div class="box">
                            <input type="checkbox" id="q8">
                            <label for="q8">Shortness of breath</label>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <input type="checkbox" id="q9">
                    <label for="q3">  Have you undergone COVID-19 detection testing? If yes, kindly attach the result.</label>
                </div>
                <div class="file-q9">
                    {{-- <input type="file" class="form-control" id="customFile"/> --}}
                </div>
                <div class="question">
                    <input type="checkbox" id="q10">
                    <label for="q3"> Are you fully vaccinated? If yes, kindly attach the certification.</label>
                </div>
                <div class="file-q9">
                    {{-- <input type="file" class="form-control" id="customFile" /> --}}
                </div>
            </div>
        </div>
        <div class="tab">
             <div class="form-container">
                <div class="row1">
                    <div class="col1">
                        <p>Fullname</p>
                        <input type="text" placeholder="Lastname">
                        <input type="text" placeholder="Firstname">
                        <input type="text" placeholder="Middle name">
                    </div>
                </div>
                <div class="row2">
                    <div class="row2-col1">
                        <p>Email</p>
                        <input type="email">
                    </div>
                    <div class="row2-col2">
                        <p>Mobile no.</p>
                        <input type="text">
                    </div>
                </div>
                <div class="row3">
                    <div class="row3-col1">
                        <p>Birthday</p>
                        <input type="date">
                    </div>
                    <div class="row3-col2">
                        <p>Gender</p>
                        <select name="" id="">
                            <option value="" selected disabled>Gender</option>
                            <option value="">Male</option>
                            <option value="">Female</option>
                        </select>
                    </div>
                </div>
                <div class="row4">
                    <div class="row4-col1">
                        <p>Date of Visit</p>
                        <input type="date">
                    </div>
                    <div class="row4-col2">
                        <select name="suffix" id="">
                            <option value="" selected disabled>Suffix </option>
                            <option value="">a</option>
                            <option value="">b</option>
                        </select>
                    </div>
                </div>
                <div class="row5">
                    <div class="row5-col1">
                        <p>Complete Address</p>
                        <input type="text" placeholder="House No.">
                        <input type="text" placeholder="Barangay">
                        <input type="text" placeholder="City">
                        <input type="text" placeholder="Province">
                    </div>
                </div>
             </div>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;" class="btn">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                <a href="{{ route('homepage.index')}}">
                    <button type="button" id="submitBtn" onclick="nextPrev(1)">Submit</button>
                </a>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:5px;">
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
</div>
