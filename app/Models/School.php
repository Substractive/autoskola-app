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
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Database\Eloquent\Model;
use SchoolInterface;

class School extends Model implements SchoolInterface {

    public function setAdministrator(UserInterface $user)
    {
        $this->attributes[self::KEY_ADMINISTRATOR] = $user->getUserID();
    }

    public function getAdministrator()
    {
        return User::find($this->attributes[self::KEY_ADMINISTRATOR]);
    }

    public function setName($name)
    {
        $this->attributes[self::KEY_NAME] = $name;
    }

    public function getName()
    {
        return $this->attributes[self::KEY_NAME];
    }

    public function setAddress($address)
    {
        $this->attributes[self::KEY_ADDRESS] = $address;
    }

    public function getAddress()
    {
        return $this->attributes[self::KEY_ADDRESS];
    }

    public function setEmail($email)
    {
        $this->attributes[self::KEY_EMAIL] = $email;
    }

    public function getEmail()
    {
        return $this->attributes[self::KEY_EMAIL];
    }

    public function setPhone($phone)
    {
        $this->attributes[self::KEY_PHONE] = $phone;
    }

    public function getPhone()
    {
        return $this->attributes[self::KEY_PHONE];
    }

    public function setPackage(PackageInterface $package)
    {
        $this->attributes[self::KEY_PACKAGE] = $package->getPackageId();
    }

    public function getPackage()
    {
        return Package::find($this->attributes[self::KEY_PACKAGE]);
    }

    public function setActive(bool $active)
    {
        $this->attributes[self::KEY_ACTIVE] = $active;
    }

    public function isActive():bool
    {
        return $this->attributes[self::KEY_ACTIVE];
    }
}
