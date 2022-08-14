<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Page') }} : {{ $page->slug }}
    </h2>
</x-slot>

<div class="md:py-10 md:px-24 flex md:flex-row flex-col md:space-x-5 space-y-5 w-full">
    <div class="md:w-3/5 w-full mt-5">
        <div class="flex justify-between md:px-0 px-2">
            <div>
                <p class="text-2xl font-bolder my-2 flex items-center">
                    {{ $page->title }} <span class="text-sm text-gray-500 ml-1">({{ $page->slug }})</span>
                </p>
            </div>

            <div wire:click="back" class="flex items-center text-gray-500 cursor-pointer hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>

                <span class="ml-0.5">Back</span>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-4">
                <div class="border border-gray-200 p-6 rounded-lg">
                    <p class="leading-relaxed text-base">{{ $page->content }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="md:w-2/5 w-full">
        <livewire:pages.create :page="$page" />
    </div>
</div>
