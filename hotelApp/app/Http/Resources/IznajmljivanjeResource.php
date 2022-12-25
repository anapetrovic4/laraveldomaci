<?php

namespace App\Http\Resources;

use App\Models\Gost;
use App\Models\Soba;
use Illuminate\Http\Resources\Json\JsonResource;

class IznajmljivanjeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
            'id'=>$this->resource->id, 
            'gost'=>Gost::find($this->resource->gost_id), 
            'soba'=>Soba::find($this->resource->soba_id), 
            'datum_od'=>$this->resource->datum_od, 
            'datum_do'=>$this->resource->datum_od, 

        ];
    }
}
