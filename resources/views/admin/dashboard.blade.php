@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <div class="label label-primary">Категории</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <div class="label label-primary">Материалы</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <div class="label label-primary">пользователи</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <div class="label label-primary"> псетителей сегодня</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-default">Создать категорию</a>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item-heading">Категрия первая</h4>
                    <p class="list-group-item-text">Материалы</p>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-default">Создать матириал</a>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item-heading">Материал первый</h4>
                    <p class="list-group-item-text">Категория</p>
                </a>
            </div>
        </div>
    </div>
    @endsection