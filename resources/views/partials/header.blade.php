<header>
    <div class="header-top">
        <div class="container flex">
            <span>DC POWER VISA &#174;</span>
            <a href="#">ADDITIONAL DC SITES</a>
        </div>
    </div>
    <div class="container">
        <div class="flex">
            {{-- ?header image? --}}
            <div class="header-img">
                <img src="{{asset("images/dc-logo.png")}}" alt="logo DC">
            </div>
            {{-- ?header menu? --}}
            <div class="header-menu">
                <nav>
                    <ul class="flex">
                        <li>
                            <a href="">CHARACTERS</a>
                        </li>
                        <li class="{{ Route::current()->getName() === 'home' ? 'active' : '' }}">
                            <a href="{{route("home")}}">COMICS</a>
                        </li>
                        <li>
                            <a href="#">MOVIES</a>
                        </li>
                        <li>
                            <a href="#">TV</a>
                        </li>
                        <li>
                            <a href="#">GAMES</a>
                        </li>
                        <li>
                            <a href="#">COLLECTIBLES</a>
                        </li>
                        <li>
                            <a href="#">VIDEOS</a>
                        </li>
                        <li>
                            <a href="#">FANS</a>
                        </li>
                        <li>
                            <a href="#">NEWS</a>
                        </li>
                        <li>
                            <a href="#">SHOP</a>
                        </li>
                    </ul>
                </nav>
            </div>
            {{-- ?search bar? --}}
            <input type="text" placeholder="Search">
        </div>
    </div>
</header>