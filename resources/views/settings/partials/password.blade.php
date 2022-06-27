
                          @if (session('status'))
                            <div id="error" class="relative w-full flex justify-center items-center p-6 @if( session('status_color') == 'red') bg-[#ff0000] @else bg-[#0d5a0d] @endif md:absolute md:top-20 md:right-12 md:w-72 md:z-[99] md:rounded-xl text-white duration-700 transform opacity-0 transition-all translate-y-6 ease-out" data-replace='{ "translate-y-6": "translate-y-0", "opacity-0": "opacity-100" }'>
                              {{ session('status') }}
                            </div>
                          @endif
                          
                          
                          <div class="relative flex flex-col px-10 pb-8 flex-auto lg:px-10 lg:flex-row">
                            <form method="POST" action="{{route('settings.dashboard-profile-password-post')}}" class="w-full">
                               @csrf
                              <h6
                                class="text-blueGray-900 text-sm mt-6 mb-6 font-bold uppercase"
                              >
                                Changement mot de passe
                              </h6>
                              <div class="flex flex-wrap">
                                <div class="w-full px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Mot de passe actuel
                                    </label>
                                    <input
                                      type="password"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                      name="mtp_actuel"
                                      />
                                  </div>
                                </div>
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                      <label
                                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                      >
                                        Nouveau Mot de passe
                                      </label>
                                      <input
                                        type="password"
                                        class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                        name="mtp_new"
                                        />
                                    </div>
                                  </div>
                                <div class="w-full lg:w-12/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label
                                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                      htmlFor="grid-password"
                                    >
                                      Confirmer nouveau mot de passe
                                    </label>
                                    <input
                                      type="password"
                                      class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
                                      name="mtp_new_confirme"
                                      />
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