<?php
namespace Malla\Admin\Providers;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class AdminRouteServiceProvider extends ServiceProvider {

   protected $namespace = "Malla\Admin\Http\Controllers";

   public function boot() {
      parent::boot();
   }

   public function map() {
      Route::namespace($this->namespace)->group(
         __path("__admin/Http/Routes/app.php")
      );
   }
}
