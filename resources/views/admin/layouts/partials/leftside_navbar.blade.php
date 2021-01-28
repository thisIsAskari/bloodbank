<div class="logo"><a href="" class="simple-text logo-normal">
        BloodBank
    </a></div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item {{$activePage == 'dashboard' ? 'active' : ''}}" >
            <a class="nav-link" href="{{route('admin.index')}}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item {{$activePage == 'userIndex' ? 'active' : ''}}" >
            <a class="nav-link" href="{{route('user.index')}}">
                <i class="material-icons">person</i>
                <p>Users</p>
            </a>

        </li>

        <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
                <i class="material-icons">bubble_chart</i>
                <p>Donations</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
                <i class="material-icons">notifications</i>
                <p>Requests</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
                <i class="material-icons">language</i>
                <p>About us</p>
            </a>
        </li>
    </ul>
</div>
