<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
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
         'first_name'        => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'last_name'         => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'position'         => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'user_email'        => [
            'type'              => 'VARCHAR',
            'constraint'        => 150,
            'null'              => false,
         ],
         'user_name' => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => false,
         ],
         'user_password' => [
            'type'              => 'VARCHAR',
            'constraint'        => 255,
            'null'              => false,
         ],
         'picture'          => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'user_status'    => [
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
      $this->forge->createTable('users');
   }

   public function down()
   {
      $this->forge->dropTable('users');
   }
}
