<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 22.9.2020.
 * Time: 13:32
 */

namespace App\Models\Contracts;

interface PackageInterface{


    const COLLECTION = "packages";
    const ENTITY = "package";
    const KEY_ID = "id";
    const KEY_NAME = "name";
    const KEY_PRICE = "price";

    const PACKAGE_MINI = "mini";
    const PACKAGE_STANDARD = "standard";
    const PACKAGE_PLUS = "plus";

    public function getPackageId();
    public function setPackageId($id);

}
