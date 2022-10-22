<?php

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

Route::get("login", "AuthController@index");
Route::get("login/retrieve", "AuthController@retrieve");

Route::get("register", "AuthController@register");

Route::get("logout", "AuthController@logout");

Route::prefix("admin")->group(function() {

   Route::get("/", "HomeController@index");

   Route::get("/publishe", function(){
      \Artisan::call("vendor:publish", ["--tag" => "admin", "--force"=>true]);
      return __back("admin");
   });

});
