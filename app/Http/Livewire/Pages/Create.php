<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Create extends Component
{
    public $page;
    public $slug, $title, $content;

    public function render()
    {
        return view('livewire.pages.create');
    }

    public function addPage()
    {
        $validated = $this->validate([
            'slug'    => ['required', 'string', 'max:255'],
            'title'   => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:1000'],
        ]);

        if ($this->page) {
            $validated['parent_id'] = $this->page->id;
        }

        Page::query()->create($validated);

        $this->emit('refresh-pages');

        $this->reset();
    }
}
