@extends('layouts.home')

@section('title', 'Comics')

{{-- section comics cards --}}
@section('card')

   <section id="content-top">
            <div class="container cards-section">
                <button id="current-series">CURRENT SERIES</button>
                
                <div class="main-top-content">
                    @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card">
                            <figure class="comic-images">
                                <img src="{{$comic['thumb']}} " alt="{{$comic['series']}}">
                            </figure>
                            
                            <h3> {{$comic['series']}} </h3>
                        </div>
                    </div>
                    @endforeach
                    
            </div>
            <button id="load">LOAD MORE</button>

    </section> 

   
@endsection


{{-- section main links --}}
@section('main_links')

        <section id="links-main">
            <nav class="container ">
                <ul class="main-images">
                    <li class="choose-operations">
                        <a href="#"><img src="{{asset('images/buy-comics-digital-comics.png')}} " alt="Digital comics"></a>
                        <h4>DIGITAL COMICS</h4>                    
                    </li>
                    <li class="choose-operations">
                        <a href="#"><img src="{{asset('images/buy-comics-merchandise.png')}} " alt="Digital comics"></a>
                        <h4>DC MERCHANDISE</h4>                    
                    </li><li class="choose-operations">
                        <a href="#"><img src="{{asset('images/buy-comics-subscriptions.png')}} " alt="Digital comics"></a>
                        <h4>SUBSCRIPTION</h4>                    
                    </li><li class="choose-operations">
                        <a href="#"><img src="{{asset('images/buy-comics-shop-locator.png')}} " alt="Digital comics"></a>
                        <h4>COMIC SHOP LOCATOR</h4>                    
                    </li><li class="choose-operations">
                        <a href="#"><img src="{{asset('images/buy-dc-power-visa.svg')}} " alt="Digital comics"></a>
                        <h4>DC POWER VISA</h4>                    
                    </li>

                </ul>
            </nav>
        </section>

@endsection