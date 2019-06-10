<?php

namespace App\Http\Requests;

use App\Order;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('order_edit');
    }

    public function rules()
    {
        return [
            'service'     => [
                'required',
            ],
            'description' => [
                'required',
                'min:100',
                'max:1000000',
            ],
        ];
    }
}
