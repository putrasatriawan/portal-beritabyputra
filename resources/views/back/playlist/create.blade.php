@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">

                <div class="card-title">Tambah Playlist</div>
                <div class="ml-auto">
                    <a href="{{ route('playlist.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('playlist.store')  }} "
                  enctype="multipart/form-data"
                  method="POST">
                @csrf
                <div class="form-group">
                    <label for="judul_playlist">Judul Playlist</label>
                    <input type="text"
                           class="form-control"
                           name="judul_playlist"
                           placeholder="Masukan Judul Playlist">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskirpsi</label>
                    <textarea class="form-control"
                              name="deskripsi"
                              id="editor1"
                              placeholder="Masukan Deskirpsi">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="emgambar_playlistail2">Gambar Artikel</label>
                    <input type="file"
                           class="form-control"
                           name="gambar_playlist">
                </div>
                <div class="form-group">
                    <label for="is_active">Status</label>
                    <select class="form-control"
                            name="is_active">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success"
                            type="submit">Submit</button>
                    <a href="{{ route('playlist.index') }}"
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