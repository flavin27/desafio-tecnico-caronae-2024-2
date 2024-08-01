<?php 

namespace App\DTO;

class MotoristaDTO
{
    public string $nome;
    public string $situacao;
    public string $telefone;
    public string $foto;

    public function __construct(array $data)
    {
        $this->nome = $data['nome'];
        $this->situacao = $data['situacao'];
        $this->telefone = $data['telefone'];
        $this->foto = $data['foto'];
    }
}

?>