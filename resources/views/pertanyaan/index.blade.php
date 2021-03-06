@extends('master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Pertanyaan</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<a href="/pertanyaan/create" class="btn btn-info ml-4 mt-2 mb-2" role="button">Ask Anything!</a>
	@foreach($pertanyaan as $pertanyaan)
	<div class="card m-4">
	  <div class="card-header"> <h4> {{$pertanyaan->judul}} </h4> </div>
	  <div class="card-body"> {{$pertanyaan->isi}} </div>
	  <div class="card-footer">
      <form action="/jawaban/{{ $pertanyaan->id }}" method="POST">
        @csrf
        <label for="isi">Jawaban:</label>
        <input type="text" class="form-control mb-2" name="isi" placeholder="Jawab Disini" id="isi">
        <input hidden name="pertanyaan_id" value="{{$pertanyaan->id}}">
        <a href="/jawaban/{{ $pertanyaan->id }}">
          <button class="btn btn-info">Give an Answer!</button>
        </a>
      </form>
      <a href="/pertanyaan/{{ $pertanyaan->id }}" class="btn btn-primary mt-2">Detail Pertanyaan</a>
	  	<a href="/pertanyaan/{{ $pertanyaan->id }}/edit" class="btn btn-default mt-2">Edit Pertanyaan</a>
      <form action="/pertanyaan/{{ $pertanyaan->id }}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
      </form>
	  </div>
	</div>
	@endforeach
@endsection