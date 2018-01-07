@extends('layouts.app')

@section('title',$article->meta_title)
@section('meta_keyword',$article->meta_keyword)
@section('meta_description',$article->meta_description)

@section('content')
    <div class="container">
        <div class="row col-sm-12">
            <h1>{{$article->title}}</h1>
            <p>{!!$article->description !!}</p>
        </div>
    </div>
    @endsection