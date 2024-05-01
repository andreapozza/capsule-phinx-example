<?php

declare(strict_types=1);

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Phinx\Migration\AbstractMigration;

final class CreateQuestionsTable extends AbstractMigration
{
    public function up()
    {
        Capsule::schema()->create('questions', function(Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Capsule::schema()->dropIfExists('questions');
    }
}
