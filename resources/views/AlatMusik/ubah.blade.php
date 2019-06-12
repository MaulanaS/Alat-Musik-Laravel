@extends('AlatMusik.layout')

@section('title')
Ubah Data Alat Musik
@endsection

@section('content')
<a href="{{ url('alatmusik') }}" class="btn btn-success btn-sm">
	Daftar Alat Musik
</a>
<form method="post" action="{{ url('alatmusik/'.$alatmusik->id) }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>Nama Alat</label>
		<input type="text" name="nama_alat" value="{{ $alatmusik->nama_alat }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Merk</label>
		<input type="text" name="merk" value="{{ $alatmusik->merk }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" value="{{ $alatmusik->harga }}" class="form-control">
	</div>
		<div class="form-group">
		<label>Stok</label>
		<input type="number" name="stok" value="{{ $alatmusik->stok }}" class="form-control">
	</div>
	<button type="submit" class="btn btn-warning btn-block">
		Ubah Data
	</button>
</form>
@endsection