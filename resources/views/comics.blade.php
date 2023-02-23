<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    
    {{-- Import from app.js --}}
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <div class="top-header">
           <div class="container">

           </div>
        </div>    
        <div class="main-header">
            <div class="container row">
                <figure>
                    <img src="{{asset('images/dc-logo.png')}} " alt="Logo Comics">
                </figure>
                <nav>
                    <ul class="menu">
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </nav>
                <input type="text" placeholder="search">
            </div>
        </div>
        
    </header>

    <main>
        {{-- jumbotron --}}
        <div id="banner"></div>
        
        {{-- Section cards --}}
        <section id="content-top">
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
        </section>
        
        {{-- Main menu --}}
        <section id="links-main">
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
        </section>
        
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

    <footer>
            <div class="container footer-content">
                <div class="sign-up">
                    <button><a href="#">SIGN-UP NOW!</a></button>
                </div>
                <div class="links-footer">
                    <div class="icon-claim">
                        <h2>FOLLOW US</h2>
                    </div>
                    <nav class="icon-footer">
                        <li><a href="#"><img src="{{asset('images/footer-facebook.png')}}" alt="facebook"></a></li>
                        <li><a href="#"><img src="{{asset('images/footer-twitter.png')}}" alt="twitter"></a></li>
                        <li><a href="#"><img src="{{asset('images/footer-youtube.png')}}" alt="youtube"></a></li>
                        <li><a href="#"><img src="{{asset('images/footer-pinterest.png')}}" alt="pinterest"></a></li>
                        <li><a href="#"><img src="{{asset('images/footer-periscope.png')}}" alt="periscope"></a></li>
                    </nav>
                </div>
            </div>
    </footer>
</body>
</html>