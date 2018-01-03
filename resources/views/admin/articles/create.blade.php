@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @component('admin.components.breadcrump')
                @slot('title')Create news @endslot
                @slot('parent')Main @endslot
                @slot('active')News @endslot
            @endcomponent
            <hr>
            <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{--Form incluse--}}
                @include('admin.articles.partials.form')
                <input type="hidden" name="created_by">

            </form>
        </div>
    </div>
@endsection