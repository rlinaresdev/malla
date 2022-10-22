<?php
namespace Malla\Install\Middleware;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

use Closure;
use IlluminateSupportFacadesAuth;

class InstallMiddleware {

   protected $exerts = [];

   public function handle($request, Closure $next, $guard = "web") {
      if( app("malla")->isRunning() == false && __segment(1) != "install" ) {
         return redirect("install");
      }
      return $next($request);
   }

}
