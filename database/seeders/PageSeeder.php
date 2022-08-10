<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createParentPages();
    }

    public function createParentPages()
    {
        Page::factory()->count(2)->hasChildren(2)->create();
    }
}
