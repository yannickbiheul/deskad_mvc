<?php

class UserService {
    
    public function saveMember($post) {

        $datas = array();
        $errors = array();

        if (isset($post['firstname']) && isset($post['lastname']) && isset($post['pseudo']) && isset($post['email']) && isset($post['password']) && isset($post['cpassword'])) {

            if (strlen($post['firstname']) > 1) {
                array_push($datas, $post['firstname']);
            } else {
                array_push($errors, 'Prénom non valide !');
            }

        } else {
            array_push($errors, 'Manque des trucs !');
            return $errors;
        }
    }
}