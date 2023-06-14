<?php
namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Artist;


class ArtistController extends Controller
{

        public function search(Request $request)
    {
        $query = $request->input('query');

        // Exécutez votre logique de recherche ici en utilisant le terme de recherche $query

        // Par exemple, recherchez les artistes correspondant au terme de recherche
        $artists = Artist::where('artist_name', 'LIKE', '%' . $query . '%')->get();

        // Retournez les résultats de la recherche à une vue pour les afficher
        return view('search-results', ['artists' => $artists]);
    }

    public function show(Artist $artist)
    {
        return view('artist.artist-show', compact('artist'));
    }

}