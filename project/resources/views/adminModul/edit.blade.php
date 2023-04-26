@include('navbarAdmin')






<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-[250px]">
    <div class="md:flex">
        <div class="md:flex-shrink-0">
            <img class="h-48 w-full object-cover md:h-full md:w-60" src="https://plus.unsplash.com/premium_photo-1671070687944-30bbb45f40bd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1073&q=80" alt="Song Image">
        </div>
        <div class="p-8 mx-auto">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Edit Module</div>
            <form action="{{ route('adminModul.update', $module->id) }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @csrf
                @method('PUT')
                <div class="grid grid-cols gap-4 mt-6">

                    <div class="mb-4 w-full">
                        <label for="name_modul" class="block font-medium mb-2">Name</label>
                        <input type="text" name="name_modul" id="name_modul" value=" {{ $module->name_modul }} "
                            class="w-full border rounded-md py-2 px-4 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('name_modul')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                
                </div>


                <div class="mt-6">
                    <button type="submit"
                        class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full rounded-md shadow-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>