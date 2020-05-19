<?php

/**
 * This is a script that will calculate someone's github activity score based on a list of events
 * returned from an api call. An example of such a list is provided as activity.json.
 *
 * Assignment: please refactor this code to be cleaner.
 */

$result = json_decode(file_get_contents('activity.json'), true);

$types = [];

foreach ($result as $event) {
    $types[] = $event['type'];
}

$score = 0;

foreach ($types as $type) {
    switch ($type) {
        case 'PushEvent':
            $score += 5;
            break;
        case 'CreateEvent':
            $score += 4;
            break;
        case 'IssuesEvent':
            $score += 3;
            break;
        case 'CommitEvent':
            $score += 2;
            break;
        default:
            $score += 1;
    }
}

echo "User has a score of $score.\n";
