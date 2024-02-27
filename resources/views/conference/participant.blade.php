<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Participant') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 sm:px-12 lg:px-14">
                    <h1 class = "text-2xl text-center my-8"><b>{{ __("INSTRUCTIONS FOR PREPARATION OF REPORTS") }}</b></h1>
                    <p>{{ __('The instructions are about publishing reports related to the scientific conference with international participation "20 years of Bulgaria in NATO and NATO in Bulgaria."') }}</p>
<p>{{ __("Each participant can participate with up to two reports at the Scientific Conference – as an author or as a co-author.") }}
{{ __("Reports are prepared in Word format, and each report should be no less than 6 pages and no more than 12 pages, with a recommended length of 20,000 characters including spaces.") }}</p>
<p>{{ __("Reports are submitted through the") }}  <a href="{{ route('dashboard', app()->getLocale()) }}"> <b> {{ __("registration form") }}  </b></a> </p>
 <p>{{ __('Deadline for submission of reports:') }} <b> {{ __('04.03.2024.') }} </b> {{ __('Reports will not be accepted after this date.') }}</p>
 <p>{{ __("These guidelines have been developed in accordance with the current BDS standard ISO 690:2021 (Guide to bibliographic references and citation of information sources).") }}</p>
                       <p>{{ __("The final program of the conference will be provided to the participants upon their registration.") }}</p>
                       <div class="mb-5 text-center">
                       <button type="button" class="text-xl focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900 my-8">{{ __("report template") }}</button>
                       <button type="button" class="text-xl focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900 my-8">{{ __("instructions for authors") }}</button>
                       <button type="button" class="text-xl focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900 my-8">{{ __("example layout") }}</button>
                       </div>
<p>{{ __("Reports are sent using the attached participation form. Papers that do not follow the submission instructions will not be accepted.") }}</p>
<h1 class = "text-2xl text-center my-8"><b>{{ __("LANGUAGES OF USE") }}</b></h1>
<p class = "text-center">{{ __("Bulgarian and English") }}</p>

                </div>
            </div>
        </div>
    </div> 
</x-app-layout>
