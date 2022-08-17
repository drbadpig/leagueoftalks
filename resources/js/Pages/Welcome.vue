<script setup>
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome" />

    <div class="flex items-center justify-center h-[240px] bg-cover bg-center" style="background-image: url('backgrounds/star-guaridan-main-bg.jpg')">
    </div>
    <div class="container mx-auto p-8">
        <h1 class="hidden">leagueoftalks forum</h1>

        <div class="w-full">

            <div class="w-8/12">
                <div class="mb-12">
                    <h2 class="text-3xl uppercase mb-6">Новости и обновления</h2>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Новости</a>
                            <p>Новости League of Legends и leagueoftalks</p>
                        </div>
                        <span class="text-center mx-3"><span>490</span> <br>постов</span>
                        <span class="text-center mx-3"><span>1.3k</span> <br>комментариев</span>
                    </div>
                </div>

                <div class="mb-12">
                    <h2 class="text-3xl uppercase mb-6">Сообщество</h2>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Поделись своей работой</a>
                            <p>Идеи, косплеи, музыка, арты... всё, что душе угодно!</p>
                        </div>
                        <span class="text-center mx-3"><span>8k</span> <br>постов</span>
                        <span class="text-center mx-3"><span>123m</span> <br>комментариев</span>
                    </div>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Гиды</a>
                            <p>Гиды, созданные сообществом</p>
                        </div>
                        <span class="text-center mx-3"><span>445</span> <br>постов</span>
                        <span class="text-center mx-3"><span>971</span> <br>комментариев</span>
                    </div>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Поиск игроков</a>
                            <p>Найди твоего игрового друга!</p>
                        </div>
                        <span class="text-center mx-3"><span>617</span> <br>постов</span>
                        <span class="text-center mx-3"><span>1.4k</span> <br>комментариев</span>
                    </div>
                </div>

                <div class="mb-12">
                    <h2 class="text-3xl uppercase mb-6">Шаблон</h2>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Поделись своей работой</a>
                            <p>Идеи, косплеи, музыка, арты... всё, что душе угодно!</p>
                        </div>
                        <span class="text-center mx-3"><span>8k</span> <br>постов</span>
                        <span class="text-center mx-3"><span>123m</span> <br>комментариев</span>
                    </div>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Гиды</a>
                            <p>Гиды, созданные сообществом</p>
                        </div>
                        <span class="text-center mx-3"><span>445</span> <br>постов</span>
                        <span class="text-center mx-3"><span>971</span> <br>комментариев</span>
                    </div>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Поиск игроков</a>
                            <p>Найди твоего игрового друга!</p>
                        </div>
                        <span class="text-center mx-3"><span>617</span> <br>постов</span>
                        <span class="text-center mx-3"><span>1.4k</span> <br>комментариев</span>
                    </div>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Поделись своей работой</a>
                            <p>Идеи, косплеи, музыка, арты... всё, что душе угодно!</p>
                        </div>
                        <span class="text-center mx-3"><span>8k</span> <br>постов</span>
                        <span class="text-center mx-3"><span>123m</span> <br>комментариев</span>
                    </div>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Гиды</a>
                            <p>Гиды, созданные сообществом</p>
                        </div>
                        <span class="text-center mx-3"><span>445</span> <br>постов</span>
                        <span class="text-center mx-3"><span>971</span> <br>комментариев</span>
                    </div>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Поиск игроков</a>
                            <p>Найди твоего игрового друга!</p>
                        </div>
                        <span class="text-center mx-3"><span>617</span> <br>постов</span>
                        <span class="text-center mx-3"><span>1.4k</span> <br>комментариев</span>
                    </div>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Поделись своей работой</a>
                            <p>Идеи, косплеи, музыка, арты... всё, что душе угодно!</p>
                        </div>
                        <span class="text-center mx-3"><span>8k</span> <br>постов</span>
                        <span class="text-center mx-3"><span>123m</span> <br>комментариев</span>
                    </div>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Гиды</a>
                            <p>Гиды, созданные сообществом</p>
                        </div>
                        <span class="text-center mx-3"><span>445</span> <br>постов</span>
                        <span class="text-center mx-3"><span>971</span> <br>комментариев</span>
                    </div>
                    <div
                        class="flex rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 p-3 mb-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                        <div class="flex-auto">
                            <a href="#" class="uppercase text-lg hover:text-active">Поиск игроков</a>
                            <p>Найди твоего игрового друга!</p>
                        </div>
                        <span class="text-center mx-3"><span>617</span> <br>постов</span>
                        <span class="text-center mx-3"><span>1.4k</span> <br>комментариев</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import Layout from "@/Layouts/Layout.vue";
import {Head} from '@inertiajs/inertia-vue3'

export default {
    name: "Welcome",
    props: {
        title: String,
    },
    layout: Layout,
    components: {
        Head
    }
}
</script>
