@extends('layout.v_template')
@section('title', 'Tambah Penjahit')

@section('content')
    <form action="/data_penjahit/insert" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama_penjahit" class="form-control" value="{{ old('nama_penjahit')  }}">
                            <div class="text-danger">
                                @error('nama_penjahit')
                                    {{ $message }}
                                @enderror
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Asal</label>
                        <input name="asal" class="form-control" value="{{ old('asal')  }}">
                            <div class="text-danger">
                                    @error('asal')
                                        {{ $message }}
                                    @enderror
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Foto Penjahit</label>
                        <input type="file" name="foto_penjahit" class="form-control" value="{{ old('foto_penjahit')  }}">
                            <div class="text-danger">
                                    @error('foto')
                                        {{ $message }}
                                    @enderror
                            </div>
                    </div>
                    <div class="form-group">
                       <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection