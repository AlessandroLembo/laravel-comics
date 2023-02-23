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
            <div class="container">
                <figure>
                    <img src="{{asset('images/dc-logo.png')}} " alt="Logo Comics">
                </figure>
                <h1 class="text-danger">dc</h1>
            </div>
        </div>
        
    </header>

    <main>

    </main>

    <footer>

    </footer>
</body>
</html>