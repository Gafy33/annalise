@extends('layouts.app')

@section('content')

            @if (session('status'))
            <div id="error" class="relative w-full flex justify-center items-center p-6 bg-[#0d5a0d] md:absolute md:top-20 md:right-12 md:w-72 md:z-[99] md:rounded-xl text-white duration-700 transform opacity-0 transition-all translate-y-6 ease-out" data-replace='{ "translate-y-6": "translate-y-0", "opacity-0": "opacity-100" }'>
              {{ session('status') }}
            </div>
            @endif

            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                  <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                  >
                    Modification Poste
                  </h2>

                  
                  <!-- Cards -->
                  <div class="grid gap-6 mb-8 md:grid-cols-1 xl:grid-cols-1">
                    <!-- Card -->
                    <div
                      class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                      <div
                        class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                      >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                          ></path>
                        </svg>
                      </div>
                      <div>
                        <p
                          class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                        >
                          Poste
                        </p>
                        <p
                          class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                        >
                          {{ $poste->name }}
                        </p>
                      </div>
                    </div>
                    <!-- Card -->
                  </div>
                    

                  <div class="relative flex flex-col px-10 pb-8 flex-auto lg:px-10 lg:flex-row">
                    <form method="POST" action="{{ route('poste.dashboard-poste-edit-post', ['id' => $poste->id ])}}" class="w-full">
                       @csrf
                      <h6
                        class="text-blueGray-900 text-sm mt-6 mb-6 font-bold uppercase"
                      >
                        Informations du poste
                      </h6>
                      <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Nom du poste
                            </label>
                            <input
                              type="text"
                              class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                              value="{{$poste->name}}"
                              name="name"
                            />
                          </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Service associ??
                            </label>
                            <select name="id_service" 
                            class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150">
                              <option value="{{$poste->service_id}}"> {{$poste->services_name}}</option>
                              @foreach ($liste_service as $liste_services)
                                  <option value="{{$liste_services->id}}"> {{$liste_services->name}}</option>
                              @endforeach
                          </select>
                          </div>
                        </div>
                        </div>
                      </div>
                      <div class="flex flex-wrap">
                        <div class="w-full lg:w-12/12 px-12">
                          <div class="relative w-full flex justify-center pt-6">
                            <button
                            class="bg-extra text-white active:bg-main hover:bg-main font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="submit"
                            >
                                Modifier
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
              </main>
@endsection

@section('script')
<script>

    function confirmdelete() {
      if(!confirm("??tes-vous s??r de vouloir le supprimer ?"))
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
