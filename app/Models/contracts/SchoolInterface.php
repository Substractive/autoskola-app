<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 22.9.2020.
 * Time: 13:28
 */

namespace App\Models\Contracts;


interface SchoolInterface{

    const COLLECTION = "schools";
    const ENTITY = "school";

    const KEY_ID = "id";
    const KEY_ADMINISTRATOR = "administrator_id";
    const KEY_NAME = "name";
    const KEY_OIB = "oib";
    const KEY_ADDRESS = "address";
    const KEY_EMAIL = "email";
    const KEY_PHONE = "phone";
    const KEY_PACKAGE = "package_id";
    const KEY_ACTIVE = "active";

    const STATUS_ACTIVE = true;
    const STATUS_INACTIVE = false;


    public function setAdministrator(UserInterface $user);
    public function getAdministrator();
    public function setName($name);
    public function getName();
    public function setAddress($address);
    public function getAddress();
    public function setEmail($email);
    public function getEmail();
    public function setPhone($phone);
    public function getPhone();
    public function setPackage(PackageInterface $package);
    public function getPackage();
    public function setActive(bool $active);
    public function isActive();
    public function getNumberOfPupils();
    public function getOibAttribute();
    public function setOibAttribute($value);
}
