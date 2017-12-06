<?php
/**
 *
 * Post Count Requirements extension for the phpBB software package
 * 
 * @copyright (c) 2017, kinerity, https://www.acsyste.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.0] (https://github.com/phpBBTraducoes)
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
	'FORUM_POSTCOUNT_POST'			=> 'Requisito de postagem para novo tópico/resposta ',
	'FORUM_POSTCOUNT_POST_EXPLAIN'	=> 'Número de posts necessários para postar neste fórum. Definir esse valor como 0 desativa esse requisito.',
	'FORUM_POSTCOUNT_VIEW'			=> 'Ver requisitos de postagem',
	'FORUM_POSTCOUNT_VIEW_EXPLAIN'	=> 'Número de postagens necessárias para visualizar este fórum. Definir esse valor como 0 desativa esse requisito.',

	'GROUP_BYPASS_POSTCOUNT'			=> 'Ignorar requisitos de contagem de post',
	'GROUP_BYPASS_POSTCOUNT_EXPLAIN'	=> 'Este grupo e seus membros podem visualizar e postar em fóruns, mesmo que eles não tenham a quantidade de postagem necessária.',

	'NEED_POSTS'	=> array(
		1	=> 'Você precisa de mais %1$d post.',
		2	=> 'Você precisa de mais %1$d posts.',
	),

	'POSTCOUNT_NO_POST'	=> array(
		1	=> 'Você não possui a quantidade necessária de post para postar neste fórum. Para postar neste fórum, você deve ter %1$d post.',
		2	=> 'Você não possui a quantidade necessária de posts para postar neste fórum. Para postar neste fórum, você deve ter %1$d posts.',
	),
	'POSTCOUNT_NO_VIEW'	=> array(
		1	=> 'Você não possui a quantidade necessária de post para visualizar este fórum. Para visualizar este fórum, você deve ter %1$d post.',
		2	=> 'Você não possui a quantidade necessária de posts para visualizar este fórum. Para visualizar este fórum, você deve ter %1$d posts.',
	),
));
