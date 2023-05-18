<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVisitorsTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "auto_increment"=> true,
            ],
            "id_product" => [
                "type"=> "INT",
                "constraint" => "11",
            ],
            "category" => [
                "type"=> "VARCHAR",
                "constraint" => "50",
            ],
            "date_visit" => [
                'type' => 'timestamp',
            ]
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('visitors', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('visitors', true); //If Exists drop table products
    }
}
