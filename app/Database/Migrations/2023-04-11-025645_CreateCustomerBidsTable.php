<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomerBidsTable extends Migration
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
         'bid_amount'        => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
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
      ]);
      $this->forge->addKey('id', true);
      $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
      $this->forge->addForeignKey('customer_id', 'customers', 'id', 'CASCADE', 'CASCADE');
      $this->forge->createTable('customer_bids');
   }

   public function down()
   {
      $this->forge->dropTable('customer_bids');
   }
}
