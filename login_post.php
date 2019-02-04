<?php
// Si pseudo égale à admin et password égale à admin
if($_POST["pseudo"] === "admin" && $_POST["password"] === "admin") {
    echo "Bonjour " . $_POST["pseudo"];
}else if($_POST["password"] !== "admin"){
    header("Location: login.php?message=Erreur de password");
}else if($_POST["pseudo"] !== "admin"){
    header("Location: login.php?message=Erreur de pseudo");
}