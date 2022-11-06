@extends('layouts.default_front')

@section('content')

<!-- Whats New Start -->
<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="container">
            <div class="trending-tittle">
                <strong>{{ $kategori->nama_kategori }}</strong>
            </div>
            <div class="row">
                <div class="col-8 sm-6">
                    <!-- Nav Card -->
                    <div class="tab-content"
                         id="nav-tabContent">
                        <!-- card one -->
                        <div class="tab-pane fade show active"
                             id="nav-home"
                             role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @forelse ($artikel as $item)
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="{{ asset('uploads/' . $item->gambar_artikel) }} "
                                                     width="250px"
                                                     alt="">
                                            </div>
                                            <div class="what-cap">
                                                <h4><a href="{{ route('detailartikel.show' ,$item->id) }}">{{
                                                        $item->judul }}</a></h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="text-muted"><i class="
                                                        fas fa-eye"></i> {{ $item->views }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-muted"><i class="
                                                    far fa-calendar"></i> {{ $item->created_at->format('m/Y') }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="text-center">
                                        Data Tidak Tersedia
                                    </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Riht content -->
                    @include('includes.materi_front')
                </div>
            </div>
        </div>
        @include('includes.weekly_front')
    </div>
</section>
@endsection