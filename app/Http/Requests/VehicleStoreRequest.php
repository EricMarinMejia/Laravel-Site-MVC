<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $vehicle_id = $this->vehicle->id ?? null;
        return [
            'user_id' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'license_plate' => 'required',
            'kilometers' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ];
    }
}
