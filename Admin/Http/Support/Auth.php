<?php
namespace Malla\Admin\Http\Support;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Auth {

   protected $app;

   public function __construct( $app=null ) {
      $this->app = $app;
   }

   public function index() {
      $data["title"] = "Login";

      return $data;
   }

   public function retrieve() {
      $data["title"] = __("auth.retrieve");

      return $data;
   }

   public function register() {
      $data["title"] = __("auth.register");

      return $data;
   }
}
