<?php

namespace Fuel\Migrations;

class Add_column_perm_to_menu
{
	public function up()
	{
		try {
			\DBUtil::add_fields('menu_menu', array(
				'perm' => array('type' => 'varchar', 'constraint' => 255, 'null' => true),
			));
		} catch (\Database_Exception $e){
			\Messages::error('Error database');
		}
	}

	public function down()
	{
		try {
			\DBUtil::drop_fields('menu_menu', 'perm');
		} catch (\Database_Exception $e){
			\Messages::error('Error database');
		}
	}
}