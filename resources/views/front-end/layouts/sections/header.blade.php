<header>
    <h1><a href="{{ route('homepage.index')}}">iEnter</a></h1>
    <div class="navBar">
        <nav>
            <ul>
                <li>
                    <a href="">Feature</a>
                </li>
                <li>
                    <a href="">Map</a>
                </li>
                <li>
                    <a href="">About us</a>
                </li>
                <li>
                    <a href="{{ route('sign-in.index')}}">Sign in</a>
                </li>
                <li>
                    <a href="{{ route('sign-up.index')}}">Sign up</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
@if (Route::is('sign-in.index'))
    <style>
        li:nth-child(4){
            display: none;
        }
        li:nth-child(5){
            display: none;
        }
        header h1{
            margin-left: 20%;
        }
        header{
            box-shadow: rgba(110, 99, 99, 0.174) 5px 0px 10px 5px;
        }
    </style>
@endif
@if (Route::is('sign-up.index'))
    <style>
        li:nth-child(5){
            display: none;
        }
        header h1{
            margin-left: 16%;
        }
        header{
            box-shadow: rgba(110, 99, 99, 0.174) 5px 0px 10px 5px;
        }
    </style>
@endif
