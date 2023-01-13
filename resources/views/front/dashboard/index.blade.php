@extends('layouts.default_front')

@section('content')

<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                @php
                                $artikels = App\Models\Artikel::where('is_default' ,'1')->get();
                                @endphp
                                @foreach ($artikels as $item)
                                <img src="{{ ('uploads/' . $item->gambar_artikel) }}"
                                     alt="">
                                <div class="trend-top-cap">
                                    <span>{{ $item->kategori->nama_kategori }}</span>
                                    <h2><a href="{{ route('detailartikel.show' ,$item->slug) }}">{{ $item->judul }}</a>
                                    </h2>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                @forelse ($artikel as $item)
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ ('uploads/' . $item->gambar_artikel) }}"
                                                 alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">{{ $item->kategori->nama_kategori }}</span>
                                            <h4><a href="{{ route('detailartikel.show' ,$item->slug) }}">{{ $item->judul
                                                    }}</a></h4>
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
                                    </div>
                                </div>
                                @empty

                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <!-- Riht content -->
                        @include('includes.materi_front')
                        <!-- Section Tittle -->
                        <section class="whats-news-area pt-50 pb-20">
                            <div class="section-tittle mb-40">
                                <h3>Follow Us</h3>
                            </div>
                            <!-- Flow Socail -->
                            <div class="single-follow mb-45">
                                <div class="single-box">
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{ asset('front/assets/img/news/icon-fb.png') }}"
                                                     alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{ asset('front/assets/img/news/icon-tw.png') }}"
                                                     alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{ asset('front/assets/img/news/icon-ins.png') }}"
                                                     alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{ asset('front/assets/img/news/icon-yo.png') }}"
                                                     alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Poster -->
                            <div class="news-poster d-none d-lg-block">
                                <img src="{{ asset('front/assets/img/news/news_card.jpg') }}"
                                     alt="">
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    @include('includes.weekly_front')
</main>
@endsection