<?php
    require_once "tweetStorm.php";
    $tweet = new tweetStorm("tweet.txt");
    echo $tweet->TweetGenerator();   