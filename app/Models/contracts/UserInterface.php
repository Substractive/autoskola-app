<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 22.9.2020.
 * Time: 12:25
 */

namespace App\Models\Contracts;

interface UserInterface{

    const COLLECTION = "users";
    const ENTITY = "user";
    const KEY_ID = "id";
    const KEY_EMAIL = "email";
    const KEY_TYPE = "type";


    public function getUserType();
    public function setUserType($type);
    public function getUserEmail();
    public function setUserEmail($email);
    public function checkUserType($type);

}
