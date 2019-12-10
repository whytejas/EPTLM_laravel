<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * @var string|null
     */
    public $mime;
    /**
     * @var string|null
     */
    public $original_filename;
    /**
     * @var string
     */
    public $filename;

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
        return array(
            //

            'Title' => 'required|min:5',
            'Content' => 'required',
            'Image' => 'nullable'
        );
    }
}
