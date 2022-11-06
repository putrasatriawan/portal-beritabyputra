@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">

                <div class="card-title">Tambah Materi</div>
                <div class="ml-auto">
                    <a href="{{ route('materi.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('materi.store')  }} "
                  enctype="multipart/form-data"
                  method="POST">
                @csrf
                <div class="form-group">
                    <label for="email2">Judul Materi</label>
                    <input type="text"
                           class="form-control"
                           name="judul_materi"
                           placeholder="Masukan Judul Materi">
                </div>
                <div class="form-group">
                    <label for="email2">Link Video</label>
                    <input type="text"
                           class="form-control"
                           name="link"
                           placeholder="Masukan Link Video">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="editor1"
                              class="form-control"
                              name="deskripsi"
                              placeholder="Masukan Deskripsi">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="email2">Playlist</label>
                    <select class="form-control"
                            name="playlist_id">
                        @foreach ($playlist as $item)
                        <option value="{{ $item->id }}">{{ $item->judul_playlist }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email2">Gambar Materi</label>
                    <input type="file"
                           class="form-control"
                           name="gambar_materi">
                </div>
                <div class="form-group">
                    <label for="email2">Status</label>
                    <select class="form-control"
                            name="is_active">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success"
                            type="submit">Submit</button>
                    <a href="{{ route('materi.index') }}"
                       class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js">
</script>

<script>
    CKEDITOR.replace( 'editor1' );
</script>
@endpush