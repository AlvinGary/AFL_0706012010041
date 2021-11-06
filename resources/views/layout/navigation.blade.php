<nav class="navbar nav-pills navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid d-flex justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{($title === "Home") ? 'active' : ''}}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($title === "Song") ? 'active' : ''}}" href="/song">Song</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($title === "Singer") ? 'active' : ''}}" href="/singer">Singer</a>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom justify-content-center">
    <a class="navbar-brand">JapaneseSongList By Alvin Gary @2021</a>
</nav>