<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
          
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                                         <!--{{ __("You're logged in!") }} -->
                            <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
                                <div class="text-2xl py-4 px-6 bg-blue-500 text-white text-center font-style: italic uppercase">
                                           Participation form
                                        </div>
                                    <form class="py-4 px-6" action="" method="GET">


                                              <!--First Name -->
                                        <div class="relative z-0 w-full mb-5 group">
                                            <input type="name" name="floating_first_name" id="floating_first_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required />
                                            <label for="floating_first_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                                            name</label>
                                        </div>
                                            
                                              <!--Sure Name -->
                                            <div class="relative z-0 w-full mb-5 group">
                                                <input type="name" name="floating_sure_name" id="floating_sure_name"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-dark dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" " required />
                                                <label for="floating_sur_name"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Surname</label>
                                            </div>
                                             

                                                <!--Last Name -->                                          
                                            <div class="relative z-0 w-full mb-5 group">
                                                <input type="name" name="floating_last_name" id="floating_last_name"
                                                 class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-dark dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" " required />
                                                <label for="floating_first_name"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                                                name</label>
                                            </div>

                                                  <!--Email --> 
                                            <div class="relative z-0 w-full mb-5 group">
                                               <input type="email" name="floating_email" id="floating_email"
                                               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-dark dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                               placeholder=" " required />
                                               <label for="floating_email"
                                               class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                               address</label>
                                            </div>
                                            
                                                  <!--Phone number --> 
                                            <div class="relative z-0 w-full mb-5 group">
                                               <input type="phone" name="floating_phone" id="floating_phone"
                                               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-dark dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                               placeholder=" " />
                                               <label for="floating_phone"
                                               class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number
                                               </label>
                                            </div>

                                               <!--Participants --> 
                                            <div class="relative z-0 w-full mb-5 group">
                                              <form class="max-w-sm mx-auto">
                                              <label for="participants"
                                              class="block py-2.5 px-0 w-full text-sm text-gray-500 dark:text-gray-400">I will participate in the conference as:</label>
                                              <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                              <option selected>Author/co-author</option>
                                              <option >Participant without a presentation</option>
                                              <option >Trainee</option>
                                              </select>
                                              </form>
                                            </div>
                                            
                                    </form>
                                    <form class="py-4 px-6" action="" method="GET">
 
                                                 <!--Report title --> 
                                            <div class="relative z-0 w-full mb-5 group">
                                               <input type="report_title" name="floating_report_title" id="report_title"
                                               class="block py-4 px-0  w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-dark dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                               placeholder=" " />
                                               <label for="report_title"
                                               class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Report/article title in Bulgarian language:
                                               </label>
                                            </div>
                                            
                                                  <!--Attach report -->
                                            <div class="relative z-0 w-full mb-5 group">
                                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400" id="file_input_help">Attach your report/article (for authors only, up to 2 MB) in Word</p>
                                                <label for="uploadFile1"
                                                
                                                       class="bg-white text-center rounded w-full sm:w-[360px] min-h-[160px] py-4 px-4 flex flex-col items-center justify-center cursor-pointer border-2 border-gray-300 mx-auto font-[sans-serif] m-4">
                                                       <svg xmlns="http://www.w3.org/2000/svg" class="w-8 mb-6 fill-gray-400" viewBox="0 0 24 24">
                                                           <path
                                                           d="M22 13a1 1 0 0 0-1 1v4.213A2.79 2.79 0 0 1 18.213 21H5.787A2.79 2.79 0 0 1 3 18.213V14a1 1 0 0 0-2 0v4.213A4.792 4.792 0 0 0 5.787 23h12.426A4.792 4.792 0 0 0 23 18.213V14a1 1 0 0 0-1-1Z"
                                                           data-original="#000000" />
                                                           <path
                                                           d="M6.707 8.707 11 4.414V17a1 1 0 0 0 2 0V4.414l4.293 4.293a1 1 0 0 0 1.414-1.414l-6-6a1 1 0 0 0-1.414 0l-6 6a1 1 0 0 0 1.414 1.414Z"
                                                           data-original="#000000" />
                                                       </svg>
                                                       <p class="text-gray-400 font-semibold text-sm">Drag & Drop or <span class="text-[#007bff]">Choose file</span> to
                                                           upload</p>
                                                       <input type="file" id='uploadFile1' class="hidden" />
                                                       <p class="text-xs text-gray-400 mt-2">Only Word documents are allowed.</p>
                                                       </label>
                                                   
                                            </div>

                                                 <!--Abstract of the report -->
                                            <div class="relative z-0 w-full mb-5 group">
                                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400" id="file_input_help">Abstract of the report in Bulgarian language, 100 to 150 words (mandatory for authors):</p>
                                                <textarea class="custom-textarea"></textarea>

                                            </div>
                                                   <!--Keywords -->
                                            <div class="relative z-0 w-full mb-5 group">
                                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400" id="file_input_help">Keywords (mandatory for authors):</p>
                                                <textarea class="custom-textarea"></textarea>

                                            </div>

                                               <!--Thematic ares you wish to participate in -->
                                            <div class="relative z-0 w-full mb-5 group">
                                              <form class="max-w-sm mx-auto">
                                              <label for="participants"
                                              class="block py-2.5 px-0 w-full text-sm text-gray-500 dark:text-gray-400">Thematic areas you wish to participate in:</label>
                                              <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                              <option selected>Policies, strategies, leadership</option>
                                              <option >Research, analysis, forecasts</option>
                                              <option >Operational compatibility</option>
                                              </select>
                                              </form>
                                            </div>

                                                  <!--Receive a certificate-Yes or No -->
                                            <div class="relative z-0 w-full mb-5 group">
                                              <form class="max-w-sm mx-auto">
                                              <label for="participants"
                                              class="block py-2.5 px-0 w-full text-sm text-gray-500 dark:text-gray-400">Do you wish to receive a certificate of participation in the conference?:</label>
                                              <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                              <option selected>Yes</option>
                                              <option >No</option>
                                              </select>
                                              </form>
                                            </div>

                                              <!--Submit button -->
                                            <div class="flex flex-col items-center">
                                              <button class="relative  inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium font-style: italic text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                                              <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                              SUBMIT
                                              </span>
                                              </button>
                                            </div>







                                            



                                     
                                    </form>






                                     
                                            

                                
                                                

                                </div >
                            </div >   
            </div>
        </div>
    </div>
</x-app-layout>
