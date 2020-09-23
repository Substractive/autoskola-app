<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 22.9.2020.
 * Time: 13:49
 */

namespace App\Models;

use App\Models\Contracts\PackageInterface;
use Illuminate\Database\Eloquent\Model;

class Package extends Model implements PackageInterface{


    protected $fillable = [
        self::KEY_NAME,
        self::KEY_PRICE
    ];

    public function getPackageIdAttribute()
    {
        return $this->attributes[self::KEY_ID];
    }

    public function setPackageIdAttribute($id)
    {
        $this->attributes[self::KEY_ID] = $id;
    }
}
