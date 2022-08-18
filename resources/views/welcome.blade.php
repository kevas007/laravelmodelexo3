<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
   @include('section1')
   <br>
   <hr>
   <h2>
    Section all Hommes
</h2>
    @include('section2')
    <br>
    <hr>
    <h2>
        Section all femmes
    </h2>
    @include('section3')
    <br>
    <hr>
    <h2>Homme entre 18 et 24 ans</h2>
    @include('section4')
    <br>
    <hr>
    <h2>Femme entre 18 et 24 ans</h2>
    @include('section5')
    <br>
    <hr>
    <h2>les membres exclus entre 18 et 24 ans</h2>
    @include('section6')
</body>

</html>
