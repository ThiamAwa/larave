<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Auth.register');
    }

               /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   

        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'photo'=>['required', 'mimes:jpg,png,jpeg,gif'],
            // 'adresse'=>['required'],
            'email' => [
                'required',
                'string',
                'email',
                Rule::unique(User::class),
            ],
            'password' =>['required','max:6'] ,
            'password_confirm'=>['required'],
        ]);

        // if ($validator->fails()) {
        //     return redirect('register')
        //         ->withErrors($validator)
        //         ->withInput();
        // }


        $fileName = time(). '.' . $request->photo->extension();
        $request->photo->storeAs('public/images', $fileName);
        dd($request->all());
        User::create($request->all());
        // return to_route('master');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
