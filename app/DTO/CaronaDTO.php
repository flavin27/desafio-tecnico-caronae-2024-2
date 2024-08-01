<?php 

namespace App\DTO;

use App\DTO\MotoristaDTO;


class CaronaDTO
{
    public MotoristaDTO $motorista;
    public int $vagas;
    public string $horario_partida;
    public string $horario_chegada;
    public string $local_partida;
    public string $local_chegada;
    public string $ponto_encontro;
    public string $observacoes;
    public string $trajeto;
    public bool $indo;

    public function __construct(array $data)
    {
        $this->motorista = new MotoristaDTO($data['motorista']);
        $this->vagas = $data['vagas'];
        $this->horario_partida = $data['horario_partida'];
        $this->horario_chegada = $data['horario_chegada'];
        $this->local_partida = $data['local_partida'];
        $this->local_chegada = $data['local_chegada'];
        $this->ponto_encontro = $data['ponto_encontro'];
        $this->observacoes = $data['observacoes'];
        $this->trajeto = $data['trajeto'];
        $this->indo = $data['indo'];
    }
}


?>