<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
   public function up()
   {
      $this->forge->addField([
         'id'                 => [
            'type'              => 'INT',
            'constraint'        => 11,
            'unsigned'          => true,
            'auto_increment'    => true,
         ],
         'product_category_id'         => [
            'type'              => 'INT',
            'constraint'        => 11,
            'unsigned'          => true,
            'null'              => true,
         ],
         'product_name'        => [
            'type'              => 'VARCHAR',
            'constraint'        => 255,
            'null'              => true,
         ],
         'product_description'        => [
            'type'              => 'TEXT',
            'null'              => true,
         ],
         'product_type'        => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'regular_price'        => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'sale_price'         => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'opening_price'         => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'lowest_price_to_accept'         => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'bid_increment'         => [
            'type'              => 'INT',
            'constraint'        => 11,
            'null'              => true,
         ],
         'buy_now'    => [
            'type'              => 'ENUM',
            'constraint'        => ['1','0'],
            'null'              => true,
         ],
         'buy_now_price'         => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'start_date'         => [
            'type'              => 'DATETIME',
            'null'              => true,
         ],
         'end_date'           => [
            'type'              => 'DATETIME',
            'null'              => true,
         ],
         'automatic_relist'   => [
            'type'              => 'ENUM',
            'constraint'        => ['1','0'],
            'null'              => true,
         ],
         'created_by'         => [
            'type'              => 'INT',
            'constraint'        => 11,
            'unsigned'          => true,
            'null'              => true,
         ],
         'created_date'       => [
            'type'              => 'DATETIME',
            'null'              => true,
         ],
         'updated_by'         => [
             'type'              => 'INT',
             'constraint'        => 11,
             'unsigned'          => true,
             'null'              => true,
         ],
         'updated_date'       => [
             'type'              => 'DATETIME',
             'null'              => true,
         ],
      ]);
      $this->forge->addKey('id', true);
      $this->forge->addForeignKey('product_category_id', 'product_categories', 'id', 'CASCADE', 'CASCADE');
      $this->forge->createTable('products');
   }

   public function down()
   {
      $this->forge->dropTable('products');
   }
}
