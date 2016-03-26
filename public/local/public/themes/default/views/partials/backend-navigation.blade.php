<nav class="navbar navbar-static-top navbar-inverse">
    <div class="container">
        <div class="navbar-header"><a href="/" class="navbar-brand">CMS Dashboard</a></div>
        <ul class="nav navbar-nav">
            <li><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Users <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('backend.users.index') }}">All Users</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('backend.users.create') }}">Add New</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('backend.pages.index') }}">All Pages</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('backend.pages.create') }}">Add New</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Posts <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('backend.post.index') }}">All Posts</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('backend.post.create') }}">Add New</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">All Settings</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><span class="navbar-text">Hello, {{ $admin->name }}</span></li>
            <li><a href="{{ route('auth.logout') }}">Logout</a></li>
        </ul>
    </div>
</nav>
