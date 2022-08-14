<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use App\Http\Livewire\Pages\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreatePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_parent_page_successfully()
    {
        $this->actingAs(User::factory()->create());

        $data = [
            'slug'    => 'test',
            'title'   => 'test title',
            'content' => 'this is test descriptive content'
        ];

        $component = Livewire::test(Create::class)
            ->set('slug', $data['slug'])
            ->set('title', $data['title'])
            ->set('content', $data['content'])
            ->call('createPage');

        //no exception
        $component->assertSuccessful();

        //page created
        $this->assertDatabaseHas('pages', $data);

        //assert event fired
        $component->assertEmitted('refresh-pages');

        //reset fields
        $this->assertEquals(null, $component->get('slug'));
        $this->assertEquals(null, $component->get('title'));
        $this->assertEquals(null, $component->get('content'));
    }

    public function test_all_field_required_to_create_page()
    {
        $this->actingAs(User::factory()->create());

        $data = [
            'slug'    => '',
            'title'   => '',
            'content' => ''
        ];

        Livewire::test(Create::class)
            ->set('slug', $data['slug'])
            ->set('title', $data['title'])
            ->set('content', $data['content'])
            ->call('createPage')
            ->assertHasErrors(['slug' => 'required', 'title' => 'required', 'content' => 'required']);
    }

    public function test_slug_title_and_content_should_not_exceed_character_limit()
    {
        $this->actingAs(User::factory()->create());

        $data = [
            'slug'    => 'slug contains more than 255 characters...................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................',
            'title'   => 'test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. test title. ',
            'content' => 'this is test descriptive content.this is test descriptive content.this is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive contentthis is test descriptive content'
        ];

        Livewire::test(Create::class)
            ->set('slug', $data['slug'])
            ->set('title', $data['title'])
            ->set('content', $data['content'])
            ->call('createPage')
            ->assertHasErrors(['slug' => 'max', 'title' => 'max', 'content' => 'max']);
    }
}
