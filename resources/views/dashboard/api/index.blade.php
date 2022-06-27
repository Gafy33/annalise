@extends('layouts.app')

@section('content')


            @if (session('status'))
            <div id="error" class="relative w-full flex justify-center items-center p-6 bg-[#0d5a0d] md:absolute md:top-20 md:right-12 md:w-72 md:z-[99] md:rounded-xl text-white duration-700 transform opacity-0 transition-all translate-y-6 ease-out" data-replace='{ "translate-y-6": "translate-y-0", "opacity-0": "opacity-100" }'>
              {{ session('status') }}
            </div>
            @endif

            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                  <h2 class="my-6 text-1xl font-semibold text-gray-500 dark:text-gray-200"> Api </h2>
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-sdw dark:bg-gray-800">
                        <form class="w-full flex flex-wrap" action="{{route('api.dashboard-api-create')}}" method="post">
                            @csrf
                            <div class="w-4/5 flex justify-center items-center">
                                <input
                                    type="text"
                                    class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                    name="name"
                                    placeholder="Clé api"
                                />
                            </div>
                            <div class="w-1/5 flex justify-center items-center">
                                <button
                                class="bg-extra text-white active:bg-main hover:bg-main font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                type="submit"
                                >
                                    Ajouter
                                </button>
                            </div>
                        </form>
                    </div>

                  <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <h2
                        class="my-6 text-1xl font-semibold text-gray-500 dark:text-gray-200"
                        >
                        Listes Api
                      </h2>

                      <div class="flex flex-wrap">
                        <div class="w-full lg:w-11/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            >
                              Clé Api
                            </label>
                          </div>
                        </div>
                        <div class="w-full lg:w-1/12 px-4">
                            <div class="relative w-full mb-3  flex justify-center items-center">
                              <label
                                class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              >
                                Mod/Sup
                              </label>
                            </div>
                          </div>
                      </div>


                      <!-- liste user --> 
                      <!-- card -->
                      @foreach ($liste_api as $liste_apis)    
                        <div class="flex flex-wrap rounded-lg shadow-sdw py-3 mb-6 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150">
                            <div class="w-full lg:w-11/12 px-4 flex items-center">
                                <div class="relative w-full flex items-center">
                                    {{$liste_apis->name}}
                                </div>
                            </div>
                            <div class="w-full lg:w-1/12 px-4 ">
                                <div class="relative w-full h-full flex justify-center items-center ">
                                      <a href="{{ route('api.dashboard-api-show', ['id' => $liste_apis->id ])}}">
                                        <button class="px-1 py-1 rounded-lg bg-white fill-[#CB7426] hover:fill-main">
                                            <svg 
                                                class="w-5 h-5 transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500" 
                                                stroke="currentColor" 
                                                xmlns="http://www.w3.org/2000/svg" 
                                                viewBox="0 0 640 512">
                                                <path 
                                                    stroke-linecap="round" 
                                                    stroke-linejoin="round" 
                                                    stroke-width="2" 
                                                    d="M223.1 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 223.1 256zM274.7 304H173.3C77.61 304 0 381.7 0 477.4C0 496.5 15.52 512 34.66 512h286.4c-1.246-5.531-1.43-11.31-.2832-17.04l14.28-71.41c1.943-9.723 6.676-18.56 13.68-25.56l45.72-45.72C363.3 322.4 321.2 304 274.7 304zM371.4 420.6c-2.514 2.512-4.227 5.715-4.924 9.203l-14.28 71.41c-1.258 6.289 4.293 11.84 10.59 10.59l71.42-14.29c3.482-.6992 6.682-2.406 9.195-4.922l125.3-125.3l-72.01-72.01L371.4 420.6zM629.5 255.7l-21.1-21.11c-14.06-14.06-36.85-14.06-50.91 0l-38.13 38.14l72.01 72.01l38.13-38.13C643.5 292.5 643.5 269.7 629.5 255.7z"/>
                                            </svg>
                                        </button>
                                    </a>

                                    <a onclick="return confirmdelete();" href="{{route('api.dashboard-api-delete', ['id' => $liste_apis->id])}}">
                                        <button class="px-1 py-1 rounded-lg fill-[#ff0000] hover:fill-main">
                                            <svg 
                                                class="w-5 h-5 transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500" 
                                                stroke="currentColor" 
                                                xmlns="http://www.w3.org/2000/svg" 
                                                viewBox="0 0 448 512">
                                                <path 
                                                    stroke-linecap="round" 
                                                    stroke-linejoin="round" 
                                                    stroke-width="2" 
                                                    d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"/>
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                      @endforeach

                      <!--end car -->


                    </div>
                  </div>
                </div>
              </main>
@endsection

@section('script')
<script>

    function confirmdelete() {
      if(!confirm("Êtes-vous sûr de vouloir le supprimer ?"))
      event.preventDefault();
    }

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
