@extends('layouts.default_front')

@section('content')

<main>
    <!-- About US Start -->
    <div class="about-area">
        <div class="container">
            <!-- Hot Aimated News Tittle-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>{{ $kategori->nama_kategori }}</strong>
                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }} "
                                 width="250px"
                                 alt="">
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3>{{ $artikel->judul }}</h3>
                        </div>
                        <div class="about-prea">
                            <p class="about-pera1 mb-25"
                               <htmlspecialchars>{!! $artikel->body !!}</htmlspecialchars>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Section Tittle -->
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            @php
                            $kategoriess = App\Models\Kategori::where('is_active' ,'1')->get();
                            @endphp
                            @forelse ($kategoriess as $item)
                            <ul class="list cat-list">
                                <li>
                                    <a href=" {{ url( 'kategori-artikel/'.
                                       $item->slug) }}"
                                       class="d-flex">
                                        <p>{{$item->nama_kategori }}</p>
                                    </a>
                                </li>
                                @empty
                                <span col="7">Data Tidak Tersedia</span>
                                @endforelse
                            </ul>
                        </aside>
                    </div>
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src="{{ asset('front/assets/img/news/news_card.jpg') }}"
                             alt="">
                    </div>
                </div>
            </div>
            @include('includes.weekly_front')
        </div>
    </div>
    <!-- About US End -->
</main>

@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js">
</script>

<script>
    CKEDITOR.replace( 'editor1' );
</script>
@endpush