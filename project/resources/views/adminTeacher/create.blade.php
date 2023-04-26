@vite('resources/css/app.css')


<div class="h-screen flex">
    <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
        <div class="bg-black opacity-20 inset-0 z-0">

        </div>
        <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
            <h1 class="text-white font-bold text-4xl font-sans">Insertion</h1>
            <p class="text-white mt-1">Insert Etedient</p>
            <div class="flex justify-center lg:justify-start mt-6">
                <a href="{{ route('admin.index') }}"
                    class="hover:bg-indigo-700 hover:text-white hover:-translate-y-1 transition-all duration-500 bg-black text-white mt-4 px-4 py-2 rounded-2xl font-bold mb-2">Back
                    To Dashboard</a>
            </div>
        </div>
    </div>
    <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
        <div class="w-full px-8 md:px-32 lg:px-24">

            <form method="POST" action="{{ route('adminTeacher.store') }}" enctype="multipart/form-data">                @csrf
                <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center">Hello Admin!</h1>
                <p class="text-sm font-normal text-gray-600 mb-8 text-center">Welcome Back</p>
                

                <div class="mb-4 flex">
                    <div class="flex flex-col w-1/2 mr-4">

                        <label for="email" class="block font-medium mb-2">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            required>
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col w-1/2">


                        <label for="password" class="block font-medium mb-2">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            required>
                        @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label for="name" class="block font-medium mb-2">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        required>
                    @error('name')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>



                

                <div class="mb-4 flex">
                    <div class="flex flex-col w-1/2 mr-4">

                        <label for="nom_ens" class="block font-medium mb-2">Teacher Name</label>
                        <input type="text" name="nom_ens" id="nom_ens" value="{{ old('nom_ens') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            required>
                        @error('nom_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col w-1/2">
                        <label for="prenom_ens" class="block font-medium mb-2">Teacher Surname</label>
                        <input type="text" name="prenom_ens" id="prenom_ens" value="{{ old('prenom_ens') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            required>
                        @error('prenom_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="role" class="block font-medium mb-2">Role</label>
                    <select name="role" id="role"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        required>
                        <option value="Teacher">Teacher</option>
                    </select>
                    @error('role')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4 flex">
                    <div class="flex flex-col w-1/2 mr-4">
                        <label for="adress_ens" class="block font-medium mb-2">Teacher Address</label>
                        <input type="text" name="adress_ens" id="adress_ens" value="{{ old('adress_ens') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            required>
                        @error('adress_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col w-1/2">
                        <label for="ville_ens" class="block font-medium mb-2">Teacher City</label>
                        <input type="text" name="ville_ens" id="ville_ens" value="{{ old('ville_ens') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            required>
                        @error('ville_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="mb-4">
                    <label for="photo_ens" class="block font-medium mb-2">Teacher Photo</label>
                    <input type="file" name="photo_ens" id="photo_ens"
                        class="w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        required>
                    @error('photo_ens')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4 flex">
                    <div class="flex flex-col w-1/2 mr-4">
                        <label for="email_ens" class="block font-medium mb-2">Teacher Email</label>
                        <input type="email" name="email_ens" id="email_ens" value="{{ old('email_ens') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            required>
                        @error('email_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col w-1/2">
                        <label for="phone_ens" class="block font-medium mb-2">Teacher Phone</label>
                        <input type="text" name="phone_ens" id="phone_ens" value="{{ old('phone_ens') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            required>
                        @error('phone_ens')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>



                    <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Create Teacher</button>

            </form>
        </div>

    </div>
</div>

<style>
    .login_img_section {
        background: linear-gradient(rgba(2, 2, 2, .7), rgba(0, 0, 0, .7)), url(https://myviewboard.com/blog/wp-content/uploads/2020/08/MP0027-01-scaled.jpg) center center;
        background-size: cover;
    }
</style>
