<?php
session_start();

$_SESSION['age'] = $_POST['age'];

echo 'Ваше имя: ' . $_SESSION['name'] . '<br>' . ' Ваша фамилия: ' . $_SESSION['last_name'] . '<br>' . ' Ваш возраст: ' . $_SESSION['age'];

$url=$_SERVER['REQUEST_URI'];

echo "<br>";
$url = $_SERVER['REQUEST_URI'];
$_SESSION['urls'][] = $url;

foreach ($_SESSION['urls'] as $url) {
    echo "$url" . "<br>";
}

session_destroy()
?>

<style>
* {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 1.5rem;
}
</style>