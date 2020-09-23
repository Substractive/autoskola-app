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

    // Model attributes
    public function setAdministratorAttribute(UserInterface $user);
    public function getAdministratorAttribute();
    public function setNameAttribute($name);
    public function getNameAttribute();
    public function setAddressAttribute($address);
    public function getAddressAttribute();
    public function setEmailAttribute($email);
    public function getEmailAttribute();
    public function setPhoneAttribute($phone);
    public function getPhoneAttribute();
    public function setPackageAttribute(PackageInterface $package);
    public function getPackageAttribute();
    public function getOibAttribute();
    public function setOibAttribute($value);
    public function getIsActiveAttribute();
    public function setIsActiveAttribute(bool $value);
    // Model helpers

    public function getNumberOfPupils();

}
