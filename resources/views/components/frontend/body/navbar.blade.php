@php 

$categories = App\Models\Category::orderBy('id','asc')->get();

@endphp
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 mb-4">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{route('frontend.index')}}">সর্বশেষ</a></li>
                        @foreach($categories as $categories)
                        <li class="nav-item"><a class="nav-link" href="{{route('newsarticle.browse',$categories->id)}}">{{$categories->category_name}}</a></li>
                        @endforeach
                        @if (Route::has('login'))
                            @auth
                                @if(Auth::user()->role == 'user')
                                <li class="nav-item dropdown">
                                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                        <i class="align-middle" data-feather="settings"></i>
                                    </a>

                                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                        {{Auth::user()->name}}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                    
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{route('admin.logout')}}">Log out</a>
                                    </div>
                                </li>

                                @else 
                                <li class="nav-item dropdown">
                                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                        <i class="align-middle" data-feather="settings"></i>
                                    </a>

                                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                        {{Auth::user()->name}}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('/admin/dashboard') }}"><i class="align-middle me-1" data-feather="settings"></i>Dashboard</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{route('admin.logout')}}">Log out</a>
                                    </div>
                                </li>
                                <li  class="nav-item" >
                                    <a href="" class="nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                                </li>
                                @endif
                            @else
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
        
                                @if (Route::has('register'))
                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                @endif
                            @endauth 
                            
                        @endif
                    </ul>
                </div>
            </div>
        </nav>