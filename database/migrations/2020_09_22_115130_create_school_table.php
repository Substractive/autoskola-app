<?php

use App\Models\Contracts\PackageInterface;
use App\Models\Contracts\UserInterface;
use App\Models\Contracts\SchoolInterface;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(SchoolInterface::COLLECTION, function (Blueprint $table) {
            $table->bigIncrements(SchoolInterface::KEY_ID);
            $table->unsignedBigInteger(SchoolInterface::KEY_ADMINISTRATOR);
            $table->unsignedBigInteger(SchoolInterface::KEY_PACKAGE);
            $table->string(SchoolInterface::KEY_NAME)->unique();
            $table->string(SchoolInterface::KEY_OIB)->unique();
            $table->string(SchoolInterface::KEY_ADDRESS);
            $table->string(SchoolInterface::KEY_EMAIL);
            $table->string(SchoolInterface::KEY_PHONE);
            $table->boolean(SchoolInterface::KEY_ACTIVE);
            $table->foreign(SchoolInterface::KEY_ADMINISTRATOR)->references(UserInterface::KEY_ID)->on(UserInterface::COLLECTION);
            $table->foreign(SchoolInterface::KEY_PACKAGE)->references(PackageInterface::KEY_ID)->on(PackageInterface::COLLECTION);
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
        Schema::dropIfExists(School::COLLECTION);
    }
}
