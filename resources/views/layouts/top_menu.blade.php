



@foreach($categories as $category)

    @if($category->children->where('published',1)->count())
        <li class="dropdown">
            <a href="{{url("/blog/category/$category->slug")}}" class="dropdown-toggle"
            data-toggle="dropdown" role="booton" aria-expanded="false">
                {{$category->title}}<span class="carent"></span>
            </a>
            <ul class="dropdown" role="menu">
                {{--@include('layouts.top_menu',['$category'=>$category->children])--}}
            </ul>
            @else
                 <li>
                     <a href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
                     @endif
                 </li>
        @endforeach