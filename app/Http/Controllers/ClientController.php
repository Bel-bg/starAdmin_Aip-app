<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(): View
    {
        $clients = Client::orderByDesc('id')->get();

        return view('clients.index', compact('clients'));
    }

    public function create(): View
    {
        return view('clients.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date_inscription' => 'nullable|date',
        ]);

        $validated['date_inscription'] = $validated['date_inscription'] ?? now()->toDateString();

        Client::create($validated);

        return redirect()->route('clients.index')
            ->with('success', 'Client ajouté avec succès !');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id): View|RedirectResponse
    {
        $client = Client::find($id);

        if (!$client) {
            return redirect()->route('clients.index')
                ->with('error', 'Client introuvable.');
        }

        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $client = Client::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'date_inscription' => 'nullable|date',
        ]);

        $client->update($validated);

        return redirect()->route('clients.index')
            ->with('success', 'Informations du client mises à jour !');
    }

    public function destroy(string $id): RedirectResponse
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')
            ->with('success', 'Client supprimé avec succès.');
    }
}
