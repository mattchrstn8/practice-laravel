<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('inventory.store') }}">
            @csrf
            <div class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"> 
                <x-primary-button class="mt-4">{{ __('Add Stocks') }}</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>