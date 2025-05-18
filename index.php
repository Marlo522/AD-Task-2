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
<html>
<head>
    <title>Jetlix</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<?php
head('Jetlix');
navHeader($navList);
?>

<section>
    <h2>For you</h2>
    <?php 
    renderForYou($Series, $Movies);
    ?>
</section>

<?php
footer();
?>
</body>
</html>