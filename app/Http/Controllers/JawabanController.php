<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
	public function index($pertanyaan_id){
		
		$jawaban = JawabanModel::find_by_pertanyaan_id($pertanyaan_id);
		// dd($jawaban);
		return view('jawaban.index',compact('jawaban'));
	}

	public function store($pertanyaan_id, Request $request){
		$data = $request->all();
		unset($data["_token"]);
		JawabanModel::save($data);
		JawabanModel::find_by_pertanyaan_id($pertanyaan_id);
		// dd($data);
		return redirect('/jawaban/'.$pertanyaan_id);
	}
}
