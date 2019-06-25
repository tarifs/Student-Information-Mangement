<nav class="navbar navbar-expand-sm navbar-default">

    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="{{ asset('admin/images/default.png') }}" alt="Logo" style="max-width: 80px; padding: 5px;"></a>
        <a class="navbar-brand hidden" href="./"><img src="{{ asset('admin/images/default.png') }}" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href=""> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
            </li>
            @if (Auth::user()->admin)
                <li class="menu-item-has-children">
                    <a href="{{ route('user.index') }}"> <i class="menu-icon fa fa-user"></i>Users</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Student</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('student.create') }}">Create Student</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{ route('student.index') }}">Student List</a></li>
                    </ul>
                </li>

            @endif
            {{-- <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
            <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-table"></i><a href="">Basic Table</a></li>
        </ul>
    </li> --}}
</ul>
</div><!-- /.navbar-collapse -->
</nav>
