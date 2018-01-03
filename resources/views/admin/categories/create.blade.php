@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @component('admin.components.breadcrump')
                @slot('title')Create category @endslot
                @slot('parent')Main @endslot
                @slot('active')Categories @endslot
            @endcomponent
            <hr>
            <form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{--Form incluse--}}
                @include('admin.categories.partials.form')

            </form>
        </div>
    </div>
@endsection