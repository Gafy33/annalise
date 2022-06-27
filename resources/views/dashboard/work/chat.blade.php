@extends('layouts.app')

@section('content')

    <div class="relative my-6 mx-12 h-full">
        <div class="px-4 bg-white dark:bg-gray-800 rounded-xl flex flex-wrap justify-center items-center h-[7.5%]">
            <div class="w-3/12 flex flex-row">
                <p class="mr-2">Travail à distance <p>
                    <label class="toggle">
                        <input class="toggle__input cursor-pointer" type="checkbox" name="toggle" role="switch">
                        <span class="toggle__segment cursor-pointer"></span>
                        <span class="toggle__segment cursor-pointer"></span>
                        <span class="toggle__segment cursor-pointer"></span>
                        <span class="toggle__segment cursor-pointer"></span>
                        <span class="toggle__segment cursor-pointer"></span>
                        <span class="toggle__segment cursor-pointer"></span>
                        <span class="toggle__segment cursor-pointer"></span>
                        <span class="toggle__segment cursor-pointer"></span>
                        <span class="toggle__segment cursor-pointer"></span>
                        <span class="toggle__segment cursor-pointer"></span>
                        <span class="toggle__sr">Power</span>
                    </label>
            </div>
            <div class="w-9/12 flex flex-wrap items-center">
                <div class="w-2/12 flex justify-center items-center">
                    <p>Statut :</p>
                </div>
                <div class="w-8/12 ml-4 grid grid-cols-5 grid-flow-col gap-4">
                    <button class="rounded-xl px-3 py-2 text-sm border-2 border-green-500 bg-gray-100 text-green-500 hover:bg-green-200 font-bold">En ligne</button>
                    <button class="rounded-xl px-3 py-2 text-sm border bg-gray-100 text-red-600 font-bold hover:bg-red-200">Travail</button>
                    <button class="rounded-xl px-3 py-2 text-sm border bg-gray-100 text-orange-400 font-bold hover:bg-orange-200">Pause déjeuner</button>
                    <button class="rounded-xl px-3 py-2 text-sm border bg-gray-100 text-orange-400 font-bold hover:bg-orange-200">Pause</button>
                    <button class="rounded-xl px-3 py-2 text-sm border bg-gray-100 text-red-600 font-bold hover:bg-red-200">Occupé</button>
                </div>
            </div>
        </div>

        <div class="mt-6 dark:bg-gray-800 rounded-xl flex flex-wrap h-full h-[90%]">
            <div class="w-3/12 flex flex-col px-2">
                <p class="px-2 py-4 text-sm font-bold">Conversation récente</p>
                <div class="relative flex flex-col rounded-xl bg-white shadow-sdw h-full">
                    <div class="flex flex-row py-4 rounded-t-xl cursor-pointer hover:font-bold hover:bg-gray-200 ease-out duration-150">
                        <div class="w-1/5 flex justify-center items-center"><div class="w-2 h-2 rounded-full bg-green-500"></div></div>
                        <div class="w-3/5 flex items-center text-xs">Armand HOUPIN</div>
                    </div>
                    <div class="group flex flex-row py-4 cursor-pointer hover:font-bold hover:bg-gray-200 ease-out duration-150 ">
                        <div class="w-1/5 flex justify-center items-center"><div class="w-2 h-2 rounded-full bg-gray-200 group-hover:bg-gray-500"></div></div>
                        <div class="w-3/5 flex items-center text-xs">Armand HOUPIN</div>
                    </div>
                </div>
            </div>
            <div class="w-3/12 flex flex-col px-2">
                <p class="px-2 py-4 text-sm font-bold">En ligne</p>
                <div class="relative flex flex-col rounded-xl bg-white shadow-sdw h-full">
                    <div class="flex flex-row py-4 rounded-t-xl cursor-pointer hover:font-bold hover:bg-gray-200 ease-out duration-1500">
                        <div class="w-1/5 flex justify-center items-center"><div class="w-2 h-2 rounded-full bg-green-500"></div></div>
                        <div class="w-3/5 flex items-center text-xs">Armand HOUPIN</div>
                    </div>
                </div>
            </div>
            <div class="w-3/12 flex flex-col px-2">
                <p class="px-2 py-4 text-sm font-bold">Absent</p>
                <div class="relative flex flex-col rounded-xl bg-white shadow-sdw h-full">
                    <div class="group flex flex-row py-4 rounded-t-xl cursor-pointer hover:font-bold hover:bg-gray-200 ease-out duration-1500">
                        <div class="w-1/5 flex justify-center items-center"><div class="w-2 h-2 rounded-full bg-gray-200 group-hover:bg-gray-500"></div></div>
                        <div class="w-3/5 flex items-center text-xs">Armand HOUPIN</div>
                    </div>
                </div>
            </div>
            <div class="w-3/12 flex flex-col px-2">
                <p class="px-2 py-4 text-sm font-bold">Réunions</p>
                <div class="relative flex flex-col rounded-xl bg-white shadow-sdw h-full">

                </div>
            </div>
        </div>
    </div>
@endsection
