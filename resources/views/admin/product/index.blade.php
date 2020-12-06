@extends('admin.layouts.index')
@section('title', 'Все товары')
@section('title_header', 'Все товары')

@section('content')
<div class="container-fluid">
<div class="row">
@if(count($listCategories)) 
@foreach($listCategories as $category)
    <div class="col-md-3">
            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3  class="card-title"><a  href="{{route('products.category', ['category'=> $category['slug'], 'id'=> $category['id']])}}">{{$category['title']}}</a></h3>
              </div>
              <!-- /.card-header -->
           
            </div>
            <!-- /.card -->
          </div>

          @endforeach
  @else
   <h3  class="card-title">Товаров нет.</h3>
  @endif
  </div>
  </div>
@endsection
