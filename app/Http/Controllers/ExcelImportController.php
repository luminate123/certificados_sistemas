<?php

// ExcelImportController.php
namespace App\Http\Controllers;

use App\Models\ExcelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExcelImportController extends Controller
{

    public function index()
    {
        $users = ExcelUser::all();
        return view('welcome', ['users' => $users]);
    }
    
    public function import(Request $request)
    {
        $data = $request->json()->all();

        // Aquí puedes procesar los datos y guardarlos en la base de datos
        foreach ($data as $row) {
            // Omitir la primera fila si es encabezado
            if ($row === reset($data)) {
                continue;
            }

            // Verificar si al menos uno de los campos tiene un valor
            if (!empty(array_filter($row))) {
                DB::table('alumnos')->insert([
                    'DNI' => $row['DNI'] ?? null,
                    'APELLIDO_PATERNO' => $row['APELLIDO_PATERNO'] ?? null,
                    'APELLIDO_MATERNO' => $row['APELLIDO_MATERNO'] ?? null,
                    'NOMBRES' => $row['NOMBRES'] ?? null,
                    'EMAIL' => $row['EMAIL'] ?? null,
                    'CODIGO_CARRERA' => $row['CODIGO_CARRERA'] ?? null,
                    'TELEFONO' => $row['TELEFONO'] ?? null,
                    'DIRECCION' => $row['DIRECCION'] ?? null,
                    'PERIODO_INGRESO' => $row['PERIODO_INGRESO'] ?? null,
                    'SEMESTRE_INGRESO' => $row['SEMESTRE_INGRESO'] ?? null,
                    'PERIODO_EGRESO' => $row['PERIODO_EGRESO'] ?? null,
                    'SEMESTRE_EGRESO' => $row['SEMESTRE_EGRESO'] ?? null,
                    'ANIO_BACHILLER' => $row['ANIO_BACHILLER'] ?? null,
                    'PERIODO_TITULO' => $row['PERIODO_TITULO'] ?? null,
                ]);
            }
        }

        return response()->json(['status' => 'success']);
    }
}
