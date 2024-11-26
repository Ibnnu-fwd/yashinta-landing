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
        Schema::table('news', function (Blueprint $table) {
            $table->unsignedBigInteger('commitment_id')->nullable()->after('author');
            $table->string('category')->after('author');
            $table->text('tag')->after('category')->nullable();

            $table->foreign('commitment_id')->references('id')->on('commitment')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('category');
            $table->dropColumn('tag');
            $table->dropForeign(['commitment_id']);
            $table->dropColumn('commitment_id');
        });
    }
};
