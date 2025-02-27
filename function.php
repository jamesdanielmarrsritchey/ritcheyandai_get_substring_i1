<?php
function extractSubstring($string, $start, $end) {
    // Find the position of the start string
    $startPos = strpos($string, $start);
    if ($startPos === false) {
        return ''; // Start string not found
    }
    // Adjust startPos to include the length of $start
    $startPos += strlen($start);

    // Find the position of the end string, starting from $startPos
    $endPos = strpos($string, $end, $startPos);
    if ($endPos === false) {
        return ''; // End string not found
    }

    // Extract the substring
    $substring = substr($string, $startPos, $endPos - $startPos);

    return $substring;
}
?>