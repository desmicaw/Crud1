@extends('master')

@section('content')
<div class="ml-4 ">
	<form action="/pertanyaan" method="POST">
		@csrf
	  <div class="form-group">
	    <label for="judul">Judul:</label>
	    <input type="text" class="form-control" name="judul" placeholder="Judul" id="judul">
	  </div>
	  <div class="form-group">
	    <label for="isi">Isi:</label>
	    <input type="text" class="form-control" name="isi" placeholder="Isi Pertanyaan" id="isi">
	  </div>
	  <div class="form-group">
	    <label for="tanggal_dibuat">Tanggal Dibuat</label>
	    <input type="date" class="form-control" name="tanggal_dibuat" placeholder="Enter tanggal_dibuat" id="tanggal_dibuat">
	  </div>
	  <div class="form-group">
	    <label for="tanggal_diperbaharui">Tanggal Diperbaharui</label>
	    <input type="date" class="form-control" name="tanggal_diperbaharui" placeholder="Enter tanggal_diperbaharui" id="tanggal_diperbaharui">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit Question</button>
	</form>
</div>


@endsection