<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSensusProfesi extends Model
{
    protected $table = 'sensusprofesi';
//    protected $primaryKey = 'id_sp';
//    protected $guarded = [];
//
//
//    public static function getSensusProfesiPerTahun(){
//
//
//        $tahun_awal = date('Y') - 3;
//        $tahun_akhir = date('Y');
//
//        $category = [];
//
//        $series[0]['name'] = 'Pengangguran';
//        $series[1]['name'] = 'Buruh';
//        $series[2]['name'] = 'Wirausaha';
//        $series[3]['name'] = 'PNS';
//
//
//
//        $j = 0;
//        for ($i=$tahun_awal; $i <= $tahun_akhir ; $i++) {
//            $category[] = $i;
//
//            $series[0]['data'][] = Self::where('coloumn', '=', 'pengangguran')->where('tahun','like', $i.'%')->count();
//            $series[1]['data'][] = Self::where('coloumn', '=', 'buruh')->where('tahun','like', $i.'%')->count();
//            $series[2]['data'][] = Self::where('coloumn', '=', 'pengangguran')->where('tahun','like', $i.'%')->count();
//            $series[3]['data'][] = Self::where('coloumn', '=', 'buruh')->where('tahun','like', $i.'%')->count();
//
//        }
//
//
//        return ['category' => $category, 'series' => $series];
//
//
//    }
}
