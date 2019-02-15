@foreach ($sidebars as $sidebar)
    <div class="side"><!--Start bside 1-->
    <h2 style="text-transform: uppercase;">{{$sidebar->title}}</h2>
    <ul class="ul_side">
        @foreach ($categorys_2 as $category_2)
            @if ($category_2->idSidebar == $sidebar->id)
                <li><a style="color:#FF4500;" href='{{ route('home.detail',$category_2->slug) }}'>{{$category_2->title}}</a></li>
            @endif
        @endforeach
        @foreach ($categorys as $category)
            @if ($category->idSidebar == $sidebar->id)
                <li><a href='{{ route('home.Quesetion',$category->slug)}}'>{{$category->title}}</a></li>
            @endif
        @endforeach
    </ul>   
    </div> <!--end bside 1-->
@endforeach
