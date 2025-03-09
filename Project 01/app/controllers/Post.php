<?php

class Post extends Controller{
    public function __construct()
    {
        echo "I am Contructor of " . __CLASS__ . "  Class <br/>";
    }


    public function index()
    {
        // echo "I am index method of " . __CLASS__ . "  Class <br/>";

       $this->views('post/index');

    }

    public function show()
    {
        echo "I am show method of " . __CLASS__ . "  Class <br/>";
    }
}