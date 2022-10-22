<?php
namespace Malla\Admin\Http\Controllers;

/*
  *---------------------------------------------------------
  * ©IIPEC
  * Santo Domingo República Dominicana.
  *---------------------------------------------------------
*/

use Malla\Admin\Http\Support\Home;

class HomeController extends Controller {

   public function __construct( Home $app ) {
     $this->boot($app);
   }

   public function index() {
     return $this->render( "home", $this->app->data() );
   }
}
