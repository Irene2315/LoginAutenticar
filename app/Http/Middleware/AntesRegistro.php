<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;
/*Por Irene: El objeto Response por defecto provoca un error que solventamos usando el objeto 
   Response de Symfony
use Illuminate\Http\Response;
*/
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

/*
<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
*/
class AntesRegistro
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info("Un usuario se va a registrar");
        
        $users = DB::table('users')->get();
        Log::info("Los usuarios registrados son", ['users' => $users]);

        return $next($request);
    }
}
