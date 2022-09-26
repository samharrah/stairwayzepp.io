<?php
    $out = array();
    foreach (glob('file/*.ppt*') as $filename) {
        $p = pathinfo($filename);
        $out[] = $p['filename'];
    }
    echo 'callback(' . json_encode($out) . ')';
?>
