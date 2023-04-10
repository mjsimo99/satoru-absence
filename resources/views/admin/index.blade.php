@include('navbarAdmin')



<div class="bg-CustomWhite mt-5 p-4 w-[420px] mx-auto mt-20 rounded-xl">
    <h1 class="text-6xl font-bold px-4 py-2">Select Users</h1>
</div>


<div class="flex justify-center mt-[50px]">
    <a href="/admin" class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Admin</a>
    <a href="/adminTeacher" class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Teacher</a>
    <a href="/astu" class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Student</a>
    <a href="/amodule" class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Module</a>
</div>

<div class="ml-64 mt-[50px]">
    <h3 class="text-4xl font-bold px-4 py-2">Admin List</h3>
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
                                Full name
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Email
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
                        @foreach($admins as $admin)


                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-full h-full rounded-full" src="https://i.pinimg.com/564x/8e/de/53/8ede538fcf75a0a1bd812810edb50cb7.jpg" alt="" />
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $admin->user->name}}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $admin->nom_admin }}
                                    {{ $admin->prenom_admin }}

                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $admin->email_admin }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                @if($admin->user->status == 1)
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
                                    {{ $admin->user->role }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex">

                                    <form action="{{ route('admin.updateStatus', $admin->user->id) }}" method="POST"> @csrf
                                        <input type="hidden" name="status" value="1">
                                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                            <svg class="w-[28px]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.updateStatus', $admin->user->id) }}" method="POST"> @csrf
                                        <input type="hidden" name="status" value="0">
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            <svg class="w-[28px]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>

                                    </form>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex">
                                    <form action="{{ route('admin.edit', $admin->id_user) }}" method="GET">
                                        @csrf
                                        <button class="w-[80px] h-[30px] bg-blue-500 text-white rounded-lg mr-2">edit</button>
                                    </form>
                                    <form action="{{ route('admin.destroy', $admin->id_user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-[80px] h-[30px] bg-red-500 text-white rounded-lg">delete</button>
                                    </form>

                                </div>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="bg-CustomWhite mt-5 p-4 w-[214px] mx-auto mt-20 rounded-xl">
            <a href="#" onclick="downloadCsv('admin_list.csv')" class="text-4xl font-bold px-4 py-2">Downlad</a>
            </div>
        </div>
    </div>
</div>

<script>
  function downloadCsv(filename) {
    // Retrieve the table element
    const table = document.querySelector('table');

    // Create a new CSV file
    let csv = 'User, Full name, Email, Access, Role\n';

    // Iterate over each row in the table
    table.querySelectorAll('tbody tr').forEach((row) => {
      // Extract the cell data for each row
      const user = row.querySelector('td:nth-child(1)').innerText;
      const fullName = row.querySelector('td:nth-child(2)').innerText;
      const email = row.querySelector('td:nth-child(3)').innerText;
      const access = row.querySelector('td:nth-child(4)').innerText;
      const role = row.querySelector('td:nth-child(5)').innerText;

      // Append the row data to the CSV string
      csv += `"${user}", "${fullName}", "${email}", "${access}", "${role}"\n`;
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