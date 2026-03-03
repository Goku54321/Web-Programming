<?php

// get host name from URL
preg_match('@^(?:https://)?([^/]+)@i',
    "https://www.google.com/?authuser=0", $matches);

$host = $matches[1];

// get last two segments of host name
preg_match('/[^.]+\.[^.]+$/', $host, $matches);

echo "Expression to extract Domain is: {$matches[0]}\n";

?>
