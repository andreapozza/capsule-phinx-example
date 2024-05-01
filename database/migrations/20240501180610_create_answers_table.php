<?php

declare(strict_types=1);

use App\Models\Question;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Phinx\Migration\AbstractMigration;

final class CreateAnswersTable extends AbstractMigration
{
    public function up()
    {
        Capsule::schema()->create('answers', function(Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Question::class)->constrained()->cascadeOnDelete();
            $table->string('content');
            $table->boolean('is_correct')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Capsule::schema()->dropIfExists('answers');
    }
}
