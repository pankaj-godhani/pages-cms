<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 mt-5">
    <div class="border border-gray-200 p-6 rounded-lg">
        <div>
            <x-jet-label for="slug">{{ __('Slug') }}</x-jet-label>

            <x-jet-input class="border border-gray-300 h-8 mt-1 w-full p-2" wire:model="slug" required/>

            <x-jet-input-error for="slug" />
        </div>

        <div class="mt-4">
            <x-jet-label for="title">{{ __('Title') }}</x-jet-label>

            <x-jet-input class="border border-gray-300 h-8 mt-1 w-full p-2" wire:model="title" required/>

            <x-jet-input-error for="title" />
        </div>

        <div class="mt-4">
            <x-jet-label for="content">{{ __('Content') }}</x-jet-label>

            <textarea class="rounded border border-gray-300 mt-1 w-full p-2" rows="4" wire:model="content"></textarea>

            <x-jet-input-error for="content" />
        </div>

        <div class="flex justify-end w-full">
            <x-jet-button class="mt-4" wire:click="addPage">
                {{ __('Submit') }}
            </x-jet-button>
        </div>

        <x-jet-action-message class="mr-3 text-green-500" on="refresh-pages">
            {{ __('New page added successfully.') }}
        </x-jet-action-message>
    </div>
</div>
