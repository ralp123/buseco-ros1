<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'application_status' => ['required'],
            'application_date' => ['required'],
            'fname' => ['bail', 'required', 'max:50'],
            'mname' => ['nullable'],
            'lname' => ['bail', 'required', 'max:50'],
            'spousename' => ['bail', 'required', 'max:50'],
            'address' => ['bail', 'required', 'max:50'],
            'birthdate' => ['bail', 'required'],
            'membertype' => ['bail', 'required', 'max:20'],
            
            'municipality' => ['bail', 'required', 'max:20'],
            'barangay' => ['bail', 'required', 'max:20'],
            'citizenship' => ['bail', 'required', 'max:20'],
            'gender' => ['bail', 'required', 'max:20'],
            'ownership' => ['bail', 'required', 'max:20'],
            'tellno' => ['bail', 'required', 'max:20'],
        ];
    }

    public function validated($key = null, $default = null){
        $validated = parent::validated($key, $default);

        /* Assign the input name to column name in Database */
        return array_merge($validated, [
            'ApplicationStatus' => $this->application_status,
            'ApplicationDate' => $this->application_date,
            'Firstname' => $this->fname,
            'MI' => $this->mname,
            'Lastname' => $this->lname,
            'Spouse' => $this->spousename,
            'Address' => $this->address,
            'BirthDate' => $this->birthdate,
            'MemberType' => $this->membertype,

            'Municipality' => $this->municipality,
            'Barangay' => $this->barangay,
            'Citizenship' => $this->citizenship,
            'Sex' => $this->gender,
            'Ownership' => $this->ownership,
            'TellNo' => $this->tellno,
        ]);
    }
}
