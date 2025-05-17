<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/htmlEscape.utils.php';
require BASE_PATH . '/utils/OutputAll.utils.php';

require_once BASE_PATH . '/handlers/pageData.handler.php';
require_once BASE_PATH . '/components/cards/note.component.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<?php
head('Series');
navHeader($navList);
?>
<div class="genre-buttons">
    <?php foreach ($Genre as $genre): ?>
        <button><?php echo htmlspecialchars($genre); ?></button>
    <?php endforeach; ?>
</div>
<section>
    <h2>Series</h2>
    <?php
    AllSeries($Series);
    ?>
</section>
</body>
</html>