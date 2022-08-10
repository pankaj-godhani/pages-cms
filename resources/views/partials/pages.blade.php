<ul>
    @foreach($pages as $page)
        @php $link .= '/'.$page->id @endphp
        <li>
            <a class="text-indigo-500 hover:underline" href="{{ '/pages'. $link }}">{{ $page->slug}}</a>

            @if (count($page->children) > 0)
                @include('partials.pages', ['pages' => $page->children, 'link' => $link])
            @endif
        </li>
    @endforeach
</ul>
