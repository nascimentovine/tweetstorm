<?php
$str = utf8_encode(file_get_contents("tweet.txt"));
$arrWords = array();
$arrWords = explode(" ",$str);
$srtCount = 0;
$tweet = "";
foreach ($arrWords as $key => $value) {
	$srtCount += strlen($value);
	$tweet .= $value." ";
	if($srtCount  > 135){
		$arrTweet[] = $tweet;
		$srtCount = 0;
		$tweet = "";
	}
}

$countTweets = count($arrTweet);
foreach ($arrTweet as $key => $value) {
	$tweetAtual = $key+1;
	echo $value."...".$tweetAtual."/".$countTweets."<br><br>";
}
?>
