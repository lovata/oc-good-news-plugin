<?php

namespace Lovata\GoodNews\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * Class UpdateTableArticlesAddSoftDeletes
 * @package Lovata\GoodNews\Updates
 */
class UpdateTableArticlesAddSoftDeletes extends Migration
{
    const TABLE_NAME = 'lovata_good_news_articles';

    /**
     * Apply migration
     */
    public function up()
    {
        if (Schema::hasTable(self::TABLE_NAME)) {
            Schema::table(self::TABLE_NAME, function (Blueprint $table) {
                if (!Schema::hasColumn(self::TABLE_NAME, 'deleted_at')) $table->softDeletes();
            });
        }
    }

    /**
     * Rollback migration
     */
    public function down()
    {
        if (Schema::hasTable(self::TABLE_NAME)) {
            Schema::table(self::TABLE_NAME, function (Blueprint $table) {
                if (Schema::hasColumn(self::TABLE_NAME, 'deleted_at')) $table->softDeletes();
            });
        }
    }
}
