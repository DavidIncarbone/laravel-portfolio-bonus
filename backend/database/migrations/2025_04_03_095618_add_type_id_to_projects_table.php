<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {

            $table->dropColumn("type");
            $table->foreignId("type_id")->default(1)->after("id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {

            $table->string("type", 50)->nullable()->after("name");
            $table->dropForeign(["type_id"]);
            $table->dropColumn("type_id");
        });
    }
};
