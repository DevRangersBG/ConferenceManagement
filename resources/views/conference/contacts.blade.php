<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-center my-4"><b>{{ __("Contacts with the organizing committee:") }}</b></p>
                    <p class="text-center">{{ __("1504 Sofia") }}</p>
                    <p class="text-center">{{ __("82 Evlogi & Hristo Georgievi Blvd.") }}</p>
                    <p class="text-center">{{ __("Rakovski National Defence College") }}</p>
                    <p class="text-center"><a href="mailto:ncva@rndc.bg" class="text-blue-500 hover:text-blue-700"> ncva@rndc.bg</a></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
