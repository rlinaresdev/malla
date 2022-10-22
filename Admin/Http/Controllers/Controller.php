<?php
namespace Malla\Admin\Http\Controllers;

/*
  *---------------------------------------------------------
  * ©IIPEC
  * Santo Domingo República Dominicana.
  *---------------------------------------------------------
*/

use Malla\Admin\Support\Skin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {
   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   protected $app;

   protected $path = "admin::app.";

   public function boot( $app=null, $data=[] ) {

      $this->app = $app;

      $data["title"]       = "Theme Title";
      $data["language"]    = config("admin.locale");
      $data["charset"]     = config("admin.charset");

      if( method_exists($app, "share") ) {
         $data = array_merge($data, $app->share());
      }

      $this->share($data);
   }

   public function share($data) {
      if(!empty($data) && is_array($data) ) {
         view()->share($data);
      }
   }

   public function render($view=NULL, $data=[], $mergeData=[]) {

   if(view()->exists(($path = $this->path.$view))) {
      return view($path, $data, $mergeData);
   }

   abort(500, "La vista {$path} no existe");
   }

}
