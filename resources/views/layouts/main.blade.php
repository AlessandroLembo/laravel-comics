<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} | @yield('title')</title>
    
    {{-- Import from app.js --}}
    @vite('resources/js/app.js')
</head>
<body>
    @include('includes.header')

    <main>
        {{-- jumbotron --}}
        <div id="banner"></div>
        
        @yield('card')
        {{-- Section cards --}}
        {{-- <section id="content-top">
            <div class="container cards-section">
                <button id="current-series">CURRENT SERIES</button>
                
                <div class="main-top-content">
                    <div class="col">
                        <div class="card">
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            
                        </div>
                    </div><div class="col">
                        <div class="card">
                            
                        </div>
                    </div><div class="col">
                        <div class="card">
                            
                        </div>
                    </div><div class="col">
                        <div class="card">
                            
                        </div>
                    </div><div class="col">
                        <div class="card">
                            
                        </div>
                    </div>
                </div>

                <button id="load">LOAD MORE</button>
                
            </div>
        </section>  --}}
        

         @yield('main_links')
        {{-- Main menu --}}
        {{-- <section id="links-main">
            <nav class="container ">
                <ul class="main-images">
                    <li class="choose-operations">
                        <a href="#"></a>
                        <span>Comics</span>                    
                    </li>
                    <li class="choose-operations">
                        <a href="#"></a>
                        <span>Comics</span>                    
                    </li><li class="choose-operations">
                        <a href="#"></a>
                        <span>Comics</span>                    
                    </li><li class="choose-operations">
                        <a href="#"></a>
                        <span>Comics</span>                    
                    </li><li class="choose-operations">
                        <a href="#"></a>
                        <span>Comics</span>                    
                    </li>
                </ul>
            </nav>
        </section> --}}
        
        {{-- Jumbotron DC --}}
        <section id="jumbotron">
            <div class="container jumbo-container">
                <div class="link-lists">
                    <div class="left-lists">
                        <nav class="top-list">
                            <h2 class="title-list">DC COMICS</h2>
                            <ul>
                                <li><a href="#">Characters</a></li>
                                <li><a href="#">Comics</a></li>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </nav>
                        <nav class="bottom-list">
                            <h2 class="title-list">SHOP</h2>
                            <ul>
                                <li><a href="#">Shop DC</a></li>
                                <li><a href="#">Shop DC Collectibles</a></li>
                            </ul>
                        </nav>
                    </div>
                    <nav class="center-list">
                        <h2 class="title-list">DC</h2>
                        <ul>
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy policy (New)</a></li>
                            <li><a href="#">Ad Choices</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshops</a></li>
                            <li><a href="#">CPSC Certificates</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shop Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </nav>
                    <nav class="right-list">
                        <h2 class="title-list">SITES</h2>
                        <ul>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">MAD Magazine</a></li>
                            <li><a href="#">DC Kids</a></li>
                            <li><a href="#">DC Universe</a></li>
                            <li><a href="#">DC Power Visa</a></li>
                        </ul>
                    </nav>
                </div>
                <figure>
                    <img src="{{asset('images/dc-logo-bg.png')}} " alt="Logo Comics">

                </figure>
            </div>
        </section>
    </main>

    @include('includes.footer');
</body>
</html>