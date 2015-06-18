<?php
/**
*
* @package phpBB Extension - Link menu
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\linkmenu\migrations;

class linkmenu_module extends \phpbb\db\migration\migration
{

	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_LINKMENU')),
			array('module.add', array(
			'acp', 'ACP_LINKMENU', array(
			'module_basename'	=> '\dmzx\linkmenu\acp\linkmenu_module', 'modes'		=> array('config'),
				),
			)),
		);
	}
}