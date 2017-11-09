<?php

class Twitter implements Likeable {

    private $tweet;
    private $retweet;
    private $user;

    public function __constract($user)
    {
        $this->user = $user;
        $this->retweet = 0;
    } 

    public function getPlatform()
    {
        return "Tweeter";
    }

    public function getUser()
    {
        return $this->user;
    }   

    public function getTotalLike()
    {
        return $this->retweet;
    }

    public function setLike() 
    {
        $this->setRetweet();
    }

    private function setRetweet()
    {
        $this->retweet++;
    }
}