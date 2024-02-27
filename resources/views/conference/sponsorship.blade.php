<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sponsorship') }}
        </h2>

    </x-slot>
 

        <div class='flex flex-col items-center '>
 <button type="button" class="text-xl w-60 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900 my-8">
<a href={{ __('Platinium-link') }} target="_blank">{{ __('Platinium Package') }}</a>
</button>

<button type="button" class="text-xl w-60 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900 my-8">
<a href={{ __('Gold-link') }} target="_blank">{{ __('Gold Package') }}</a>
</button>

<button type="button" class="text-xl w-60 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900 my-8">
<a href={{ __('Silver-link') }} target="_blank" >{{ __('Silver Package') }}</a>
</button>

<button type="button" class="text-xl w-60 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900 my-8">
<a href={{ __('Bronze-link') }} target="_blank">{{ __('Bronze Package') }}</a>
</button>

</div>

</x-app-layout>


