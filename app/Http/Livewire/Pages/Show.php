<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page;
use Livewire\Component;

class Show extends Component
{
    public $page;

    public function mount($page)
    {
        $pageLinks = explode('/', $page);

        $this->page = Page::query()->find(last($pageLinks));

        if (!$this->page) {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.pages.show');
    }

    public function back()
    {
        $this->redirectRoute('pages.index');
    }
}
