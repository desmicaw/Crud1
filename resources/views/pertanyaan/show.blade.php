@extends('master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Detail Pertanyaan</h1>
      </div>
    </div>
  </div>
</section>

<div class="card m-4">
	<div class="card-header"> 
		<h3>{{$detail->judul}}</h3><br>
		<div class="card-footer"> Tanggal dibuat {{$detail->tanggal_dibuat}}</div>
		<div class="card-footer"> Tanggal diperbaharui {{$detail->tanggal_diperbaharui}}</div>
	</div>
	<div class="card-body"> <h4>{{$detail->isi}}</h4> </div>
	<div class="card-header"> <h3>Jawaban:</h3> </div>
	<div class="card-body">
		@foreach($detailj as $key => $jawaban)
		<ul>
			<li>{{$jawaban->isi}}</li>
		</ul>
		@endforeach
	</div>
</div>

@endsection