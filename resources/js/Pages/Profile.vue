<template>
    <Head :title="title"/>
    <h1 class="hidden">{{ title }}</h1>
    <div class="fixed top-0 right-0 left-0 bottom-0 opacity-40 blur-md bg-cover bg-center bg-no-repeat"
         style="background-image: url('{{asset('backgrounds/bg-tf-graves.jpg')}}')">
    </div>
    <button
        class="absolute top-20 right-4 z-40 text-slate-400 hover:text-slate-500 dark:hover:text-slate-300 p-4 rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
             stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
        </svg>
    </button>
    <button
        class="absolute top-40 right-4 z-40 text-slate-400 hover:text-slate-500 dark:hover:text-slate-300 p-4 rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
    </button>
    <div class="container mx-auto p-8 flex flex-row relative">
        <div class="basis-1/4 z-10">
            <img class="w-full mb-2 rounded-lg" src="" alt="PHOTO">

            <span class="text-slate-400">Был в сети: сегодня</span>

            <a href="#" class="text-lg mb-1 mt-8 flex w-full hover:text-active">
                <span class="">Обсуждения</span>
                <span class="text-active ml-auto">832</span>
            </a>

            <a href="#" class="text-lg flex w-full hover:text-active">
                <span class="">Комментарии</span>
                <span class="text-active ml-auto">13k</span>
            </a>

        </div>
        <div class="basis-3/4 ml-12 border-l pl-12 border-slate-900/10 dark:border-slate-50/[0.06] z-10">
            <h1 class="text-3xl mb-6">{{ $page.props.auth.user.name }}</h1>
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
            <img class="w-auto mb-6" src="@/assets/gold.png" alt="rank">
            <h2 class="text-xl">Достижения</h2>
            <div
                class="w-full p-3 mt-4 rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 flex flex-row flex-wrap">
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
</template>

<script>
import Layout from "@/Layouts/Layout.vue";
import {Head} from '@inertiajs/inertia-vue3'

export default {
    name: "Profile",
    props: {
        title: String,
    },
    layout: Layout,
    components: {
        Head
    }
}
</script>
