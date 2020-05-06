<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaire;
use App\Models\InventaireModel;

class InventaireController extends Controller
{

    public function index(){

        $inventaires = Inventaire::latest()->get();

        return view('inventaires.index',
            ['inventaires' => $inventaires,
                'name' =>  request('name')
            ]);
    }

    public function detail($id){
        $produit = Inventaire::findOrFail($id);
        return view('inventaires.detail',['produit' => $produit]);
    }

    public function ajout(){
        return view('inventaires.ajout');
    }

    public function modification(Request $request){


        $produit = new Inventaire();

        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'image' => 'required'
        ]);

        $produit->name = request('name');
        $produit->type = request('type');
        $produit->description = request('description');
        $produit->prix = request('prix');
        $produit->image = request('image');


        $produit->save();

        return redirect('/')->with('msg', 'Produit Ajouté merci!');


     /**   error_log(request('name'));
        error_log(request('type'));
        error_log(request('description'));
        error_log(request('prix'));
        return redirect('/');**/
    }

   public function destroy($id) {
        $produit = Inventaire::findOrFail($id);
        $produit->delete();

        return redirect('/api/inventaires');
   }



    public function update(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'image' => 'required'
        ]);


        $produit = Inventaire::findOrFail($request);

        $produit->name = $request->get('name');
        $produit->type = $request->get('type');
        $produit->description = $request->get('description');
        $produit->prix = $request->get('prix');
        $produit->image = $request->get('image');

      //  $produit->save();

        return redirect('/')->with('msg', 'Produit Modifié merci!');
    }

    public function edit($id) {

        $produit = Inventaire::findOrFail($id);
        return view('inventaires.edit')->with('produit', $produit);
    }
}
