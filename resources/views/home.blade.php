@extends('layouts.app')
@section('content')
    <div class="flex mt-48">
        <div class="ml-32 sm:mb-0 font-semibold">
            <p class="text-gray-100 text-5xl">Salutation brave personne !</p>
            <p class="text-gray-300 text-3xl mt-4">Sais-tu que nous sommes <a
                    class="cursor font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-indigo-600">magnifique</a>
                ?</p>
        </div>

        <div class="justify-center place-self-center flex w-1/4 ml-32">
            <img class="animate-ping"alt="gui" width="30%" src="{{asset('img/viasges/gui-removebg-preview.png')}}">
            <img class="anima-p" alt="ron" width="30%" src="{{asset('img/viasges/ron-removebg-preview.png')}}">
            <img class="animate-spin" alt="ste" width="30%" src="{{asset('img/viasges/ste-removebg-preview.png')}}">
            <img class="animate-bounce" alt="ilo" width="30%" src="{{asset('img/viasges/ilo-removebg-preview.png')}}">
            <img class="anima-b" alt="lud" width="30%" src="{{asset('img/viasges/lud-removebg-preview.png')}}">
        </div>
    </div>
@stop
