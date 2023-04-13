<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductVideosTable extends Migration
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
         'featured_video'        => [
            'type'              => 'INT',
            'constraint'        => 11,
            'null'              => true,
         ],
         'product_video'        => [
            'type'              => 'TEXT',
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
      $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
      $this->forge->createTable('product_videos');
   }

   public function down()
   {
      $this->forge->dropTable('product_videos');
   }
}
