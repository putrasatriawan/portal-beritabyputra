@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">

                <div class="card-title">Edit Playlist {{ $playlist->judul_playlist }}</div>
                <div class="ml-auto">
                    <a href="{{ route('playlist.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('playlist.update', $playlist->id) }}"
                  enctype="multipart/form-data"
                  method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="email2">Judul Playlist</label>
                    <input type="text"
                           class="form-control"
                           id="judul_playlist"
                           name="judul_playlist"
                           value="{{ $playlist->judul_playlist }}">
                </div>
                <div class="form-group">
                    <label for="">Deskirpsi</label>
                    <textarea type="textarea"
                              id="editor1"
                              class="form-control"
                              name="deskripsi">{{ $playlist->deskripsi }}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="email2">Gambar Playlist</label>
                    <input type="file"
                           class="form-control"
                           id="gambar_playlist"
                           name="gambar_playlist">
                    <br>
                    <img src="{{ asset('uploads/' . $playlist->gambar_playlist) }} "
                         width="250px"
                         alt="">
                </div>
                <div class="form-group">
                    <label for="email2">Status</label>
                    <select class="form-control"
                            id="is_active"
                            name="is_active">
                        <option value="1"
                                {{
                                $playlist->is_active == '1' ? 'selected' : ''}}>Publish</option>
                        <option value="0"
                                {{
                                $playlist->is_active == '0' ? 'selected' : ''}}>Draft</option>
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