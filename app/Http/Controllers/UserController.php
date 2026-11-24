<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::with('role')->orderByDesc('id')->get();
        $roles = Role::orderBy('id')->get();

        return view('users.index', compact('users', 'roles'));
    }

    public function updateRole(Request $request, string $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);

        // Sécurité : empêcher l'admin connecté de rétrograder son propre compte
        if ($user->id === auth()->id() && (int) $validated['role_id'] !== 1) {
            return redirect()->route('users.index')
                ->withErrors(['Vous ne pouvez pas modifier votre propre rôle administrateur.']);
        }

        $user->update([
            'role_id' => $validated['role_id'],
        ]);

        return redirect()->route('users.index')
            ->with('success', "Le rôle de {$user->name} a été mis à jour avec succès !");
    }
}
