<?php
/**
*
* @package phpBB Extension - Link menu
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\linkmenu\migrations;

class linkmenu_data extends \phpbb\db\migration\migration
{

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('linkmenu_enable', '')),
			array('config.add', array('linkmenu_enable_first', '')),
			array('config.add', array('linkmenu_enable_name_field_first', '')),
			array('config.add', array('linkmenu_enable_text_field_first', '')),
			array('config.add', array('linkmenu_enable_second', '')),
			array('config.add', array('linkmenu_enable_name_field_second', '')),
			array('config.add', array('linkmenu_enable_text_field_second', '')),
			array('config.add', array('linkmenu_enable_third', '')),
			array('config.add', array('linkmenu_enable_name_field_third', '')),
			array('config.add', array('linkmenu_enable_text_field_third', '')),
			array('config.add', array('linkmenu_version', '1.0.0')),
		);
	}
}