<?php

function ExecuteSQL ($query) {
	return "SQL result\n";
}

function Main() {
	$userNamesSQL = "SELECT name FROM Users";
	$userNames = ExecuteSQL($userNamesSQL);
	print $userNames;
}

Main();
