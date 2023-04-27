<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
             
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'date' => 'required|date',
            'phone' => 'required|string|max:255',
            'web' => 'required|url|max:255',
            'address' => 'required|string|max:255',
        
        ];
    }
     public function message(): array
    {
        return [
            'name.required' => 'Vui lòng nhập họ tên.',
        'name.max' => 'Họ tên không được vượt quá 255 ký tự.',
        'age.required' => 'Vui lòng nhập tuổi.',
        'age.integer' => 'Tuổi phải là số nguyên.',
        'age.min' => 'Tuổi không được nhỏ hơn 1.',
        'age.max' => 'Tuổi không được lớn hơn 150.',
        'date.required' => 'Vui lòng nhập ngày tháng.',
        'date.date' => 'Ngày tháng không hợp lệ.',
        'phone.required' => 'Vui lòng nhập số điện thoại.',
        'phone.max' => 'Số điện thoại không được vượt quá 20 ký tự.',
        'web.required' => 'Vui lòng nhập địa chỉ website.',
        'web.url' => 'Địa chỉ website không hợp lệ.',
        'web.max' => 'Địa chỉ website không được vượt quá 255 ký tự.',
        'address.required' => 'Vui lòng nhập địa chỉ.',
        'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
        ];
    }
}
