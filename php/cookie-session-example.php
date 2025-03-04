<?php
    session_start();
    if (isset($_GET["ses"])) {
        $_SESSION["name"] = "Rohan";
        header("Location: " . $_SERVER['PHP_SELF']); 
        exit();
    }
    if (isset($_GET["delete"])) {
        session_destroy();
        setcookie("theme", "", time() - 3600, "/");
        header("Location: " . $_SERVER['PHP_SELF']); 
        exit();
    }
    // Check if a theme cookie exists, default to "light"
    $theme = isset($_COOKIE["theme"]) ? $_COOKIE["theme"] : "light";
    // If the user selects a theme, update the cookie
    if (isset($_GET["theme"])) {
        $theme = $_GET["theme"];
        setcookie("theme", $theme, time() + 60, "/"); // Store for 60 seconds
        header("Location: " . $_SERVER['PHP_SELF']); // Reload page to apply theme
        exit();
    }
    if (isset($_GET["delete"])) {
        setcookie("username", "", time() - 3600, "/");
        header("Location: " . $_SERVER['PHP_SELF']); 
        session_start();
        session_destroy();
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Toggle</title>
    <style>
        body {
            background-color: <?php echo $theme == 'dark' ? '#333' : '#fff'; ?>;
            color: <?php echo $theme == 'dark' ? '#fff' : '#000'; ?>;
            text-align: center;
            padding: 50px;
            transition: background-color 0.5s, color 0.5s;
        }
        button {
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1><?php echo $theme ?> Mode</h1>
    <a href="?theme=light"><button>Light Mode</button></a>
    <a href="?theme=dark"><button>Dark Mode</button></a>
    <p>Current Theme: <strong><?php echo $theme ?></strong></p>
    <h2>Session</h2>
    <a href="?ses"><button>SET SESSION</button></a>
    <?php
        if(isset($_SESSION["name"])){
            echo "Session: ".$_SESSION["name"];
        }
        else{
            echo "Session is not set";
        }
    ?>
    <a href="?delete"><button>DELETE SESSION & COOKIE</button></a>
</body>
</html>