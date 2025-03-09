<?php

class Home extends Controller {
    private $umodal;

    public function __construct()
    {
        // echo "I am Contructor of " . __CLASS__ . "  Class <br/>";

        $this->umodal = $this->modals('Usermodal');
    }


    public function index()
    {
        // echo "I am index method of " . __CLASS__ . "  Class <br/>";

        $data = $this->umodal->getAlldata();

        // ChkErr::check($data);
        
        $this->views("home/index", $data);
    }

    public function show()
    {
        echo "I am show method of " . __CLASS__ . "  Class <br/>";
    }
}