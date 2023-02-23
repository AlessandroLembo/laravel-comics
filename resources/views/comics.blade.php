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
    </main>

    <footer>

    </footer>
</body>
</html>