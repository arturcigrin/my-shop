 <div class="col">
                        <!-- Nav -->
                        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                            <!-- Navigation -->
                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                <ul class="navbar-nav u-header__navbar-nav">
                                    <!-- Home -->
                                 
                                    <!-- End Home -->

                                    <!-- Featured Brands -->
                                    @foreach($categories as $category)
                                     <li class="nav-item u-header__nav-item">
                                        <a class="nav-link u-header__nav-link" href="#" aria-haspopup="true"
                                            aria-expanded="false" aria-labelledby="pagesSubMenu">{{$category->title}}</a>
                                    </li>
                                    @endforeach
                        
                                </ul>
                            </div>
                            <!-- End Navigation -->
                        </nav>
                        <!-- End Nav -->
                    </div>