<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;
use App\Services\CaronasService;
use App\DTO\CaronaDTO;

class CaronaServiceTest extends TestCase
{
    use RefreshDatabase;

    public function testCanGetAllCaronas()
    {
        $caronas = CaronasService::getCaronas();

        $this->assertIsArray($caronas);
        $this->assertInstanceOf(CaronaDTO::class, $caronas[0]);
    }

    public function testCanGetACaronaById()
    {
        $carona = CaronasService::getCaronaById(1);
        $this->assertInstanceOf(CaronaDTO::class, $carona);
    }
}
