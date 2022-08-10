<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Page') }} : {{ $page->slug }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl w-1/2 mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between">
            <div>
                <p class="text-2xl font-bolder my-2">
                    {{ $page->title }} <span class="text-sm text-gray-500">({{ $page->slug }})</span>
                </p>
            </div>

            <div wire:click="back" class="flex items-center text-gray-500 cursor-pointer hover:text-gray-900">
                back
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-4">
                <div class="border border-gray-200 p-6 rounded-lg">
                    <p class="leading-relaxed text-base">{{ $page->content }}</p>
                </div>
            </div>
        </div>

        <livewire:pages.create :page="$page" />
    </div>
</div>
