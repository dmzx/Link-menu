<?php
/**
 *
 * Link menu. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2017 dmzx <http://www.dmzx-web.net>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_LINKMENU'						=> 'Menu de liens',
	'ACP_LINKMENU_SETTINGS'				=> 'Paramètres',
	'ACP_LINKMENU_CONFIG_SETTINGS'		=> 'Paramètres',
	'ACP_LINKMENU_CONFIG_SET'			=> 'Configuration',
	'ACP_LINKMENU_CONFIG_SAVED'			=> 'Paramètres du menu de liens sauvegardés',
	'ACP_LINKMENU_VERSION'				=> 'Version',
	'ACP_LINKMENU_CREDITS'				=> 'L’extension a été créée par : <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>',
	'ACP_LINKMENU_ENABLE'				=> 'Activer le menu de liens',
	'ACP_LINKMENU_ENABLE_EXPLAIN'				=> 'Permet d’activer l’affichage du menu de liens dans l’entête du forum.',
	'ACP_LINKMENU_ENABLE_FIRST'					=> 'Activer le premier lien',
	'ACP_LINKMENU_ENABLE_FIRST_EXPLAIN'			=> 'Permet d’activer l’affichage du premier lien.',
	'ACP_LINKMENU_NAME_FIELD_FIRST'				=> 'Nom du premier lien',
	'ACP_LINKMENU_NAME_FIELD_FIRST_EXPLAIN'		=> 'Permet de saisir le nom du premier lien affiché dans le menu de liens.',
	'ACP_LINKMENU_TEXT_FIELD_FIRST'				=> 'Adresse URL du premier lien',
	'ACP_LINKMENU_TEXT_FIELD_FIRST_EXPLAIN'		=> 'Permet de saisir l’adresse URL du premier lien.',
	'ACP_LINKMENU_ENABLE_SECOND'				=> 'Activer le second lien',
	'ACP_LINKMENU_ENABLE_SECOND_EXPLAIN'		=> 'Permet d’activer l’affichage du second lien dans le menu de liens.',
	'ACP_LINKMENU_NAME_FIELD_SECOND'			=> 'Nom du second lien',
	'ACP_LINKMENU_NAME_FIELD_SECOND_EXPLAIN'	=> 'Permet de saisir le nom du second lien.',
	'ACP_LINKMENU_TEXT_FIELD_SECOND'			=> 'Adresse URL du second lien',
	'ACP_LINKMENU_TEXT_FIELD_SECOND_EXPLAIN'	=> 'Permet de saisir l’adresse URL du second lien.',
	'ACP_LINKMENU_ENABLE_THIRD'					=> 'Activer le troisième lien',
	'ACP_LINKMENU_ENABLE_THIRD_EXPLAIN'			=> 'Permet d’activer l’affichage du troisième lien dans le menu de liens.',
	'ACP_LINKMENU_NAME_FIELD_THIRD'				=> 'Nom du troisième lien',
	'ACP_LINKMENU_NAME_FIELD_THIRD_EXPLAIN'		=> 'Permet de saisir le nom du troisième lien.',
	'ACP_LINKMENU_TEXT_FIELD_THIRD'				=> 'Adresse URL du troisième lien',
	'ACP_LINKMENU_TEXT_FIELD_THIRD_EXPLAIN'		=> 'Permet de saisir l’adresse URL du troisième lien.',
));
