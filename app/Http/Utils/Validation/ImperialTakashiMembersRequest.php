<?php


namespace App\Http\Utils\Validation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ImperialTakashiMembersRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        // 各種パラメーターをにする。ただし、arrayでリクエストされた場合はそのまま。
        $this->merge([
            'part' => array_unique(is_array($this->part) === true ? $this->part : explode(',', $this->part)),
            'id' => array_unique(is_array($this->id) === true ? $this->id : explode(',',$this->id))
        ]);
    }

    public function rules()
    {
        return [
            'part' => 'array',
            'part.*' => 'in:snippet',
            'id' => 'array|max:20|integer',
        ];
    }

    public function messages()
    {
        return [
            'part.alpha' => 'The part(s) has to be alphabet array.',
            'part.in' => 'Unknown part',
            'id.max' => 'You can request ids up to 20.',
            'id.integer' => 'The id(s) has to be integer.'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if ($validator->fails()) {
            //全体のエラーを表示
            $response['message'] = 'There are missing or wrong parameters.';
            $response['errors'] = $validator->errors()->toArray();
            $response['requests'] = $this->request->all();
            throw new HttpResponseException(
                response()->json($response, 400, [], JSON_PRETTY_PRINT));
        }
    }
}
