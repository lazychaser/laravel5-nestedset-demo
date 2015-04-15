@unless ($categories->isEmpty())
    <ul class="category-tree">
        @foreach ($categories as $category)
            <li>
                <span class="actions">
                    <a href="{{ route('categories.edit', [ $category->getKey() ]) }}" title="Edit this category">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>

                    <a href="{{ route('categories.create', [ 'parent_id' => $category->getKey() ]) }}" title="Create child">
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </span>

                <a href="{{ route('categories.show', [ $category->getKey() ]) }}" class="title">
                    {{ $category->title }}
                </a>

                @include('categories.partials.tree', [ 'categories' => $category->children ])
            </li>
        @endforeach
    </ul>
@endunless