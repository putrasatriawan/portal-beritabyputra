@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">

                <div class="card-title">Tambah Artikel</div>
                <div class="ml-auto">
                    <a href="{{ route('artikel.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('artikel.store')  }} "
                  enctype="multipart/form-data"
                  method="POST">
                @csrf
                <div class="form-group">
                    <label for="email2">Judul</label>
                    <input type="text"
                           class="form-control"
                           name="judul"
                           placeholder="Masukan Judul">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea id="editor1"
                              class="form-control"
                              name="body"
                              placeholder="Masukan Body">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="email2">Kategori</label>
                    <select class="form-control"
                            name="kategori_id">
                        @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email2">Gambar Artikel</label>
                    <input type="file"
                           class="form-control"
                           name="gambar_artikel">
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
                    <label for="email2">Default</label>
                    <select class="form-control"
                            name="is_default">
                        <option value="1">Show</option>
                        <option value="0">Not</option>
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