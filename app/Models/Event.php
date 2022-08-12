<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Event extends Model
// {
//     use HasFactory;
// }

class Event
{
    private static $events = [
        [
            'id' => 1,
            'nama_acara' => 'Workshop Software Engineering',
            'tgl' => '2022-08-20',
            'waktu' => '08:00'
        ],
        [
            'id' => 2,
            'nama_acara' => 'Workshop Digital Marketing',
            'tgl' => '2022-08-27',
            'waktu' => '14:00'
        ],
        [
            'id' => 3,
            'nama_acara' => 'Sosialisasi Beasiswa Kemdikbud',
            'tgl' => '2022-08-29',
            'waktu' => '15:00'
        ],
    ];

    public static function all(){
        return collect(self::$events);
    }

    public static function find($id) {
        $events = static::all();
        return $events->firstWhere('id', $id);
    }
}