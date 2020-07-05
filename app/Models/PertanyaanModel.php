<?php 
	namespace App\Models;
	use Illuminate\Support\Facades\DB;

	class PertanyaanModel{
		public static function get_all(){
			$pertanyaan = DB::table('pertanyaan')->get();
			return $pertanyaan;
		}

		public static function save($data){
			$newPertanyaan = DB::table('pertanyaan')->insert($data);
			return $newPertanyaan;
		}

		public static function find_by_id($id){
			$detail = DB::table('pertanyaan')->where('id',$id)->first();
			return $detail;
		}

		public static function update($id,$request){
			// dd($request);
			$update = DB::table('pertanyaan')->where('id',$id)->update(['judul'=>$request["judul"],'isi'=>$request["isi"]]);
			return $update;
		}

		public static function delete($id){
			$delete = DB::table('pertanyaan')->where('id',$id)->delete();
			return $delete;
		}

	}



?>