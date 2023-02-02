<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="flex border-b dc-header-border-color items-center p-4">
            <div class="min-w-max">
                <a href="{{route('home')}}" class="flex items-center">
                
                    <img class="mr-4" src="{{asset('assets/image')}}/logo-icon.svg" alt=">{{config('app.name')}}">
                
                    <h1 class="font-bold logo-heading">{{config('app.name')}}</h1>
                </a>
            </div>

            <div class="w-full flex dc-nav-links justify-end">
                <a href="">Contact</a>
                <a href="">Help</a>
                <a href="">Website</a>
                <a class="primaryColor font-bold" href="">LogIn</a>
            </div>
        </div>




        <div class="flex ">
            <div class="flex-1">
                <img src="{{asset('assets/image')}}/loginImage.png" loading="lazy" alt="">
            </div>

            <div class="flex-1 loginPageBg py-10">
                <div class="mt-10 topspace">
                    <div class="dc-login-box bg-white shadow-md p-10">
                        <h1 class="mb-1 font-semibold">Welcome Back!</h1>
                        <p class="dc-text-color">Log in your account & Manage <br/> your system</p>
    
                        <form class="pt-6" action="">
                            <div class="border-b-2 flex items-center mb-8 dc-header-border-color">
                                <div class="mr-2 min-w-max">
                                    <img src="{{asset('assets/image/Iconly/Light')}}/profile.svg" loading="lazy" alt="">
                                </div>
                                <input type="email" class="w-full border-0 cd-text-color p-3 focus:outline-none" placeholder="Email">
                            </div>
    
                            <div class="border-b-2 flex items-center dc-header-border-color mb-4">
                                <div class="mr-2 min-w-max">
                                    <img src="{{asset('assets/image/Iconly/Light')}}/lock.svg" loading="lazy" alt="">
                                </div>
                                <input type="password" class="w-full border-0 cd-text-color p-3" placeholder="Password">
    
                                <div class="mr-2 min-w-max cursor-pointer">
                                    <img src="{{asset('assets/image/Iconly/Light')}}/Hide.svg" loading="lazy" alt="">
                                </div>
                            </div>
                            <div class="mb-6 flex justify-between">
                                <a href="" class="italic dc-text-color">Forgotten Password.?</a>
                                
                            </div>

                            <div class="mb-6 flex justify-between">
                                <span class="dc-text-color">Save Password</span>

                                <input type="checkbox" name="" id="">
                            </div>
                            
                                <button class="dc-btn">LOG IN</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
