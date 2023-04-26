@include('navbarTeacher')




<div class="mt-[50px] text-center">
    <h3 class="text-4xl font-bold px-4 py-2">YOUR MODULES</h3>
</div>



<div class="flex flex-wrap justify-center mt-7">
    @foreach ($sciences as $science)
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4 ">
        <div class="h-full bg-white rounded-lg shadow-lg overflow-hidden flex flex-col justify-center bg-CustomWhite" style="background-color: aliceblue;">
          <div class="px-4 py-6">
            <h3 class="text-lg font-medium mb-2 text-center">{{ $science->module->name_modul }}</h3>
            <p class="text-gray-500 text-center">{{ $science->module->description }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  
  

<div class="ml-64 mt-[50px]">
    <h3 class="text-4xl font-bold px-4 py-2 sience">Sience Liste</h3>
</div>

<!-- component -->
<div class="container mx-auto px-4">
    <div class="py-8">


        <div class="-mx-4 sm:-mx-8 px-4 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
                    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                @if (session('success'))
                    <script>
                        swal("Good job!", "{{ session('success') }}", "success")
                    </script>
                @endif

                @if (session('error'))
                    <script>
                        swal("Oops...!", "{{ session('error') }}", "error")
                    </script>
                @endif

                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                Modules
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                Class Time
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                Start Time
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                End Time
                            </th>
                            <th
                                class="px-5 text-center py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                Add student in seance
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                Type Seance
                            </th>




                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sciences as $science)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $science->module->name_modul }}


                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $science->date_seance }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $science->heure_debut }}

                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $science->heure_fin }}
                                    </p>
                                </td>


                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">


                                    <input type="hidden" name="student_id" value="">
                                    <input type="hidden" name="seance_id" value="">
                                    <button type="button" class="focus:outline-none" data-modal-target="popup-modal"
                                        data-modal-toggle="popup-modal">

                                        <svg class="w-[30px] text-center" fill="none" stroke="currentColor"
                                            stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z">
                                            </path>
                                        </svg>
                                    </button>

                                    <div id="popup-modal" tabindex="-1"
                                        class="fixed top-0 left-0 right-0 bottom-0 z-50 hidden">
                                        <div class="flex items-center justify-center w-full h-full">
                                            <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
                                                <div class="flex items-center justify-between px-6 py-4 border-b">
                                                    <h2 class="text-lg font-medium text-gray-800">Affect module</h2>
                                                    <button type="button"
                                                        class="text-gray-500 hover:text-gray-800 focus:outline-none"
                                                        data-modal-hide="popup-modal">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="{{ route('science.storeStudy') }}"
                                                    class="px-6 py-4">

                                                    @csrf

                                                    <div class="mb-4">
                                                        <label for="user_id"
                                                            class="block text-gray-700 font-medium mb-2">User
                                                            ID:</label>
                                                        <select name="user_id" id="user_id"
                                                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                                                            @foreach ($students as $student)
                                                                <option value="{{ $student->user_id }}">
                                                                    {{ $student->nom_etu }} {{ $student->prenom_etu }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label for="module_id "
                                                            class="block text-gray-700 font-medium mb-2">Module
                                                            ID:</label>
                                                        <select name="module_id" id="module_id"
                                                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                                @foreach ($sciences as $science)
                                                            
                                                            <option value="{{ $science->module_id }}">
                                                                {{ $science->module->name_modul }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="flex justify-end">
                                                        <button
                                                            type="submit"class="px-4 py-2 bg-red-600 text-white font-medium rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">Affect
                                                            module</button>
                                                        <button type="button"
                                                            class="px-4 py-2 bg-gray-200 text-gray-700 font-medium rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300 ml-2"
                                                            data-modal-hide="popup-modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $science->type_seance }}
                                    </p>
                                </td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
            <div class="bg-CustomWhite mt-5 p-4 w-[214px] mx-auto mt-20 rounded-xl">
                <a href="#" class="text-4xl font-bold px-4 py-2">Downlad</a>
            </div>
        </div>
    </div>
</div>



</body>

</html>
