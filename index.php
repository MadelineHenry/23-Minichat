<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minichat</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <div class="titles">
            <h1>Mon Minichat</h1>
            <h2>Platforme basique de discussion</h2>
        </div>
        <div class="general_container">
            <form action="minichat_post.php" method="post" class="form_container">
                <div class="input_container">
                    <div class="pseudo_input_container">
                        <label for="pseudo" class="title_pseudo">Pseudo : </label>
                        <input type="text" name="pseudo" id="input_pseudo"></input>
                    </div>
                    <div class="message_input_container">
                        <label for="message" class="title_message">Message : </label>
                        <textarea type="text" name="message" id="textarea_message"></textarea>
                    </div>
                    <button class="button_submit">Envoyer</button>
                </div>
            </form>
            <div class="userMessages_container">
                <?php
                include_once("db.php");
                $reponse= $bd->query('SELECT pseudo, message FROM users_minichat ORDER BY ID DESC LIMIT 0, 10');
                
                while($donnees=$reponse->fetch()){
                    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
                }
                $reponse->closeCursor();     
                ?>
            </div>
        </div>
    </header>
</body>

</html>