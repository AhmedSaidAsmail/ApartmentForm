<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
//    protected $fillable2 = [
//        'apartment_id',
//        'main_gate',
//        'side_gates',
//        'main_lobby',
//        'reception',
//        'room_corridors_1',
//        'room_corridors_2',
//        'elevator_1',
//        'elevator_2',
//        'whole_room',
//        'room_insider',
//        'bathroom_1',
//        'bathroom_2',
//        'kitchen_1',
//        'kitchen_2',
//        'reception_room_1',
//        'reception_room_2',
//        'air_conditioning_type',
//        'fire_system',
//        'internal_services',
//        'external_services',
//    ];
    protected $fillable = [
        'apartment_id',
        'main_gate',
        'side_gates',
        'main_lobby',
        'main_lobby_2',
        'reception',
        'downfall',
        'restaurant',
        'cafe',
        'out_garden',
        'other',
        'room_corridors_1',
        'room_corridors_2',
        'elevator',
        'whole_room',
        'room_insider',
        'bathroom',
        'kitchen',
        'reception_room',
        'air_conditioning_type',
        'fire_system',
        'internal_services',
        'external_services',
    ];
}
