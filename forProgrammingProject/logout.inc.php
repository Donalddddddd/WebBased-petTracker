<?php

session_start();
session_unset();
session_destroy();

header("location: frontpage.html?error=none");
