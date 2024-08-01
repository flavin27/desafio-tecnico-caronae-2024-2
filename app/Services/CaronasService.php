<?php 

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CaronasService {

    public static function getCaronas() {
        $response = Http::get(env('API_URL'));
        return $response->json()['caronas'];
    }
}


?>