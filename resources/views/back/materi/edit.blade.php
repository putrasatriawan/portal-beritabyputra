@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">

                <div class="card-title">Edit Materi {{ $materi->judul_materi }}</div>
                <div class="ml-auto">
                    <a href="{{ route('materi.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('materi.update', $materi->id) }}"
                  enctype="multipart/form-data"
                  method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="email2">Judul Materi</label>
                    <input type="text"
                           class="form-control"
                           id="judul_materi"
                           name="judul_materi"
                           value="{{ $materi->judul_materi }}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea type="textarea"
                              class="form-control"
                              id="editor1"
                              name="deskripsi">{{ $materi->deskripsi }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="email2">Link Video</label>
                    <input type="text"
                           class="form-control"
                           name="link"
                           value="{{ $materi->link }}">
                </div>
                <div class="form-group">
                    <label for="email2">Playlist</label>
                    <select class="form-control"
                            id="playlist_id"
                            name="playlist_id">
                        @foreach ($playlist as $item)
                        @if ($item->id == $materi->playlist_id)
                        <option value={{
                                $item->id }} selected='selected'>{{ $item->judul_playlist }}</option>
                        @else
                        <option value="{{ $item->id }}">{{ $item->judul_playlist }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email2">Gambar Materi</label>
                    <input type="file"
                           class="form-control"
                           id="gambar_materi"
                           name="gambar_materi">
                    <br>
                    <img src="{{ asset('uploads/' . $materi->gambar_materi) }} "
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
                                $materi->is_active == '1' ? 'selected' : ''}}>Publish</option>
                        <option value="0"
                                {{
                                $materi->is_active == '0' ? 'selected' : ''}}>Draft</option>
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