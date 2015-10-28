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
	'ACP_LINKMENU'						=> 'Menú Simple de Enlaces',
	'ACP_LINKMENU_SETTINGS'				=> 'Ajustes de Menú de Enlaces',
	'ACP_LINKMENU_CONFIG_SETTINGS'		=> 'Ajustes',
	'ACP_LINKMENU_CONFIG_SET'			=> 'Configuración',
	'ACP_LINKMENU_CONFIG_SAVED'			=> 'Ajustes de Menú de Enlaces guardados',
	'ACP_LINKMENU_VERSION'				=> 'Versión',
	'ACP_LINKMENU_CREDITS'				=> 'Extensión creada por <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>',
	'ACP_LINKMENU_ENABLE'				=> 'Habilitar Menú de Enlaces',
	'ACP_LINKMENU_ENABLE_EXPLAIN'				=> 'Habilitar Menú de Enlaces en el encabezado.',
	'ACP_LINKMENU_ENABLE_FIRST'					=> 'Habilitar el primer enlace',
	'ACP_LINKMENU_ENABLE_FIRST_EXPLAIN'			=> 'Encender el primer enlace.',
	'ACP_LINKMENU_NAME_FIELD_FIRST'				=> 'Nombre del primer sitio',
	'ACP_LINKMENU_NAME_FIELD_FIRST_EXPLAIN'		=> 'Introduzca el nombre del primer sitio.',
	'ACP_LINKMENU_TEXT_FIELD_FIRST'				=> 'URL del primer sitio',
	'ACP_LINKMENU_TEXT_FIELD_FIRST_EXPLAIN'		=> 'Introduzca la URL del primer sitio.',
	'ACP_LINKMENU_ENABLE_SECOND'				=> 'Habilitar el segundo enlace',
	'ACP_LINKMENU_ENABLE_SECOND_EXPLAIN'		=> 'Encender el segundo enlace.',
	'ACP_LINKMENU_NAME_FIELD_SECOND'			=> 'Nombre del segundo sitio',
	'ACP_LINKMENU_NAME_FIELD_SECOND_EXPLAIN'	=> 'Introduzca el nombre del segundo sitio.',
	'ACP_LINKMENU_TEXT_FIELD_SECOND'			=> 'URL del segundo sitio',
	'ACP_LINKMENU_TEXT_FIELD_SECOND_EXPLAIN'	=> 'Introduzca la URL del segundo sitio.',
	'ACP_LINKMENU_ENABLE_THIRD'					=> 'Habilitar el tercer enlace',
	'ACP_LINKMENU_ENABLE_THIRD_EXPLAIN'			=> 'Encender el tercer enlace.',
	'ACP_LINKMENU_NAME_FIELD_THIRD'				=> 'Nombre del tercer sitio',
	'ACP_LINKMENU_NAME_FIELD_THIRD_EXPLAIN'		=> 'Introduzca el nombre del tercer sitio.',
	'ACP_LINKMENU_TEXT_FIELD_THIRD'				=> 'URL del tercer sitio',
	'ACP_LINKMENU_TEXT_FIELD_THIRD_EXPLAIN'		=> 'Introduzca la URL del tercer sitio.',
));
