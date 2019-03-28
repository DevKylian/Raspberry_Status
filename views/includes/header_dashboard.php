<header class="masthead mb-auto black animate-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="dashboard">Raspberry Status Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="toggleNav">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="profile">Profile</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="settings">Settings</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="home">
                <button class="btn btn-danger my-2 my-sm-0" type="submit" name="dashboard">Disconnect</button>
            </form>
        </div>
    </nav>
</header>