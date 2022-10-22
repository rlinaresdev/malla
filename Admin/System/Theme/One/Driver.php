<?php
namespace Malla\Admin\Theme\One;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Driver {

   public function info() {
     return [
        "name"			   => "One",
        "author"		   => "Ing. Ramón A Linares Febles",
        "email"			=> "rlinares4381@gmail.com",
        "license"		   => "MIT",
        "support"       => "http://www.iipec.net",
        "version"		   => "V-1.0",
        "description" 	=> "One V-1.0",
     ];
   }

   public function app() {
   	return [
   		"type"			=> "theme",
   		"slug"			=> "one",
   		"driver"		   => \Malla\Admin\Theme\Driver::class,
   		"token"			=> NULL,
   		"activated" 	=> 1,
   	];
   }

   public function paths() {
      return [
         "app"             => __DIR__."/Http/app.php",
         "view"            => __DIR__."/Http/views",
         "assets"          => __DIR__."/Http/assets",
         "assets_public"   => "admin/themes/one/assets"
      ];
   }

   public function loadGrammary( $lang ) {

      $file = config('admin.faker_locale');

      if( file_exists( __DIR__."/Http/Locale/$file.php") ) {
         if( class_exists( ($file = "\Malla\Admin\Theme\One\Http\Locale\\$file") ) ) {
            $lang->addLines( (new $file)->lines(), config('admin.locale') );
         }
      }
   }

   public function configs() {
      return [
         "one.skin.layout" => "one-cpanel",
         "one.skin.media"  => "one-lg",
         "one.skin.style"  => "one-light",
      ];
   }
}
