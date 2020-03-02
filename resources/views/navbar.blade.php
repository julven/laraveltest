

<nav>
    <div class="nav-wrapper">
        <div  class="container">
            <a class="brand-logo">Admin</a>
            @if(Auth::check())
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/home">Home</a></li>
                <li><a href="/list">List</a></li>
                <li><a href="/account">Account</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
            @endif
            
        </div>
    </div>
</nav>
