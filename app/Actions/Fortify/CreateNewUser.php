<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers

{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */


    public function create(array $input,)
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'photo'=>['required|mimes:jpg,png,jpeg,gif'],
            // 'adresse'=>['required'],
            'email' => [
                'required',
                'string',
                'email',
                Rule::unique(User::class),
            ],
            'password' =>['required','max:6','confirmed'] ,
            'password-confirm'=>['required'],

        ]);



        // $photoPath = null;

        // if (isset($input['photo'])) {
        //     $photoPath = $this->uploadPhoto($input['photo']);
        // }

        $name=$input['prenom'].' '.$input['nom'];
        return User::create([
            'name' => $name,
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            // 'photo' => $photoPath,
            // 'adresse' => $input['adresse']

        ]);


    }
    protected function uploadPhoto($photo)
    {
        $fileName = time() . '.' . $photo->extension();

        // Stockez le fichier dans le système de fichiers (vous pouvez ajuster le disque et le chemin selon vos besoins)
        $photo->storeAs('public/images', $fileName);

        // Retournez le chemin complet du fichier
        return 'public/images' . $fileName;


    }
}
