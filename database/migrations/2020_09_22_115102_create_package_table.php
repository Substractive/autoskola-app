<?php

use App\Models\Contracts\PackageInterface;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(PackageInterface::COLLECTION, function (Blueprint $table) {
            $table->bigIncrements(PackageInterface::KEY_ID);
            $table->string(PackageInterface::KEY_NAME);
            $table->decimal(PackageInterface::KEY_PRICE,9,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(PackageInterface::COLLECTION);
    }
}
