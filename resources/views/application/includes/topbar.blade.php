<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="/" class="logo">
                    <span>
                        <img src="{{ asset('public/images/logo.png')}}" height="60">
                    </span>
            <i>
                <img src="{{ asset('public/images/logo_sm.png')}}" height="28">
            </i>
        </a>
    </div>

    <nav class="navbar-custom">

        <ul class="list-inline float-right mb-0">
            

            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('public/images/users/avatar-2.jpg') }}" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>Olá! <?php echo Auth::user()->name;?></small> </h5>
                    </div>

                    <!-- item-->
                    <a href="user/edit/@php echo Auth::user()->id; @endphp" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-circle"></i> <span>Perfil</span>
                    </a>
                   
                    <!-- item-->
                    <a href="{{ route('sair') }}" class="dropdown-item notify-item">
                        <i class="mdi mdi-power"></i> <span>Logout</span>
                    </a>

                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="dripicons-menu"></i>
                </button>
            </li>
            <!--<li class="hide-phone app-search">
                <form role="search" class="">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>-->
        </ul>

    </nav>

</div>
<!-- Top Bar End -->