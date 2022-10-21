@extends('templates.navbar')
@section('body')
{{-- @dd($post) --}}
<link rel="stylesheet" href="css/menu.css">
<link rel="shortcut icon" href="img/icon1.svg">

<div>
    <div class="menu">
        <p class="bobtextmenu">Welcome to menu Breadtalk</p>
        <p class="hometextmenu1">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut </p>
        <p class="hometextmenu2">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>

    </div>
    <img class="bob" src="img/home.jpg">
</div>

<div class="white"></div>

<div class="menu1">
    <div class="menu_flex">

        @foreach ( $posts as $post)
        <div class="menu2">
            <div class="img_menu">
                <div class="menu_2">
                    <img class="gambarmenu" src="{{ 'storage/' . $post->image}}" alt="{{ $post->title }}">
                </div>
            </div>
            <div class="div">
                <p class="text_menu">{{ $post->title }}</p>
                {{-- <p class="text-center">{!! $post->excerpt !!}</p>  --}}
                <p class="text-center">{{  $post->excerpt  }}</p>
                <p class="harga_menu">${{ $post->harga }}</p>
            </div>
        </div>
        @endforeach
    
    </div>
</div>
</div>

@endsection