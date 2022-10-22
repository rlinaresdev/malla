<?php
namespace Malla\Install\Controllers;

/*
  *---------------------------------------------------------
  * ©IIPEC
  * Santo Domingo República Dominicana.
  *---------------------------------------------------------
*/

use Malla\Install\Support\Home;

class HomeController extends Controller {

   public function __construct( Home $app ) {
      $this->boot($app);
   }

   public function index() {
      return $this->render( "home", $this->app->data() );
   }

}
