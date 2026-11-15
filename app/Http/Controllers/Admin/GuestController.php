<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests = Guest::all();
        return view('admin.guest.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'logo_image_path' => 'nullable|image|mimes:png,jpg,jpeg',
            'guest_type' => 'nullable|string',
        ]);

        if ($request->hasFile('logo_image_path')) {
            $validated['logo_image_path'] = $request->file('logo_image_path')->store('guests', 'public');
        }

        Guest::create($validated);

        return redirect()->route('admin.guest.index')
            ->with('success', 'Guest created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guest = Guest::findOrFail($id);
        return view('admin.guest.show', compact('guest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guest = Guest::findOrFail($id);
        return view('admin.guest.edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guest = Guest::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'logo_image_path' => 'nullable|image|mimes:png,jpg,jpeg',
            'guest_type' => 'nullable|string',
        ]);

        if ($request->hasFile('logo_image_path')) {
            $validated['logo_image_path'] = $request->file('logo_image_path')->store('guests', 'public');
        }

        $guest->update($validated);

        return redirect()->route('admin.guest.index')
            ->with('success', 'Guest updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guest = Guest::findorfail($id);
        if ($guest->logo_image_path) {
            Storage::disk('public')->delete($guest->logo_image_path);
        }
        $guest->delete();

        return redirect()->route('admin.guest.index')
            ->with('success', 'Guest deleted successfully.');
    }
}
