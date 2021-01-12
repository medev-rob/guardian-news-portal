@extends('layouts.master')
@section('content')
    <div class="col-lg-9 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                @foreach($test['response']['results'] as $item)
                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="position-relative">
                                <div class="rotate-img">
                                    <img
                                        src="{{$item['fields']['thumbnail']}}"
                                        alt="thumb"
                                        class="img-fluid"
                                    />
                                </div>
                                <div class="badge-positioned">
                                    <span class="badge badge-danger font-weight-bold">{{$item['sectionName']}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8  grid-margin">
                            <h2 class="mb-2 font-weight-600">
                                {{$item['webTitle']}}
                            </h2>
                            <div class="fs-13 mb-2">
                                <span class="mr-2"></span>10 Minutes ago
                            </div>
                            <p class="mb-0">
                                {{$item['fields']['trailText']}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
