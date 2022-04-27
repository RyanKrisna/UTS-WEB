@extends('layout.v_template')
@section('title', 'Produk')

@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <div class="btn-group">
                    <button type="button" class="btn btn-default">
                        <a href=""><i class="fa fa-plus"></i>Tambah</a>
                    </button>
                    <button type="button" class="btn btn-default">
                        <a href=""><i class="fa fa-share"></i>Post</a>
                    </button>
                    <button type="button" class="btn btn-default">
                        <a href=""><i class="fa fa-trash"></i>Hapus</a>
                    </button>
                </div>
                <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jenis</th>
                        <th>Asal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Baju</td>
                        <td>Kebaya</td>
                        <td>Buleleng</td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection