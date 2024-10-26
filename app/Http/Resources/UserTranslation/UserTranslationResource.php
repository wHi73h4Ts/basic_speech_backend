<?php

namespace App\Http\Resources\UserTranslation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserTranslationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this->user_id,
            'translation_id' => $this->translation_id,
        ];
    }
}
