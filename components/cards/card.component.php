<?php
function renderCard($title, $image) {
    echo '<div class="card">';
    echo '<img src="/assets/img/' . htmlspecialchars($image) . '" alt="' . htmlspecialchars($title) . '">';
    echo '<div class="card-title">' . htmlspecialchars($title) . '</div>';
    echo '</div>';
}
?>