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
	  <button type="submit" class="btn btn-primary">Submit Question</button>
	</form>
</div>


@endsection