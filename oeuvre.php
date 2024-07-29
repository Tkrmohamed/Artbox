<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <main>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            require_once(__DIR__ . '/oeuvres.php');

            $oeuvreTrouvee = null;
            foreach ($oeuvres as $oeuvre) {
                if ($oeuvre['id'] == $id) {
                    $oeuvreTrouvee = $oeuvre;
                }}

            if ($oeuvreTrouvee) {
                ?>
                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src="img/<?php echo ($oeuvreTrouvee['image']); ?>" alt="<?php echo ($oeuvreTrouvee['titre']); ?>">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo ($oeuvreTrouvee['titre']); ?></h1>
                        <p class="description"><?php echo ($oeuvreTrouvee['description']); ?></p>
                        <p class="description-complete"><?php echo ($oeuvreTrouvee['description-complete']); ?></p>
                    </div>
                </article>
                <?php }
             else {
                echo "<p>Article introuvable :(</p>";
            }}
        ?>
    </main>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>
