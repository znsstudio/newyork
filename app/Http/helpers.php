<?php

function isAdmin(){

	return \App\Repos\AdminRepo::isAdmin();
}