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
                    Ajouter un service
                  </h2>
                    

                  <div class="relative flex flex-col px-10 pb-8 flex-auto lg:px-10 lg:flex-row">
                    <form method="POST" action="{{ route('service.dashboard-service-create-post')}}" class="w-full">
                       @csrf
                      <h6
                        class="text-blueGray-900 text-sm mt-6 mb-6 font-bold uppercase"
                      >
                        Informations du service
                      </h6>
                      <div class="flex flex-wrap">
                        <div class="w-full lg:w-12/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Nom du service
                            </label>
                            <input
                              type="text"
                              class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                              name="name"
                            />
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
                                Ajouter
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
