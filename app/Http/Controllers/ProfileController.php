<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('auth.update-user', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        info('llega a act');
        $rules = [
            'nombre' => 'required|string',
            'curso' => 'required|numeric',
            'email' => 'required|string',
            'password' => 'required|string|min:8', 
            'password_confirmation' => 'required|string|same:password', 
        ];
        $messages = [
            'nombre.required' => 'Por favor, introduce un nombre.',
            'curso.required' => 'Por favor, introduce el curso.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password_confirmation.required' => 'La confirmación de la contraseña es obligatoria.',
            'password_confirmation.same' => 'La contraseña y su confirmación deben coincidir.',
        ];
        
        // Ejecuta la validación
        $validator = Validator::make($request->all(), $rules, $messages);
    
        // Si la validación falla, redirecciona con errores de validación
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    
        $user = User::findOrFail($id);
    
        // Actualiza los campos del usuario
        $user->update([
            'nombre' => $request->input('nombre'),
            'curso' => $request->input('curso'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), 
        ]);
    
        // Redirige a la página principal con el perfil actualizado
        return redirect()->route('home')
        ->with('success', 'Usuario actualizado exitosamente.');
    }
    

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
