@extends('layout.v_template')
@section('title', 'Data Penjahit')

@section('content')
<div>
    <a href="/data_penjahit/add" class="btn btn-sm btn-primary">Tambah</a>
    <button type="button" class="btn btn-success btn-sm">Publish</button>

    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success </h4>
    {{ session('pesan') }}
    </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Foto</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            <?php $no=1;?>
            @foreach ($penjahit as $data)
                <tr>
                    <td><input type="checkbox"></td>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_penjahit }}</td>
                    <td>{{ $data->asal }}</td>
                    <td><img src="{{ url('foto_penjahit/'.$data->foto_penjahit) }}" width="50px" alt=""></td>
                    <td>
                        <a href="/data_penjahit/detail/{{$data->id_penjahit}}" class="btn btn-sm btn-success">Detail</a>
                        <a href="/data_penjahit/edit/{{ $data->id_penjahit }}" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_penjahit}}">
                            Hapus
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@foreach ($penjahit as $data)
    <div class="modal modal-danger fade" id="delete{{$data->id_penjahit}}"> 
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$data->nama_penjahit}}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini?&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">
                   <a href="/datapenjahit/delete/{{$data->id_penjahit}}">Iya</a>
                </button>
                <button type="button" class="btn btn-outline">Tidak</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
@endforeach
@endsection