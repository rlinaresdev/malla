<?php

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

/*
* LAGUAGES */
$DRIVER->loadGrammary($LANG, config("admin.faker_locale"));

/*
* CONFIGS */
foreach ($DRIVER->configs() as $key => $value) {
   $this->app["config"]->set($key, $value);
}

/*
*  MACRO URL */
Malla::addUrl([
   "__one"    => "__base/{$SKIN->getPath('assets_public')}"
]);

/*
*  MACRO PATH */
Malla::addPath([
   "__one_asset"           => __DIR__."/assets",
   "__one_public_asset"    => "__public/admin/themes/one/assets",
]);

/*
*  PUBLISHES FILES */
$this->publishers[__path("__one_asset")] = __path("__one_public_asset");

/*
*  VIEWS */
$this->loadViewsFrom(__DIR__."/views", "one");

/*
*  VARS VIEWS */
$this->app["view"]->share([
   "skin"         => $SKIN,
   "single"       => $SKIN->path("single"),
   "dashboard"    => $SKIN->path("dashboard"),

   "one"          => (object) config("one"),

]);
