<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `reports` AS select `eq`.`cod` AS `cod`,`eq`.`UA_type` AS `UA_type`,`eq`.`mark` AS `mark`,`eq`.`processor` AS `processor`,`eq`.`generation` AS `generation`,`c`.`name` AS `name_company`,`a`.`name` AS `name_adviser` from (((`alquiler_db`.`leasings` `l` join `alquiler_db`.`companies` `c` on(`l`.`company_id` = `c`.`id`)) join `alquiler_db`.`advisers` `a` on(`l`.`adviser_id` = `a`.`id`)) join `alquiler_db`.`equipment` `eq` on(`l`.`equipment_id` = `eq`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `reports`");
    }
};
