<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWork extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'   => 'required|max:200',
            'image'   => 'image|max:2048'
        ];
    }

    /**
     * @return array
     */
    public function data()
    {
        $data = [
            'title'            => $this->get('title'),
            'view'             => $this->get('works'),
//            'view'             => empty($this->get('view')) ? 'frontend.work.show' : $this->get('view'),
            'is_published'     => $this->has('publish'),
        ];

        return $data;
    }
}