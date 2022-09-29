<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Carbon\Carbon;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

      $registrantAge = Carbon::parse($input['DOB'])->age;
            if($registrantAge > 17 )
            {
               
                Validator::make($input, [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'username' => ['required', 'string','max:100', 'unique:users'],
                    'DOB' => ['required', 'date'],
                    'accountType' => ['required', 'string'],
                    'password' => $this->passwordRules(),
                    'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
                ])->validate();


                return User::create([
                    'name' => $input['name'],
                    'username' => $input['username'],
                    'email' => $input['email'],
                    'DOB' => $input['DOB'],
                    'accountType' => $input['accountType'],
                    'password' => Hash::make($input['password']),
                    ]);
            }
            else{
                die('You are less than 18 and hence not eligible to use this plarform on age condition! ');
            }
    }
}
