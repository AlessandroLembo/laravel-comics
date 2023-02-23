@extends('layouts.main')

@section('title', 'Comics')

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