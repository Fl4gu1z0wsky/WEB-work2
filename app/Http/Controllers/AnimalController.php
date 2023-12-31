<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Illuminate\Support\Facades\Validator;


class AnimalController extends Controller
{
    /**
     * Display les animaux
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    /**
     * Display les animaux pour les modifier
     *
     * @return \Illuminate\Http\Response
     */
    public function manageAnimals()
    {
        $animals = Animal::all();
        return view('animals.manage', compact('animals'));
    }

    /**
     * Display l'animal pour le modifier
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    /**
     * Montre le formulaire de création d'animal
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Crée un nouvel animal
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        try {

            // Vérifie l'input de l'utilisateur
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|regex:/^[a-zA-Z\-]{3,16}$/',
                'species' => 'required|string|regex:/^[a-zA-Z\-]{3,16}$/',
                'sexe' => 'required|string',
                'age' => 'required|numeric|between:0,300',
                'country' => 'required|string|regex:/^[a-zA-Z\-\s]{3,16}$/',
                'comment' => 'nullable|string|max:50',
            ]);

            // Check si ça fail
            if ($validator->fails()) {
                return redirect('/add-animal')->with('error', 'Erreur d\'entrée de la part de l\'utliisateur');
            }

            // Créer un nouvel animal
            Animal::create([
                'name' => $request->input('name'),
                'species' => $request->input('species'),
                'sexe' => $request->input('sexe'),
                'age' => $request->input('age'),
                'country' => $request->input('country'),
                'comment' => $request->input('comment'),
            ]);
            return redirect('/add-animal')->with('success', 'Animal ajouté avec succès.');

        } catch (\Exception $e) {
            // En cas d'erreur, on prévient l'utilisateur
            return redirect('/add-animal')->with('error', 'Une erreur s\'est produite lors de l\'ajout de l\'animal.');
        }      

    }

    /**
     * Supprime l'animal souhaité
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        try {
            $animal->delete();

            return redirect('/manage-animals')->with('success', 'Animal supprimé avec succès.');
        } catch (\Exception $e) {
            return redirect('/manage-animals')->with('error', 'Une erreur s\'est produite lors de la suppression de l\'animal.');
        }
    }

    /**
     * Modifie l'animal souhaité
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {

        try {
            
            // Vérifie l'input de l'utilisateur
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|regex:/^[a-zA-Z\-]{3,16}$/',
                'species' => 'required|string|regex:/^[a-zA-Z\-]{3,16}$/',
                'sexe' => 'required|string',
                'age' => 'required|numeric|between:0,300',
                'country' => 'required|string|regex:/^[a-zA-Z\-\s]{3,16}$/',
                'comment' => 'nullable|string|max:50',
            ]);

            // Check si ça fail
            if ($validator->fails()) {
                return redirect('/add-animal')->with('error', 'Erreur d\'entrée de la part de l\'utliisateur');
            }
            
            // Modifie l'animal si tout est bon
            $animal->update([
                'name' => $request->input('name'),
                'species' => $request->input('species'),
                'sexe' => $request->input('sexe'),
                'age' => $request->input('age'),
                'country' => $request->input('country'),
                'comment' => $request->input('comment'),
            ]);

            return redirect('/manage-animals')->with('success', 'Animal mis à jour avec succès.');
        } catch (\Exception $e) {
            return redirect('/manage-animals')->with('error', 'Une erreur s\'est produite lors de la mise à jour de l\'animal.');
        }
    }

}
