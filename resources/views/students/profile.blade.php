@include('navbarStudent')






<div class="flex flex-col items-center justify-center mt-20">
    <h1 class="text-3xl font-bold text-gray-800">
        Your Profile Mohamed !! 
    </h1>
</div>

<!-- component -->
<div>
    <div class="rounded-tl-3xl rounded-tr-3xl overflow-hidden shadow-xl max-w-md my-3 bg-white-500 mx-auto mt-10">
        <img src="https://w0.peakpx.com/wallpaper/666/961/HD-wallpaper-anime-jujutsu-kaisen-satoru-gojo.jpg" class="w-full h-[190px]" />
        <div class="flex justify-center items-center -mt-8 w-[100px] mx-auto">
          <img src="https://i.pinimg.com/originals/7a/30/f3/7a30f3c1af0844b1e6b6c51f674db909.jpg" class="rounded-full border-solid border-white border-2 -mt-3">		
        </div>
        <div class="text-center px-3 pb-6 pt-2">
          <h3 class="text-sm bold font-sans text-black">Mohamed-Amine Majidi</h3>
          <p class="mt-2 font-sans font-light text-black">mohashark21@gmail.com</p>
        </div>
        <div class="flex justify-center pb-3 text-white">
          <button class="w-36 h-10 bg-gray-900 rounded-full text-white hover:bg-gray-700" onclick="toggleCard()">More information</button>
        </div>
        <div id="additional-info" class="hidden text-center px-3 pb-6 pt-2">
          <p class="mt-2 font-sans font-light text-black">Additional information goes here...</p>
        </div>
      </div>
      
      <script>
        function toggleCard() {
          const card = document.getElementById('additional-info');
          card.classList.toggle('hidden');
          card.classList.toggle('transition');
        }
      </script>
      
    
    <div class="flex flex-col items-center justify-center mt-16 mb-16">
        <h1 class="text-3xl font-bold text-gray-800">
            Absence INFO
        </h1>
    </div>



    <div class="px-4 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Moduls
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Classe Time
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Start Time
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        End Time
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        ???
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        justify
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Comment
                    </th>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Laravel
                                </p>
                            </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">2023/04/04</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            09:30
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            04:30
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                           ?????
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                           Yes
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            Justification Success
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Laravel
                                </p>
                            </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">2023/04/04</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            09:30
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            04:30
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                           ?????
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                           Yes
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            Justification Success
                        </p>
                    </td>
                </tr>



            </tbody>
        </table>

    </div>
    

</div>