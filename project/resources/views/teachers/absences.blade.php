@include('navbarTeacher')









<div class="flex justify-evenly mt-[50px]">

</div>

<div class="ml-64 mt-[50px]">
    <h3 class="text-4xl font-bold px-4 py-2">absence Liste</h3>
</div>

<!-- component -->
<div class="container mx-auto px-4">
    <div class="py-8">

        
        <form action="{{ route('teacher.absences.filter') }}" method="POST">
            @csrf
            <div class="flex mt-[50px]">
                <div class="flex flex-col">
                    <label for="cne" class="text-lg font-semibold mb-2 filter">Filter By CNE:</label>
                    <select id="cne" name="cne" class="border border-gray-400 rounded-lg py-2 px-3 mr-2">
                        <option value="">-- Select CNE --</option>
                        @foreach ($absences as $etudiant)
                            <option value="{{ $etudiant->cne }}">{{ $etudiant->cne }} </option>
                        @endforeach

                    </select>
                </div>
                <div class="flex items-end">
                    <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        onclick="this.form.submit()">
                        Filter
                    </button>

                </div>
            </div>
        </form>







        <div class="-mx-4 sm:-mx-8 px-4 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">

                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                Modules
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                cne
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                etudiant
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                justify
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                comm_abs
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                date_seance
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                heure_debut
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                heure_fin
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="background-color: aliceblue;">
                                type_seance
                            </th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($absences as $absence)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $absence->name_modul }}


                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $absence->cne }}</p>

                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $absence->nom_etu }} {{ $absence->prenom_etu }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $absence->justify }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $absence->comm_abs }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $absence->date_seance }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $absence->heure_debut }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $absence->heure_fin }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $absence->type_seance }}
                                    </p>
                                </td>


                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
            <div class="bg-CustomWhite mt-5 p-4 w-[214px] mx-auto mt-20 rounded-xl">
                <a href="#" onclick="downloadCsv('absence_list.csv')" class="text-4xl font-bold px-4 py-2">Downlad</a>
            </div>
        </div>
    </div>
</div>
<script >
     function downloadCsv(filename) {
    // Retrieve the table element
    const table = document.querySelector('table');

    // Create a new CSV file
    let csv = 'Modules, CNE, Etudiant, Justify, Comm_abs, Date_seance, Heure_debut, Heure_fin, Type_seance\n';

    // Iterate over each row in the table
    table.querySelectorAll('tbody tr').forEach((row) => {
      // Extract the cell data for each row
        const Modules = row.querySelector('td:nth-child(1)').innerText;
        const CNE = row.querySelector('td:nth-child(2)').innerText;
        const Etudiant = row.querySelector('td:nth-child(3)').innerText;
        const Justify = row.querySelector('td:nth-child(4)').innerText;
        const Comm_abs = row.querySelector('td:nth-child(5)').innerText;
        const Date_seance = row.querySelector('td:nth-child(6)').innerText;
        const Heure_debut = row.querySelector('td:nth-child(7)').innerText;
        const Heure_fin = row.querySelector('td:nth-child(8)').innerText;
        const Type_seance = row.querySelector('td:nth-child(9)').innerText;



      // Append the row data to the CSV string
      csv += `"${Modules}","${CNE}","${Etudiant}","${Justify}","${Comm_abs}","${Date_seance}","${Heure_debut}","${Heure_fin}","${Type_seance}"\n`;
    });

    // Create a download link for the CSV file
    const downloadLink = document.createElement('a');
    downloadLink.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
    downloadLink.download = filename;

    // Trigger the download link
    downloadLink.click();
  }
</script>
</body>

</html>
