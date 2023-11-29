
<header class="site-navbar black site-navbar-target h-25" role="banner">
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
                        
                        <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                        
                        @guest
                        <li><a href="{{route('member.login')}}" class="nav-link">Login</a></li>
                        <span style="padding: 5px;">|</span>
                        <li><a href="{{route('member.registration')}}" class="nav-link">Registration</a></li>
                        @endguest
                        @auth
                        <li><a href="{{route('member.logout')}}" class="nav-link">Log Out</a>|</li>
                        <li> <a href="{{route('profile.view')}}" class="nav-link"> {{auth()->user()->name}} ({{ auth()->user()->role }}) </li>
                        @endauth
                        <li><a href="{{route('teacher.create.tuition.post')}}" class="nav-link">Create Tuition</a></li>

                        <li><a href="{{route('student.create.tuition.post')}}" class="nav-link">Need Tutor</a></li>
                            @if(auth()->user())
                            <li><a href="{{route('myPost',auth()?->user()?->id)}}" class="nav-link">My Post</a></li>
                            @endif
                        {{-- <li><a href="" class="nav-link">Contact</a></li> --}}
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>


<!-- <div class="site-section-cover overlay h-25" style="background-color:#303030; height:50%">
    <div class="container">
        <div class="row align-items-center justify-content-center" >
            <div class="col-lg-10 text-center">
                <h1>Home <strong>Tutor</strong> Management<strong> System</strong></h1>
            </div>
        </div>
    </div>
</div> -->
