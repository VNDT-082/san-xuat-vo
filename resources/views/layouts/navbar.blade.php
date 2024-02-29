<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ml-4" style="margin-left: 10%; margin-right: 10%">
        <a class="navbar-brand" href="#">TIẾN PHÁT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Gia công vớ tất
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Gia công vớ tất</a></li>
                        <li><a class="dropdown-item" href="#">Sản xuấtxuất vớ tất</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @foreach ($loaivos as $loaivo)
                            <li><a class="dropdown-item" href="#">{{ $loaivo->TenLoai }}</a></li>
                        @endforeach


                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dịch vụ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tuyển dụng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
