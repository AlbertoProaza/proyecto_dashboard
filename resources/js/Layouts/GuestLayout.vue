<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex">
        <!-- Lado izquierdo - Sección de color/branding -->
        <div class="hidden lg:flex lg:w-1/2 bg-purple-600 relative">
            <!-- Contenido principal del lado izquierdo -->
            <div class="flex flex-col justify-center items-center w-full px-8 text-white">
                <div class="max-w-md text-center">
                    <!-- Logo/Icono grande -->
                    <div class="mb-8">
                        <div class="w-20 h-20 mx-auto bg-white/10 rounded-full flex items-center justify-center">
                            <ApplicationLogo class="h-12 w-12 fill-current text-white" />
                        </div>
                    </div>

                    <!-- Título principal -->
                    <h1 class="text-4xl font-bold mb-6 leading-tight">
                        Bienvenido a tu
                        <span class="text-yellow-300">Dashboard</span>
                    </h1>

                    <!-- Descripción -->
                    <p class="text-lg text-purple-100 mb-8 leading-relaxed">
                        Gestiona usuarios, roles, permisos y publicaciones desde una plataforma intuitiva y moderna.
                    </p>
                </div>
            </div>
        </div>

        <!-- Lado derecho - Formulario -->
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center px-6 py-8 bg-gray-50">
            <div class="w-full max-w-md">
                <!-- Logo para móviles (oculto en desktop) -->
                <div class="lg:hidden text-center mb-8">
                    <Link href="/" class="inline-block">
                        <ApplicationLogo class="h-16 w-16 fill-current text-indigo-600 mx-auto mb-4" />
                    </Link>
                    <h2 class="text-2xl font-bold text-gray-900">Dashboard</h2>
                </div>

                <!-- Card del formulario -->
                <div class="bg-white shadow-xl rounded-2xl px-8 py-10 border border-gray-100">
                    <slot />
                </div>

                <!-- Footer -->
                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-600">
                        © 2024 Dashboard. Todos los derechos reservados.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
