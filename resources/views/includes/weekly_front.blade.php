<div class="container">
    <div class="wrapper">
        <div class="weekly-news-area pt-50">
            <div class="container">
                <div class="weekly-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Weekly Top News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly-news-active dot-style d-flex dot-style">
                                @php
                                $artikel = \App\Models\Artikel::with(['kategori'])->get();
                                // $artikel = App\Models\Artikel::where('is_active', '1')->where('views' ,
                                // '>=1')->get();
                                @endphp
                                @foreach ($artikel as $item)
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img src="{{ asset('uploads/' . $item->gambar_artikel) }} "
                                             width="100px"
                                             alt="">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">{{ $item->kategori->nama_kategori }}</span>
                                        <h4><a href="{{ route('detailartikel.show' ,$item->slug) }}">{{ $item->judul
                                                }}</a>
                                        </h4>
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