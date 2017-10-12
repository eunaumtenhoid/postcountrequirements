<?php
/**
 *
 * Post Count Requirements extension for the phpBB software package
 *
 * @copyright (c) 2017, kinerity, https://www.acsyste.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Translated By : Bassel Taha Alhitary - www.alhitary.net
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'FORUM_POSTCOUNT_POST'			=> 'العدد المطلوب للنشر ',
	'FORUM_POSTCOUNT_POST_EXPLAIN'	=> 'عدد مُشاركات العضو لكي يستطيع النشر في هذا المنتدى. اكتب القيمة صفر لتعطيل هذا الخيار.',
	'FORUM_POSTCOUNT_VIEW'			=> 'العدد المطلوب للمُشاهدة ',
	'FORUM_POSTCOUNT_VIEW_EXPLAIN'	=> 'عدد مُشاركات العضو لكي يستطيع مُشاهدة هذا المنتدى. اكتب القيمة صفر لتعطيل هذا الخيار.',

	'GROUP_BYPASS_POSTCOUNT'			=> 'تجاهل العدد المطلوب للمُشاركات ',
	'GROUP_BYPASS_POSTCOUNT_EXPLAIN'	=> 'أعضائها هذه المجموعة يستطيعون مُشاهدة المنتديات والمُشاركة فيها حتى في حالة عدم حصولهم على العدد المطلوب للمُشاركات.',

	'NEED_POSTS'	=> array(
		1	=> 'تحتاج إلى إضافة %1$d مُشاركة.',
		2	=> 'تحتاج إلى إضافة %1$d مُشاركات.',
	),

	'POSTCOUNT_NO_POST'	=> array(
		1	=> 'لا تمتلك عدد المشاركات المطلوبة للنشر في هذا المنتدى. يجب أن يكون لديك عدد %1$d مُشاركة لكي تستطيع النشر في هذا المنتدى.',
		2	=> 'للا تمتلك عدد المشاركات المطلوبة للنشر في هذا المنتدى. يجب أن يكون لديك عدد %1$d مُشاركات لكي تستطيع النشر في هذا المنتدى.',
	),
	'POSTCOUNT_NO_VIEW'	=> array(
		1	=> 'لا تمتلك عدد المشاركات المطلوبة لمُشاهدة هذا المنتدى. يجب أن يكون لديك عدد %1$d مُشاركة لكي تستطيع مُشاهدة هذا المنتدى.',
		2	=> 'لا تمتلك عدد المشاركات المطلوبة لمُشاهدة هذا المنتدى. يجب أن يكون لديك عدد %1$d مُشاركات لكي تستطيع مُشاهدة هذا المنتدى.',
	),
));
