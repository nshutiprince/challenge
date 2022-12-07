<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ChallengeRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50', 'unique:challenges,name'],
            'description' => ['required', 'string', 'max:250'],
            'type' => ['required', Rule::in([1, 2, 3])],
            'file' => ['required', 'image', 'max:5000'],
        ];
    }

    public function formatData()
    {
        return
            [
                'name' => $this->name,
                'description' => $this->description,
                'nickname' => $this->nickname,
                'type' => $this->type,
                'file' => uploadFile($this->file),
            ];
    }
}
