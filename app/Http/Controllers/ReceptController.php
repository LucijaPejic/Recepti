<?php

namespace App\Http\Controllers;
use App\Models\Recept;
use Illuminate\Http\Request;

class ReceptController extends Controller
{
    public function index()
{
    
        $recepti = Recept::inRandomOrder()->take(2)->get();
        return view('pages.index', compact('recepti'));
    
    
}

    public function blogpost()
    {
        $recepti = Recept::all();
        return view('pages.blog-post', compact('recepti'));
    }
    
public function show($id)
{
    $recept = Recept::findOrFail($id);
    return view('pages.receipe-post', compact('recept'));
}
public function search(Request $request)
{
    $query = $request->input('query');
    $recepti = Recept::where('naziv', 'LIKE', '%'.$query.'%')
                    ->orWhere('priprema', 'LIKE', '%'.$query.'%')
                    ->orderBy('date', 'desc')
                    ->paginate(6);

    return view('pages.search')->with('recepti', $recepti);
}



    public function saveItem(Request $request)
    {
       
        $newRecept = new Recept;
        $newRecept->naziv = $request->input('naziv');
        $newRecept->priprema = $request->input('priprema');
        $newRecept->opis = $request->input('opis');
        $newRecept->vrijeme_pripreme = $request->input('vrijeme_pripreme');
        $newRecept->vrijeme_kuhanja = $request->input('vrijeme_kuhanja');
        $newRecept->sastojci = $request->input('sastojci');
        
        
        $newRecept->date = date('Y-m-d');
        if ($request->hasFile('slika')) {
            $image = $request->file('slika');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $filename);
            $newRecept->slika = '/storage/images/' . $filename;
        }
    
        $newRecept->save();
        return redirect('/');

    }
}
