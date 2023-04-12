@include('navbarAdmin')






{{-- <div wire:poll.5000ms> --}}




<livewire:admin-module-list />








<div class="bg-CustomWhite mt-5 p-4 w-[420px] mx-auto mt-20 rounded-xl">
    <h1 class="text-6xl font-bold px-4 py-2">Select Users</h1>
</div>


<div class="flex justify-center mt-[50px]">
    <a href="{{ route('admin.index')}} " class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Admin</a>
    <a href="{{ route('adminTeacher.index')}} " class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Teacher</a>
    <a href="{{ route('adminStudent.index')}}" class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Student</a>
    <a href="{{ route('adminModul.index')}}" class="mx-5 bg-CustomBlue font-bold py-2 px-4 rounded">Module</a>
</div>

<div class="ml-64 mt-[50px]">
    <h3 class="text-4xl font-bold px-4 py-2">Module List</h3>
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
                                Id
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Module Name
                            </th>
                            <th class="flex justify-center px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Actions
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modules as $module)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $module->id }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{ $module->name_modul }}</p>
                            </td>
                            
                            <td class="flex justify-center px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                    <div class="flex">
                                        <form action="{{ route('adminModul.edit', $module->id) }}" method="GET">
                                            @csrf
                                            <button wire:click="editModule({{ $module->id }})" class="w-[80px] h-[30px] bg-blue-500 text-white rounded-lg mr-2">edit</button>
                                        </form>
                                        <form action="{{ route('adminModul.destroy', $module->id) }}" method="POST">
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
            <div class="bg-CustomWhite mt-5 p-4 w-[214px] mx-auto mt-20 rounded-xl">
                <a href="#" class="text-4xl font-bold px-4 py-2">Downlad</a>
            </div>
        </div>
    </div>
</div>

@livewireScripts


</body>

</html>