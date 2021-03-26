<?php

class UserService {

    private $datas = array();
    private $errors = array();
    
    public function checkCoords($post) {

        if (isset($post['firstname']) && isset($post['lastname']) && isset($post['pseudo']) && isset($post['email'])) {

            if (strlen($post['firstname']) > 1) {
                array_push($this->datas, $post['firstname']);
            } else {
                array_push($this->errors, 'Prénom');
            }

            if (strlen($post['lastname']) > 1) {
                array_push($this->datas, $post['lastname']);
            } else {
                array_push($this->errors, 'Nom');
            }

            if (strlen($post['pseudo']) > 1) {
                array_push($this->datas, $post['pseudo']);
            } else {
                array_push($this->errors, 'Pseudo');
            }

            if (strlen($post['email']) > 1) {
                array_push($this->datas, $post['email']);
            } else {
                array_push($this->errors, 'Email');
            }

        } else {
            array_push($this->errors, 'Manque des trucs !');
            return $this->errors;
        }
    }

    public function checkPassword($post) {

        if (isset($post['password']) && isset($post['cpassword'])) {

            if ($post['password'] == $post['cpassword']) {
                $passwordCrypt = password_hash($post['password'], PASSWORD_BCRYPT);
                
            } else {
                array_push($this->errors, 'Mot de passe');
            }
        }
    }
}