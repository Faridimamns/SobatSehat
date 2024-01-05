<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                {{-- <img src="/assetsDashboard/img/profile.jpg"> --}}
                <svg width="39" height="40" viewBox="0 0 50 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25 28.5714C32.8906 28.5714 39.2857 22.1763 39.2857 14.2857C39.2857 6.39509 32.8906 0 25 0C17.1094 0 10.7143 6.39509 10.7143 14.2857C10.7143 22.1763 17.1094 28.5714 25 28.5714ZM35 32.1429H33.1362C30.6585 33.2812 27.9018 33.9286 25 33.9286C22.0982 33.9286 19.3527 33.2812 16.8638 32.1429H15C6.71875 32.1429 0 38.8616 0 47.1429V51.7857C0 54.7433 2.39955 57.1429 5.35714 57.1429H44.6429C47.6004 57.1429 50 54.7433 50 51.7857V47.1429C50 38.8616 43.2812 32.1429 35 32.1429Z"
                        fill="black" />
                </svg>

            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    
                    <span >
                        <span class="text-dark text-uppercase">{{ Auth::user()->name }}</span>
                        <span class="user-level text-capitalize">{{ Auth::user()->role }}</span>
                        <span class="caret"></span>
                    </span>
                    
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/')}}">
                                <span class="link-collapse">Back To Home</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item {{ Request::is('klinik', 'klinik/create', 'klinik/edit') ? 'active' : '' }}">
                <a href="{{ url('/klinik') }}">
                    <i class="la la-hospital-o"></i>
                    <p>Klinik</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('berita', 'berita/create', 'berita/edit') ? 'active' : '' }}">
                <a href="{{ url('/berita') }}">
                    <i class="la la-newspaper-o"></i>
                    <p>Berita</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('jadwal', 'jadwal/create', 'jadwal/edit') ? 'active' : '' }}">
                <a href="{{ url('/jadwal') }}">
                    <i class="la la-calendar-o"></i>
                    <p>Jadwal</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('akun', 'akun/create', 'akun/edit') ? 'active' : '' }}">
                <a href="{{ url('/akun') }}">
                    <i class="la la-user"></i>
                    <p>Akun</p>
                </a>
            </li>



        </ul>
    </div>
</div>
