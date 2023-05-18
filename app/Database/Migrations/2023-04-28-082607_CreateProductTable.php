<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "photo" => [
                "type"=> "TEXT",
                "null"=> true,
            ],
            "title" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "caption" => [
                "type"=> "VARCHAR",
                "constraint" => "10000",
            ],
            "category" => [
                "type"=> "VARCHAR",
                "constraint" => "50",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('products', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('products', true); //If Exists drop table products
    }
}