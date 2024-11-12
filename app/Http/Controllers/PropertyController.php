<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyContactRequest;
use App\Http\Requests\SearchPropertiesRequest;
use App\Mail\PropertyContactMail;
use App\Models\Property;
use App\Models\User;
use App\Models\Agent;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
   public function index (SearchPropertiesRequest $request)
   {
        $query = Property::query()->orderBy('created_at', 'desc');
        if ($price = $request->validated('price')) {
            $query = $query->where('price', '<=', $price);
        }
        if ($surface = $request->validated('surface')) {
            $query = $query->where('surface', '>=', $surface);
        }
        if ($rooms = $request->validated('rooms')) {
            $query = $query->where('rooms', '>=', $rooms);
        }
        if ($title = $request->validated('title')) {
            $query = $query->where('title', 'like', "%{$title}%");
        }
        return view('property.index', [
            'properties' => $query->paginate(16),
            'input' => $request->validated()
        ]);
   }

   public function show(string $slug, Property $property)  
    {
        $expectedSlug = $property->getSlug();

        if ($slug !== $expectedSlug) {
            return redirect()->route('property.show', ['slug' => $expectedSlug]);
        }

        //$property = Property::find($id);

        $options = $property->options;

        return view('property.show', [
            'property' => $property,
            'options' => $options
        ]);
    }

    public function contact(Property $property, PropertyContactRequest $request)
   {
        Mail::send(new PropertyContactMail($property, $request->validated()));
        return back()->with('success', 'Votre demande de contact a bien été envoyé');
   } 

   public function search (SearchPropertiesRequest $request)
   {
        $query = Property::query()->orderBy('created_at', 'desc');
        if ($price = $request->validated('price')) {
            $query = $query->where('price', '<=', $price);
        }
        if ($surface = $request->validated('surface')) {
            $query = $query->where('surface', '>=', $surface);
        }
        if ($rooms = $request->validated('rooms')) {
            $query = $query->where('rooms', '>=', $rooms);
        }
        if ($title = $request->validated('title')) {
            $query = $query->where('title', 'like', "%{$title}%");
        }
        return view('property.search', [
            'properties' => $query->paginate(16),
            'input' => $request->validated()
        ]);
   }

   public function listAgent()
    {
        return view('pages.listAgent');
    } 
 
    public function singleAgent()
    {
        $user_id = Auth::user()->id;
        $agent_id = Auth::user()->id;

        $user = User::with('agent')->find($user_id);
        //dd($user_id);

        if (!$user) {
            //return response()->json(['message' => 'Utilisateur non trouvé'], 404);
            return redirect()->back()->with('error', 'Cet utilisateur n\'a pas été trouvé.');
        }
            //return response()->json($user);

        $agent = Agent::with('users')->find($agent_id);
        //dd($agent_id);

        if (!$agent) {
            //return response()->json(['message' => 'Agent non trouvé'], 404);
            return redirect()->back()->with('error', 'Cet utilisateur n\'a pas d\'agent associé.');
        }
            //return redirect()->back()->with('error', 'Cet utilisateur n\'a pas d\'agent associé.');
        

        return view('pages.singleAgent', [
            'user' => $user,
            'agent' => $agent->users
        ]);
            /*compact('user', 'agent')
        );*/
    } 

    public function listAgency()
    {
        return view('pages.listAgency');
    } 

    public function singleAgency()
    {
        return view('pages.singleAgency');
    } 
}
