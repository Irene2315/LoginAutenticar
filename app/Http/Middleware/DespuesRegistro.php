<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class DespuesRegistro
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
 
        Log::info("El usuario se a registrado");

        
        $users = DB::table('users')->get();
        Log::info("Los usuarios registrados son", ['users' => $users]);
 
        return $response;
    }
}
