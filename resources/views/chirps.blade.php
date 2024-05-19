<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-yellow-500 leading-tight container mx-auto pt-16">
            {{ __('Chirps 🐤') }}
        </h2>
    </x-slot>
    <div class="max-w-2xl max-auto p-4 sm:p-6 lg:p-8">
        <livewire:chirps.create/>
        <livewire:chirps.list/>
    </div>
</x-app-layout>