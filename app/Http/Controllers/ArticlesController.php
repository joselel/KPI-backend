<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticlesMySql;
use App\Models\ArticlesPgSql;
use App\Models\ArticlesSqlSrv;

class ArticlesController extends Controller
{
    public function index($datbase){
        $articles;

            if($datbase == 'mysql')
            {
                $articles = ArticlesMySql::all();
                return response()->json([
                    'code' => 200,
                    'status' => 'success',
                    'sales' => $articles
                ]);
            }
            if($datbase == 'pgsql')
            {
                $articles = ArticlesPgSql::all();
                return response()->json([
                    'code' => 200,
                    'status' => 'success',
                    'sales' => $articles
                ]);
            }
            if($datbase == 'sqlsrv')
            {
                $articles = ArticlesSqlSrv::all();
                return response()->json([
                    'code' => 200,
                    'status' => 'success',
                    'sales' => $articles
                ]);
            }
            return response()->json([
                'code' => 400,
                'status' => 'error',
                'message' => 'Base de datos seleccionada no existe!'
            ]);
        
    }
}
