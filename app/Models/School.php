<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 22.9.2020.
 * Time: 13:27
 */

namespace App\Models;

use App\Models\Contracts\PackageInterface;
use App\Models\Contracts\UserInterface;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contracts\SchoolInterface;

class School extends Model implements SchoolInterface {

    protected $table = self::COLLECTION;

    public function getIdAttribute(){
        return $this->attributes[self::KEY_ID];
    }

    public function setAdministratorAttribute(UserInterface $user)
    {
        $this->attributes[self::KEY_ADMINISTRATOR] = $user->getIdAttribute();
    }

    public function getAdministratorAttribute()
    {
        // TODO: getAdministrators, as from now school can have multiple administrators
        // TODO: Remove administrator key from the school table, as there is now pivot table school_administrators
        return User::find($this->attributes[self::KEY_ADMINISTRATOR]);
    }

    public function setNameAttribute($name)
    {
        $this->attributes[self::KEY_NAME] = $name;
    }

    public function getNameAttribute()
    {
        return $this->attributes[self::KEY_NAME];
    }

    public function setAddressAttribute($address)
    {
        $this->attributes[self::KEY_ADDRESS] = $address;
    }

    public function getAddressAttribute()
    {
        return $this->attributes[self::KEY_ADDRESS];
    }

    public function setEmailAttribute($email)
    {
        $this->attributes[self::KEY_EMAIL] = $email;
    }

    public function getEmailAttribute()
    {
        return $this->attributes[self::KEY_EMAIL];
    }

    public function setPhoneAttribute($phone)
    {
        $this->attributes[self::KEY_PHONE] = $phone;
    }

    public function getPhoneAttribute()
    {
        return $this->attributes[self::KEY_PHONE];
    }

    public function setPackageAttribute(PackageInterface $package)
    {
        $this->attributes[self::KEY_PACKAGE] = $package->getPackageIdAttribute();
    }

    public function getPackageAttribute()
    {
        return Package::find($this->attributes[self::KEY_PACKAGE]);
    }

    public function setIsActiveAttribute(bool $active)
    {
        $this->attributes[self::KEY_ACTIVE] = $active;
    }

    public function getIsActiveAttribute():bool
    {
        return $this->attributes[self::KEY_ACTIVE];
    }

    public function getOibAttribute()
    {
        return $this->attributes[self::KEY_OIB];
    }

    public function setOibAttribute($value)
    {
        $this->attributes[self::KEY_OIB] = $value;
    }

    public function getNumberOfPupils()
    {
        return 99;
    }
}
