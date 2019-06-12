@extends('AlatMusik.layout')

@section('title')
AlatMusik
@endsection

@section('content')
<a href="{{ url('alatmusik/create') }}" class="btn btn-success btn-sm">
    Tambah Alat
</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Alat</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alatmusik as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->nama_alat }}</td>
            <td>{{ $value->merk }}</td>
            <td>{{ $value->harga }}</td>
            <td>{{ $value->stok }}</td>
            <td>
                <a href="{{ url('alatmusik/'.$value->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a>
                <form action="{{ url('alatmusik/'.$value->id) }}" method="POST">
                 {{ csrf_field() }}
                 <input type="hidden" name="_method" value="DELETE">
                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                     Hapus
                 </button>
             </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection