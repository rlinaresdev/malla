<?php
namespace Malla\Alert;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Driver {

   public function info() {
     return [
        "name"			   => "Alert",
        "author"		   => "Ing. Ramón A Linares Febles",
        "email"			=> "rlinares4381@gmail.com",
        "license"		   => "MIT",
        "support"		   => "http://www.iipec.net",
        "version"		   => "V-1.0",
        "description" 	=> "Alert V-1.0",
     ];
   }
   public function app() {
   	return [
   		"type"			=> "library",
   		"slug"			=> "alert",
   		"driver"		   => \Malla\Alert\Driver::class,
   		"token"			=> NULL,
   		"activated" 	=> 1,
   	];
   }

   ## KERNEL
   public function providers() {
     return [
     ];
   }

   public function alias() {
     return [];
   }

   public function install( $app ) {
      $app->create($this->app())->addInfo($this->info());
   }
   public function uninstall( $app ) {
   }
}
