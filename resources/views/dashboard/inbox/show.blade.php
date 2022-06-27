@extends('layouts.app')

@section('content')

    <div class="relative my-6 mx-12">
        <div class="grid gap-10 grid-cols-9">
            <div class="col-span-2 rounded-lg shadow-sdw placeholder-blueGray-300 text-blueGray-600 bg-white pb-4 h-fit">
                <div class="p-5">
                    <a href="{{route('inbox.dashboard-inbox-new')}}">
                        <button type="button"
                            class="rounded-lg w-full text-sm p-4 mb-3 bg-violet text-white flex justify-center items-center">
                            <svg
                            class="w-4 h-4 text-white mr-3"
                            aria-hidden="true"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Nouveau message
                        </button>
                    </a>
                </div>
                            <ul>
                                <li class="group relative w-full bg-violet/25 hover:bg-violet/50 hover:text-white py-2">
                                    <a href="#" class="flex flex-row">
                                        <div class="w-1/6 flex justify-center items-center">
                                            <svg class="w-4 h-4 text-black group-hover:text-white"
                                            aria-hidden="true"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="w-4/6 flex items-center text-sm pl-2">
                                            boîte de réception
                                        </div>
                                        <div class="w-1/6 flex justify-center items-center text-sm">
                                            <span class="bg-violet rounded-md px-2 h-5 text-white">4</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="group relative w-full py-2 hover:bg-violet/50 hover:text-white">
                                    <a href="#" class="flex flex-row">
                                    <div class="w-1/6 flex justify-center items-center">
                                    <svg class="w-4 h-4 text-black group-hover:text-white"
                                        aria-hidden="true"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="w-5/6 flex items-center text-sm pl-2">
                                            Favoris
                                        </div>
                                    </a>
                                </li>
                                <li class="group relative w-full py-2 hover:bg-violet/50 hover:text-white">
                                    <a href="#" class="flex flex-row">
                                    <div class="w-1/6 flex justify-center items-center">
                                    <svg class="w-4 h-4 text-black group-hover:text-white"
                                        aria-hidden="true"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="w-5/6 flex items-center text-sm pl-2">
                                            Mail envoyé
                                        </div>
                                    </a>
                                </li>
                                <li class="group relative w-full py-2 hover:bg-violet/50 hover:text-white">
                                    <a href="#" class="flex flex-row">
                                    <div class="w-1/6 flex justify-center items-center">
                                    <svg class="w-4 h-4 text-black group-hover:text-white"
                                        aria-hidden="true"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="w-5/6 flex items-center text-sm pl-2">
                                            Corbeille
                                        </div>
                                    </a>
                                </li>
                                <li class="group relative w-full py-2 hover:bg-violet/50 hover:text-white">
                                    <a href="#" class="flex flex-row">
                                    <div class="w-1/6 flex justify-center items-center">
                                    <svg class="w-4 h-4 text-black group-hover:text-white"
                                        aria-hidden="true"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="w-5/6 flex items-center text-sm pl-2">
                                            Important
                                        </div>
                                    </a>
                                </li>
                                <li class="group relative w-full py-2 hover:bg-violet/50 hover:text-white">
                                    <a href="#" class="flex flex-row">
                                    <div class="w-1/6 flex justify-center items-center">
                                    <svg class="w-4 h-4 text-black group-hover:text-white"
                                        aria-hidden="true"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="w-5/6 flex items-center text-sm pl-2">
                                            Spam
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h6 class="mt-2 ml-3 mb-2 text-xs">Labels</h6>
                            <ul>
                                <li class="relative w-full hover:bg-violet/50 hover:text-white">
                                    <a href="#" class="flex flex-row py-2">
                                        <div class="w-1/6 flex justify-center items-center">
                                            <div class="w-3 h-3 rounded-full bg-red-600 flex items-center justify-center">
                                                <div class="w-1 h-1 rounded-full bg-white">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-5/6 flex items-center text-sm pl-2">
                                            Personnel
                                        </div>
                                    </a>
                                </li>
                                <li class="relative w-full hover:bg-violet/50 hover:text-white">
                                    <a href="#" class="flex py-2 flex-row">
                                        <div class="w-1/6 flex justify-center items-center">
                                            <div class="w-3 h-3 rounded-full bg-green-600 flex items-center justify-center">
                                                <div class="w-1 h-1 rounded-full bg-white">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-5/6 flex items-center text-sm pl-2">
                                            Société
                                        </div>
                                    </a>
                                </li>
                                <li class="relative w-full hover:bg-violet/50 hover:text-white">
                                    <a href="#" class="flex py-2 flex-row">
                                        <div class="w-1/6 flex justify-center items-center">
                                            <div class="w-3 h-3 rounded-full bg-blue-600 flex items-center justify-center">
                                                <div class="w-1 h-1 rounded-full bg-white">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-5/6 flex items-center text-sm pl-2">
                                            Important
                                        </div>
                                    </a>
                                </li>
                                <li class="relative w-full hover:bg-violet/50 hover:text-white">
                                    <a href="#" class="flex flex-row py-2">
                                        <div class="w-1/6 flex justify-center items-center">
                                            <div class="w-3 h-3 rounded-full bg-pink-500 flex items-center justify-center">
                                                <div class="w-1 h-1 rounded-full bg-white">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-5/6 flex items-center text-sm pl-2">
                                            Privé
                                        </div>
                                    </a>
                                </li>
                                <li class="relative w-full hover:bg-violet/50 hover:text-white">
                                    <a href="#" class="flex flex-row py-2">
                                        <div class="w-1/6 flex justify-center items-center">
                                            <svg class="w-4 h-4 text-black"
                                            aria-hidden="true"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                              </svg>
                                        </div>
                                        <div class="w-5/6 flex items-center text-sm pl-2">
                                            Ajouter des labels
                                        </div>
                                    </a>
                                </li>
                            </ul>
                <h6 class="mt-2 ml-3 mb-2 text-xs">Stockage</h6>
                <div class="flex flex-col px-4 py-2">
                    <div class="w-full h-1 bg-gray-200 rounded-lg">
                        <div class="h-full bg-red-500 w-1/4 rounded-lg"> </div>
                    </div>
                    <div class="text-xs mt-4">
                        2.50 GO (25%) of 10 GO utlisé
                    </div>
                </div>


            </div>
            <div class="col-span-7 flex flex-col rounded-lg shadow-sdw placeholder-blueGray-300 text-blueGray-600 bg-white overflow-hidden h-fit">
                        <div class="relative block border-b-2 border-violet/10 py-3 px-2">
                            <ul class="float-left flex items-center">
                                <li class="ml-3 flex justify-center items-center">
                                    <a href="{{route('inbox.dashboard-inbox')}}" class="flex justify-center items-center">
                                        <ion-icon class="w-5 h-5 p-1" name="arrow-back-outline"></ion-icon>
                                    </a>
                                </li>
                                <li title="Archive" class="ml-3"><a href="#"><x-ri-mail-open-line class="w-9 h-9 p-2 bg-violet/20 text-violet rounded-lg  hover:text-white hover:bg-violet"/></a></li>
                                <li title="Spam" class="ml-1"><a href="#"><x-ri-information-line class="w-9 h-9 p-2 bg-violet/20 text-violet rounded-lg  hover:text-white hover:bg-violet"/></a></li>
                                <li title="Delete" class="ml-1"><a href="#"><x-ri-delete-bin-line class="w-9 h-9 p-2 bg-violet/20 text-violet rounded-lg  hover:text-white hover:bg-violet"/></a></li>
                                <li title="Inbox" class="ml-1"><a href="#"><x-ri-mail-unread-line class="w-9 h-9 p-2 bg-violet/20 text-violet rounded-lg  hover:text-white hover:bg-violet"/></a></li>
                                <li title="Forward" class="ml-1"><a href="#"><x-ri-folder-transfer-line class="w-9 h-9 p-2 bg-violet/20 text-violet rounded-lg  hover:text-white hover:bg-violet"/></a></li>
                                <li title="Bookmark" class="ml-1"><a href="#"><x-ri-bookmark-line class="w-9 h-9 p-2 bg-violet/20 text-violet rounded-lg  hover:text-white hover:bg-violet"/></a></li>
                            </ul>
                        </div>
                        <div class="relative flex flex-col border-b-2 border-violet/10 py-4 text-sm text-violet">
                            <div class="w-full flew items-center text-black text-lg px-6 py-2">
                                Your elite author Graphic Optimization reward is ready!
                            </div>
                            <div class="relative flex flex-wrap items-center">
                                <div class="w-9/12 flex flex-row px-6">
                                    <div class="flex justify-center items-center">
                                        <img class="rounded-full w-12 h-12" src="https://templates.iqonic.design/vito/vue/dist/img/user-1.9a267487.jpg"/>
                                    </div>
                                    <div class="flex flex-col px-6 py-2">
                                        <div class="text-black text-base">Demo team dummy@demo.com</div>
                                        <div class="mt-1">Pour moi</div>
                                    </div>
                                </div>
                                <div class="w-3/12 flex flex-row justify-center items-center">
                                    <div class="">Jan 15, 2029, 10:20AM</div>
                                </div>
                            </div>
                            <div class="pl-6 pr-20 py-6 text-base text-black text-justify">
                                Hi Jopour Xiong,
                                <br><br>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                <br><br>
                                Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                <br><br>
                                Regards,<br>John Deo
                            </div>
                            <div class="px-6 py-2 text-base text-black text-justify border-t-2 border-violet/10">
                                <div class="w-full flex items-center py-1 text-black">
                                    Fichiers attachés :
                                </div>

                                <div class="flex flex-col py-1">
                                    <div class="text-black text-sm hover:text-violet cursor-pointer">mydoc.doc</div>
                                    <div class="mt-1 text-black text-sm hover:text-violet cursor-pointer" >mydoc.pdf</div>
                                </div>

                            </div>

                        </div>

        </div>
    </div>
@endsection
