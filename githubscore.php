<?php

/**
 * This is a script that will calculate someone's github activity score based on a list of events
 * returned from an api call. An example of such a list is provided as activity.json.
 *
 * Assignment: please refactor this code to be cleaner.
 */

$activityJson = file_get_contents('activity.json');

$activity = json_decode($activityJson, true);

$eventTypes = [];

foreach ($activity as $event) {
    $eventTypes[] = $event['type'];
}

$score = 0;

foreach ($eventTypes as $eventType) {
    switch ($eventType) {
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
