@extends('layouts.app')

<!-- title -->
@section('title', 'Профиль')

@section('content')
    <div class="absolute top-0 right-0 left-0 bottom-0 opacity-40 blur-md bg-cover bg-center bg-no-repeat"
         style="background-image: url('{{asset('backgrounds/back1.webp')}}')">
    </div>
    <div class="container mx-auto p-8 flex flex-row relative">
        <div class="basis-1/4 z-10">
            <img class="w-full mb-2 rounded-lg" src="{{ asset('avatar.png') }}" alt="PHOTO">

            <span>Был в сети: сегодня</span>

            <a href="#" class="text-lg mb-1 mt-8 flex w-full hover:text-active">
                <span class="">Обсуждения</span>
                <span class="text-graphics ml-auto">832</span>
            </a>

            <a href="#" class="text-lg flex w-full hover:text-active">
                <span class="">Комментарии</span>
                <span class="text-graphics ml-auto">13k</span>
            </a>

        </div>
        <div class="basis-3/4 ml-12 border-l pl-12 border-slate-900/10 dark:border-slate-50/[0.06] z-10">
            <h1 class="text-3xl mb-6">USERNAME</h1>
            <div class="w-96 mb-6">
                <div class="w-full flex mb-1">
                    <span>На сайте с</span>
                    <span class="ml-auto">June, 2022</span>
                </div>
                <div class="w-full flex mb-1">
                    <span>Посещений</span>
                    <span class="ml-auto">4830</span>
                </div>
                <div class="w-full flex mb-1">
                    <span>Роли</span>
                    <span class="ml-auto">Комьюнити менеджер</span>
                </div>
            </div>
            <span>Игровой ранг: Золото</span>
            <img class="w-auto mb-6" src="{{ asset('gold.png') }}" alt="rank">
            <h2 class="text-xl">Достижения</h2>
            <div
                class="w-full p-6 mt-4 rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/10 supports-backdrop-blur:bg-white/95 flex flex-row flex-wrap">
                <img class="w-28 h-28" src="{{ asset('achievements/1year.webp') }}" title="1 year with us" alt="a">
                <img class="w-28 h-28" src="{{ asset('achievements/3years.webp') }}" title="3 years with us" alt="a">
                <img class="w-28 h-28" src="{{ asset('achievements/5years.webp') }}" title="5 years with us" alt="a">
                <img class="w-28 h-28" src="{{ asset('achievements/100likes.webp') }}" alt="a">
                <img class="w-28 h-28" src="{{ asset('achievements/100dislikes.webp') }}" alt="a">
                <img class="w-28 h-28" src="{{ asset('achievements/1000likes.webp') }}" alt="a">
                <img class="w-28 h-28" src="{{ asset('achievements/1000dislikes.webp') }}" alt="a">
                <img class="w-28 h-28" src="{{ asset('achievements/100dislikes.webp') }}" alt="a">
                <img class="w-28 h-28" src="{{ asset('achievements/1000likes.webp') }}" alt="a">
                <img class="w-28 h-28" src="{{ asset('achievements/1000dislikes.webp') }}" alt="a">
            </div>
        </div>
    </div>
@endsection
