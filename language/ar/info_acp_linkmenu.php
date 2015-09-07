<?php
/**
*
* @package phpBB Extension - Link menu
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'ACP_LINKMENU'						=> 'قائمة الروابط',
	'ACP_LINKMENU_SETTINGS'				=> 'الإعدادات',
	'ACP_LINKMENU_CONFIG_SETTINGS'		=> 'الإعدادات',
	'ACP_LINKMENU_CONFIG_SET'			=> 'الضبط',
	'ACP_LINKMENU_CONFIG_SAVED'			=> 'تم حفظ الإعدادات',
	'ACP_LINKMENU_VERSION'				=> 'النسخة ',
	'ACP_LINKMENU_CREDITS'				=> 'بواسطة المُبرمج <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>',
	'ACP_LINKMENU_ENABLE'				=> 'تفعيل ',
	'ACP_LINKMENU_ENABLE_EXPLAIN'				=> 'تفعيل قائمة الروابط بداخل ترويسة المنتدى.',
	'ACP_LINKMENU_ENABLE_FIRST'					=> 'تفعيل الرابط الأول ',
	'ACP_LINKMENU_ENABLE_FIRST_EXPLAIN'			=> 'إظهار  الرابط الأول في الترويسة.',
	'ACP_LINKMENU_NAME_FIELD_FIRST'				=> 'العنوان 1 ',
	'ACP_LINKMENU_NAME_FIELD_FIRST_EXPLAIN'		=> 'أدخل إسم العنوان للرابط الأول.',
	'ACP_LINKMENU_TEXT_FIELD_FIRST'				=> 'الرابط 1 ',
	'ACP_LINKMENU_TEXT_FIELD_FIRST_EXPLAIN'		=> 'أدخل مسار الرابط الأول.',
	'ACP_LINKMENU_ENABLE_SECOND'				=> 'تفعيل الرابط الثاني ',
	'ACP_LINKMENU_ENABLE_SECOND_EXPLAIN'		=> 'إظهار  الرابط الثاني في الترويسة.',
	'ACP_LINKMENU_NAME_FIELD_SECOND'			=> 'العنوان 2 ',
	'ACP_LINKMENU_NAME_FIELD_SECOND_EXPLAIN'	=> 'أدخل إسم العنوان للرابط الثاني.',
	'ACP_LINKMENU_TEXT_FIELD_SECOND'			=> 'الرابط 2 ',
	'ACP_LINKMENU_TEXT_FIELD_SECOND_EXPLAIN'	=> 'أدخل مسار الرابط  الثاني.',
	'ACP_LINKMENU_ENABLE_THIRD'					=> 'تفعيل الرابط الثالث ',
	'ACP_LINKMENU_ENABLE_THIRD_EXPLAIN'			=> 'إظهار  الرابط الثالث في الترويسة.',
	'ACP_LINKMENU_NAME_FIELD_THIRD'				=> 'العنوان 3 ',
	'ACP_LINKMENU_NAME_FIELD_THIRD_EXPLAIN'		=> 'أدخل إسم العنوان للرابط الثالث.',
	'ACP_LINKMENU_TEXT_FIELD_THIRD'				=> 'الرابط 3 ',
	'ACP_LINKMENU_TEXT_FIELD_THIRD_EXPLAIN'		=> 'أدخل مسار الرابط الثالث.',
));
