<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page;
use Livewire\Component;

class Index extends Component
{
    public $pages;

    protected $listeners = [
        'refresh-pages' => '$refresh'
    ];

    public function render()
    {
        $this->pages = Page::with('childrenRecursive')->whereNull('parent_id')->get();

        return view('livewire.pages.index');
    }
}
