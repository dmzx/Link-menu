<?php
/**
*
* @package phpBB Extension - Link menu
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_LINKMENU'						=> 'Semplice link menu',
	'ACP_LINKMENU_SETTINGS'				=> 'Link menu opzioni',
	'ACP_LINKMENU_CONFIG_SETTINGS'		=> 'Opzioni',
	'ACP_LINKMENU_CONFIG_SET'			=> 'Configurazione',
	'ACP_LINKMENU_CONFIG_SAVED'			=> 'Link menu opzioni salvate',
	'ACP_LINKMENU_VERSION'				=> 'Versione',
	'ACP_LINKMENU_CREDITS'				=> 'Estensione di <a href="http://www.dmzx-web.net" rel="nofollow"><strong>dmzx</strong></a>',
	'ACP_LINKMENU_ENABLE'				=> 'Abilita link menu',
	'ACP_LINKMENU_ENABLE_EXPLAIN'				=> 'Abilita estensione link menu in header.',
	'ACP_LINKMENU_ENABLE_FIRST'					=> 'Abilita primo link ',
	'ACP_LINKMENU_ENABLE_FIRST_EXPLAIN'			=> 'Abilita il primo link.',
	'ACP_LINKMENU_NAME_FIELD_FIRST'				=> 'Nome del primo link',
	'ACP_LINKMENU_NAME_FIELD_FIRST_EXPLAIN'		=> 'Inserisci il nome del primo link.',
	'ACP_LINKMENU_TEXT_FIELD_FIRST'				=> 'URL primo link',
	'ACP_LINKMENU_TEXT_FIELD_FIRST_EXPLAIN'		=> 'Inserisci URL.',
	'ACP_LINKMENU_ENABLE_SECOND'				=> 'Abilita secondo link',
	'ACP_LINKMENU_ENABLE_SECOND_EXPLAIN'		=> 'Abilita il secondo link.',
	'ACP_LINKMENU_NAME_FIELD_SECOND'			=> 'Nome del secondo link',
	'ACP_LINKMENU_NAME_FIELD_SECOND_EXPLAIN'	=> 'Inserisci il nome del secondo link.',
	'ACP_LINKMENU_TEXT_FIELD_SECOND'			=> 'URL secondo link',
	'ACP_LINKMENU_TEXT_FIELD_SECOND_EXPLAIN'	=> 'Inserisci URL del secondo link.',
	'ACP_LINKMENU_ENABLE_THIRD'					=> 'Abilita terzo link',
	'ACP_LINKMENU_ENABLE_THIRD_EXPLAIN'			=> 'Abilita il terzo link.',
	'ACP_LINKMENU_NAME_FIELD_THIRD'				=> 'Nome del terzo link',
	'ACP_LINKMENU_NAME_FIELD_THIRD_EXPLAIN'		=> 'Inserisci il nome del terzo link.',
	'ACP_LINKMENU_TEXT_FIELD_THIRD'				=> 'URL terzo link',
	'ACP_LINKMENU_TEXT_FIELD_THIRD_EXPLAIN'		=> 'Inserisci URL del terzo link.',
));