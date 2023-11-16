<header class="site-navbar light site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-3">
                <div class="site-logo">
                    <a href="#"><strong>HTMS</strong></a>
                </div>
            </div>

            <div class="col-9  text-right">
                <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>
                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto ">
                        <li><a href="" class="nav-link">Home</a></li>
                        
                        @guest
                        <li><a href="{{route('member.login')}}" class="nav-link">Login</a></li>
                        <span style="padding: 5px;">|</span>
                        <li><a href="{{route('member.registration')}}" class="nav-link">Registration</a></li>
                        @endguest

                        @auth
                        <li><a href="{{route('member.logout')}}" class="nav-link">Log Out</a></li>
                        @endauth
                        <li><a href="" class="nav-link">About</a></li>
                        <li><a href="" class="nav-link">Contact</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>


<div class="site-section-cover overlay" style="background-color:#303030">
    <div class="container">
        <div class="row align-items-center justify-content-center" >
            <div class="col-lg-10 text-center">
                <h1>Home <strong>Tutor</strong> Management<strong> System</strong></h1>
            </div>
        </div>
    </div>
</div>
