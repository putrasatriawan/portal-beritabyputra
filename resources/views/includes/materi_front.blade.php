<div class="ScrollStyle">
    <div class="trending-area fix">
        <div class="container">
            <div class="col-md-12 col-sm-12">
                <h4>Videos For You ON <i class="
                    fab fa-youtube"></i></h4>
                <br>
                <div class="trending-main">
                    @php
                    $materi = App\Models\Materi::where('is_active', '1')->get();
                    @endphp
                    @forelse ($materi as $item)

                    <li>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ asset('uploads/' . $item->gambar_materi) }}"
                                     alt=""
                                     width="120px"
                                     height="100px">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{ $item->playlist->judul_playlist }}</span>
                                <h4><a href="{{ $item->link }}">{{ $item->judul_materi }}</a></h4>
                            </div>
                            @empty
                            <div class="text-center">
                                Data Tidak Tersedia
                            </div>
                            @endforelse
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .ScrollStyle {
        max-height: 500px;
        overflow-y: scroll;
    }
</style>