<?php
namespace Malla\Admin\Providers;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Translation\Translator;
use Illuminate\Support\ServiceProvider;

use Malla\Admin\Support\Skin;

class AdminServiceProvider extends ServiceProvider {

   protected $publishers = [];

   public function boot( Kernel $HTTP, Translator $LANG ) {
      require_once(__path("__admin/Http/App.php"));
   }

   public function register() {
      $this->mergeConfigFrom(__path("__admin/System/Support/App.php"), "admin");
   }

   public function loadGrammary( $LANG ) {

      $this->app->setLocale(config("admin.locale", "es"));

      $locale = config("admin.faker_locale", "es_DO");

      if( !empty( ($grammaries = $this->getGrammars($locale))  ) )  {

         $header  = $grammaries->header();
         $lines   = $grammaries->lines();

         $LANG->addLines( $lines, $header["slug"] );
      }
   }

   public function getGrammars($locale=null) {
      if( class_exists( ($store = "\Malla\Admin\Locale\\$locale") ) ) {
         return (new $store);
      }
   }

   public function loadResourcesUI( $HTTP, $LANG ) {

      $SKIN    = new Skin(config("admin.skin"));
      $DRIVER  = $SKIN->skin();
      $PATHS   = $DRIVER->paths();

      require_once( $SKIN->getPath("app") );
   }
}
