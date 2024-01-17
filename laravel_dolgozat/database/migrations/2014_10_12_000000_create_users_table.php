<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('status')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => "Robi",
            'email' => 'robimail@mail.hu',
            'password' => Hash::make("blabla")
        ]);

        User::create([
            'name' => "Admin",
            'email' => 'admin@mail.com',
            'password' => Hash::make("abrakadabra"),
            'permission' => 'admin'
        ]);

        User::create([
            'name' => "Pancsi",
            'email' => 'pancsimail@mail.hu',
            'password' => Hash::make("blabla")
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
