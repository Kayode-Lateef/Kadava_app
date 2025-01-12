                    @foreach ($pinterestAds as $pinterestAd)
                    <div class="col-md-6 col-xl-3">

                        <!-- Simple card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ $pinterestAd->image_url }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">{{ $pinterestAd->board_name }}</h3>
                                <h4 class="card-title">{{ $pinterestAd->title }}</h4>
                                <p class="card-text">{{ $pinterestAd->title }}</p>
                                <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Details</a>
                            </div>
                        </div>

                    </div><!-- end col -->
                    @endforeach
