<?php

function ExecuteSQL ($query) {
	return sprintf("Some result from \"%s\"\n\n", $query);
}

function Main() {
	$getUserNamesSQL = "SELECT UserName FROM Users;";
	$userNames = ExecuteSQL($getUserNamesSQL);
	print $userNames;

	print("Please enter your username: ");
	$userName = rtrim(fgets(STDIN), "\n");
	$getUserDataSQL = "SELECT * FROM Users WHERE UserName = " . $userName . ";";
	$userData = ExecuteSQL($getUserDataSQL);
	print $userData;
}

Main();
