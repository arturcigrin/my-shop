@extends('admin.layouts.index')
@section('title', $category->title)
@section('title_header', $category->title)

@section('content')
<div class="container">
      <div class="row">
          <div class="col-12">
        @if(count($category->products))
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Товары категории</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                  <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Артикул</th>
                      <th>Наименование</th>
                      <th>Thumbnail</th>
                   
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($category->products as $product)
                    <tr>
                      <td>{{$product->vendor_code}}</td>
                      <td ><a href="#">{{$product->title}}</a></td>
                      <td><div><img style="height: 45px" src="{{asset('storage/categories/matrasi/vozvrat.png')}}" alt="{{$product->title}}"></div></td>
                      
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            @else 
                <h6>В этой категории нет товаров.</h6>
                {{-- <a href="{{route('product.create')}}">Cоздать товар</a> --}}
            @endif

        </div>
     </div>
  </div>
@endsection