<?php

/*********************
 * @date 20181128
 * @fun common function
 ********************/

/*
 * get class name
 */
function route_class(){
	return str_replace('.', '-', Route::currentRouteName());
}

