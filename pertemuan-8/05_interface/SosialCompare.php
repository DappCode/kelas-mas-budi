<?php

class SocialCompare {

    public static function compare(Likeable $sosmed1, Likeable $sosmed2)
    {
        if($sosmed1->getTotalLike() > $sosmed2->getTotalLike()) {
            echo $sosmed1->getPlatform()." ".$sosmed1->getUser();
            echo "Lebih Populer dari".$sosmed2->getPlatform()." ".$sosmed2->getUser();
        } else if($sosmed1->getTotalLike() < $sosmed2->getTotalLike()) {
            echo $sosmed2->getPlatform()." ".$sosmed2->getUser();
            echo "Lebih Populer dari".$sosmed1->getPlatform()." ".$sosmed1->getUser();
        } else {
            echo "Kedua user sama-sama Populer";
        }
    }

}