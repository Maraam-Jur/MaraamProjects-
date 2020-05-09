<?php

require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
$consumerKey="wu0kKwoOTgm3tgYcLqIvQuzZj";
$consumerKeySec="e9oOQlKvgKBwLmrRTwbInNYklAewR9zrAZy0ajSCLUKfkGQMD6";
$consumerAccess="982297488206872581-bi4Y9brKgISc5a0AXjC4THOWJdtdpTm";
$consumerAcessSec="9ALr0MTo8PP98uXdYENGX0pfw0GuYkmMdZzP0MQR8jgss";
$connection = new TwitterOAuth($consumerKey,$consumerKeySec, $consumerAccess,$consumerAcessSec);
$content = $connection->get("account/verify_credentials");
print_r($content);


?>