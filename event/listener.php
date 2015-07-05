<?php
/**
*
* @package phpBB Extension - Link menu
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\linkmenu\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $template;
	
	protected $config;

	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config)
	{
		$this->template = $template;
		$this->config = $config;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header'	=> 'add_page_header_link',
		);
	}

	public function add_page_header_link($event)
	{
		$this->template->assign_vars(array(
			'LINKMENU_ENABLE'			=> $this->config['linkmenu_enable'] ? true : false,
			'LINKMENU_ENABLE_FIRST'		=> $this->config['linkmenu_enable_first'] ? true : false,
			'LINKMENU_NAME_FIELD_FIRST'	=> (isset($this->config['linkmenu_name_field_first'])) ? $this->config['linkmenu_name_field_first'] : '',
			'LINKMENU_TEXT_FIELD_FIRST'	=> (isset($this->config['linkmenu_text_field_first'])) ? $this->config['linkmenu_text_field_first'] : '',
			'LINKMENU_ENABLE_SECOND'		=> $this->config['linkmenu_enable_second'] ? true : false,
			'LINKMENU_NAME_FIELD_SECOND'	=> (isset($this->config['linkmenu_name_field_second'])) ? $this->config['linkmenu_name_field_second'] : '',
			'LINKMENU_TEXT_FIELD_SECOND'	=> (isset($this->config['linkmenu_text_field_second'])) ? $this->config['linkmenu_text_field_second'] : '',
			'LINKMENU_ENABLE_THIRD'		=> $this->config['linkmenu_enable_third'] ? true : false,
			'LINKMENU_NAME_FIELD_THIRD'	=> (isset($this->config['linkmenu_name_field_third'])) ? $this->config['linkmenu_name_field_third'] : '',
			'LINKMENU_TEXT_FIELD_THIRD'	=> (isset($this->config['linkmenu_text_field_third'])) ? $this->config['linkmenu_text_field_third'] : '',
		));
	}
}