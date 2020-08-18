@extends('candidate.dashboard.welcome')
@section('titledashboard','Homepage')
@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Bintang Tobing</h3>
                    <div class="d-inline-block">
                        <p class="text-white mb-0">Full Stack Website Developer</p>
                        <p class="text-white">PT Berlian Tangguh Sejahtera</p>
                        <?php $encode = base64_encode(session()->get('id')); ?>
                        <a href="/dashboard/candidate/{{$encode}}/my-information/" class="btn btn-primary">Update
                            informasi tentang saya</a>
                    </div>
                    <span class="float-right"><img
                            src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt=""></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 m-b-30">
            <h4 class="d-inline"><span><i class="fas fa-award"></i></span> Rekomendasi Jobpply</h4>
            <p class="text-muted">Berikut lowongan IT yang tersedia di database kami.</p>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title">Android Developer</h5>
                                <h6 class="card-subtitle mb-2 text-muted">PT BENUA SOLUSI TEKNOLOGI</h6>
                            </div>
                            <img class="img-fluid" src="images/big/img1.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">
                                    <span><i class="fas fa-map-marker-alt"></i></span> Medan - Sumatera Utara <br><br>
                                    Job Description : Design and develop applications for Android platform. Works
                                    with
                                    exterrnal data sources and APIs. Perform unit code tests...
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title">Android Developer</h5>
                                <h6 class="card-subtitle mb-2 text-muted">PT BENUA SOLUSI TEKNOLOGI</h6>
                            </div>
                            <img class="img-fluid" src="images/big/img2.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">
                                    <span><i class="fas fa-map-marker-alt"></i></span> Medan - Sumatera Utara <br><br>
                                    Job Description : Design and develop applications for Android platform. Works
                                    with
                                    exterrnal data sources and APIs. Perform unit code tests...
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title">Android Developer</h5>
                                <h6 class="card-subtitle mb-2 text-muted">PT BENUA SOLUSI TEKNOLOGI</h6>
                            </div>
                            <img class="img-fluid" src="images/big/img3.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">
                                    <span><i class="fas fa-map-marker-alt"></i></span> Medan - Sumatera Utara <br><br>
                                    Job Description : Design and develop applications for Android platform. Works
                                    with
                                    exterrnal data sources and APIs. Perform unit code tests...
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title">Android Developer</h5>
                                <h6 class="card-subtitle mb-2 text-muted">PT BENUA SOLUSI TEKNOLOGI</h6>
                            </div>
                            <img class="img-fluid" src="images/big/img4.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">
                                    <span><i class="fas fa-map-marker-alt"></i></span> Medan - Sumatera Utara <br><br>
                                    Job Description : Design and develop applications for Android platform. Works
                                    with
                                    exterrnal data sources and APIs. Perform unit code tests...
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title">Android Developer</h5>
                                <h6 class="card-subtitle mb-2 text-muted">PT BENUA SOLUSI TEKNOLOGI</h6>
                            </div>
                            <img class="img-fluid" src="images/big/img2.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">
                                    <span><i class="fas fa-map-marker-alt"></i></span> Medan - Sumatera Utara <br><br>
                                    Job Description : Design and develop applications for Android platform. Works
                                    with
                                    exterrnal data sources and APIs. Perform unit code tests...
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title">Android Developer</h5>
                                <h6 class="card-subtitle mb-2 text-muted">PT BENUA SOLUSI TEKNOLOGI</h6>
                            </div>
                            <img class="img-fluid" src="images/big/img1.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">
                                    <span><i class="fas fa-map-marker-alt"></i></span> Medan - Sumatera Utara <br><br>
                                    Job Description : Design and develop applications for Android platform. Works
                                    with
                                    exterrnal data sources and APIs. Perform unit code tests...
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title">Android Developer</h5>
                                <h6 class="card-subtitle mb-2 text-muted">PT BENUA SOLUSI TEKNOLOGI</h6>
                            </div>
                            <img class="img-fluid" src="images/big/img3.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">
                                    <span><i class="fas fa-map-marker-alt"></i></span> Medan - Sumatera Utara <br><br>
                                    Job Description : Design and develop applications for Android platform. Works
                                    with
                                    exterrnal data sources and APIs. Perform unit code tests...
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title">Android Developer</h5>
                                <h6 class="card-subtitle mb-2 text-muted">PT BENUA SOLUSI TEKNOLOGI</h6>
                            </div>
                            <img class="img-fluid" src="images/big/img4.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">
                                    <span><i class="fas fa-map-marker-alt"></i></span> Medan - Sumatera Utara <br><br>
                                    Job Description : Design and develop applications for Android platform. Works
                                    with
                                    exterrnal data sources and APIs. Perform unit code tests...
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
