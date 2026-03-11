<?php
$ticker_items = file('ticker.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo implode(' | ', $ticker_items);
?>
