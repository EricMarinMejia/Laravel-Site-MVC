<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'brand' => $this->brand,
            'model' => $this->model,
            'license_plate' => $this->license_plate,
            'kilometers' => $this->kilometers,
            'image' => $this->image
        ];
    }
}
