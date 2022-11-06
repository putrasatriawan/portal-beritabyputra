@extends('layouts.default')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">
                <div class="card-title">Edit Kategori {{ $kategori->nama_kategori }}</div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('kategori.update', $kategori->id) }}"
                  method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="email2">Nama Kategori</label>
                    <input type="text"
                           class="form-control"
                           id="nama_kategori"
                           name="nama_kategori"
                           value="{{ $kategori->nama_kategori }}">
                </div>
                <div class="form-group">
                    <label for="email2">Status</label>
                    <select class="form-control"
                            id="is_active"
                            name="is_active">
                        <option value="1"
                                {{
                                $kategori->is_active == '1' ? 'selected' : ''}}>Publish</option>
                        <option value="0"
                                {{
                                $kategori->is_active == '0' ? 'selected' : ''}}>Draft</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success"
                            type="submit">Submit</button>
                    <a href="{{ route('kategori.index') }}"
                       class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection