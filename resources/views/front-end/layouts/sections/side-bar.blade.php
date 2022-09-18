<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <div class="topSide">
        <div class="notif">
            <a href="">
                <button>
                    <img src="images/notification-bell.png" alt="">
                </button>
            </a>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Lastname, Firstname</button>
            <i class="fa fa-angle-down"></i>
            <div class="dropdown-content">
              <a href="{{ route("profile.index")}}">Profile</a>
              <a href="#">Logout</a>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">iEnter</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route("student.account") }}">
                <i class='bx bx-home'></i>
                <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="{{ route("map.index") }}">
                    <i class='bx bx-map' ></i>
                    <span class="links_name">Map</span>
                </a>
                <span class="tooltip">Map</span>
            </li>
            <li>
                <a href="{{ route("calendar.index") }}">
                    <i class='bx bx-calendar' ></i>
                    <span class="links_name">Calendar</span>
                </a>
                <span class="tooltip">Calendar</span>
            </li>
            <li>
                <a href="{{ route("history.index") }}">
                    <i class='bx bx-history' ></i>
                    <span class="links_name">History</span>
                </a>
                <span class="tooltip">History</span>
            </li>
            <li>
                <a href="{{ route("about-us.index") }}">
                    <i class='bx bx-info-circle' ></i>
                    <span class="links_name">About us</span>
                </a>
                <span class="tooltip">About us</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">Prem Shahi</div>
                        <div class="job">Student</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out" ></i>
            </li>
        </ul>
  </div>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
    if(sidebar.classList.contains("open")){
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
    }else {
        closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
    }
    }
</script>
</body>
</html>
