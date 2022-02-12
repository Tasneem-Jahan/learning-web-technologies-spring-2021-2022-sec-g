<?php

$username_error = "";
$username = $_REQUEST['username'];

if (isset($_REQUEST['submit'])) {

    if ($username == null) {
        $username_error = "invalid username!";
    } else {
        $username_error = $_REQUEST['username'];
    }
}
