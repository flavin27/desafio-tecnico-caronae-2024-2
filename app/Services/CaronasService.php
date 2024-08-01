<?php 

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\DTO\CaronaDTO;

class CaronasService {

    public static function getCaronas(): array {
        $response = Http::get(env('API_URL'));
        $data = $response->json();

        $caronasArray = $data['caronas'];
        $caronas = [];

        foreach ($caronasArray as $carona) {
            $caronas[] = new CaronaDTO($carona);
        }

        return $caronas;
    }

    public static function getCaronaById(int $id): CaronaDTO {
        $response = Http::get(env('API_URL'));
        $data = $response->json()['caronas'][$id];

        return new CaronaDTO($data);
    }
}


?>