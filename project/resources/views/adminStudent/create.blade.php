@vite('resources/css/app.css')




    <div class="h-screen flex">
        <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
          <div class="bg-black opacity-20 inset-0 z-0">

                </div>
          <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
            <h1 class="text-white font-bold text-4xl font-sans">Insertion</h1>
            <p class="text-white mt-1">Insert Etedient</p>
            <div class="flex justify-center lg:justify-start mt-6">
                <a href="{{ route('admin.index') }}" class="hover:bg-indigo-700 hover:text-white hover:-translate-y-1 transition-all duration-500 bg-black text-white mt-4 px-4 py-2 rounded-2xl font-bold mb-2">Back To Dashboard</a>
            </div>
          </div>
        </div>
        <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
            <div class="w-full px-8 md:px-32 lg:px-24">


                
        <form method="POST" action="{{ route('adminStudent.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center">Hello Admin!</h1>
            <p class="text-sm font-normal text-gray-600 mb-8 text-center">Welcome Back</p>
            <div class="mb-4 flex">
            <div class="flex flex-col w-1/2 mr-4">
                <label for="name" class="block font-medium mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>
            <div class="flex flex-col w-1/2">

                <label for="email" class="block font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>
            </div>


            <div class="mb-4 flex">
            <div class="flex flex-col w-1/2 mr-4">
                
                <label for="password" class="block font-medium mb-2">Password</label>
                <input type="password" name="password" id="password" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>
            <div class="flex flex-col w-1/2">
                <label for="role" class="block font-medium mb-2">Role</label>
                <select name="role" id="role" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="admin">Student</option>
                </select>
            </div>

            </div>


            <div class="mb-4 flex">
                <div class="flex flex-col w-1/2 mr-4">

                <label for="nom_admin" class="block font-medium mb-2">Student UserName</label>
                <input type="text" name="nom_admin" id="nom_admin" value="{{ old('nom_admin') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="flex flex-col w-1/2">

                <label for="cne" class="block font-medium mb-2">CNE</label>
                <input type="text" name="cne" id="cne" value="{{ old('cne') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
            </div>



            <div class="mb-4 flex">
                <div class="flex flex-col w-1/2 mr-4">
                <label for="nom_etu" class="block font-medium mb-2">Student Name</label>
                <input type="text" name="nom_etu" id="nom_etu" value="{{ old('nom_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="flex flex-col w-1/2">

                <label for="prenom_etu" class="block font-medium mb-2">Student Last_Name</label>
                <input type="text" name="prenom_etu" id="prenom_etu" value="{{ old('prenom_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
            </div>

            <div class="mb-4 flex">
                <div class="flex flex-col w-1/2 mr-4">
                <label for="dateN_etu" class="block font-medium mb-2">Student Birth_Date</label>
                <input type="date" name="dateN_etu" id="dateN_etu" value="{{ old('dateN_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="flex flex-col w-1/2">
                    <label for="villeN_etu" class="block font-medium mb-2">Student Birth_City</label>
                    <input type="text" name="villeN_etu" id="villeN_etu" value="{{ old('villeN_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
            </div>

            <div class="mb-4 flex">
                <div class="flex flex-col w-1/2 mr-4">
                <label for="ville_etu" class="block font-medium mb-2">Student City</label>
                <input type="text" name="ville_etu" id="ville_etu" value="{{ old('ville_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="flex flex-col w-1/2">
                    <label for="adresse_etu" class="block font-medium mb-2">Student Address</label>
                    <input type="text" name="adresse_etu" id="adresse_etu" value="{{ old('adresse_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
            </div>

            
            <div class="mb-4 flex">
                <div class="flex flex-col w-1/2 mr-4">
                <label for="email_etu" class="block font-medium mb-2">Student Email</label>
                <input type="email" name="email_etu" id="email_etu" value="{{ old('email_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="flex flex-col w-1/2">
                <label for="phone_etu" class="block font-medium mb-2">Student Phone</label>
                <input type="text" name="phone_etu" id="phone_etu" value="{{ old('phone_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>

            </div>
            <div class="mb-4">
                <label for="photo_etu" class="block font-medium mb-2">Student Photo</label>
                <input type="file" name="photo_etu" id="photo_etu" value="{{ old('photo_etu') }}" class="w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>

            
            <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Create Student</button>

        </form>
    </div>
              
</div>
</div>

<style>
.login_img_section {
background: linear-gradient(rgba(2,2,2,.7),rgba(0,0,0,.7)),url(https://myviewboard.com/blog/wp-content/uploads/2020/08/MP0027-01-scaled.jpg) center center;
background-size: cover;
}
</style>