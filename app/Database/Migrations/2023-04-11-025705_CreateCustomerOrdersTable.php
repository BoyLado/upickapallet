<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomerOrdersTable extends Migration
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
         'customer_id'         => [
            'type'              => 'INT',
            'constraint'        => 11,
            'unsigned'          => true,
            'null'              => true,
         ],
         'customer_cart_ids'   => [
            'type'              => 'JSON',
            'null'              => true,
         ],
         'order_status'        => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'order_total_amount'  => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'created_date'       => [
            'type'              => 'DATETIME',
            'null'              => true,
         ],
      ]);
      $this->forge->addKey('id', true);
      $this->forge->addForeignKey('customer_id', 'customers', 'id', 'CASCADE', 'CASCADE');
      $this->forge->createTable('customer_orders');
   }

   public function down()
   {
      $this->forge->dropTable('customer_orders');
   }
}
