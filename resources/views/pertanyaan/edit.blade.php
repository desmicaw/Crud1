@extends('master')

@section('content')
<div class="ml-4 ">
	<div class="card-header">Edit Item</div>
	<form action="/pertanyaan/{{$edit->id}}" method="POST">
		@csrf
		@method('PUT')
	  <div class="form-group">
	    <label for="judul">Judul:</label>
	    <input type="text" class="form-control" name="judul" placeholder="Judul" id="judul" value="{{$edit->judul}}">
	  </div>
	  <div class="form-group">
	    <label for="isi">Isi:</label>
	    <input type="text" class="form-control" name="isi" placeholder="Isi Pertanyaan" id="isi" value="{{$edit->isi}}">
	  </div>
	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>



@endsection