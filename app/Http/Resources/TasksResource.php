<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TasksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (string)$this->id,
            'attributes' => [
                'name'        => $this->name,
                'description' => $this->description,
                'priority'    => $this->priority,
                'created_at'  => $this->created_at,
                'updated_at'  => $this->updated_at,
            ],
            'relationships' => [
                'user id' => (string)$this->user->id,
                'user first_name' => (string)$this->user->first_name,
                'user last_name' => (string)$this->user->last_name,
                'user email' => (string)$this->user->email,
            ],
        ];
    }
}
