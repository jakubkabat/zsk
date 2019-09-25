<?php
    $text = <<< T
    zsk - Zespół
    szkół
    komunikacji
    T;
    echo "przed wywołaniem funkcji nl2br: <br> $text <br>";
    echo "Po wywołaniu funkcji nl2br: <br>";
    echo nl2br($text);
?>