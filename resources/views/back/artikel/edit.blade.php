@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">

                <div class="card-title">Edit Artikel {{ $artikel->judul }}</div>
                <div class="ml-auto">
                    <a href="{{ route('artikel.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('artikel.update', $artikel->id) }}"
                  enctype="multipart/form-data"
                  method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="email2">Judul</label>
                    <input type="text"
                           class="form-control"
                           id="judul"
                           name="judul"
                           value="{{ $artikel->judul }}">
                </div>
                <div class="form-group">
                    <label for="">Body</label>
                    <textarea type="textarea"
                              class="form-control"
                              id="editor1"
                              name="body">{{ $artikel->body }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="email2">Kategori</label>
                    <select class="form-control"
                            id="kategori_id"
                            name="kategori_id">
                        @foreach ($kategori as $item)
                        @if ($item->id == $artikel->kategori_id)
                        <option value={{
                                $item->id }} selected='selected'>{{ $item->nama_kategori }}</option>
                        @else
                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email2">Gambar Artikel</label>
                    <input type="file"
                           class="form-control"
                           id="gambar_artikel"
                           name="gambar_artikel">
                    <br>
                    <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }} "
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
                                $artikel->is_active == '1' ? 'selected' : ''}}>Publish</option>
                        <option value="0"
                                {{
                                $artikel->is_active == '0' ? 'selected' : ''}}>Draft</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success"
                            type="submit">Submit</button>
                    <a href="{{ route('artikel.index') }}"
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