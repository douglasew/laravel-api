<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Cliente extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'sexo' => $this->sexo,
            'senha' => $this->senha,
            'cpf' => $this->cpf,
            'rg' => $this->rg
        ];
    }
}
