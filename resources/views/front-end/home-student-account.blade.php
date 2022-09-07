@extends('front-end.layouts.home-stud-acc')

@section('content')
    <div class="cont1">
        <h2>Dashboard</h2>
    </div>
    <div class="cont2">
        <div class="row1">
            <div class="col1">
                <div class="box1">
                    <h3>Your account</h3>
                    <p>
                        <strong>Hello, Rowan!</strong>
                        Lorem, ipsum dolor sit amet <br> consectetur  adipisicing elit. Ex alias <br> adipisci doloribus repellendus <br> illum tenetur!
                    </p>
                    <img src="/images/Pleasant surprise-cuate.png" alt="">
                </div>
            </div>
            <div class="col2">
                <body onload="initClock()">
                    <!--digital clock start-->
                    <div class="datetime">
                        <div class="time">
                            <span id="hour">00</span><span>:</span>
                            <span id="minutes">00</span><span>:</span>
                            <span id="seconds">00</span>
                            <span id="period">AM</span>
                        </div>
                        <div class="date">
                            <span id="dayname">Day</span><br>
                            <span id="month">Month</span>
                            <span id="daynum">00</span><span>,</span>
                            <span id="year">Year</span>
                        </div>
                    </div>
                    <!--digital clock end-->
                </body>
            </div>
        </div>
        <div class="row2">
            <div class="col3">
                <div id="calendar">
                    <div class="month">
                        <i class="fa-solid fa-arrow-left prev"></i>
                        <div class="date">
                            <h1><span class="mo"></span>&nbsp;<span class="yr"></span></h1>
                        </div>
                        <i class="fa-solid fa-arrow-right next"></i>
                    </div>

                    <div class="weekdays">
                        <div>SUN</div>
                        <div>MON</div>
                        <div>TUE</div>
                        <div>WED</div>
                        <div>THU</div>
                        <div>FRI</div>
                        <div>SAT</div>
                    </div>
                    <div class="days">
                        {{-- <div class="prev-date">1</div>
                        <div class="prev-date">2</div>
                        <div class="prev-date">3</div>
                        <div class="prev-date">4</div>
                        <div class="prev-date">5</div>
                        <div class="prev-date">6</div>
                        <div class="prev-date">7</div>
                        <div class="today">1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                        <div>10</div>
                        <div>11</div>
                        <div>12</div>
                        <div>13</div>
                        <div>14</div>
                        <div>15</div>
                        <div>16</div>
                        <div>17</div>
                        <div>18</div>
                        <div>19</div>
                        <div>20</div>
                        <div>21</div>
                        <div>22</div>
                        <div>23</div>
                        <div>24</div>
                        <div>25</div>
                        <div>26</div>
                        <div>27</div>
                        <div>28</div>
                        <div>29</div>
                        <div>30</div>
                        <div>31</div>
                        <div class="next-date">1</div>
                        <div class="next-date">2</div>
                        <div class="next-date">3</div>
                        <div class="next-date">4</div>
                        <div class="next-date">5</div>
                        <div class="next-date">6</div>
                        <div class="next-date">7</div> --}}
                    </div>
                    <script src="js/calendar.js"></script>
                </div>
            </div>
            <div class="col4">
                <div class="col4-row1">
                    <h4>Recent Activities</h4>
                </div>
                <div class="col4-row2">
                    <div class="recent-act-row">
                        <p>5 weeks ago</p>
                        <h5>You entered GNVHS</h5>
                    </div>
                    <div class="recent-act-row">
                        <p>5 weeks ago</p>
                        <h5>You change your email address</h5>
                    </div>
                    <div class="recent-act-row">
                        <p>5 weeks ago</p>
                        <h5>You update youre declaration form</h5>
                    </div>
                    <div class="recent-act-row">
                        <p>5 weeks ago</p>
                        <h5>You sign in your account</h5>
                    </div>
                    <div class="recent-act-row">
                        <p>5 weeks ago</p>
                        <h5>You leave the GNVHS</h5>
                    </div>
                    <div class="recent-act-row">
                        <p>5 weeks ago</p>
                        <h5>Your account is now verified</h5>
                    </div>
                    <div class="recent-act-row">
                        <p>5 weeks ago</p>
                        <h5>You entered GNVHS</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
