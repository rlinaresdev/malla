<?php

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

/*
* LANGUAGE */
$this->loadGrammary( $LANG );

/*
* VIEWS */
$this->loadViewsFrom(__DIR__.'/Views', 'admin');

/*
* USER RESOURCES INTERFACE */
$this->loadResourcesUI( $HTTP, $LANG );

/*
* ADMIN PUBLISHER */
$this->publishes($this->publishers, "admin");
