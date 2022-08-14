<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Pages') }}
    </h2>
</x-slot>

<div class="md:py-10 md:px-24 flex md:flex-row flex-col md:space-x-5 space-y-5">
    <div class="md:w-3/5 w-full mt-5">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-3 py-5">
            @include('partials.pages', ['pages' => $pages, 'link' => ''])
        </div>
    </div>

    <div class="md:w-2/5 w-full">
        <livewire:pages.create />
    </div>
</div>
