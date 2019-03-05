<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Site
            $table->string('root_domain');
            $table->string('alias')->nullable();
            $table->enum('project_type', ['Laravel', 'Python', 'Symfony', 'Php', 'Html']);
            $table->string('web_directory');
            //Repository
            $table->enum('provider', ['Github', 'Bitbucket']);
            $table->string('repository');
            $table->string('branch');
            $table->boolean('dependencies')->default(true);

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
        Schema::dropIfExists('sites');
    }
}
