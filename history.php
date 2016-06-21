<?php
ksort ($_SESSION);
$content = '';
foreach ($_SESSION as $time=>$color) {
    $content .= $time . ' - ' . $color . '<br>';
}