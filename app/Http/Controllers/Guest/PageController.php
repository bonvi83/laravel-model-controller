<?php
// il comando namespace organizza il codice in categorie logiche e previene collisioni di nomi tra classi
namespace App\Http\Controllers\Guest;

// il controller impoprta alcune classi utili per gestire le richieste http ed interagire con Movie
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

// questo controller gestisce le richieste
// index() viene eseguito quando viene effettuata una richiesta GET, lo utilizzo per recuperare tutti i film dal database e li passo alla pagina html
class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('home',compact($movies));
    }
}

// praticamente recupero tutti i film da database e li passo alla home per visualizzarli