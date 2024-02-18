<header>
    <nav class="navbar navbar-expand navbar-light navbar-top">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-menu d-flex">
                                <div class="user-name text-end me-3">
                                    <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                                    <p class="mb-0 text-sm text-gray-600"> {{ Auth::user()->role }}</p>
                                </div>
                                
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                            <li>
                                <h6 class="dropdown-header">Hello, {{ Auth::user()->username }}</h6>
                            </li>
                            
                            {{-- <li><a class="dropdown-item" href="{{ route('password') }}"><i class="icon-mid bi bi-gear me-2"></i> --}}
                                    {{-- Change Password</a></li> --}}
                            
                            
                            {{-- <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li> --}}
                            <li>
                                
                                <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>