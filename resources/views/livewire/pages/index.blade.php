<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Pages') }}
    </h2>
</x-slot>

<div class="py-12 flex">
    <div class="sm:px-6 lg:px-8 w-3/5 mt-5">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            @include('partials.pages', ['pages' => $pages, 'link' => ''])
        </div>
    </div>

    <div class="sm:px-6 lg:px-8 w-2/5">
        <livewire:pages.create />
    </div>
</div>
