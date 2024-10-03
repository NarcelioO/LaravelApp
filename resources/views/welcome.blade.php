<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            *,::after,::before{
                box-sizing:border-box;
                border-width:0;
                margin: 0;
                padding: 0;
                border-style:solid;
                border-color:#e5e7eb
            }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>Algun titulo</h1>
        @if (10 > 5)
            <p>True</p>
        @endif

        <p>{{ $name }} ele tem {{$age}} anos</p>

        @for($i=0; $i < count($arr); $i++)
            <p>{{$i}} - {{$arr[$i]}}</p>
        @endfor

        @php
            $name = 'john';
            var_dump($name)
        @endphp

        @foreach($pessoas as $pessoa)
            <p>{{$pessoa}}</p>
        @endforeach
    </body>
</html>
