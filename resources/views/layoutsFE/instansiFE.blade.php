

    <div id="instansi" class="instansi container-fluid bg-appointment kotak my-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg py-5">
            <div class="py-12">
                <div id="portfolio" class="our-portfolio kotak section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-heading wow fadeInLeft" data-wow-duration="1s"
                                    data-wow-delay="0.3s">
                                    <h6>Our Portofolio</h6>
                                    <h4>See Our Recent <em>Projects</em></h4>
                                    <div class="line-dec"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="loop owl-carousel">
                                    @foreach ($instansi as $data)
                                    <div class="item">
                                        <a href="fe/instansi/{{ $data->id }}">
                                            <div class="portfolio-item">
                                                @if ($data->logo_instansi)
                                                <div class="thumb">
                                                    <img width="30" height="350" src="{{asset('storage/' . $data->logo_instansi)}}"
                                                    alt="">
                                                </div>
                                                @else
                                                <div class="icon">
                                                    <img src="https://source.unsplash.com/100x80">
                                                </div>
                                                @endif
                                                <div class="down-content">
                                                    <h6>{{$data->nama_instansi}}</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-animation-in="slideInLeft">
                    {{-- <a href="{{route('all.instansi')}}" class="slider btn btn-primary" aria-label="contact-with-us">View All
                        Instansi</a> --}}
                </div>
            </div>
        </div>
    </div>
