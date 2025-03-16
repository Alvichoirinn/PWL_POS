@extends('layout.app')
{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Kategori')
{{-- Content bodu:main page content --}}
@section('content')
    <div class="container"></div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ubah Kategori</h3>
        </div>

        <form method="POST" action="{{ route('kategori.edit_simpan', $data->kategori_id) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="kodeKategori">kodeKategori</label>
                    <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" value="{{ $data->kategori_kode }}">
                </div>
                <div class="form-group">
                    <label for="namaKategori">namaKategori</label>
                    <input type="text" class="form-control" id="namaKategori" name="namaKategori" value="{{$data->kategori_nama}}">
                </div>
            </div>
            
            <div class="card-footer">
                <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
@endsection