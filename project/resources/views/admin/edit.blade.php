@include('navbarAdmin')
<div class="max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-4">Admin Details</h1>


    <form action="{{ route('admin.update', $admin->id_user) }}" method="post" class="w-full max-w-lg">
        {!! csrf_field() !!}
        @csrf
        @method('PUT')
        <!-- rest of the form code -->

        <div class="mb-4">
            <label for="name" class="block font-medium mb-2">Name</label>
            <input type="text" name="name" id="name" value="{{ $admin->user->name }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium mb-2">Email</label>
            <input type="email" name="email" id="email" value="{{ $admin->user->email }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="nom_admin" class="block font-medium mb-2">Admin Name</label>
            <input type="text" name="nom_admin" id="nom_admin" value="{{ $admin->nom_admin }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="prenom_admin" class="block font-medium mb-2">Admin First Name</label>
            <input type="text" name="prenom_admin" id="prenom_admin" value="{{ $admin->prenom_admin }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="email_admin" class="block font-medium mb-2">Admin Email</label>
            <input type="email" name="email_admin" id="email_admin" value="{{ $admin->email_admin }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
    </form>

</div>