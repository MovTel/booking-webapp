<!-- Sidebar Holder -->
@php
    $user_type = auth()->user()->user_type;
@endphp
<nav id="sidebar-admin-wraper">
    <div class="page-logo">
        <a href="{{ url('dashboard') }}"><img src="{{ asset('assets') }}/images/movietelle.png" alt=""></a>
    </div>

    <div class="admin-nav">
        <ul class="">
            <li class="active"><a href="{{ url('dashboard') }}"><i class="sl-icon-speedometer"></i><span class="admin-nav-text">Dashboard</span></a></li>
            <li><a href="{{ url('profile') }}"><i class="sl-icon-user "></i><span class="admin-nav-text">Profile</span></a></li>
            @if($user_type == 1 || $user_type == 2)
            <li>
                <a href="javascript:;"><i class="sl-icon-user "></i><span class="admin-nav-text">Agents</span></a>
                <ul class="sub-menu">
                    <li> <a href="{{ url('agents') }}"><i class="sl-icon-user "></i><span class="admin-nav-text">View Agents</span></a></li>
                    <li> <a href="{{ url('agents/create') }}"><i class="sl-icon-user "></i><span class="admin-nav-text">Create Agent Account</span></a></li>
                </ul>
            </li>
            @endif
            <li>
                <a href="javascript:;"><i class="sl-icon-layers "></i><span class="admin-nav-text">Units</span></a>
                <ul class="sub-menu">
                    <li> <a href="{{ url('unit') }}"><i class="sl-icon-layers "></i><span class="admin-nav-text">View Units</span></a></li>
                    @if($user_type == 1 || $user_type == 2)
                        <li> <a href="{{ url('unit/create') }}"><i class="sl-icon-layers "></i><span class="admin-nav-text">Create Unit</span></a></li>
                    @endif
                </ul>
            </li>
            @if($user_type == 4)
            <li>
                <a href="javascript:;"><i class="sl-icon-docs "></i><span class="admin-nav-text">Booking</span></a>
                <ul class="sub-menu">
                        <li> <a href="{{ url('booking') }}"><i class="sl-icon-docs "></i><span class="admin-nav-text">View Available Units</span></a></li>
                        <li> <a href="{{ url('booking/records') }}"><i class="sl-icon-docs "></i><span class="admin-nav-text">View Booking History</span></a></li>
                </ul>
            </li>
            @endif
            @if($user_type == 1 || $user_type == 2)
            <li>
                <a href="javascript:;"><i class="sl-icon-layers "></i><span class="admin-nav-text">Keycards</span></a>
                <ul class="sub-menu">
                        <li> <a href="{{ url('keycard') }}"><i class="sl-icon-layers "></i><span class="admin-nav-text">View Keycards</span></a></li>
                        <li> <a href="{{ url('keycard/create') }}"><i class="sl-icon-layers "></i><span class="admin-nav-text">Create Keycard</span></a></li>
                </ul>
            </li>
            @endif
            @if($user_type == 5)
            <li>
                <a href="javascript:;"><i class="sl-icon-layers "></i><span class="admin-nav-text">Properties</span></a>
                <ul class="sub-menu">
                        <li><a href="{{ url('properties') }}"><i class="sl-icon-layers "></i><span class="admin-nav-text">View Properties</span></a></li>
                        <li><a href="{{ url('properties/add') }}"><i class="sl-icon-layers "></i><span class="admin-nav-text">Add Property</span></a></li>
                </ul>
            </li>
            @endif
            @if($user_type == 1 || $user_type == 2 || $user_type == 3)
                <li><a href="{{ url('schedules') }}"><i class="sl-icon-list "></i><span class="admin-nav-text">Schedules</span></a></li>
            @endif
            <li><a href="javascript:;" class="logout-btn-wrap"><i class="sl-icon-logout "></i><form action="{{ url('/logout') }}" method="POST">@csrf<input type="submit" value="Logout"></form></a></li>
        </ul>
    </div>
</nav>
