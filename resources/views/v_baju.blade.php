@extends('layout.v_template')
@section('title', 'Pemesanan Baju')

@section('content')
    <div class="box-body col-lg-6">
        <h3>Data Pemesan</h3>
        <form role="form">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" placeholder="Masukan Nama Anda">
            </div>
            <div class="form-group">
                <label>Kota</label>
                <select class="form-control" style="width: 100%;">
                    <option>Badung</option>
                    <option>Bangli</option>
                    <option>Buleleng</option>
                    <option>Gianyar</option>
                    <option>Jembrana</option>
                    <option>Karangasem</option>
                    <option>Klungkung</option>
                    <option>Tabanan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" placeholder="Masukan Alamat lengkap">
            </div>
            <div class="form-group">
                <label>Ukuran</label>
                <select class="form-control" style="width: 100%;">
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
            </div>
            <div class="form-group">
                <label>No HP</label>
                <input type="number" class="form-control" placeholder="Masukan No HP">
            </div>
            <div class="form-group">
                <label>Jasa Pengiriman</label>
                <select class="form-control" style="width: 100%;">
                    <option>JNE</option>
                    <option>Si Cepat</option>
                </select>
            </div>
            <div class="form-group">
                <label>Opsi pembayaran</label>
                <select class="form-control" style="width: 100%;">
                    <option>COD</option>
                    <option>Dana</option>
                    <option>Tranfer Bank</option>
                </select>
            </div>
            <div class="form-group">
                <label>Biaya Pemesanan</label>
                <input type="number" class="form-control" placeholder="" disabled>
            </div>
    </div>
    
    <div class="box-body col-lg-6">
        <h3>Aksesoris Baju</h3>
        <form role="form">
            <div class="form-group">
                <label>Jenis Baju</label>
                <select class="form-control" style="width: 100%;">
                    <option>Kebaya Biasa</option>
                    <option>Kebaya Modif</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jenis Lengan</label>
                <select class="form-control" style="width: 100%;">
                    <option>Panjang</option>
                    <option>Pendek</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pinggiran</label>
                <select class="form-control" style="width: 100%;">
                    <option>Bordir</option>
                    <option>Tidak Ada</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jenis Leher</label>
                <select class="form-control" style="width: 100%;">
                    <option>Bentuk V</option>
                    <option>Bentok O</option>
                    <option>Bentok Kotak</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kancing</label>
                <select class="form-control" style="width: 100%;">
                    <option>Kancing Bungkus</option>
                    <option>Kancing Kristal</option>
                    <option>Kancing Jepang</option>
                    <option>Kancing Klepet</option>
                    <option>Kancing Kait</option>
                    <option>Resleting</option>
                </select>
            </div>
            <div class="form-group">
                <label>Posisi Kancing</label>
                <select class="form-control" style="width: 100%;">
                    <option>Depan</option>
                    <option>Belakang</option>
                    <option>Samping Kanan</option>
                    <option>Samping Kiri</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pesan</label>
                <textarea class="form-control" rows="4" placeholder=""></textarea>
            </div>
    </div>
@endsection