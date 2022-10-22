<?php
namespace Malla\Admin\Support;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Skin {

   public $name = 'One Theme';

   protected $slug;

   protected $resources = [];

   protected $domain;

   protected $theme;

   public function __construct( $skin=null ) {

      if( class_exists($skin) ) {
         $skin = new $skin;
         $info = (object) $skin->info();
         $app  = (object) $skin->app();

         $this->slug       = $app->slug;
         $this->resources  = $skin->paths();
         $this->theme      = $skin;
      }
   }

   public function skin() {
      return $this->theme;
   }

   public function loadGrammaries( $LANG ) {

      $locale     = config("admin.locale");
      $filename   = config("admin.faker_locale");

      if( class_exists( ($translate = "\Malla\Admin\Theme\One\Locale\\$filename") ) ) {
         $LANG->addLines( (new $translate)->lines(), $locale );
      }
   }

   public function getSlug() {
      return $this->slug;
   }

   public function getPath($key=null) {
      if( array_key_exists( $key, $this->resources ) ) {
         return $this->resources[$key];
      }
   }

   public function path($uri="master") {
      return "$this->slug::$uri";
   }

   public function view($view=NULL, $data=[], $mergeData=[]) {

		if( view()->exists( ($path = $this->path($view)) ) ) {
			return view($path, $data, $mergeData);
		}

		return "ERROR 404 :: La vista {$path} no existe.";
	}
}
