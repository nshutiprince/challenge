<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ChallengeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "description" => $this->description,
            "type" => $this->type,
            // "file" =>  $this->when(
            //     $request->routeIs(['challenges.show']),
            //     Storage::temporaryUrl(
            //         $this->file, now()->addMinutes(10)
            //     )
            // ),
        ];
    }
}
