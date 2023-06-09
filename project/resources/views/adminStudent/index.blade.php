@include('navbarAdmin')

@livewire('my-component')





<div class="bg-CustomWhite mt-5 p-4 w-[420px] mx-auto mt-24 rounded-xl">
    <h1 class="text-6xl font-bold px-4 py-2">Select Users</h1>
</div>


<div class="flex justify-center mt-[50px] change">
    <a href="{{ route('admin.index')}} " class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Admin</a>
    <a href="{{ route('adminTeacher.index')}} " class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Teacher</a>
    <a href="{{ route('adminStudent.index')}}" class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Student</a>
    <a href="{{ route('adminModul.index')}}" class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Module</a>
</div>

<div class="ml-64 mt-[50px]">
    <h3 class="text-4xl font-bold px-4 py-2">Students List</h3>
</div>

<!-- component -->
<div class="container mx-auto px-4">
    <div class="py-8">


        <div class="-mx-4 sm:-mx-8 px-4 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                User
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Full Name
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                CNE
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Date Of Birth
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                City Of Birth
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                City Of Residence
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Address
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Email
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Phone Number
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Access
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Role
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Give Access
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Actions
                            </th>


                        </tr>
                    </thead>
                    <tbody>

                       @foreach ($students as $student)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img src="{{ asset($student->photo_etu) }}" alt="Student Photo">                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$student->user->name}}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$student->nom_etu}} {{$student->prenom_etu}}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$student->cne}}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$student->dateN_etu}}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$student->villeN_etu}}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$student->ville_etu}}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$student->adresse_etu}}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$student->email_etu}}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$student->phone_etu}}
                                </p>
                            </td>






                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                @if($student->user->status == 1)
                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                    <span class="relative">Active</span>
                                </span>
                                @else
                                <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                    <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                    <span class="relative">Inactive</span>
                                </span>
                                @endif
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$student->user->role }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex">

                                    <form action="{{ route('adminStudent.updateStatus', $student->user->id) }}" method="POST"> @csrf
                                        <input type="hidden" name="status" value="1">
                                        <button type="submit" class="font-bold py-2 px-4 rounded">
                                            <svg class="w-[28px]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    <form action="{{ route('adminStudent.updateStatus', $student->user->id) }}" method="POST"> @csrf
                                        <input type="hidden" name="status" value="0">
                                        <button type="submit" class="font-bold py-2 px-4 rounded">
                                            <svg class="w-[28px]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.412 15.655L9.75 21.75l3.745-4.012M9.257 13.5H3.75l2.659-2.849m2.048-2.194L14.25 2.25 12 10.5h8.25l-4.707 5.043M8.457 8.457L3 3m5.457 5.457l7.086 7.086m0 0L21 21"></path>
                                            </svg>
                                        </button>

                                    </form>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex">
                                    <form action="{{ route('adminStudent.edit', $student->user_id) }}" method="GET">
                                        @csrf
                                        <button class="w-[80px] h-[30px] bg-blue-500 text-white rounded-lg mr-2">edit</button>
                                    </form>
                                    <form action="{{ route('adminStudent.destroy', $student->user_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-[80px] h-[30px] bg-red-500 text-white rounded-lg">delete</button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            {{-- <div class="bg-CustomWhite mt-5 p-4 w-[214px] mx-auto mt-20 rounded-xl">
                <svg  fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75v6.75m0 0l-3-3m3 3l3-3m-8.25 6a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"></path>
                  </svg>
                <a href="#" onclick="downloadCsv('student_list.csv')" class="text-4xl font-bold px-4 py-2">Downlad</a>
            </div> --}}
            <div class="bg-CustomWhite mt-5 p-4 w-[214px] mx-auto mt-20 rounded-xl">
                <a href="#" onclick="downloadCsv('student_list.csv')" class="flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  <svg class="mr-2 h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75v6.75m0 0l-3-3m3 3l3-3m-8.25 6a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"></path>
                  </svg>
                  Download
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    function downloadCsv(filename) {
        //retrieve the table element
        const table = document.querySelector('table');
        //create a new csv file
        let csv = "User, FullName, CNE, DateOfBirth, CityOfBirth, CityOfResidence, Address, Email, Phone Number\n";

        // Iterate over each row in the table

        table.querySelectorAll('tbody tr').forEach((row) => {
        // Extract the cell data for each row
        const User = row.querySelector('td:nth-child(1)').innerText;
        const FullName = row.querySelector('td:nth-child(2)').innerText;
        const CNE = row.querySelector('td:nth-child(3)').innerText;
        const DateOfBirth = row.querySelector('td:nth-child(4)').innerText;
        const CityOfBirth = row.querySelector('td:nth-child(5)').innerText;
        const CityOfResidence = row.querySelector('td:nth-child(6)').innerText;
        const Address = row.querySelector('td:nth-child(7)').innerText;
        const Email = row.querySelector('td:nth-child(8)').innerText;
        const Phone = row.querySelector('td:nth-child(9)').innerText;

        // Append the row data to the CSV string
        csv += `"${User}", "${FullName}", "${CNE}", "${DateOfBirth}", "${CityOfBirth}", "${CityOfResidence}", "${Address}", "${Email}", "${Phone}"\n`;
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