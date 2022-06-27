                          @if (session('status'))
                            <div id="error" class="relative w-full flex justify-center items-center p-6 bg-[#0d5a0d] md:absolute md:top-20 md:right-12 md:w-72 md:z-[99] md:rounded-xl text-white duration-700 transform opacity-0 transition-all translate-y-6 ease-out" data-replace='{ "translate-y-6": "translate-y-0", "opacity-0": "opacity-100" }'>
                              {{ session('status') }}
                            </div>
                          @endif
                          
                          <div class="relative flex flex-col px-10 pb-8 flex-auto lg:px-10 lg:flex-row">
                            <form method="POST" action="{{route('settings.dashboard-profile-edit')}}" class="w-full">
                               @csrf
                              <h6
                                class="text-blueGray-900 text-sm mt-6 mb-6 font-bold uppercase"
                              >
                                Informations de l'utilisateurs
                              </h6>
                              <div class="flex flex-wrap">
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Nom
                                    </label>
                                    <input
                                      type="text"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                      value="{{Auth::user()->name}}"
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
                                        Prénom
                                      </label>
                                      <input
                                        type="text"
                                        class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                        value="{{Auth::user()->prenom}}"
                                        name="prenom"
                                      />
                                    </div>
                                  </div>
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Adresse mail
                                    </label>
                                    <input
                                      type="email"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                      value="{{Auth::user()->email}}"
                                      name="email"
                                    />
                                  </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Nom entreprise
                                    </label>
                                    <input
                                      type="text"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                      value="{{Auth::user()->name_societe}}"
                                      name="name_societe"
                                    />
                                  </div>
                                </div>
                              </div>
          
                              <hr class="my-6 border border-blueGray-150" />
          
                              <h6
                                class="text-blueGray-900 text-sm mt-3 mb-6 font-bold uppercase"
                              >
                                Information de contact
                              </h6>
                              <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Adresse
                                    </label>
                                    <input
                                      type="text"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                      value="{{$informations_user->adresse}}"
                                      name="adresse"
                                    />
                                  </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                      <label
                                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                      >
                                        N° Téléphone
                                      </label>
                                      <input
                                        type="text"
                                        class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                        value="{{$informations_user->telephone}}"
                                        name="telephone"
                                      />
                                    </div>
                                  </div>
                                  <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                      <label
                                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                      >
                                      N° TVA
                                      </label>
                                      <input
                                        type="text"
                                        class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                        value="{{$informations_user->numero_tva}}"
                                        name="numero_tva"
                                      />
                                    </div>
                                  </div>
                                  <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                      <label
                                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                      >
                                        Pays
                                      </label>
                                      <input
                                        type="text"
                                        class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                        value="{{$informations_user->pays}}"
                                        name="pays"
                                      />
                                    </div>
                                  </div>
                                <div class="w-full lg:w-4/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Ville
                                    </label>
                                    <input
                                      type="text"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                        value="{{$informations_user->ville}}"
                                      name="ville"
                                    />
                                  </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Région
                                    </label>
                                    <input
                                      type="text"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                        value="{{$informations_user->region}}"
                                      name="region"
                                    />
                                  </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Code Postal
                                    </label>
                                    <input
                                      type="text"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                        value="{{$informations_user->codepostal}}"
                                      name="codepostal"
                                    />
                                  </div>
                                </div>
                              </div>
          
                              <hr class="my-6 border border-blueGray-150" />
          
                              <h6
                                class="text-blueGray-900 text-sm mt-3 mb-6 font-bold uppercase"
                              >
                                A propos de moi
                              </h6>
                              <div class="flex flex-wrap">
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Poste
                                    </label>
                                    <input
                                      type="text"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                        value="{{$informations_user->poste}}"
                                      name="poste"
                                    />
                                  </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Service
                                    </label>
                                    <input
                                      type="text"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                        value="{{$informations_user->service}}"
                                      name="service"
                                    />
                                  </div>
                                </div>
                                <div class="w-full lg:w-12/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Sur moi
                                    </label>
                                    <textarea
                                      type="text"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                      rows="4"
                                      name="about"
                                    >{{$informations_user->about}}</textarea
                                    >
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
                                        Enregistrer
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>