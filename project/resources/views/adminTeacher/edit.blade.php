@include('navbarAdmin')



<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-[90px]">
    <div class="md:flex">
        <div class="md:flex-shrink-0">
            <img class="h-48 w-full object-cover md:h-full md:w-60" src="https://plus.unsplash.com/premium_photo-1671070687944-30bbb45f40bd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1073&q=80" alt="Song Image">
        </div>
        <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Edit Teacher</div>
            <form action="{{ route('adminTeacher.update', $teacher->user_id) }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-4 mt-6">

                    <div class="mb-4">
                        <label for="name" class="block font-medium mb-2">Name</label>
                        <input type="text" name="name" id="name" value=" {{ $teacher->user->name }} " class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('name')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label for="email" class="block font-medium mb-2">Email</label>
                        <input type="email" name="email" id="email" value="{{ $teacher->user->email }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    
                </div>
                <div class="grid grid-cols-2 gap-4 mt-6">
                    <div class="mb-4">
                        <label for="role" class="block font-medium mb-2">Role</label>
                        <select name="role" id="role" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="Teacher">Teacher</option>
                        </select>
                        @error('role')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label for="nom_ens" class="block font-medium mb-2">Teacher Name</label>
                        <input type="text" name="nom_ens" id="nom_ens" value=" {{ $teacher->nom_ens }} " class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                        @error('nom_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-6">
                    <div class="mb-4">
                        <label for="prenom_ens" class="block font-medium mb-2">Teacher Surname</label>
                        <input type="text" name="prenom_ens" id="prenom_ens" value="{{ $teacher->prenom_ens }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                        @error('prenom_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="adress_ens" class="block font-medium mb-2">Teacher Address</label>
                        <input type="text" name="adress_ens" id="adress_ens" value="{{ $teacher->adress_ens }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                        @error('adress_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-6">

                    <div class="mb-4">
                        <label for="ville_ens" class="block font-medium mb-2">Teacher City</label>
                        <input type="text" name="ville_ens" id="ville_ens" value="{{ $teacher->ville_ens }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                        @error('ville_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="photo_ens" class="block font-medium mb-2">Teacher Photo</label>
                        <input type="file" name="photo_ens" id="photo_ens" value="{{ old('photo_ens') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('photo_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-6">
                    <div class="mb-4">
                        <label for="email_ens" class="block font-medium mb-2">Teacher Email</label>
                        <input type="email" name="email_ens" id="email_ens" value="{{ $teacher->email_ens }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('email_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="phone_ens" class="block font-medium mb-2">Teacher Phone</label>
                        <input type="text" name="phone_ens" id="phone_ens" value="{{ $teacher->phone_ens }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('phone_ens')
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