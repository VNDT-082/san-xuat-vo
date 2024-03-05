@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('admin-contents')
    <div class="row  d-flex justify-content-center align-items-center" style="width: 100%">
        <table class="table table-striped mx-auto" style="width: 80%">
            <thead>
                <tr>
                    <th style="width: 50%">Mã loại</th>
                    <th style="width: 50%">Tên loại</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if ($loaivos)
                    @foreach ($loaivos as $loaivo)
                        <tr>
                            <th>{{ $loaivo->id }}</th>
                            <td>{{ $loaivo->TenLoai }}</td>
                            @if ($loaivo->TenLoai == 'Default')
                                <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#"
                                        style="cursor: not-allowed;"> Sửa</button></td>
                                <td><button class="btn btn-danger"style="cursor: not-allowed;">Xóa</button></td>
                            @else
                                <td><button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="{{ '#loai-vo-' . $loaivo->id }}">
                                        Sửa
                                    </button></td>
                                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="{{ '#loai-vo-' . $loaivo->id . 'delete' }}">Xóa</button></td>
                            @endif

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        @if ($loaivos)
            @foreach ($loaivos as $loaivo)
                {{-- update loai vo --}}
                <div class="modal fade" id="{{ 'loai-vo-' . $loaivo->id }}" data-bs-backdrop="static" tabindex="-1"
                    aria-labelledby="{{ 'title-' . $loaivo->id . 'update' }}" aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-centered">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('admin_put_loai_vo') }}">
                                @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="{{ 'title-' . $loaivo->id . 'update' }}">
                                        Cập nhật loại vớ
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <input type="text" name="id" readonly value="{{ $loaivo->id }}" />
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="text" name = "TenLoai" value="{{ $loaivo->TenLoai }}" />

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                {{-- form delete --}}
                <div class="modal fade" id="{{ 'loai-vo-' . $loaivo->id . 'delete' }}" data-bs-backdrop="static"
                    tabindex="-1" aria-labelledby="{{ 'title-' . $loaivo->id . 'delete' }}" aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-centered">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="{{ 'title-' . $loaivo->id . 'delete' }}">
                                        Xóa loại vớ
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5 class="text-danger"><b>Bạn có chắc muốn xóa?</b></h5>
                                    <input type="text" name="id" readonly value="{{ $loaivo->id }}" />
                                    <input type="text" name="TenLoai" readonly value="{{ $loaivo->TenLoai }}" />

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    <a type="button" class="btn btn-danger"
                                        href="{{ route('admin_delete_loai_vo', ['id' => $loaivo->id]) }}">Xóa</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif


    </div>
    <br />
    <div class="row d-flex justify-content-end" style="width: 100%">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#them-mot-loai"
            style="width: 20%; margin-right: 10%">
            Thêm một loại</button>

        <div class="modal fade" id="them-mot-loai" data-bs-backdrop="static" tabindex="-1" aria-labelledby="title-insert"
            aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                    <form method="POST" action="{{ route('admin_post_loai_vo') }}">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="title-insert">
                                Thêm một loại vớ
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input name="MaLoai" type="text" readonly value="#" />
                            <input name="TenLoai" type="text" placeholder="Nhập tên loại..." />

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-danger">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Ket qua CRUD --}}

        @if (session('message'))
            <div class="modal" tabindex="-1" style="display: block" id="message-modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Thông báo</h5>
                        </div>
                        <div class="modal-body">
                            <p>{{ session('message') }}</p>
                        </div>
                        <div class="modal-footer">
                            <button onclick="loseModal()" type="button" class="btn btn-primary"
                                data-bs-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function loseModal() {
                    document.getElementById('message-modal').style.display = 'none';
                    sessionStorage.removeItem('message');
                }
            </script>
        @endif
    </div>
@endsection
