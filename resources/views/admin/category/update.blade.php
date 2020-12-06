@extends('admin.layouts.index')
@section('title_header', 'Редактировать категорию')
@section('title', 'Редактировать категорию')

@section('content')
<form method="POST" action="{{route('categories.update', ['category'=> $category->id])}}">
@csrf
@method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Название категории</label>
                    <input type="text" class="form-control @error('title'){{'is-invalid'}}@enderror" id="title" value="{{$category->title}}" name="title">

                    @error('title')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </div>

                  <div class="form-group" style="width: 25%">
                        <label>Отображение категории</label>
                        <select class="form-control @error('show'){{'is-invalid'}}@enderror" name="show">
                          <option @if($category->show) {{'selected'}} @endif  value="1">Отображать</option>
                          <option @if(!$category->show)  {{'selected'}}  @endif value="0">Скрыть</option>
                        </select>

                     @error('show')<div class="invalid-feedback">{{$message}}</div>@enderror

                      </div>
                
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Редактировать</button>
                </div>
              </form>
@endsection
