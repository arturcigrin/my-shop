@extends('admin.layouts.index')
@section('title_header', 'Все категории')
@section('title', 'Все категории')

@section('content')
    <div class="card-body">
            @if(count($categories))
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#id</th>
                      <th>Наименование категории</th>
                      <th>Slug</th>
                      <th>Действия</th>
                    </tr>
                  </thead>
                  <tbody id="categories">
                  @foreach($categories as $category)
                    <tr>
                      <td>{{$category->id}}</td>
                      {{-- {{dd()}} --}}
                      <td><a href="{{route('products.category', ['nameCategory'=>$category->slug, 'id'=> $category->id])}}">{{$category->title}}</a></td>
                      <td>{{$category->slug}}</td>
                      <td>
                       <a href="{{route('categories.edit', ['category'=> $category->id])}}" class="badge bg-warning categories" title="Редактировать категорию" style="margin-right: 3%">
                        <i class="fas fa-pencil-alt"></i>
                      </a>

                      <form style="display: inline-block;" action="{{route('categories.destroy', ['category'=> $category->id])}}" method="post">
                      @csrf 
                      @method('DELETE')
                        <button  data-btndelete="delete" type="submit" class="badge bg-danger categories" title="Удалить категорию">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                      </form>
                    

                      </td>
                    </tr>
                    <tr>
                   @endforeach
                  </tbody>
                </table>
              

              @else
                <p><b>Категорий нет ...</b></p>

                <a href="{{route('categories.create')}}">Создать категорию</a>
              @endif
              </div>


@endsection

<style>
.categories {
    width:30px;
    cursor: pointer;
}

.fa-trash-alt,.fa-pencil-alt {
    font-size: 18px;
}
</style>

@section('section_scripts')
 <script>
 const tbodyEl = document.querySelector('#categories');

if(tbodyEl) {

  tbodyEl.addEventListener('click', e => {
    if(e.target.closest('[data-btndelete]')) {
        if(confirm('Удалить категорию?')) return true;

        e.preventDefault();
    }

})

}


</script>
@endsection
