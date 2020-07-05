<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
	public function index(){
		$pertanyaan = PertanyaanModel::get_all();
		return view('pertanyaan.index',compact('pertanyaan'));
	}

	public function create(){
		return view('pertanyaan.form');
	}

	public function store(Request $request){
		$data = $request->all();
		unset($data["_token"]);
		PertanyaanModel::save($data);
		return redirect('/pertanyaan');
	}

	public function show($id){
		$detail  = PertanyaanModel::find_by_id($id);
		$detailj = JawabanModel::find_by_pertanyaan_id($id);
		// dd($detail,$detailj);
		return view('pertanyaan.show',compact('detail','detailj'));
	}

	public function edit($id){
		$edit = PertanyaanModel::find_by_id($id);
		return view('pertanyaan.edit',compact('edit'));
	}

	public function update($id, Request $request){
		// dd($request);
		$update = PertanyaanModel::update($id,$request->all());

		return redirect('/pertanyaan/'.$id);
	}

	public function destroy($id){
		$deleted = PertanyaanModel::delete($id);
		return redirect('/pertanyaan');
	}

}
