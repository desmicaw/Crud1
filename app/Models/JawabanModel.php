<?php 
	namespace App\Models;
	use Illuminate\Support\Facades\DB;

	class JawabanModel{
		public static function save($data){
			$newJawaban = DB::table('jawaban')->insert($data);
			return $newJawaban;
		}

		public static function find_by_pertanyaan_id($id_pertanyaan){
			$jawaban = DB::table('jawaban')->where('pertanyaan_id',$id_pertanyaan)->get();
			return $jawaban;
		}

		
	}


?>