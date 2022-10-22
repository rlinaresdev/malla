<?php
namespace Malla\Admin\Http\Controllers;

/*
  *---------------------------------------------------------
  * ©IIPEC
  * Santo Domingo República Dominicana.
  *---------------------------------------------------------
*/

use Malla\Admin\Http\Support\Auth;

class AuthController extends Controller {

     public function __construct( Auth $app ) {
        $this->boot($app);
     }

     public function index() {
        return $this->render( "login", $this->app->index() );
     }

     public function retrieve() {
        return $this->render( "retrieve", $this->app->retrieve() );
     }

     public function register() {
        return $this->render( "register", $this->app->register() );
     }

}
