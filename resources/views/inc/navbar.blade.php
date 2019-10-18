<style>

    #option li a{
        font-size: 20px;
        margin-right: 100px;
        color: white;        
    }
    #login{
        padding:7px;
        font-size: 12px;
    }
    #navbarhead{
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 25px;
    }

</style>

<nav class="row navbar-expand-lg navbar-light bg-info" id="navBar">
    <a class="navbar-brand" href="#"><h3 id="navbarhead">eKachaBazar.com</h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        {{-- <ul class="nav navbar-nav ml-auto" id="option"> --}}
        <ul id="option" class="list-group navbar-nav ml-auto">
            <li class="nav-item">
                <a id="help" class="nav-link" href="/">Need Help?</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/services" id="emg">SignUp</a>
            </li>
            <li class="nav-item">
                    <button id="login" type="button" class="btn btn-danger navbar-btn" href="/">SIGN IN</button>
            </li>
        </ul>
    </div>  
</nav>