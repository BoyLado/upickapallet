<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductCategoriesTable extends Migration
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
         'category_name'        => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
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
      $this->forge->createTable('product_categories');
   }

   public function down()
   {
      $this->forge->dropTable('product_categories');
   }
}
