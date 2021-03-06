<?php
require '../../vendor/autoload.php';

$SteemServiceLayer = new \SteemTools\SteemServiceLayer();
$api = new \SteemTools\SteemAPI($SteemServiceLayer);

$config = array(
    'follow_vote_comments' => false,
    //'looptime_in_seconds' => 1,
    //'reminder_in_seconds' => 3,
    'auto_vote' => true
);

$CopyCatVoter = new \SteemTools\Bots\CopyCatVoter($api, $config);

$voter_account = 'lukestokes';
$account_to_copy = 'robinhoodwhale';

$CopyCatVoter->run($voter_account,$account_to_copy);
