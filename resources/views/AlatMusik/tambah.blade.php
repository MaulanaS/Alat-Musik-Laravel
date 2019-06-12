@extends('AlatMusik.layout')

@section('title')
Tambah Data Alat Musik
@endsection

@section('content')
<a href="{{ url('alatmusik') }}" class="btn btn-success btn-sm">
	Alat Musik
</a>
<form method="post" action="{{ url('alatmusik') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Nama Alat</label>
		<input type="text" name="nama_alat" class="form-control">
	</div>
	<div class="form-group">
		<label>Merk</label>
		<input type="text" name="merk" class="form-control">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control">
	</div>
		<div class="form-group">
		<label>Stok</label>
		<input type="number" name="stok" class="form-control">
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection