<?php
session_start();
if (!isset($_SESSION['id'])) {
    die("Session not started.");
}
if (!isset($_GET['session_id']) || $_GET['session_id'] !== $_SESSION['id']) {
    die("Invalid session ID.");
}
?>
