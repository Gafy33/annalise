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
                        <form class="w-full flex flex-wrap" action="{{route('api.dashboard-api-edit', ['id' => $api->id ])}}" method="post">
                            @csrf
                            <div class="w-4/5 flex justify-center items-center">
                                <input
                                    type="text"
                                    class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                    name="name"
                                    value="{{$api->name}}"
                                />
                            </div>
                            <div class="w-1/5 flex justify-center items-center">
                                <button
                                class="bg-extra text-white active:bg-main hover:bg-main font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                type="submit"
                                >
                                    Modifier
                                </button>
                            </div>
                        </form>
                    </div>

        
                </div>
              </main>
@endsection