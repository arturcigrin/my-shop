@extends('admin.layouts.index')
@section('title_header', 'Создать/Добавить подкатегорию')
@section('title', 'Подкатегории')


@section('content')
@php

    function rec($listCategories) {
    echo "<ol>";

        foreach($listCategories as $category) {
            if(!count($category['childs'])) {
                echo "<li>". $category['title'] ."</li>";
            } else {
                 echo "<li>". $category['title'] ."</li>";
                 rec($category['childs']);
            }
        }
    echo "</ol>";

    }

         rec($categories);

@endphp



<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('subcategory.store')}}" method="post">
                @csrf
            </form>
        </div>
    </div>
</div>

@endsection