<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyFormRequest;
use App\Models\Option;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.properties.index', [
            'properties' => Property::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new Property();
        $property->fill([
            'surface' => 48,
            'rooms' => 3,
            'bedrooms' => 1,
            'floor' => 6,
            'city' => 'Montpellier',
            'postal_code' => 34000,
            'sold' => false,
        ]);
        return view ('admin.properties.form', [
            'property' => new Property(),
            'options' => Option::pluck('name', 'id')
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormRequest $request)
    {
        $property = Property::create($request->validated());
        // Vérifie si une image a été téléchargée
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Génère un nom unique pour l'image
            $imageName = time() . '-' . $image->getClientOriginalName();

            // Déplace l'image vers le dossier public/profil_pic
            $image->move(public_path('profil_pic'), $imageName);

            // Enregistre le nom de l'image dans la base de données
            $property->image = $imageName;

            // Sauvegarde les modifications
            $property->save();
        }
        $property->options()->sync($request->validated('options'));
        return to_route('admin.property.index')->with('success', 'Le bien a été enregistré');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view ('admin.properties.form', [
            'property' => $property,
            'options' => Option::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormRequest $request, Property $property)
    {
        $property->update($request->validated());
        // Vérifie si une nouvelle image a été téléchargée
    if ($request->hasFile('image')) {
        $image = $request->file('image');

        // Génère un nom unique pour l'image
        $imageName = time() . '-' . $image->getClientOriginalName();

        // Déplace l'image vers le dossier public/profil_pic
        $image->move(public_path('profil_pic'), $imageName);

        // Met à jour le nom de l'image dans la base de données
        $property->image = $imageName;
        $property->save();  // Sauvegarde les modifications
    }
        $property->options()->sync($request->validated('options'));
        return to_route('admin.property.index')->with('success', 'Le bien a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('admin.property.index')->with('success', 'Le bien a été supprimé');
    }
}
