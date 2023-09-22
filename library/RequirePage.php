<?php

class RequirePage {
    static public function model($page) {
        return require_once('model/'.$page.'.php');
    }
    static public function redirect($page){
        header('location: http://localhost:80/webAvancee22645/ProgrammationWebAvanceesTP2/'.$page);
    }
}