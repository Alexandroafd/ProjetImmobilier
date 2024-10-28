<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyFormRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Option;
use App\Models\Favori;
use App\Models\User;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.properties.index', [
            'properties' => Property::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new Property();
        $property->fill([
            'title' => 'Maison',
            'description' => 'Une petite description',
            'type' => 'appartement',
            'surface' => 48,
            'rooms' => 3,
            'bedrooms' => 1,
            'floor' => 6,
            'price' => 100,
            'city' => 'Montpellier',
            'address' => 'Rue montreuille',
            'state' => 'pays',
            'status' => 'A Louer',
            'postal_code' => 34000,
            'sold' => false,
        ]);
        return view ('admin.properties.form', [
            'property' => $property,
            'options' => Option::pluck('name', 'id')
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    /*public function store(PropertyFormRequest $request)
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
    }*/

    public function store(PropertyFormRequest $request)
{
    // Créer la propriété
    //$property = Property::create($request->validated());
    $propertyData = $request->validated();

    // Vérifie si des images ont été téléchargées
    if ($request->hasFile('images')) {
        $images = $request->file('images'); // Récupérer toutes les images

        $imageNames = []; // Tableau pour stocker les noms d'images

        foreach ($images as $image) {
            // Génère un nom unique pour chaque image
            $imageName = time() . '-' . $image->getClientOriginalName();

            // Déplace l'image vers le dossier public/profil_pic
            $image->move(public_path('profil_pic'), $imageName);

            // Ajouter le nom de l'image au tableau
            $imageNames[] = $imageName;
        }

        // Enregistre les noms des images dans la base de données
        $propertyData['images'] = json_encode($imageNames); // Stocke comme JSON
        //$propertyData->save();
    }
    $property = Property::create($propertyData);

    // Synchronise les options
    $property->options()->sync($request->validated('options'));

    return redirect()->route('admin.property.index')->with('success', 'Le bien a été enregistré');
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
    /*public function update(PropertyFormRequest $request, Property $property)
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
    }*/

    public function update(PropertyFormRequest $request, Property $property)
    {
        // Valide les données et met à jour les propriétés
        $property->update($request->validated());

        // Vérifie si une nouvelle image a été téléchargée
        if ($request->hasFile('images')) {
            // Supprime l'ancienne image si elle existe
            $oldImages = $property->images;

            if (!is_array($oldImages)) {
                $oldImages = json_decode($oldImages, true) ?? [];
            }

            foreach ($oldImages as $oldImage) {
                if (file_exists(public_path('profil_pic/' . $oldImage))) {
                    unlink(public_path('profil_pic/' . $oldImage)); // Supprime le fichier ancien
                }
            }

            // Gère les nouvelles images
            $images = $request->file('images');
            $imageNames = []; // Tableau pour stocker les noms d'images

            foreach ($images as $image) {
                // Génère un nom unique pour chaque nouvelle image
                $imageName = time() . '-' . $image->getClientOriginalName();
                // Déplace l'image vers le dossier public/profil_pic
                $image->move(public_path('profil_pic'), $imageName);
                // Ajoute le nom de l'image au tableau
                $imageNames[] = $imageName;
            }

            // Enregistre les noms des nouvelles images
            $property->images = json_encode($imageNames);
            $property->save();
        }

        // Synchronise les options
        $property->options()->sync($request->validated('options'));

        return redirect()->route('admin.property.index')->with('success', 'Le bien a été mis à jour');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('admin.property.index')->with('success', 'Le bien a été supprimé');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();
        return view ('admin.properties.profile', [
            'user' => $user
        ]);
    }

    /*public function doprofile(LoginRequest $request)
    {
        $id = Auth::user()->id;
        $credentials = $request->validated();

        if($credentials->passes())
        {
            $user = User::find($id);

            $user ->name = $request->name;
            $user ->email = $request->email;
            $user ->phone = $request->phone;
            //$user ->signas = $request->signas;
            $user ->profession = $request->profession;
            $user ->about = $request->about;
            $user ->postal_code = $request->postal_code;
            $user ->address = $request->address;
            $user ->city = $request->city;
            $user ->state = $request->state;
            $user ->facebook = $request->facebook;
            $user ->twitter = $request->twitter;
            $user ->linkedin = $request->linkedin;
            $user ->google = $request->google;

            $user->save();

        return redirect()->route('admin.properties.profile')->with('success', 'Profil ajouté');

        } else {
            return redirect()->route('admin.properties.profile')->withErrors($credentials);
        }
    }*/

    public function doprofile(LoginRequest $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
    
        $user->update($request->only([
            'name', 'email', 'phone', 'profession', 'about', 
            'postal_code', 'address', 'city', 'state', 
            'facebook', 'twitter', 'linkedin', 'google'
        ]));

        return redirect()->route('admin.profile')->with('success', 'Profil modifié avec succès');
    }

    public function changePassword()
    {
        return view ('admin.properties.changePassword');
    }

    public function updatePassword(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|min:4',
            'confirm_password' => 'required|same:new_password'
        ]);

        if ($validation->fails())
        {
            return redirect()->route('admin.changePassword')
            ->withErrors($validation);
        }

        if (Hash::check($request->old_password, Auth::user()->password) == false)
        {
           session()->flash('error', 'L\'ancien mot de passe est incorret');
           return back()->with('error', 'L\'ancien mot de passe est incorret');
        }

        $user = User::find(Auth::user()->id);
        $user ->password = Hash::make($request->new_password);
        $user->save();

        session()->flash('success', 'Le mot de passe a été changé avec success');
        return back()->with('success', 'Le mot de passe a été changé avec success');
    }

    public function bookmarked()
    {
        $favoris = Favori::where('user_id', Auth::user()->id)->with( 'property')->orderBy('created_at', 'DESC')->paginate(10);
        return view ('admin.properties.bookmarked', [
            'favoris' => $favoris
        ]);
    }

    public function addToFavorites(Property $property)
    {
        $favori = new Favori();
        $favori->user_id = Auth::user()->id;
        $favori->property_id = $property->id;
        $favori->save();
    
        return redirect()->back()->with('success', 'Propriété ajoutée aux favoris !');
    }  
    
    public function delete(Favori $favori)
    {
        $favori->delete();
        return redirect()->route('admin.bookmarked')->with('success', 'Le bien favori a été supprimé');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'profile_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = auth()->user();

        if ($request->hasFile('profile_pic')) {
            if ($user->profile_pic) {
                Storage::delete('public/profile_pics/' . $user->profile_pic);
            }

            $file = $request->file('profile_pic');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/profile_pics', $filename);

            $user->profile_pic = $filename;
        }
        $user->save();

        return redirect()->back()->with('success', 'Photo de profil mise à jour avec succès!');
    }

}
