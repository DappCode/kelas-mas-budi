<?php
    require_once("Likeable.php");
    require_once("Facebook.php");
    require_once("Twitter.php");
    require_once("SosialCompare.php");

    $fbAhik = new Facebook("Ahik");
    $fbAhik->setLike();
    $fbAhik->setLike();
    $fbAhik->setLike();

    $tweetAnies = new Twitter("Anies");
    $tweetAnies->setLike();
    $tweetAnies->setLike();
    $tweetAnies->setLike();
    $tweetAnies->setLike();
    $tweetAnies->setLike();

    SocialCompare::compare($fbAhik, $tweetAnies);