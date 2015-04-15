<ol class="breadcrumb">
    @foreach ($category->getAncestors() as $ancestor)
        <li>
            <a href="{{ route('categories.show', [ $ancestor->getKey() ]) }}">
                {{ $ancestor->title }}
            </a>
        </li>
    @endforeach

    <li class="active">{{ $category->title }}</li>
</ol>