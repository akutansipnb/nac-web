<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Tailwinds --}}

    <link rel="stylesheet" href={{asset('css/app.css')}}>
    
    {{-- Custom CSS --}}
    
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    

</head>
<body>
    
    <div class="container my-5">
        {{-- No Tailwinds --}}
        <p class="text-3xl font-light"> SCSS Without <span class="font-bold">Tailwind</span> class </p>
        <hr class="my-5">
        <button class="btn-orange">Orange Button</button>
        <button class="btn-secondary">White Button</button>
    </div>

    <div class="container my-5">
        {{-- With Tailwinds --}}
        <p class="text-3xl font-light"> SCSS With <span class="font-bold">Tailwind</span> class </p>
        <hr class="my-5">
        
    </div>

</body>
</html>