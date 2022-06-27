@extends('layouts.app')

@section('content')
  <body class="text-slate-700 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
            href="{{ url('/') }}"
            >Annalise</a
          ><button
            class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button"
            onclick="toggleNavbar('example-collapse-navbar')"
          >
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
          <ul
            class="flex flex-col lg:flex-row list-none lg:ml-auto items-center"
          >
            @if (Route::has('register'))
            <li class="flex items-center">
              <a href="{{ route('register') }}">
                <button
                  class="bg-extra hover:bg-main text-white active:bg-slate-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                  type="button"
                >
                  S'enregistrer
                </button>
              </a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <section class="relative w-full h-full py-40 min-h-screen">
        <div
          class="absolute top-0 w-full h-full bg-slate-800 bg-cover bg-no-repeat"
          style="background-image: url({{asset('/img/register_bg_2.png')}}"
        ></div>
        <div class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-slate-200 border-0"
              >
                <div class="rounded-t mb-0 px-6 py-6">
                  <div class="text-center mb-3">
                    <h6 class="text-slate-500 text-sm font-bold">
                      Se connecter <!--avec-->
                    </h6>
                  </div>
                  <div class="btn-wrapper text-center">
                    <!--<button
                      class="bg-white active:bg-slate-50 text-slate-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                      type="button"
                    >
                      <img
                        alt="..."
                        class="w-5 mr-1"
                        src="../../assets/img/github.svg"
                      />Github</button
                    >--><button
                      class="bg-white active:bg-slate-50 text-slate-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                      type="button"
                    ><img
                        alt="..."
                        class="w-5"
                        src="{{asset('img/google.svg')}}"
                      /></button>
                  </div>
                  <hr class="mt-6 border-b-1 border-slate-300" />
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                  <div class="text-extra text-center mb-3 font-bold">
                    <small>Connectez-vous avec vos identifiants</small>
                  </div>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-slate-600 text-xs font-bold mb-2"
                        for="email"
                        >Email</label
                      ><input
                        id="email"
                        type="email"
                        class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Email"
                        name="email"
                        value="{{ old('email') }}" 
                        required 
                        autocomplete="email" 
                        autofocus
                      />
                      @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                      @enderror
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-slate-600 text-xs font-bold mb-2"
                        for="password"
                        >Mot de passe</label
                      ><input
                        type="password"
                        class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Password"
                        name="password"
                        required
                      />
                      @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                      @enderror
                    </div>
                    <div>
                      <label class="inline-flex items-center cursor-pointer"
                      for="remember"
                        ><input
                          id="remember"
                          type="checkbox"
                          class="form-checkbox border-0 rounded text-extra ml-1 w-5 h-5 ease-linear transition-all duration-150"
                          name="remember"
                          {{ old('remember') ? 'checked' : '' }}
                        /><span
                          class="ml-2 text-sm font-semibold text-slate-600"
                          >Se souvenir</span
                        ></label
                      >
                    </div>
                    <div class="text-center mt-6">
                      <button
                        class="bg-extra hover:bg-main text-white active:bg-slate-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit"
                      >
                        Se connecter
                      </button>
                    </div>
                  </form>
                  <div class="flex flex-wrap mt-6">
                    @if (Route::has('password.request'))
                    <div class="w-1/2">
                      <a href="{{ route('password.request') }}" class="text-slate-400 hover:text-extra" 
                        ><small>Mot de passe oublier ?</small></a
                      >
                    </div>
                    @endif
                    @if (Route::has('register'))
                    <div class="w-1/2 text-right">
                      <a href="{{ route('register') }}" class="text-slate-400 hover:text-extra"
                        ><small>Créer un nouveau compte</small></a
                      >
                    </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="absolute w-full bottom-0 pb-6">
          <div class="container mx-auto px-4">
            <hr class="mb-6 border-b-1 border-slate-600" />
            <div
              class="flex flex-wrap items-center md:justify-between justify-center"
            >
              <div class="w-full md:w-4/12 px-4">
                <div
                  class="text-sm text-white font-semibold py-1 text-center md:text-left"
                >
                  Copyright © <span id="get-current-year"></span>
                  <a
                    href="https://www.creative-tim.com?ref=njs-login"
                    class="text-white hover:text-slate-300 text-sm font-semibold py-1"
                    >Annalise</a
                  >
                </div>
              </div>
            </div>
          </div>
        </footer>
      </section>
    </main>
  </body>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script>
    /* Make dynamic date appear */
    (function () {
      if (document.getElementById("get-current-year")) {
        document.getElementById(
          "get-current-year"
        ).innerHTML = new Date().getFullYear();
      }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start",
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }
  </script>

@endsection
