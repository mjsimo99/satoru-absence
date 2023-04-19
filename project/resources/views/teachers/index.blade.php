@include('navbarTeacher')









<div class="flex justify-evenly mt-[50px]">
    <table class="table-auto border-collapse border border-gray-200 p-lg-4 w-[245px]">
        <thead class="h-[70px]">
            <tr>
                <th class="bg-CustomWhite text-4xl font-bold">
                    Modules
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="flex justify-center">
                    <ol class="list-outside list-disc font-sans text-2xl">
                        <li>JAVA</li>
                        <li>PHP</li>
                        <li>FIGMA</li>
                    </ol>
                </td>
            </tr>

    </table>
    <table class="table-auto border-collapse border border-gray-200 p-lg-4 w-[245px]">
        <thead class="h-[70px]">
            <tr>
                <th class="bg-CustomWhite text-4xl font-bold">
                    Modules
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="flex justify-center">
                    <ol class="list-outside list-disc font-sans text-2xl">
                        <li>JAVA</li>
                        <li>PHP</li>
                        <li>FIGMA</li>
                    </ol>
                </td>
            </tr>

    </table>
    <table class="table-auto border-collapse border border-gray-200 p-lg-4 w-[245px]">
        <thead class="h-[70px]">
            <tr>
                <th class="bg-CustomWhite text-4xl font-bold">
                    Modules
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="flex justify-center">
                    <ol class="list-outside list-disc font-sans text-2xl">
                        <li>JAVA</li>
                        <li>PHP</li>
                        <li>FIGMA</li>
                    </ol>
                </td>
            </tr>

    </table>
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
                                ????
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
            <div class="bg-CustomWhite mt-5 p-4 w-[214px] mx-auto mt-20 rounded-xl">
                <a href="#" class="text-4xl font-bold px-4 py-2">Downlad</a>
            </div>
        </div>
    </div>
</div>



</body>

</html>
