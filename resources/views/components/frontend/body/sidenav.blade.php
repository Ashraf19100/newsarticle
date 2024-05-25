@php 

$categories = App\Models\Category::orderBy('id','asc')->get();

@endphp                  
      <div class="col-lg-4">
                    <!-- Search widget-->
                    
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="col-sm-12 nav-item dropdown">
                                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                        <i class="align-middle" data-feather="settings"></i>
                                    </a>
                                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                    <span class="text-dark">Categories</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        @foreach($categories as $categories)
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{route('newsarticle.browse',$categories->id)}}">{{$categories->category_name}}</a>
                                        @endforeach
                                    </div>
                                </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    
                </div>