<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomerCartsTable extends Migration
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
         'product_id'         => [
            'type'              => 'INT',
            'constraint'        => 11,
            'unsigned'          => true,
            'null'              => true,
         ],
         'customer_id'         => [
            'type'              => 'INT',
            'constraint'        => 11,
            'unsigned'          => true,
            'null'              => true,
         ],
         'product_quantity'        => [
            'type'              => 'INT',
            'constraint'        => 11,
            'null'              => true,
         ],
         'bid_status'        => [
            'type'              => 'ENUM',
            'constraint'        => ['1','0'],
            'null'              => true,
         ],
         'created_date'       => [
            'type'              => 'DATETIME',
            'null'              => true,
         ],
         'updated_date'       => [
             'type'              => 'DATETIME',
             'null'              => true,
         ],
      ]);
      $this->forge->addKey('id', true);
      $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
      $this->forge->addForeignKey('customer_id', 'customers', 'id', 'CASCADE', 'CASCADE');
      $this->forge->createTable('customer_carts');
   }

   public function down()
   {
      $this->forge->dropTable('customer_carts');
   }
}
