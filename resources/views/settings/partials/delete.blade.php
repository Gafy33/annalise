<div class="relative flex flex-col px-10 pb-8 flex-auto lg:px-10 lg:flex-row">
    <form method="POST" action="{{route('settings.dashboard-profile-delete-post')}}" class="w-full">
       @csrf
      <h6
        class="text-blueGray-900 text-sm mt-6 mb-6 font-bold uppercase"
      >
      </h6>
      <div class="flex flex-wrap">
        <div class="w-full px-4">
          <div class="relative w-full mb-3">
            <label
              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
              htmlFor="grid-password"
            >
              Confirmer Mot de passe
            </label>
            <input
              type="password"
              class="rounded-lg border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none w-full ease-linear transition-all duration-150"
              name="mtp_actuel"
              required
              autofocus
              />
          </div>
        </div>
        <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
              <div class="form-check">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input 
                      id="check" 
                      name="check" 
                      type="checkbox" 
                      class="focus:border-extra h-4 w-4 text-extra border-gray-300 rounded-xl"
                      required>
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="check" class="font-medium text-gray-700"> Confirmer </label>
                    </div>
                  </div>
                  <p class="mt-6 text-xs">* Assurez-vous d'avoir bien annulé vos abonnements avant de continuer à supprimer votre compte, sinon vous serez toujours prélevez !</p>
              </div>
            </div>
        </div>
      </div>

      <div class="flex flex-wrap">
        <div class="w-full lg:w-12/12 px-12">
          <div class="relative w-full flex justify-center pt-6">
            <button
            onclick="return confirmdelete();"
            class="bg-[#ff0000] text-white active:bg-main hover:bg-main font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
            type="submit"
            >
                Supprimer
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>

<script>

    function confirmdelete() {
      if(!confirm("Assurez-vous d'avoir bien annulé vos abonnements avant de continuer à supprimer votre compte, sinon vous serez toujours prélevez !"))
      event.preventDefault();
    }

</script>