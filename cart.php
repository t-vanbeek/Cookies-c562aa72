<!DOCTYPE html>
<html lang="nl-NL">
    <head>
        <meta charset="UTF-8">
        <title>cart.php</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <form method="POST">
            <input type="number" min="1" name="nummer" max="3" id="nummer" placeholder="Voer een nummer in" required size="1" />
            <input type="submit" value="opslaan"/>
        </form>

        <?php
        session_start();
        if (isset($_POST["nummer"])) {
            setcookie("nummer", $_POST["nummer"]);
            
            echo $_REQUEST["nummer"];
        }
        ?>
        

    </body>
</html>