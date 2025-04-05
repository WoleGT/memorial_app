<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
           
            $table->string('relationship')->nullable(); // New column
            $table->timestamp('commented_at')->useCurrent()->change(); // Store time of comment
        });
    }

    


    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('commented_at')->change();
            $table->dropColumn(['relationship', 'commented_at']);
        });
    }
};

