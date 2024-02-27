<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accommodation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>{{ __('We recommend the following hotels for reservations within walking distance of "G. S. Rakovski" Military Academy:') }}</p>

                    <ul class="list-disc my-10 text-justify">
                        <li>{{ __('Hotel Kapri Sofia/Perfect location – ') }} <a href="https://www.kaprisofia.eu/" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target="_blank">{{ __('Hotel Kapri Sofia') }}</a></li>
                        <li>{{ __('Crystal Palace Boutique Hotel - ') }} <a href="https://www.crystalpalace-sofia.com/" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target="_blank">{{ __('Crystal Palace Boutique Hotel') }}</a></li>
                        <li>{{ __('Oborishte 63 Boutique Hotel - ') }}<a href="https://oborishte63.com/" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target="_blank">{{ __('Oborishte 63 Boutique Hotel') }}</a></li>
                        <li>{{ __('Hyatt Regency Sofia - ') }}<a href="https://www.hyatt.com/en-US/hotel/bulgaria/hyatt-regency-sofia/sofrs" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target="_blank">{{ __('Hyatt Regency Sofia') }}</a></li>
                      

                        <p class="text-justify my-8"><b>{{ __('Contacts with the organizing committee:') }}</b></p>
                        <p class="text-justify">{{ __('Sofia 1504') }}</p>
                        <p class="text-justify">{{ __('bul. "Evlogi and Hristo Georgievi" No 82') }}</p>
                        <p class="text-justify">{{ __('Military Academy "G. S. Rakovski"') }}</p>
                        <p class="text-justify"><a href= "mailto:ncva@rndc.bg" class = "text-blue-500 hover:text-blue-700" > ncva@rndc.bg</a></p>
                </div>
            </div>
        </div>
    </div>
    
    </x-app-layout>
