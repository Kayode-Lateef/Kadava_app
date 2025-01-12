                    @foreach ($facebookAds as $facebookAd)
                    <div class="col-md-6 col-xl-4">

                        <!-- Simple card -->
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-text text-muted">{{ $facebookAd->ad_id }}</h6>
                                <h6><span class="text-muted">{{ $facebookAd->status }}</span></h6>
                                <h6><span class="text-muted">{{ $facebookAd->fetched_at }}</span></h6>
                                <h3 class="card-title"></h3>
                                <a href="javascript: void(0);" class="d-grid btn btn-light waves-effect">{{ $facebookAd->button }}</a>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <img class="rounded avatar-sm" src="{{ $facebookAd->avatar }}" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="card-title"><a href="{{ $facebookAd->title_link }}">{{ $facebookAd->title }}</a> </h4>
                                        <h3 class="card-title text-muted">{{ $facebookAd->sponsored }}</h3>
                                        <p class="mb-0">{{ Str::limit($facebookAd->description, 300, '...') }}</p>

                                    </div>
                                </div>

                                <img class="card-img-top img-fluid" src="{{ $facebookAd->image_url }}" alt="">

                                <div class="mt-3 d-flex justify-content-between">
                                    <div class="">
                                        <p class="fs-6"><a href="{{ $facebookAd->target_url }}">{{ $facebookAd->target_description }}</a> </p>
                                    </div>
                                    <div class="">
                                        <a href="javascript: void(0);" class="btn btn-light waves-effect">{{ $facebookAd->target_button }}</a>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- end col -->
                    @endforeach
