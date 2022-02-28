<?php

class Character
{
    //Properties
    public $name;
    public $player;
    
    //Methods
    function __construct($name,$player){
        $this->name = $name;
        $this->player = $player;
    }
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_player($player) {
        $this->player = $player;
    }
    function get_player() {
        return $this->player;
    }
}