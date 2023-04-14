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
              <form method="POST" action="{{ route('adminModul.store') }}" class="bg-white rounded-md p-5">
                @csrf
                <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center">Hello Admin!</h1>
                <p class="text-sm font-normal text-gray-600 mb-8 text-center">Welcome Back</p>
                <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>

                  <input id="name_modul" class=" pl-2 w-full outline-none border-none" type="text" name="name_modul" placeholder="Name" />
                </div>
                
                <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Create Modules</button>

                
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