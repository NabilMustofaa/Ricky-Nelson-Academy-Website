<?php
namespace App\Models;

class statistik
{
    private static $statistik=[
        [
            'tanggal' => '31/03/2002',
            'status'  => 'hadir' 
        ],
        [
            'tanggal' => '21/03/2002',
            'status'  => 'hadir' 
        ],
        [
            'tanggal' => '11/03/2002',
            'status'  => 'hadir' 
        ]
        

    ];
    public static function stat(){
        return self::$statistik;
    }
}
?>