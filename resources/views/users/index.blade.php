@vite('resources/css/app.css')

<div class="w-full px-6 py-4">
    <h1 class="text-3xl font-bold mb-6">Users List</h1>
    <table class="min-w-full divide-y divide-gray-200 shadow overflow-hidden rounded-lg">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $user)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
