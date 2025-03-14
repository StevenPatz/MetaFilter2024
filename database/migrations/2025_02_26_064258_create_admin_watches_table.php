<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('admin_watches', function (Blueprint $table) {
            $table->id();

            $table->foreignId('admin_id')
                ->constrained('users')
                ->onDelete('cascade');

            $table->morphs('watchable');

            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }
};
