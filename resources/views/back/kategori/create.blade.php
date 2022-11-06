@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">

                <div class="card-title">Tambah Kategori</div>
                <div class="ml-auto">
                    <a href="{{ route('kategori.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('kategori.store') }}"
                  method="POST">
                @csrf
                <div class="form-group">
                    <label for="email2">Nama Kategori</label>
                    <input type="nama_kategori"
                           class="form-control"
                           id="nama_kategori"
                           name="nama_kategori"
                           placeholder="Masukan Kategori">
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
                    <a href="{{ route('kategori.index') }}"
                       class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection