<?php
/**
*
* @package phpBB Extension - Link menu
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\linkmenu\acp;

class linkmenu_info
 {
	function module()
	{
		 return array(
			'filename'	=> '\dmzx\linkmenu\acp\pmregbar_module',
			'title'		=> 'ACP_LINKMENU',
			'modes'		=> array(
				'config'	=> array('title' => 'ACP_LINKMENU_CONFIG_SETTINGS', 'auth' => 'ext_dmzx/linkmenu && acl_a_board', 'cat' => array('ACP_LINKMENU')),
			),
		);
	}
}
