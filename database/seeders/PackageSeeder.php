<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 22.9.2020.
 * Time: 14:39
 */


namespace Database\Seeders;

use App\Models\Package;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PackageSeeder extends Seeder{

    public function run(){

        Package::create([
            Package::KEY_NAME => Package::PACKAGE_MINI,
            Package::KEY_PRICE => env(Package::PACKAGE_MINI)
        ]);

        Package::create([
            Package::KEY_NAME => Package::PACKAGE_STANDARD,
            Package::KEY_PRICE => env(Package::PACKAGE_STANDARD)
        ]);

        Package::create([
            Package::KEY_NAME => Package::PACKAGE_PLUS,
            Package::KEY_PRICE => env(Package::PACKAGE_PLUS)
        ]);

    }

}
