<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/htmlEscape.utils.php';
require BASE_PATH . '/utils/OutputAll.utils.php';

require_once BASE_PATH . '/handlers/pageData.handler.php';
require_once BASE_PATH . '/components/cards/card.component.php';
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
</head>
<body>
<?php
head('Movies');
navHeader($navList);
?>
</body>
</html>