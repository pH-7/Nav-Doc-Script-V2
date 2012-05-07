<?php
/**
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7/Nav-Doc-Script-V2
 * @copyright   Copyright pH7 Script All Rights Reserved.
 * @license     CC-BY - http://creativecommons.org/licenses/by/3.0/
 */
namespace PH7\Doc;
defined('PH7') or exit('Restricted access');

/**
 * @return string The links of the files doc tpl.
 */
function get_links_html() {
    $sHtml = '<ul>';

    $aFiles = glob(DATA_PATH . LANG . '/*.tpl');

    $i = 1;
    foreach($aFiles as $sLink) {
        $sLink = htmlentities(str_replace(array('.tpl', DATA_PATH, LANG . '/'), '', $sLink));
        $sName = ucfirst(str_replace(array('/', '-'), array('', ' '), $sLink));

        $sHtml .= '<li>' . $i++ . ') <a href="' . ROOT_URL . LANG . '/' . $sLink . '" title="' . $sName . '">' . $sName . '</a>.</li>';
    }

    $sHtml .= '</ul>';

    return $sHtml;
}

/**
 * @return string The links of the languages ​​available.
 */
function get_langs_html() {
    $aLangs = get_dir_list(DATA_PATH);
    $aLangsList = include(ROOT_PATH . 'inc/conf.lang.php');

    $sHtml = ''; // Default value

    foreach ($aLangs as $sLang) {
        if($sLang === LANG) continue;
        $sHtml .= '<a href="' . ROOT_URL . substr($sLang,0,2) . '"><img src="' . STATIC_URL . 'img/flags/' . $sLang . '.gif" alt="' . $aLangsList[$sLang] . '" title="' . $aLangsList[$sLang] . '" /></a>';
    }

    return $sHtml;
}
