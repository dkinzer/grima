<?php

require_once("../grima-lib.php");

class Logout extends GrimaTask {

	function do_task() {
		GrimaUser::LogoutCurrentUser();
		$this->addMessage('success',"You have been logged out.");
	}

	function check_login() {
		return true;
	}
}

Logout::RunIt();
