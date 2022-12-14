<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PolaganjeResource extends JsonResource
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
            'id' => $this->resource->id,
            'datum' => $this->resource->datum,
            'bodovi' => $this->resource->bodovi,
            'ocena'=> $this->resource->ocena,
            'napomena'=> $this->resource->napomena,
            'student' => new StudentResource($this->resource->student),
            'predmet' => new PredmetResource($this->resource->predmet)
        ];

    }
}
