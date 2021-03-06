

<div class="content-wrapper">
    <div class="container">
        <div class="row" data-aos="fade-up">
                <div class="col-xl-8 stretch-card grid-margin">
                    <a href="{{$coronaUpdate['response']['results'][0]['webUrl']}}">
                        <div class="position-relative">
                                <img
                                    src="{{asset('preneur-lab-news/images/corona.jpg')}}"
                                    alt="thumb"
                                    class="img-fluid"
                                />

                            <div class="banner-content">
                                <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                                    {{__('Corona Update')}}
                                </div>
                                <h1 class="mb-0">{{__('GLOBAL PANDEMIC')}}</h1>
                                <h1 class="mb-2">
                                    {{$coronaUpdate['response']['results'][0]['fields']['trailText']}}
                                </h1>
                                <div class="fs-12">
                                    <span></span>{{$coronaUpdate['response']['results'][0]['webPublicationDate']}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-dark text-white">
                    <div class="card-body pt-3 pb-0">
                        <h2>{{__('Latest news')}}</h2>

                        @foreach($latestNews['response']['results'] as $item)
                            <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                <div class="pr-3">
                                    <h6>
                                        <a class="text-white" href="{{$item['webUrl']}}">
                                            {{$item['webTitle']}}
                                        </a>
                                    </h6>
                                    <div class="fs-12">
                                        <span class="mr-2">Photo </span>{{$item['webPublicationDate']}}
                                    </div>
                                </div>
                                <div class="rotate-img">
                                    <a href="{{$item['webUrl']}}">
                                        <img
                                            src="{{$item['fields']['thumbnail']}}"
                                            alt="thumb"
                                            class="img-fluid latest-news-img"
                                        />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-3 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h2>Category</h2>
                        <ul class="vertical-menu">
                            <li><a href="javascript:;">Politics</a></li>
                            <li><a href="javascript:;">International</a></li>
                            <li><a href="javascript:;">Finance</a></li>
                            <li><a href="javascript:;">Health care</a></li>
                            <li><a href="javascript:;">Technology</a></li>
                            <li><a href="javascript:;">Jobs</a></li>
                            <li><a href="javascript:;">Media</a></li>
                            <li><a href="javascript:;">Administration</a></li>
                            <li><a href="javascript:;">Sports</a></li>
                            <li><a href="javascript:;">Game</a></li>
                            <li><a href="javascript:;">Art</a></li>
                            <li><a href="javascript:;">Kids</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        @foreach($wordNews['response']['results'] as $item)
                            <div class="row">
                                <div class="col-sm-4 grid-margin">
                                    <div class="position-relative">
                                        <div class="rotate-img">
                                            <a href="{{$item['webUrl']}}">
                                                <img
                                                    src="{{$item['fields']['thumbnail']}}"
                                                    alt="thumb"
                                                    class="img-fluid"
                                                />
                                            </a>
                                        </div>
                                        <div class="badge-positioned">
                                            <span class="badge badge-danger font-weight-bold">{{$item['sectionName']}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8  grid-margin">
                                    <h2 class="mb-2 font-weight-600">
                                        <a class="text-dark" href="{{$item['webUrl']}}">
                                            {{$item['webTitle']}}
                                        </a>
                                    </h2>
                                    <div class="fs-13 mb-2">
                                        <span class="mr-2"></span>{{$item['webPublicationDate']}}
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
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-sm-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-title">
                                    {{__('Image Gallery')}}
                                </div>
                                <div class="row">
                                    @foreach($imagesGallery['response']['results'] as $item)
                                        <div class="col-sm-4 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <a href="{{$item['webUrl']}}">
                                                        <img
                                                            src="{{$item['fields']['thumbnail']}}"
                                                            alt="thumb"
                                                            class="img-fluid w-100"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-title">
                                    {{__('Politics')}}
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-8 col-sm-6">
                                            <div class="rotate-img">
                                                <img
                                                    src="{{$politics['response']['results'][0]['fields']['thumbnail']}}"
                                                    alt="thumb"
                                                    class="img-fluid"
                                                />
                                            </div>
                                            <h2 class="mt-3 text-primary mb-2 d-inline-block text-truncate" style="max-width: 200px;">
                                                {{$politics['response']['results'][0]['webTitle']}}
                                            </h2>
                                            <p class="fs-13 mb-1 text-muted">
                                                <span></span>{{$politics['response']['results'][0]['webPublicationDate']}}
                                            </p>
                                            <p class="my-3 fs-15">
                                                {{$politics['response']['results'][0]['fields']['trailText']}}
                                            </p>
                                            <a href="{{$politics['response']['results'][0]['webUrl']}}" class="font-weight-600 fs-16 text-dark">Read more</a>
                                    </div>
                                    <div class="col-xl-6 col-lg-4 col-sm-6">
                                        @foreach(array_slice($politics['response']['results'],1) as $key=>$item)
                                        <div class="border-bottom pb-3 mb-3">
                                            <h3 class="font-weight-600 mb-0 d-inline-block text-truncate" style="max-width: 200px;">
                                                <a class="text-dark" href="{{$item['webUrl']}}">
                                                    {{$item['webTitle']}}
                                                </a>
                                            </h3>
                                            <p class="fs-13 text-muted mb-0">
                                                {{$item['webPublicationDate']}}
                                            </p>
                                            <p class="mb-0 d-inline-block text-truncate" style="max-width: 150px;">
                                                {{$item['fields']['trailText']}}
                                            </p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card-title">
                                            {{__('Sports News')}}
                                        </div>
                                        @foreach($sportsNews['response']['results'] as $item)
                                            <div class="border-bottom pb-3">
                                                <div class="rotate-img">
                                                    <img
                                                        src="{{$item['fields']['thumbnail']}}"
                                                        alt="thumb"
                                                        class="img-fluid"
                                                    />
                                                </div>
                                                <p class="fs-16 font-weight-600 mb-0 mt-3 d-inline-block text-truncate" style="max-width: 200px;">
                                                    <a class="text-dark" href="{{$item['webUrl']}}">
                                                        {{$item['webTitle']}}
                                                    </a>
                                                </p>
                                                <p class="fs-13 text-muted mb-0">
                                                    {{$item['webPublicationDate']}}
                                                </p>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-title">
                                            {{__('Fashion News')}}
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="border-bottom pb-3">
                                                    @foreach($fashion['response']['results'] as $item)
                                                        <div class="row">
                                                            <div class="col-sm-5 pr-2">
                                                                <div class="rotate-img">
                                                                    <a href="{{$item['webUrl']}}">
                                                                        <img
                                                                            src="{{$item['fields']['thumbnail']}}"
                                                                            alt="thumb"
                                                                            class="img-fluid w-100"
                                                                        />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-7 pl-2">
                                                                <p class="fs-16 font-weight-600 mb-0 d-inline-block text-truncate" style="max-width: 120px;">
                                                                    <a class="text-dark" href="{{$item['webUrl']}}">
                                                                        {{$item['webTitle']}}
                                                                    </a>
                                                                </p>
                                                                <p class="fs-13 text-muted mb-0">
                                                                    {{$item['webPublicationDate']}}
                                                                </p>
                                                                <p class="mb-0 fs-13 d-inline-block text-truncate" style="max-width: 120px;">
                                                                    {{$item['fields']['trailText']}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main-panel ends -->




