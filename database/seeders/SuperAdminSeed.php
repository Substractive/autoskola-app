<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 22.9.2020.
 * Time: 12:29
 */

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeed extends Seeder{

    public function run(){

        User::create([
            User::KEY_NAME => 'Idea Verum',
            User::KEY_EMAIL => 'info@ideaverum.hr',
            User::KEY_TYPE => USER::TYPE_SUPERADMIN,
            'password' => Hash::make('samodaznas')
        ]);

    }

}
