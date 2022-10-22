<?php
namespace Malla\Install\Middleware;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Handler {

   public function init() {
      return [
         \Malla\Install\Middleware\InstallMiddleware::class,
      ];
   }

   public function route() {
      return [];
   }
   public function groups() {
      return [
         "install" => [
         ]
      ];
   }
}
