<?php
namespace Malla\Admin\Http\Support;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Home {

   protected $app;

   public function __construct( ) {
   }

   public function data() {
      $data["titles"] = "Administacion";

      return $data;
   }
}
