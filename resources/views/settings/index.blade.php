@extends('layouts.app')

@section('content')


<div class="flex px-8 mx-auto my-6 w-9/12 xl:px-5">

    <!-- Left Settings Menu -->
    <div class="w-16 mr-6 md:w-1/5">

        <div class="relative flex flex-col items-start justify-center w-full bg-white border rounded-lg border-gray-150">

            <a href="{{route('dashboard.dashboard-accueil')}}" class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 text-gray-600 transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 fill-gray-400 transition duration-150 ease-in-out group-hover:fill-gray-500 group-focus:fill-gray-500" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"/></svg>
                <span class="hidden truncate md:inline-block">Retour dashboard</span>
                <span class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full"></span>
            </a>
        </div>


        <div class="relative flex flex-col items-start justify-center w-full py-6 mt-6 bg-white border rounded-lg border-gray-150">
            <h3 class="hidden px-6 pb-3 text-xs font-semibold leading-4 tracking-wider text-gray-500 uppercase md:block">Configuration</h3>

            <a href="{{route('settings.dashboard-profile')}}" class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if(Route::is('settings.dashboard-profile')){{ 'text-gray-900' }}@else{{ 'text-gray-600' }}@endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if(Route::is('settings.dashboard-profile')){{ 'text-gray-500' }}@else{{ 'text-gray-400' }}@endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                <span class="hidden truncate md:inline-block">Profile</span>
                <span class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if(Route::is('settings.dashboard-profile')){{ 'bg-extra h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }}@endif "></span>
            </a>
            <a href="{{route('settings.dashboard-profile-password')}}" class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5  @if(Route::is('settings.dashboard-profile-password')){{ 'text-gray-900' }}@else{{ 'text-gray-600' }}@endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if(Route::is('settings.dashboard-profile-password')){{ 'text-gray-500' }}@else{{ 'text-gray-400' }}@endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                <span class="hidden truncate md:inline-block">Sécurité</span>
                <span class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if(Route::is('settings.dashboard-profile-password')){{ 'bg-extra h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }}@endif "></span>
            </a>
            <a href="#" class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5  @if(1 == 0){{ 'text-gray-900' }}@else{{ 'text-gray-600' }}@endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if(1 == 0){{ 'fill-gray-500' }}@else{{ 'fill-gray-400' }}@endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500" stroke="currentColor" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M256-.0078C260.7-.0081 265.2 1.008 269.4 2.913L457.7 82.79C479.7 92.12 496.2 113.8 496 139.1C495.5 239.2 454.7 420.7 282.4 503.2C265.7 511.1 246.3 511.1 229.6 503.2C57.25 420.7 16.49 239.2 15.1 139.1C15.87 113.8 32.32 92.12 54.3 82.79L242.7 2.913C246.8 1.008 251.4-.0081 256-.0078V-.0078z"/></svg>
                <span class="hidden truncate md:inline-block">Authentification multifacteur</span>
                <span class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if(1 == 0){{ 'bg-extra h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }}@endif "></span>
            </a>
            <a href="#" class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5  @if(1 == 0){{ 'text-gray-900' }}@else{{ 'text-gray-600' }}@endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if(1 == 0){{ 'fill-gray-500' }}@else{{ 'fill-gray-400' }}@endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500" stroke="currentColor" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M495.9 166.6C499.2 175.2 496.4 184.9 489.6 191.2L446.3 230.6C447.4 238.9 448 247.4 448 256C448 264.6 447.4 273.1 446.3 281.4L489.6 320.8C496.4 327.1 499.2 336.8 495.9 345.4C491.5 357.3 486.2 368.8 480.2 379.7L475.5 387.8C468.9 398.8 461.5 409.2 453.4 419.1C447.4 426.2 437.7 428.7 428.9 425.9L373.2 408.1C359.8 418.4 344.1 427 329.2 433.6L316.7 490.7C314.7 499.7 307.7 506.1 298.5 508.5C284.7 510.8 270.5 512 255.1 512C241.5 512 227.3 510.8 213.5 508.5C204.3 506.1 197.3 499.7 195.3 490.7L182.8 433.6C167 427 152.2 418.4 138.8 408.1L83.14 425.9C74.3 428.7 64.55 426.2 58.63 419.1C50.52 409.2 43.12 398.8 36.52 387.8L31.84 379.7C25.77 368.8 20.49 357.3 16.06 345.4C12.82 336.8 15.55 327.1 22.41 320.8L65.67 281.4C64.57 273.1 64 264.6 64 256C64 247.4 64.57 238.9 65.67 230.6L22.41 191.2C15.55 184.9 12.82 175.3 16.06 166.6C20.49 154.7 25.78 143.2 31.84 132.3L36.51 124.2C43.12 113.2 50.52 102.8 58.63 92.95C64.55 85.8 74.3 83.32 83.14 86.14L138.8 103.9C152.2 93.56 167 84.96 182.8 78.43L195.3 21.33C197.3 12.25 204.3 5.04 213.5 3.51C227.3 1.201 241.5 0 256 0C270.5 0 284.7 1.201 298.5 3.51C307.7 5.04 314.7 12.25 316.7 21.33L329.2 78.43C344.1 84.96 359.8 93.56 373.2 103.9L428.9 86.14C437.7 83.32 447.4 85.8 453.4 92.95C461.5 102.8 468.9 113.2 475.5 124.2L480.2 132.3C486.2 143.2 491.5 154.7 495.9 166.6V166.6zM256 336C300.2 336 336 300.2 336 255.1C336 211.8 300.2 175.1 256 175.1C211.8 175.1 176 211.8 176 255.1C176 300.2 211.8 336 256 336z"/></svg>
                <span class="hidden truncate md:inline-block">Paramètres</span>
                <span class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if(1 == 0){{ 'bg-extra h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }}@endif "></span>
            </a>
        </div>

        <div class="relative flex flex-col items-start justify-center w-full py-6 mt-6 bg-white border rounded-lg border-gray-150">
            <h3 class="hidden px-6 pb-3 text-xs font-semibold leading-4 tracking-wider text-gray-500 uppercase md:block">Billing</h3>

            <a href="#" class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5  transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1  transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                <span class="hidden truncate md:inline-block">Plans</span>
                <span class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full "></span>
            </a>
        </div>


        <div class="relative flex flex-col items-start justify-center w-full py-6 mt-6 bg-white border rounded-lg border-gray-150">
            <h3 class="hidden px-6 pb-3 text-xs font-semibold leading-4 tracking-wider text-gray-500 uppercase md:block">Delete</h3>

            <a href="{{route('settings.dashboard-profile-delete')}}" class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5  transition duration-150 ease-in-out rounded-md group @if(Route::is('settings.dashboard-profile-delete')){{ 'text-gray-900' }}@else{{ 'text-gray-600' }}@endif hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 fill-[#ff0000] transition duration-150 ease-in-out" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"/></svg><span class="hidden truncate md:inline-block">Supprimer le compte</span>
                <span class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full "></span>
                <span class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if(Route::is('settings.dashboard-profile-delete')){{ 'bg-extra h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }}@endif "></span>
            </a>
        </div>
    </div>
    <!-- End Settings Menu -->

    <div class="w-full h-min flex flex-col bg-white border rounded-lg md:w-4/5 border-gray-150 mb-6">
        <div class="flex flex-wrap items-center justify-between border-b border-gray-200 sm:flex-no-wrap">
            <div class="relative p-6">
                <h3 class="flex text-lg font-medium leading-6 text-gray-600">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    {{$title_section}}
                </h3>
            </div>
        </div>
        <div class="uk-card-body">
            @include('settings.partials.' . $section)
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function(){
        setTimeout(function(){
            var replacers = document.querySelectorAll('[data-replace]');
            for(var i=0; i<replacers.length; i++){
                console.log('hit here2');
                let replaceClasses = JSON.parse(replacers[i].dataset.replace.replace(/'/g, '"'));
                Object.keys(replaceClasses).forEach(function(key) {
                    replacers[i].classList.remove(key);
                    replacers[i].classList.add(replaceClasses[key]);
                });
            }
        }, 1);
        });

        var myVar = setInterval(myTimer, 4000);
        function myTimer() {
            var div = document.getElementById("error");
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 1000);
        }
    </script>
@endsection