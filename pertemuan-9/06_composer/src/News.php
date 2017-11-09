<?php
namespace Portal;

use Faker\Factory;


class News {
    public function getCategory()
    {
        $title = Factory::create('id_ID');
        return $title->address;
    }

    public function getTitle()
    {
        $title = Factory::create('id_ID');
        return $title->name;
        
    }
}