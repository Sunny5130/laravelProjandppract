<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStudentsTable extends Migration
{
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // 1. Add nullable address field
            $table->string('address')->nullable()->after('enrollment_date');

            // 2. Modify date_of_birth if you need to support different date format (optional)
            // But Laravel handles validation in form/request — migration doesn't handle rules
            // So, no actual migration change is needed for validation purposes
        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('address');
        });
    }
}
