@extends('layouts.client')

@section('title')
    {{ $title }}
@endsection

@section('contents')
    <div class="row px-5" style="background-color: rgb(213, 219, 219); height: 40px;">
        <p class="fw-bold text-uppercase my-auto"> <i class="fa fa-home"></i> » Dịch vụ</p>
    </div>
    <h2 class="text-danger fw-bold text-center text-uppercase my-3">{{ $title }}</h2>
    <?php $arr_overview = json_decode($overviews, true); ?>
    <div class="row px-5">
        @for ($i = 0; $i < count($arr_overview); $i++)
            <?php $overview_filename = $i + 1; ?>
            <div class="col-6 col-md-3 my-2 text-center">
                <a href="{{ route('overview', ['id' => $i]) }}" class="text-decoration-none">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('images/h' . $overview_filename . '.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <b>{{ $arr_overview[$i]['title'] }}</b>
                            <p class="card-text">
                                {{ strlen($arr_overview[$i]['description']) > 120
                                    ? substr($arr_overview[$i]['description'], 0, 120) . '...'
                                    : $arr_overview[$i]['description'] }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endfor
    </div>
@endsection
