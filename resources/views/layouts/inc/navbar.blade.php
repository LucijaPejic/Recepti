<header class="header-area">
    <div class="delicious-main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light classy-navbar justify-content-between" id="deliciousNav">
                <a class="nav-brand" href="{{ url('/') }}"><img src="img/core-img/logo.png" alt=""></a>

                <div class="collapse navbar-collapse classynav" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/blogpost') }}">Recepti</a>
                        </li>
                        <li>
                            <a href="{{ url('/about') }}">About Us</a>
                        </li>
                        
                    </ul>

                    <a href="{{ url('/create') }}" class="btn btn-outline-success" role="button"
                        aria-disabled="true">Objavi</a>
                        
                    <div style="padding: 10px">
                        
                            <form class="form-inline" action="{{ route('receipe-post.search') }}">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            
                    </div>
                </div>
            </nav>
        </div>
</header>
