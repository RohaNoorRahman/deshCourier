<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div> --}}



    <div id="header" class="dc-header-border border-b-2 py-2">
        <div class="container mx-auto">
            <div class="flex bg-white  items-center justify-between ">

                <div class="min-w-max">
                    <a href="{{ route('app') }}" class="flex items-center">

                        <img class="mr-4" src="{{ asset('assets/image') }}/logo-icon.svg"
                            alt=">{{ config('app.name') }}">

                        <h1 class="font-bold logo-heading">{{ config('app.name') }}</h1>
                    </a>
                </div>


                <div class="min-w-max flex items-center">
                    <div class="search-box pr-6 border-r border-gray-300">
                        <div class="fixedicon flex items-center relative">
                            <form action="">
                                <input class="border-0 px-4 py-2 bg-gray-200" type="text"
                                    placeholder="Searc By Anything">
                                <button></button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class=" h-full text-white inline-block px-4 py-2 absolute right-0  ">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </form>

                        </div>
                    </div>

                    <div class="ml-5 flex items-center space-x-4">
                        <a href="">
                            <img src="{{ asset('assets/image/Iconly/Light/notification.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img src="{{ asset('assets/image/Iconly/Light/profilepic.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shipment Body -->
<div class="container flex  mx-auto">  
    <div class="shipmentSidebar w-3/12 bg-white shadow-md px-6 py-4">
        <h1 class="text-lg font-bold mb-2 dc-heading-color uppercase">Menu</h1>

        <ul class=" px-2">
            
            <li>
                <a class="flex py-2" href="">
                    <div class="icon">
                        <img src="{{ asset('assets/image/Iconly/Light/Dashboard.png') }}" alt="">
                    </div>
                    <h3 class="dc-text-color font-semibold ml-2">Dashboard</h3>

                </a>
            </li>
            <li>
                <a class="flex py-2" href="">
                    <div class="icon">
                        <img src="{{ asset('assets/image/Iconly/Light/More.png') }}" alt="">
                    </div>
                    <h3 class="dc-text-color font-semibold ml-2">Shipments</h3>

                </a>
            </li>
            <li>
                <a class="flex py-2" href="">
                    <div class="icon">
                        <img src="{{ asset('assets/image/Iconly/Light/CreditCard.png') }}" alt="">
                    </div>
                    <h3 class="dc-text-color font-semibold ml-2">Payments</h3>

                </a>
            </li>
            <li >
                <a class="flex py-2" href="">
                    <div class="icon">
                        <img src="{{ asset('assets/image/Iconly/Light/Location.png') }}" alt="">
                    </div>
                    <h3 class="dc-text-color font-semibold ml-2">Location</h3>

                </a>
            </li>

        </ul>


        <h1 class="text-lg   font-bold mb-2 dc-heading-color mt-6 uppercase">Organisation</h1>

        <ul class=" px-2">
            
            <li>
                <a class="flex py-2" href="">
                    <div class="icon">
                        <img src="{{ asset('assets/image/Iconly/Light/truck (2).png') }}" alt="">
                    </div>
                    <h3 class="dc-text-color font-semibold ml-2">Employees</h3>

                </a>
            </li>
            <li>
                <a class="flex py-2" href="">
                    <div class="icon">
                        <img src="{{ asset('assets/image/Iconly/Light/truck (1).png') }}" alt="">
                    </div>
                    <h3 class="dc-text-color font-semibold ml-2">Vehicles</h3>

                </a>
            </li>


        </ul>

        <div class="sidebarBottom mt-6">
            <div class="bg-gray-200 py-4 rounded mb-4 pl-4">
                <a href="" class="flex items-center primaryColor  ">
                    <div class="min-w-max">
                        <img src="{{ asset('assets/image/Iconly/Light/Setting.png') }}" alt="">
                    </div>
                    <h3 class="dc-text-color font-semibold ml-4">Settings</h3>
                </a>
            </div>

            <div class="bg-gray-200 py-4 rounded mb-4 pl-4">
                <a href="" class="flex items-center primaryColor  ">
                    <div class="min-w-max">
                        <img src="{{ asset('assets/image/Iconly/Light/Login.png') }}" alt="">
                    </div>
                    <h3 class="dc-text-color font-semibold ml-4">Log Out</h3>
                </a>
            </div>



            <div class=" border-t-2 dc-header-border py-6">
                <div class="flex items-center">
                    <div class="min-w-max">
                        <img src="{{asset('assets/image/Iconly/Light/profilepic.png')}}" alt="">
                    </div>
                    <div class="ml-4">
                        <h1 class="font-bold text-lg ">Ratul Ahmed</h1>
                        <span class="dc-text-color font-semibold">Admin</span>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <div class="w-9/12 bg-gray-100 p-6">
    
        <div class="flex justify-between items-center py-2">
            <div class="min-w-max">
                <h1 class="font-bold text-lg">Shipments</h1>
                <p class="dc-text-color">109 Order Found</p>
            </div>

            <div class="min-w-max items-center flex mr-6">
                <h1 class="dc-text-color font-semibold mr-3">Sort By:-</h1>
                <select name="" id="" class="px-4 py-2 rounded">
                    <option value="">All Orders</option>
                </select>

                <select name="" id="" class="px-4 min-w-max py-2 mx-4 rounded">
                    <option value="">June</option>
                </select>

                <div class="flex items-center">
                    <a href="" class="px-4 flex text-lg rounded items-center py-2 dc-add-btn text-white">Add New 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                          </svg>
                          
                    </a>
                </div>
            </div>
        </div>


        <table class="table-auto tableCustom mt-7 w-full">
            <tr class="dc-add-btn text-white">
                <th class="px-4 py-2 text-left">Booking Id</th>
                <th class="px-4 py-2 text-left">Name</th>
                <th class="px-4 py-2 text-left">Address </th>
                <th class="px-4 py-2 text-left">Date</th>
                <th class="px-4 py-2 text-left">Hub</th>
                <th class="px-4 py-2 text-left">Status</th>
            </tr>
            <tr class="bg-white mb-4">
                <td class="px-4 py-2 dc-text-color font-medium">454575</td>
                <td class="px-4 py-2 dc-text-color font-medium">Ratul Ahmed</td>
                <td class="px-4 py-2 dc-text-color font-medium">Bheramara,Kustia</td>
                <td class="px-4 py-2 dc-text-color font-medium">12-11-2023</td>
                <td class="px-4 py-2 dc-text-color font-medium">nilkhet</td>
                <td class="px-4 py-2 dc-text-color flex items-center justify-between font-medium">
                    <span class="border border-green-600 text-green-600 px-3 py-1 rounded inline-block">Delivered</span>
                    <a href="" class="ml-2"><img src="{{asset('assets/image/Iconly/Light/3dot.png')}}" alt=""></a>
                </td>
            </tr>

            <tr class="bg-white mb-4">
                <td class="px-4 py-2 dc-text-color font-medium">454575</td>
                <td class="px-4 py-2 dc-text-color font-medium">Ratul Ahmed</td>
                <td class="px-4 py-2 dc-text-color font-medium">Bheramara,Kustia</td>
                <td class="px-4 py-2 dc-text-color font-medium">12-11-2023</td>
                <td class="px-4 py-2 dc-text-color font-medium">nilkhet</td>
                <td class="px-4 py-2 dc-text-color flex items-center justify-between font-medium">
                    <span class="border border-green-600 text-green-600 px-3 py-1 rounded inline-block">Delivered</span>
                    <a href="" class="ml-2"><img src="{{asset('assets/image/Iconly/Light/3dot.png')}}" alt=""></a>
                </td>
            </tr>

            <tr class="bg-white mb-4">
                <td class="px-4 py-2 dc-text-color font-medium">454575</td>
                <td class="px-4 py-2 dc-text-color font-medium">Ratul Ahmed</td>
                <td class="px-4 py-2 dc-text-color font-medium">Bheramara,Kustia</td>
                <td class="px-4 py-2 dc-text-color font-medium">12-11-2023</td>
                <td class="px-4 py-2 dc-text-color font-medium">nilkhet</td>
                <td class="px-4 py-2 dc-text-color flex items-center justify-between font-medium">
                    <span class="border border-green-600 text-green-600 px-3 py-1 rounded inline-block">Delivered</span>
                    <a href="" class="ml-2"><img src="{{asset('assets/image/Iconly/Light/3dot.png')}}" alt=""></a>
                </td>
            </tr>

            <tr class="bg-white mb-4">
                <td class="px-4 py-2 dc-text-color font-medium">454575</td>
                <td class="px-4 py-2 dc-text-color font-medium">Ratul Ahmed</td>
                <td class="px-4 py-2 dc-text-color font-medium">Bheramara,Kustia</td>
                <td class="px-4 py-2 dc-text-color font-medium">12-11-2023</td>
                <td class="px-4 py-2 dc-text-color font-medium">nilkhet</td>
                <td class="px-4 py-2 dc-text-color flex items-center justify-between font-medium">
                    <span class="border border-green-600 text-green-600 px-3 py-1 rounded inline-block">Delivered</span>
                    <a href="" class="ml-2"><img src="{{asset('assets/image/Iconly/Light/3dot.png')}}" alt=""></a>
                </td>
            </tr>

            <tr class="bg-white mb-4">
                <td class="px-4 py-2 dc-text-color font-medium">454575</td>
                <td class="px-4 py-2 dc-text-color font-medium">Ratul Ahmed</td>
                <td class="px-4 py-2 dc-text-color font-medium">Bheramara,Kustia</td>
                <td class="px-4 py-2 dc-text-color font-medium">12-11-2023</td>
                <td class="px-4 py-2 dc-text-color font-medium">nilkhet</td>
                <td class="px-4 py-2 dc-text-color flex items-center justify-between font-medium">
                    <span class="border border-green-600 text-green-600 px-3 py-1 rounded inline-block">Delivered</span>
                    <a href="" class="ml-2"><img src="{{asset('assets/image/Iconly/Light/3dot.png')}}" alt=""></a>
                </td>
            </tr>

            <tr class="bg-white mb-4">
                <td class="px-4 py-2 dc-text-color font-medium">454575</td>
                <td class="px-4 py-2 dc-text-color font-medium">Ratul Ahmed</td>
                <td class="px-4 py-2 dc-text-color font-medium">Bheramara,Kustia</td>
                <td class="px-4 py-2 dc-text-color font-medium">12-11-2023</td>
                <td class="px-4 py-2 dc-text-color font-medium">nilkhet</td>
                <td class="px-4 py-2 dc-text-color flex items-center justify-between font-medium">
                    <span class="border border-green-600 text-green-600 px-3 py-1 rounded inline-block">Delivered</span>
                    <a href="" class="ml-2"><img src="{{asset('assets/image/Iconly/Light/3dot.png')}}" alt=""></a>
                </td>
            </tr>

            <tr class="bg-white mb-4">
                <td class="px-4 py-2 dc-text-color font-medium">454575</td>
                <td class="px-4 py-2 dc-text-color font-medium">Ratul Ahmed</td>
                <td class="px-4 py-2 dc-text-color font-medium">Bheramara,Kustia</td>
                <td class="px-4 py-2 dc-text-color font-medium">12-11-2023</td>
                <td class="px-4 py-2 dc-text-color font-medium">nilkhet</td>
                <td class="px-4 py-2 dc-text-color flex items-center justify-between font-medium">
                    <span class="border border-green-600 text-green-600 px-3 py-1 rounded inline-block">Delivered</span>
                    <a href="" class="ml-2"><img src="{{asset('assets/image/Iconly/Light/3dot.png')}}" alt=""></a>
                </td>
            </tr>

            <tr class="bg-white">
                <td class="px-4 py-2 dc-text-color font-medium">454575</td>
                <td class="px-4 py-2 dc-text-color font-medium">Ratul Ahmed</td>
                <td class="px-4 py-2 dc-text-color font-medium">Bheramara,Kustia</td>
                <td class="px-4 py-2 dc-text-color font-medium">12-11-2023</td>
                <td class="px-4 py-2 dc-text-color font-medium">nilkhet</td>
                <td class="px-4 py-2 dc-text-color flex items-center justify-between font-medium">
                    <span class="border border-green-600 text-green-600 px-3 py-1 rounded inline-block">Delivered</span>
                    <a href="" class="ml-2"><img src="{{asset('assets/image/Iconly/Light/3dot.png')}}" alt=""></a>
                </td>
            </tr>
        </table>
    
    </div>

</div>








</body>

</html>
