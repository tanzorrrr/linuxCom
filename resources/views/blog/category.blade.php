@extends('layouts.app')

@section('title', $category->title."title")


@section('content')
    <div class="container">
        @foreach($articles as $article)
        <div class="row">
            <div class="col-sm-12">

                <h2><a href="{{route('article',$article->slug)}}">bnnngn{{$article->title}}</a></h2>
                <p>{!! $article->description_short!!}</p>
            </div>
        </div>
          @if(!$articles)
              <h2>Empty</h2>
            @endif

        @endforeach
        {{$articles->links()}}

    </div>
@endsection