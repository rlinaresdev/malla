<?php
namespace Malla\Install\Controllers;

/*
  *---------------------------------------------------------
  * ©IIPEC
  * Santo Domingo República Dominicana.
  *---------------------------------------------------------
*/

use Malla\Install\Request\User;
use Malla\Install\Support\Database;

class DatabaseController extends Controller {

   public function __construct( Database $app ) {
     $this->boot($app);
   }

   public function index() {
     return $this->render( "database", $this->app->data() );
   }

   public function forge( User $request ) {
      return $this->app->forge($request);
   }

   public function destroy() {
      return $this->app->destroy();
   }
}
