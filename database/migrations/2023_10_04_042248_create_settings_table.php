<?php

use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });
        setting::create ([
            'key'=>'_site_name',
            'label'=>'judul situs',
            'value' => 'My_Website',
            'type' => 'text',
        ]);

        setting::create ([
            'key'=>'_location',
            'label'=>'alamat',
            'value' => 'Bantar gebang Kota Bekasi Jawa Barat',
            'type' => 'text',
        ]);

        setting::create ([
            'key'=>'_instagram',
            'label'=>'instagram',
            'value' => 'https://www.instagram.com/alipppp_turu',
            'type' => 'text',
        ]);

        setting::create ([
            'key'=>'_tiktok',
            'label'=>'tiktok',
            'value' => 'https://www.tiktok.com/ayy_tukang_turu',
            'type' => 'text',
        ]);

        setting::create ([
            'key'=>'_facebook',
            'label'=>'facebook',
            'value' => 'https://www.instagram.com/alifikromakbar',
            'type' => 'text',
        ]);

        setting::create ([
            'key'=>'_twitch',
            'label'=>'twitch',
            'value' => 'https://www.twitch.com/dai',
            'type' => 'text',
        ]);

        setting::create ([
            'key'=>'_site_description',
            'label'=>'description web',
            'value' => 'ini adalah project pertama saya yang menggunakan framework laravel dan bootstrap',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
