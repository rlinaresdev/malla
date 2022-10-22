<?php

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

/* CORE FACADE */
$this->app->bind( "Malla", function($app) {
	return new \Malla\Core\Support\Core(
		new \Malla\Core\Support\Bootstrap($app)
	);
});

## INSTANCIA DEL CORE
$this->app["malla"] = Malla::load();

## FUNCIÓN CORE
if(!function_exists("Malla")) {
   function Malla( $key=null ) {
      return Malla::load($key);
   }
}

## REGISTROS DE BIBLIOTECAS BÁSICAS
Malla::load( "finder", new \Malla\Core\Support\Finder );
Malla::load( "loader", new \Malla\Core\Support\Loader($this->app) );
Malla::load( "coredb", new \Malla\Core\Support\StorDB( $this->app["db"] ) );
Malla::load( "urls", new \Malla\Core\Support\Urls($this->app) );

## COMMON HELPER
require_once(__DIR__."/Support/Helper.php");

## URL ETIQUETADAS
Malla::addUrl([
   "__base"    => Malla::load("urls")->baseDir(),
   "__cdn"    => "__base/cdn/",
]);

## DIRECTORIOS ETIQUETADOS
Malla::addPath([
   "__base"          => malla("urls")->baseDir(),
   "__core"          => realpath(__DIR__."/../"),
   "__admin"          => realpath(__DIR__."/../../Admin"),
   "__cdn"           => public_path("__base/cdn/"),
   "__localmodule"   => realpath(__DIR__."/../../../")."/",
   "__locale"        => "__core/Http/Locale/",
   "__public"        => public_path("/__base"),
   "__admin_asset"   => public_path("/__base/admin/assets")
]);

/* APP CONFIGS
* Archivo de configuracion */
$configs = $this->app["files"]->requireOnce(__DIR__."/app.php");

foreach ($configs as $key => $value) {
   $this->app['config']->set("app.$key", $value);
}

/* INIT
* Inicializando los modulos */
Malla::init();

if( Malla::isRunning() ) {
   /*
   * HANDLER AND LOAD STABLE CORE */
   $this->mount(Malla::load());
}
else {
   Malla::run(\Malla\Install\Driver::class);
}
