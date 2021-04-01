<?php

session_start();


# Destroy sessions
session_destroy();

# exit and enter login again
header('location: login.php');