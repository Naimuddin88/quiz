<ul>
    @if(count($categories) > 0)
            @foreach ($categories as $category)
            <li> {{ $category->title }} </li>


            <ul>
                @if(count($category->childCategories))
                @foreach ($category->childCategories as $subCategories)
                <li>{{ $subCategories->title }}</li>

            <ul>
                        @if(count($subCategories->categories) > 0)
                        @foreach ($subCategories->categories as $subCategories)
                        <li> {{ $subCategories->title }} </li>
                    @endforeach
                    @endif
            </ul>


                @endforeach
                @endif
            </ul>
            @endforeach
    @endif
</ul> 