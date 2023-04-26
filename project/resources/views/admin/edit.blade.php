@include('navbarAdmin')
















<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-[250px]">
    <div class="md:flex">
        <div class="md:flex-shrink-0">
            <img class="h-48 w-full object-cover md:h-full md:w-60" src="https://plus.unsplash.com/premium_photo-1671070687944-30bbb45f40bd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1073&q=80" alt="Song Image">
        </div>
        <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Edit Module</div>
            <form action="{{ route('admin.update', $admin->id_user) }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-4 mt-6">

                    <div class="mb-4">
                        <label for="name" class="block font-medium mb-2">Name</label>
                        <input type="text" name="name" id="name" value="{{ $admin->user->name }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
            
                    <div class="mb-4">
                        <label for="email" class="block font-medium mb-2">Email</label>
                        <input type="email" name="email" id="email" value="{{ $admin->user->email }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    
                </div>
                <div class="grid grid-cols-2 gap-4 mt-6">
                    <div class="mb-4">
                        <label for="nom_admin" class="block font-medium mb-2">Admin Name</label>
                        <input type="text" name="nom_admin" id="nom_admin" value="{{ $admin->nom_admin }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
            
                    <div class="mb-4">
                        <label for="prenom_admin" class="block font-medium mb-2">Admin First Name</label>
                        <input type="text" name="prenom_admin" id="prenom_admin" value="{{ $admin->prenom_admin }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email_admin" class="block font-medium mb-2">Admin Email</label>
                    <input type="email" name="email_admin" id="email_admin" value="{{ $admin->email_admin }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full rounded-md shadow-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>