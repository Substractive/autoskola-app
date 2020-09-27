<?php

use App\Models\Contracts\SchoolInterface;
use App\Models\Contracts\UserInterface;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_administrators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("administrator_id");
            $table->unsignedBigInteger("school_id");
            $table->foreign("administrator_id")->references(UserInterface::KEY_ID)->on(UserInterface::COLLECTION);
            $table->foreign("school_id")->references(SchoolInterface::KEY_ID)->on(SchoolInterface::COLLECTION);
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
        Schema::dropIfExists('school_administrators');
    }
}
