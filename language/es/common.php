<?php
/**
 *
 * Post Count Requirements extension for the phpBB software package
 *
 * @copyright (c) 2017, kinerity, https://www.acsyste.com
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'FORUM_POSTCOUNT_POST'			=> 'Requerido para Nuevo Tema/Responder',
	'FORUM_POSTCOUNT_POST_EXPLAIN'	=> 'Número de mensajes necesarios para publicar en este foro. Establecer este valor en 0 deshabilita este requisito.',
	'FORUM_POSTCOUNT_VIEW'			=> 'Requerido para ver mensaje',
	'FORUM_POSTCOUNT_VIEW_EXPLAIN'	=> 'Número de mensajes necesarios para ver este foro. Establecer este valor en 0 deshabilita este requisito.',

	'GROUP_BYPASS_POSTCOUNT'			=> 'Evitar requisito de cantidad de mensajes',
	'GROUP_BYPASS_POSTCOUNT_EXPLAIN'	=> 'Este grupo y sus miembros pueden ver y publicar en los foros, incluso si no tienen la cantidad de mensajes necesarios.',

	'NEED_POSTS'	=> array(
		1	=> 'Necesita %1$d mensaje más.',
		2	=> 'Necesita %1$d mensajes más.',
	),

	'POSTCOUNT_NO_POST'	=> array(
		1	=> 'No tiene la cantidad de mensajes necesarios para publicar en este foro. Para publicar en este foro, debe tener %1$d mensaje.',
		2	=> 'No tiene la cantidad de mensajes necesarios para publicar en este foro. Para publicar en este foro, debe tener %1$d mensajes.',
	),
	'POSTCOUNT_NO_VIEW'	=> array(
		1	=> 'No tiene la cantidad de mensajes necesarios para ver este foro. Para ver este foro, debe tener %1$d mensaje.',
		2	=> 'No tiene la cantidad de mensajes necesarios para ver este foro. Para ver este foro, debe tener %1$d mensajes.',
	),
));
