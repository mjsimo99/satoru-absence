@include('navbarTeacher')








<div class="w-screen  mt-20">
    <div class="container h- mx-auto flex justify-center items-center p-2 md:p-0 flex-col">
        <form method="GET" action="{{ route('teacher.absence.search') }}">
            <div class="flex mb-6">

                <div class="flex border rounded items-center p-2 mx-2">
                    <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        width="24" height="24">
                        <path class="heroicon-ui"
                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z" />
                    </svg>
                    <input type="text" name="date" placeholder="Date seance..."
                        class="border-0 max-w-full focus:outline-none text-gray-700" value="{{ request('date') }}">
                </div>

                <div class="flex border rounded  items-center p-2 mx-2">
                    <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" width="24" height="24">
                        <path class="heroicon-ui"
                            d="M14 5.62l-4 2v10.76l4-2V5.62zm2 0v10.76l4 2V7.62l-4-2zm-8 2l-4-2v10.76l4 2V7.62zm7 10.5L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z" />
                    </svg>
                    <input type="text" name="start_time" placeholder="Start time..."
                        class="border-0 max-w-full focus:outline-none text-gray-700"
                        value="{{ request('start_time') }}">
                </div>
                <div class="flex border rounded items-center p-2 mx-2">
                    <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" width="24" height="24">
                        <path class="heroicon-ui"
                            d="M13.04 14.69l1.07-2.14a1 1 0 0 1 1.2-.5l6 2A1 1 0 0 1 22 15v5a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2h5a1 1 0 0 1 .95.68l2 6a1 1 0 0 1-.5 1.21L9.3 10.96a10.05 10.05 0 0 0 3.73 3.73zM8.28 4H4v2a14 14 0 0 0 14 14h2v-4.28l-4.5-1.5-1.12 2.26a1 1 0 0 1-1.3.46 12.04 12.04 0 0 1-6.02-6.01 1 1 0 0 1 .46-1.3l2.26-1.14L8.28 4zm7.43 5.7a1 1 0 1 1-1.42-1.4L18.6 4H16a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V5.41l-4.3 4.3z" />
                    </svg>
                    <input type="text" name="end_time" placeholder="End time..."
                        class="border-0 max-w-full focus:outline-none text-gray-700" value="{{ request('end_time') }}">
                </div>
            </div>
            <div class="flex justify-center"><button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Search</button>
            </div>
        </form>

    </div>
</div>



<div class="ml-64 mt-[50px]">
    <h3 class="text-4xl font-bold px-4 py-2">Science Liste</h3>
</div>

<!-- component -->
<div class="container mx-auto px-4">
    <div class="py-8">


        <div class="-mx-4 sm:-mx-8 px-4 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Modules
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Class Time
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Start Time
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                End Time
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                type seance
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
        </div>
    </div>
</div>



<div class="ml-64 mt-[50px]">
    <h3 class="text-4xl font-bold px-4 py-2">Students Liste</h3>
</div>

<!-- component -->
<div class="container mx-auto px-4">
    <div class="py-8">


        <div class="-mx-4 sm:-mx-8 px-4 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                CNE
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                First Name
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Last Name
                            </th>
                            <th
                                class="px-5 text-center py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Affect Absence
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Absence affecter ?
                            </th>



                        </tr>
                    </thead>
                    <tbody>
                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Succès!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-green-500" role="button"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <title>Close</title>
                                        <path
                                            d="M14.348 5.652a.999.999 0 1 0-1.414 1.414L11 8.414l-1.934 1.934a.999.999 0 1 0 1.414 1.414L12.414 10l1.934 1.934a.999.999 0 1 0 1.414-1.414L13.828 10l1.52-1.52a.999.999 0 0 0 0-1.414z" />
                                    </svg>
                                </span>
                            </div>
                        @endif
                        @foreach ($students as $student)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $student->cne }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $student->Fname }}</p>

                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $student->Lname }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">


                                    <input type="text" name="student_id" value="{{ $student->student }}">
                                    <input type="text" name="seance_id" value="{{ $student->seance_id }}">
                                    <button type="button" class="focus:outline-none" data-modal-target="popup-modal"
                                        data-modal-toggle="popup-modal">
                                        <svg class="w-[30px] mx-auto" fill="none" stroke="currentColor"
                                            stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75">
                                            </path>
                                        </svg>
                                    </button>

                                    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 bottom-0 z-50 hidden">
                                        <div class="flex items-center justify-center w-full h-full">
                                          <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
                                            <div class="flex items-center justify-between px-6 py-4 border-b">
                                              <h2 class="text-lg font-medium text-gray-800">Add Absence</h2>
                                              <button type="button" class="text-gray-500 hover:text-gray-800 focus:outline-none" data-modal-hide="popup-modal">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                              </button>
                                            </div>
                                            <form action="{{ route('absenceteacher.store') }}" method="POST" class="px-6 py-4">
                                              @csrf
                                              <div class="mb-4">
                                                <label for="student_id_modal" class="block text-gray-700 font-medium mb-2">Student ID:</label>
                                                <input type="text" name="student_id" id="student_id_modal" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="">
                                              </div>
                                              <div class="mb-4">
                                                <label for="seance_id_modal" class="block text-gray-700 font-medium mb-2">Seance ID:</label>
                                                <input type="text" name="seance_id" id="seance_id_modal" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="">
                                              </div>
                                              <div class="mb-4">
                                                <label for="justify" class="block text-gray-700 font-medium mb-2">Justify:</label>
                                                <select name="justify" id="justify" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                                </select>
                                              </div>
                                              <div class="mb-4">
                                                <label for="comm_abs_modal" class="block text-gray-700 font-medium mb-2">Comment:</label>
                                                <input type="text" name="comm_abs" id="comm_abs_modal" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="">
                                              </div>
                                              <div class="flex justify-end">
                                                <button type="submit" class="px-4 py-2 bg-red-600 text-white font-medium rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">Add Absence</button>
                                                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 font-medium rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300 ml-2" data-modal-hide="popup-modal">Cancel</button>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>


                                </td>








                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $student->comm_abs }}
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
