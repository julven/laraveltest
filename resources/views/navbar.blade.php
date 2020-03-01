

<nav>
    <div class="nav-wrapper">
        <div  class="container">
            <a class="brand-logo">Admin</a>
            @if(Auth::check())
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a >Home</a></li>
                <li><a >List</a></li>
                <li><a >Account</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
            @endif
            
        </div>
    </div>
</nav>
