@extends('layouts.default_front')

@section('content')

<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Trending Top -->
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            @forelse ($latestartikel as $item)
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
                            </div>
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection