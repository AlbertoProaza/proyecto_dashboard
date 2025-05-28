<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
const sidebarOpen = ref(false);
</script>

<template>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="hidden md:flex md:w-64 md:flex-col">
            <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-white border-r border-gray-200">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0 px-4">
                    <Link :href="route('dashboard')">
                        <ApplicationLogo class="block h-8 w-auto fill-current text-gray-800" />
                    </Link>
                    <span class="ml-2 text-xl font-semibold text-gray-800">Dashboard</span>
                </div>

                <!-- Navigation Links -->
                <nav class="mt-8 flex-1 px-2 space-y-1">
                    <!-- Dashboard -->
                    <Link :href="route('dashboard')"
                          :class="[
                              route().current('dashboard')
                                  ? 'bg-indigo-100 border-r-4 border-indigo-500 text-indigo-700'
                                  : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                              'group flex items-center px-3 py-2 text-sm font-medium rounded-l-md transition-colors duration-200'
                          ]">
                        <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v14l-6-3-6 3V5z"/>
                        </svg>
                        Dashboard
                    </Link>

                    <!-- Usuarios -->
                    <Link href="/users"
                          :class="[
                              route().current('users*')
                                  ? 'bg-indigo-100 border-r-4 border-indigo-500 text-indigo-700'
                                  : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                              'group flex items-center px-3 py-2 text-sm font-medium rounded-l-md transition-colors duration-200'
                          ]">
                        <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-.5a4 4 0 110 5.292"/>
                        </svg>
                        Usuarios
                    </Link>

                    <!-- Roles y Permisos -->
                    <Link href="/roles"
                          :class="[
                              route().current('roles*')
                                  ? 'bg-indigo-100 border-r-4 border-indigo-500 text-indigo-700'
                                  : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                              'group flex items-center px-3 py-2 text-sm font-medium rounded-l-md transition-colors duration-200'
                          ]">
                        <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        Roles y Permisos
                    </Link>

                    <!-- Publicaciones -->
                    <Link href="/posts"
                          :class="[
                              route().current('posts*')
                                  ? 'bg-indigo-100 border-r-4 border-indigo-500 text-indigo-700'
                                  : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                              'group flex items-center px-3 py-2 text-sm font-medium rounded-l-md transition-colors duration-200'
                          ]">
                        <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                        Publicaciones
                    </Link>
                </nav>
            </div>
        </div>

        <!-- Mobile sidebar -->
        <div v-show="sidebarOpen" class="md:hidden fixed inset-0 z-40 flex">
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="sidebarOpen = false"></div>
            <div class="relative flex-1 flex flex-col max-w-xs w-full bg-white">
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button @click="sidebarOpen = false" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <ApplicationLogo class="h-8 w-auto" />
                        <span class="ml-2 text-xl font-semibold text-gray-800">Dashboard</span>
                    </div>
                    <nav class="mt-8 px-2 space-y-1">
                        <!-- Mobile navigation links (same as desktop) -->
                        <Link :href="route('dashboard')" @click="sidebarOpen = false"
                              :class="[
                                  route().current('dashboard')
                                      ? 'bg-indigo-100 text-indigo-700'
                                      : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                                  'group flex items-center px-3 py-2 text-sm font-medium rounded-md'
                              ]">
                            <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"/>
                            </svg>
                            Dashboard
                        </Link>
                        <Link href="/users" @click="sidebarOpen = false"
                              :class="[
                                  route().current('users*')
                                      ? 'bg-indigo-100 text-indigo-700'
                                      : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                                  'group flex items-center px-3 py-2 text-sm font-medium rounded-md'
                              ]">
                            <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-.5a4 4 0 110 5.292"/>
                            </svg>
                            Usuarios
                        </Link>
                        <Link href="/roles" @click="sidebarOpen = false"
                              :class="[
                                  route().current('roles*')
                                      ? 'bg-indigo-100 text-indigo-700'
                                      : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                                  'group flex items-center px-3 py-2 text-sm font-medium rounded-md'
                              ]">
                            <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            Roles y Permisos
                        </Link>
                        <Link href="/posts" @click="sidebarOpen = false"
                              :class="[
                                  route().current('posts*')
                                      ? 'bg-indigo-100 text-indigo-700'
                                      : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                                  'group flex items-center px-3 py-2 text-sm font-medium rounded-md'
                              ]">
                            <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                            Publicaciones
                        </Link>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top navigation -->
            <nav class="bg-white border-b border-gray-200 shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <!-- Mobile menu button -->
                        <div class="flex items-center md:hidden">
                            <button @click="sidebarOpen = true" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>

                        <!-- Right side -->
                        <div class="flex items-center ml-auto">
                            <!-- Settings Dropdown -->
                            <div class="relative ml-3">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>
                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')">
                                            Perfil
                                        </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Cerrar Sesión
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow-sm" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>
