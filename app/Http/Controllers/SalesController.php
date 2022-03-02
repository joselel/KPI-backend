<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\SalesMySql;
use App\Models\SalesPgSql;
use App\Models\SalesSqlSrv;

class SalesController extends Controller
{
    public function index($datbase){
        $sales;
            if($datbase == 'mysql')
            {
                $sales = SalesMySql::all();
                return response()->json([
                    'code' => 200,
                    'status' => 'success',
                    'sales' => $sales
                ]);
            }
            if($datbase == 'pgsql')
            {
                $sales = SalesPgSql::all();
                return response()->json([
                    'code' => 200,
                    'status' => 'success',
                    'sales' => $sales
                ]);
            }
            if($datbase == 'sqlsrv')
            {
                $sales = SalesSqlSrv::all();
                return response()->json([
                    'code' => 200,
                    'status' => 'success',
                    'sales' => $sales
                ]);
            }
            return response()->json([
                'code' => 400,
                'status' => 'error',
                'message' => 'Base de datos seleccionada no existe!'
            ]);   
    }

    public function create(Request $request){

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => $request
        ]);
    }
    
}
