@extends('layouts.client')

@section('title')
    {{ $title }}
@endsection

@section('contents')
    <div class="row px-5 py-2">
        @foreach ($vos as $vo)
            <div class="col-xs-6 col-md-3 my-2">
                <div class="card" style="width: ;">
                    <img src="{{ asset('images/' . $vo->HinhAnh) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-danger text-center text-uppercase fw-bold">
                            {{ $vo->TenVo }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
        <div>
        @endsection
