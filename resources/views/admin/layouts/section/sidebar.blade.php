   <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Артур Чигрин</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               <br /> with font-awesome or any other icon font library -->
               {{-- Категории --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-cat nav-icon"></i>
              <p>
                Категории
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('categories.index')}}" class="nav-link">
                  <i class="far fa-list-alt nav-icon"></i>
                  <p>Все категории</p>
                </a>
              </li>

                 {{-- <li class="nav-item">
                <a href="{{route('subcategory.index')}}" class="nav-link">
                  <i class="far fa-list-alt nav-icon"></i>
                  <p>Подкатегории</p>
                </a>
              </li> --}}
          
              <li class="nav-item">
                <a href="{{route('categories.create')}}" class="nav-link">
                  <i class="far fa-plus-square  nav-icon"></i>
                  <p>Создать категорию</p>
                </a>
              </li>
            </ul>
          </li>

{{--  --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-server nav-icon"></i>
              <p>
                Товары
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            

               
            </ul>
          </li>
     
            </ul>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>