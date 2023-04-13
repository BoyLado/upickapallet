<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentsTable extends Migration
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
         'product_ids'         => [
            'type'              => 'JSON',
            'null'              => true,
         ],
         'cash_payment'        => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'card_payment'        => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'sub_total'        => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'tax_fee'        => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'transaction_fee'        => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'total_payment'        => [
            'type'              => 'DECIMAL',
            'constraint'        => [20,2],
            'null'              => true,
         ],
         'payment_status'    => [
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
      ]);
      $this->forge->addKey('id', true);
      $this->forge->addForeignKey('customer_id', 'customers', 'id', 'CASCADE', 'CASCADE');
      $this->forge->createTable('payments');
   }

   public function down()
   {
      $this->forge->dropTable('payments');
   }
}
