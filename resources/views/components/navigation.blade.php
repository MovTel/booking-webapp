<header id="header-admin-wrap" class="header-admin-fixed">

    <!-- Header Start -->
    <div id="header-admin">
        <div class="container">

            <!-- Left Side Content -->
            <div class="header-left">
                <div class="nav-btn-wrap">
                    <a class="nav-btn-admin" id="sidebarCollapse">
                        <span class="sl-icon-arrow-left-circle"></span>
                    </a>
                </div>
            </div>
            <!-- Left Side Content End -->

            <!-- Right Side Content -->
            <div class="header-right">
                <ul class="header-widget-wrap">
                    

                    <li class="header-widget">
                        <div class="listing-user-outer dashboard-user-section">
                            <div class="listing-user">
                                <div class="user-name text-black">{{ auth()->user()->first_name . " " . auth()->user()->last_name }}</div>
                                <ul>
                                    <li><a href="{{ url('profile') }}"><i class="sl-icon-user "></i>Profile</a></li>
                                    <li><a href="{{ url('booking') }}"><i class="sl-icon-docs "></i>Bookings</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Right Side Content End -->

        </div>
    </div>
    <!-- Header End -->

</header>
