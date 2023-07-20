<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AgentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'codename' => $this->codename,
            'real_name' => $this->real_name,
            'origin' => $this->origin,
            'race' => $this->race,
            'gender' => $this->gender,
            'role' => $this->role,
            'basic_abilities_1' => $this->basic_abilities_1,
            'basic_abilities_2' => $this->basic_abilities_2,
            'signature_abilities' => $this->signature_abilities,
            'ultimate_ability' => $this->ultimate_ability,
            'ult_points' => $this->ult_points
        ];
    }
}
