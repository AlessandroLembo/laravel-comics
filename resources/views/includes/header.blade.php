@php
    $menu_comics = [
        [
        'link' => 'CHARACTERS',
        ],
        [
        'link' => 'COMICS',
        ],
        [
        'link' => 'MOVIES',
        ],
        [
        'link' => 'TV',
        ],
        [
        'link' => 'GAMES',
        ],
        [
        'link' => 'COLLECTIBLES',
        ],
        [
        'link' => 'VIDEOS',
        ],
        [
        'link' => 'FANS',
        ], 
        [
        'link' => 'NEWS',
        ], 
        [
        'link' => 'SHOP',
        ],
    ]
@endphp
@endphp

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
                    {{-- <li><a href="#">CHARACTERS</a></li>
                    <li class="active"><a class="active" href="#">COMICS</a></li>
                    <li><a href="#">MOVIES</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">GAMES</a></li>
                    <li><a href="#">COLLECTIBLES</a></li>
                    <li><a href="#">VIDEOS</a></li>
                    <li><a href="#">FANS</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">SHOP</a></li> --}}
                @foreach ( $menu_comics as $link )
                   <li><a href="#">{{$link['link']}} </a></li>
                    
                @endforeach
                    
                </ul>
            </nav>
            <div>
                <input type="text" id="search" placeholder="Search">
            </div>
            
        </div>
    </div>
    
</header>