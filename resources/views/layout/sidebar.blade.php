<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> 
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">NAYANTAKA</strong>
                            </span> <span class="text-muted text-xs block">Programmer </span> </span> </a>
                </div>
                <div class="logo-element">
                    SP
                </div>
            </li>
            <li class="{{ ($active == "dashboard") ? 'active' : '' }}">
                <a href="{{ route('dashboard.index') }}"><i class="fa fa-home"></i> <span class="nav-label">Dashboards</span> </a>
            </li>
            <li class="{{ ($active == "department" || $active == "position" || $active == "qualification" || $active == "employee" || $active == "workshop") ? 'active' : '' }}">
                <a href="#"><i class="fa fa-database"></i> <span class="nav-label">Master Data</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ ($active == "department") ? 'active' : '' }}"><a href="{{ route('department.index') }}">Department</a></li>
                    <li class="{{ ($active == "position") ? 'active' : '' }}"><a href="{{ route('position.index') }}">Position</a></li>
                    <li class="{{ ($active == "qualification") ? 'active' : '' }}"><a href="{{ route('qualification.index') }}">Qualification</a></li>
                    <li class="{{ ($active == "employee") ? 'active' : '' }}"><a href="{{ route('employee.index') }}">Employee</a></li>
                    <li class="{{ ($active == "workshop") ? 'active' : '' }}"><a href="{{ route('workshop.index') }}">Workshop</a></li>
                </ul>
            </li>
            <li class="{{ ($active == "tna") ? 'active' : '' }}">
                <a href="{{ route('tna.index') }}"><i class="fa fa-calendar"></i> <span class="nav-label">TNA</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Event</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Request</a></li>
                    <li><a href="#">Implementation</a></li>
                    <li><a href="#">Attendance</a></li>
                    <li><a href="#">Data 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">Evaluation</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Question</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Certification</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-file-text"></i> <span class="nav-label">Report</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Data 1</a></li>
                    <li><a href="#">Data 2</a></li>
                    <li><a href="#">Data 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">User Management</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Group</a></li>
                    <li><a href="#">User</a></li>
                    <li><a href="#">Menu</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>