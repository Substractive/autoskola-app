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
    const KEY_NAME = "name";
    const KEY_EMAIL = "email";
    const KEY_TYPE = "type";
    const KEY_PASSWORD = "password";

    const TYPE_SUPERADMIN = "superadmin";
    const TYPE_ADMIN = "admin";
    const TYPE_EMPLOYEE = "employee";
    const TYPE_PUPIL = "pupil";


    public function getNameAttribute();
    public function setNameAttribute($value);
    public function getIdAttribute();
    public function getTypeAttribute();
    public function setTypeAttribute($type);
    public function getEmailAttribute();
    public function setEmailAttribute($email);
    public function setPaswordAttribute($pass);
    public function checkUserType($type);

}
