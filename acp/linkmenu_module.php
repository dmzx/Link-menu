<?php
/**
*
* @package phpBB Extension - Link menu
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\linkmenu\acp;

class linkmenu_module
{
var $u_action;

	function main($id, $mode)
	{
		global $config, $user, $template, $request;

		$this->tpl_name = 'acp_linkmenu_config';
		$this->page_title = $user->lang['ACP_LINKMENU_SETTINGS'];
		add_form_key('acp_linkmenu_config');

		$submit = $request->is_set_post('submit');
		if ($submit)
		{
			if (!check_form_key('acp_linkmenu_config'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('linkmenu_enable', $request->variable('linkmenu_enable', 0));
			$config->set('linkmenu_enable_first', $request->variable('linkmenu_enable_first', 0));
			$config->set('linkmenu_name_field_first', utf8_normalize_nfc($request->variable('linkmenu_name_field_first', '', true)));
			$config->set('linkmenu_text_field_first', utf8_normalize_nfc($request->variable('linkmenu_text_field_first', '', true)));
			$config->set('linkmenu_enable_second', $request->variable('linkmenu_enable_second', 0));
			$config->set('linkmenu_name_field_second', utf8_normalize_nfc($request->variable('linkmenu_name_field_second', '', true)));
			$config->set('linkmenu_text_field_second', utf8_normalize_nfc($request->variable('linkmenu_text_field_second', '', true)));
			$config->set('linkmenu_enable_third', $request->variable('linkmenu_enable_third', 0));
			$config->set('linkmenu_name_field_third', utf8_normalize_nfc($request->variable('linkmenu_name_field_third', '', true)));
			$config->set('linkmenu_text_field_third', utf8_normalize_nfc($request->variable('linkmenu_text_field_third', '', true)));

			trigger_error($user->lang['ACP_LINKMENU_CONFIG_SAVED'] . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'ACP_LINKMENU_VERSION'			=> (isset($config['linkmenu_version'])) ? $config['linkmenu_version'] : '',
			'ACP_LINKMENU_ENABLE'			=> (!empty($config['linkmenu_enable'])) ? true : false,
			'ACP_LINKMENU_ENABLE_FIRST'		=> (!empty($config['linkmenu_enable_first'])) ? true : false,
			'LINKMENU_NAME_FIELD_FIRST'	=> (isset($config['linkmenu_name_field_first'])) ? $config['linkmenu_name_field_first'] : '',
			'LINKMENU_TEXT_FIELD_FIRST'	=> (isset($config['linkmenu_text_field_first'])) ? $config['linkmenu_text_field_first'] : '',
			'ACP_LINKMENU_ENABLE_SECOND'		=> (!empty($config['linkmenu_enable_second'])) ? true : false,
			'LINKMENU_NAME_FIELD_SECOND'	=> (isset($config['linkmenu_name_field_second'])) ? $config['linkmenu_name_field_second'] : '',
			'LINKMENU_TEXT_FIELD_SECOND'	=> (isset($config['linkmenu_text_field_second'])) ? $config['linkmenu_text_field_second'] : '',
			'ACP_LINKMENU_ENABLE_THIRD'		=> (!empty($config['linkmenu_enable_third'])) ? true : false,
			'LINKMENU_NAME_FIELD_THIRD'	=> (isset($config['linkmenu_name_field_third'])) ? $config['linkmenu_name_field_third'] : '',
			'LINKMENU_TEXT_FIELD_THIRD'	=> (isset($config['linkmenu_text_field_third'])) ? $config['linkmenu_text_field_third'] : '',
			'U_ACTION'					=> $this->u_action,
		));
	}
}
