@extends('admin.layouts.index')
@section('title_header', 'Создать новую категорию')
@section('title', 'Создать категорию')

@section('content')
<form method="POST" action="{{route('categories.store')}}">
@csrf
                <div class="card-body">
        
                    <div class="form-group">
                        <label for="title">Название категории</label>
                        <input type="text" class="form-control @error('title'){{'is-invalid'}}@enderror" id="title" placeholder="Введите название категории" name="title">

                        @error('title')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>          

                
                  
               

                  <div class="form-group" style="width: 25%">
                        <label>Отображение категории</label>
                        <select class="form-control @error('show'){{'is-invalid'}}@enderror" name="show">
                          <option selected value="1">Отображать</option>
                          <option value="0">Скрыть</option>
                        </select>

                     @error('show')<div class="invalid-feedback">{{$message}}</div>@enderror

                    </div>
                
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Создать</button>
                </div>
              </form>
@endsection

@section('section_scripts')
<script>


</script>
@endsection