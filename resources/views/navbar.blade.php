

<nav>
    <div class="nav-wrapper">
        <div  class="container">
            <a class="brand-logo hide-on-med-and-down">Admin</a>
            @if(Auth::check())
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
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

<div class="sidenav" id="mobile-demo">
    
    <h4 style="padding: 0px 10px;">Admin</h4>
    <hr>
    
    <ul >
        <li><a href="/home">Home</a></li>
        <li><a href="/list">List</a></li>
        <li><a href="/account">Account</a></li>
        <li><a href="/logout">Logout</a></li>
    </ul>
    
</div>

