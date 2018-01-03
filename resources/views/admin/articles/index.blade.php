@extends('admin.layouts.app')

@section('content')
    <div class="container">
        @component('admin.components.breadcrump')
            @slot('title')Create article @endslot
            @slot('parent')Main @endslot
            @slot('active')Article @endslot
        @endcomponent
        <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square-o"></i>Create article</a>
        <table width="100%">
            <thead>
            <th>Title</th>
            <th>Publicted</th>
            <th>Ection</th>
            <th>delite</th>
            </thead>
            <tbody>
            @forelse($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->published}}</td>
                    <td><a href="{{route('admin.article.edit',$article)}}" >edit</a>
                    </td>
                    <td>
                        <form onsubmit="if(confirm('delete?')){return true}else{return false}"
                              action="{{route('admin.article.destroy',$article)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{csrf_field()}}
                            <button type="submit" class="btn"><i class="fa fa-trash-o">X</i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    @empty
                        <td colspan="3" class="text-center"><h2>No data</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$articles->links()}}

                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection