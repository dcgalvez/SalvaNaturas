<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pais;
use stdClass;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function infoHome(Request $request) {
       $query = DB::connection('mysql')->select('CALL consulta_contenido_home');
      // dd($query);
        return $query;
    }

    public function NoticiasProcedure(Request $request) {
        $query = DB::connection('mysql')->select('CALL consulta_contenido_home(NULL, NULL)');
       // dd($query);
          return $query;
     }

    public function getRoutes() {
        $route = new stdClass();
        $route->infoH = route('infoHome');

        return $route;
    }

    public function tooCordillera() {
        // dd('En tiempo real');
        return view('secciones.cordilleras-cuencas');
    }
}
