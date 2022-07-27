<script setup>
import Button from '@/Components/Button.vue';
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/Guest.vue';
import Input from '@/Components/Input.vue';
import Label from '@/Components/Label.vue';
import ValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
    canRegister: Boolean,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Логин" />

        <ValidationErrors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <Label for="email" value="Email" />
                <Input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <Label for="password" value="Пароль" />
                <Input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-text">Запомнить меня</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <Link v-if="canRegister" :href="route('register')" class="text-sm text-active hover:text-activeLight">
                    Создать аккаунт
                </Link>

                    <Link v-if="canResetPassword" :href="route('password.request')" class="text-sm text-active hover:text-activeLight">
                        Забыли пароль?
                    </Link>
            </div>

            <Button class="w-full mt-4 justify-center" :class="{ 'opacity-75': form.processing }" :disabled="form.processing">
                Log in
            </Button>
        </form>
    </GuestLayout>
</template>
