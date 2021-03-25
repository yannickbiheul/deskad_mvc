<?php

require_once('models/services/UserService.php');

class Controller {

    private $userService;

    public function __construct() {
        $this->userService = new UserService;
    }

    public function home() {
        require('views/viewHome.php');
    }

    public function connect() {
        require('views/viewConnect.php');
    }

    public function signupMember($post) {
        $datas = $this->userService->saveMember($post);
    }
}