<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-primary">
        <div>
            <Link :href="route('home')">
                <ApplicationLogo class="w-20 h-20 fill-current" />
            </Link>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg backdrop-blur border border-slate-900/10 dark:border-slate-50/[0.06] bg-black/20 supports-backdrop-blur:bg-white/95 text-text">
            <slot />
        </div>
    </div>
</template>
