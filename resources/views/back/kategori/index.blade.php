@extends('layouts.default')

@section('content')


<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">

                <div class="card-title">Data Kategori</div>
                <div class="ml-auto">
                    <a href="{{ route('kategori.create') }}"
                       class="btn btn-primary"><i class="
                       fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session('success') }}
            </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($kategori as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_kategori }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>
                            @if ($item->is_active == 1 )
                            Publish
                            @else
                            Draft
                            @endif

                        </td>
                        <td><a href="{{ route('kategori.edit' ,$item->id) }}"
                               class="btn btn-primary btn-sm"> <i class="
                               fas fa-edit"></i></a>
                            <form action="{{ route('kategori.destroy', $item->id) }}"
                                  method="post"
                                  class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash">
                                    </i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6"
                            class="text-center p-5">
                            Data Tidak Tersedia
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection