<div class="main-header">
    <div class="logo-header">
        <a href="">SOBAT SEHAT</a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse"
            aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
    </div>
    <nav class="navbar navbar-header navbar-expand-lg">
        <div class="container-fluid">

            <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                <div class="input-group">
                    <input type="text" placeholder="Search ..." class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-search search-icon"></i>
                        </span>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        {{-- <img src="/assetsDashboard/img/profile.jpg" alt="user-img" width="36" class="img-circle"> --}}
                        <svg width="15" height="15" viewBox="0 0 50 58" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25 28.5714C32.8906 28.5714 39.2857 22.1763 39.2857 14.2857C39.2857 6.39509 32.8906 0 25 0C17.1094 0 10.7143 6.39509 10.7143 14.2857C10.7143 22.1763 17.1094 28.5714 25 28.5714ZM35 32.1429H33.1362C30.6585 33.2812 27.9018 33.9286 25 33.9286C22.0982 33.9286 19.3527 33.2812 16.8638 32.1429H15C6.71875 32.1429 0 38.8616 0 47.1429V51.7857C0 54.7433 2.39955 57.1429 5.35714 57.1429H44.6429C47.6004 57.1429 50 54.7433 50 51.7857V47.1429C50 38.8616 43.2812 32.1429 35 32.1429Z"
                                fill="black" />
                        </svg>

                        <span>Hizrian</span></a>
                    <ul class="dropdown-menu dropdown-user">

                        <a class="dropdown-item" href="{{ url('/')}}"><i class="ti-settings"></i> Back To Home</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
        </div>
    </nav>
</div>
