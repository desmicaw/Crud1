@extends('master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Jawaban</h1>
      </div>
    </div>
  </div>
</section>

  
<div class="card m-4">
  @foreach($jawaban as $jawaban)
	<div class="card-body">
		<p>{{$jawaban->isi}}</p>
	</div>
  @endforeach
  <div class="card-footer">
    <form action="/jawaban/{{ $jawaban->pertanyaan_id }}" method="POST">
        @csrf
        <label for="isi">Jawaban:</label>
        <input type="text" class="form-control mb-2" name="isi" placeholder="Jawab Disini" id="isi">
        <input hidden name="pertanyaan_id" value="{{$jawaban->pertanyaan_id}}">
        <a href="/jawaban/{{ $jawaban->pertanyaan_id }}">
          <button class="btn btn-info">Give an Answer!</button>
        </a>
      </form>
  </div>
</div>
  


@endsection