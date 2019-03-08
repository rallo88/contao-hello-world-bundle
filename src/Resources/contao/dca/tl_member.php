<?php if(!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * 
 * 
 *
 * PHP version 5
 * @copyright  contao4you | Oliver Lohoff 2011
 * @author     Oliver Lohoff <info@contao4you.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


// Feld Telefonnummer Geheim im Bereich Kontaktdaten hinzufügen
// Palette

$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace
(
	'contact',
	'captcha_kennwort,secret_phone,contact',
	$GLOBALS['TL_DCA']['tl_member']['palettes']['default']
);

$GLOBALS['TL_DCA']['tl_member']['fields']['captcha_kennwort'] = array 
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['captcha_kennwort'],
	'exclude'                 => true,
	'search'                  => false,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=> true, 'maxlength'=>64, 'rgxp'=>'captcha_kennwort', 'feEditable'=>true, 'feViewable'=>true)
);



    
// Feldkonfiguration
$GLOBALS['TL_DCA']['tl_member']['fields']['secret_phone'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_member']['secret_phone'],
	'exclude'   => true,
	'search'    => true,
	'inputType' => 'text',
	'eval'      => array('maxlength'=>64, 'rgxp'=>'phone', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'   =>'contact', 'tl_class'=>'w50'),
	'sql'       => "varchar(64) NOT NULL default ''"
);
    
       




?>