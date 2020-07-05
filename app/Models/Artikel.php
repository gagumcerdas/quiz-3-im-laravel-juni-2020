<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelModel{
    public static function get_all(){
        $artikels = DB::table('artikels')->get();
        return $artikels;
    }
    public static function save($data){
        unset($data["_token"]);
        $slug = Str::slug($data['judul'], '-');
        $new_artikel = DB::table('artikels')->insert(
            [
                'judul' => $data['judul'],
                'isi' => $data['isi'],
                'slug' => $slug,
                'tag' => $data['tag'],
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 1
            ]
        );
        return $new_artikel;
    }
    public static function find_artikel_id($id){
        $artikel = DB::table('artikels')->where('artikel_id', $id)->first();
        return $artikel;
    }
    public static function update($request, $id){
        // dd($request);
        $slug = Str::slug($request['judul'], '-');
        $artikel = DB::table('artikels')
        ->where('artikel_id', $id)
        ->update(['judul'=>$request["judul"],
        'isi'=>$request["isi"],
        'slug'=>$slug,
        'tag'=>$request["tag"]]);

        return $artikel;
    }

    public static function delete($id){
        $artikel = DB::table('artikels')
        ->where('artikel_id', $id)
        ->delete();

        return $artikel;
    }
}
