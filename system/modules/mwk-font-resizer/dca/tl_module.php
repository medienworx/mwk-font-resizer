<?php
 
 /**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 - 2015 Agentur medienworx
 *
 * @package     mwk-font-resizer
 * @author      Christian Kienzl <christian.kienzl@medienworx.eu>
 * @author      Peter Ongyert <peter.ongyert@medienworx.eu>
 * @link        http://www.medienworx.eu
 * @license     http://medienworx.eu/agb.html Commercial license
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['mwk_font_resizer'] = '
    {title_legend},
        name,
        type;
	{font_resize_down},
		font_resizer_button_label_down,
		font_resizer_button_down,
		font_resizer_button_size_down;
	{font_resize_up},
		font_resizer_button_label_up,
		font_resizer_button_up,
		font_resizer_button_size_up;
	{font_resize_reset},
		font_resizer_button_label_reset,
		font_resizer_button_reset,
		font_resizer_button_size_reset;
	{font_resize_configuration},
		font_resizer_html_tags,
		font_resizer_min_fontsize,
		font_resizer_max_fontsize;
    {protected_legend:hide},
        protected;
    {expert_legend:hide},
        guests,
        cssID,
        space
    ';

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_button_label_down'] =
	array
	(
		'label'                 => &$GLOBALS['TL_LANG']['tl_module']['font_resizer_button_label_down'],
		'inputType'             => 'text',
		'eval'                  => array('tl_class'=>'w50'),
		'sql'                   => "varchar(255) NOT NULL default 'A -'"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_button_label_up'] =
	array
	(
		'label'                 => &$GLOBALS['TL_LANG']['tl_module']['font_resizer_button_label_up'],
		'inputType'             => 'text',
		'eval'                  => array('tl_class'=>'w50'),
		'sql'                   => "varchar(255) NOT NULL default 'A +'"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_button_down'] =
	array
	(
		'label'     			=> &$GLOBALS['TL_LANG']['tl_module']['font_resizer_button_down'],
		'exclude'   			=> true,
		'inputType' 			=> 'select',
		'options'   			=> array
		(
			'btn-default',
			'btn-primary',
			'btn-success',
			'btn-info',
			'btn-warning',
			'btn-danger',
			'btn-link',
			'btn-custom'
		),
		'eval'      => array
		(
			'maxlength'=>200,
			'includeBlankOption'=>true,
			'mandatory' => true,
			'tl_class'=>'w50'
		),
		'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_button_up'] =
	array
	(
		'label'     			=> &$GLOBALS['TL_LANG']['tl_module']['font_resizer_button_up'],
		'exclude'   			=> true,
		'inputType' 			=> 'select',
		'options'   			=> array
		(
			'btn-default',
			'btn-primary',
			'btn-success',
			'btn-info',
			'btn-warning',
			'btn-danger',
			'btn-link',
			'btn-custom'
		),
		'eval'      => array
		(
			'maxlength'=>200,
			'includeBlankOption'=>true,
			'mandatory' => true,
			'tl_class'=>'w50'
		),
		'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_html_tags'] =
	array
	(
		'label'                 => &$GLOBALS['TL_LANG']['tl_module']['font_resizer_html_tags'],
		'inputType'             => 'text',
		'eval'                  => array('tl_class'=>'long'),
		'sql'                   => "varchar(255) NOT NULL default 'body'"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_min_fontsize'] =
    array
    (
        'label'                 => &$GLOBALS['TL_LANG']['tl_module']['font_resizer_min_fontsize'],
        'inputType'             => 'text',
        'eval'                  => array('tl_class'=>'w50'),
        'sql'                   => "varchar(255) NOT NULL default '13'"
    );

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_max_fontsize'] =
    array
    (
        'label'                 => &$GLOBALS['TL_LANG']['tl_module']['font_resizer_max_fontsize'],
        'inputType'             => 'text',
        'eval'                  => array('tl_class'=>'w50'),
        'sql'                   => "varchar(255) NOT NULL default '28'"
    );

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_button_size_down'] = array
(
	'label'     				=> &$GLOBALS['TL_LANG']['tl_module']['font_resizer_button_size_down'],
	'exclude'   				=> true,
	'inputType' 				=> 'select',
	'options'   				=> array
	(
		'btn-lg',
		'btn-sm',
		'btn-xs'
	),
	'eval'      => array
	(
		'maxlength'=>200,
		'includeBlankOption'=>true,
		'tl_class'=>'w50'
	),
	'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_button_size_up'] = array
(
	'label'     				=> &$GLOBALS['TL_LANG']['tl_module']['font_resizer_button_size_up'],
	'exclude'   				=> true,
	'inputType' 				=> 'select',
	'options'   				=> array
	(
		'btn-lg',
		'btn-sm',
		'btn-xs'
	),
	'eval'      => array
	(
		'maxlength'=>200,
		'includeBlankOption'=>true,
		'tl_class'=>'w50'
	),
	'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_button_label_reset'] =
	array
	(
		'label'                 => &$GLOBALS['TL_LANG']['tl_module']['font_resizer_button_label_reset'],
		'inputType'             => 'text',
		'eval'                  => array('tl_class'=>'w50'),
		'sql'                   => "varchar(255) NOT NULL default 'Reset'"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_button_reset'] =
	array
	(
		'label'     			=> &$GLOBALS['TL_LANG']['tl_module']['font_resizer_button_reset'],
		'exclude'   			=> true,
		'inputType' 			=> 'select',
		'options'   			=> array
		(
			'btn-default',
			'btn-primary',
			'btn-success',
			'btn-info',
			'btn-warning',
			'btn-danger',
			'btn-link',
			'btn-custom'
		),
		'eval'      => array
		(
			'maxlength'=>200,
			'includeBlankOption'=>true,
			'mandatory' => true,
			'tl_class'=>'w50'
		),
		'sql'       => "varchar(255) NOT NULL default ''"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['font_resizer_button_size_reset'] = array
(
	'label'     				=> &$GLOBALS['TL_LANG']['tl_module']['font_resizer_button_size_reset'],
	'exclude'   				=> true,
	'inputType' 				=> 'select',
	'options'   				=> array
	(
		'btn-lg',
		'btn-sm',
		'btn-xs'
	),
	'eval'      => array
	(
		'maxlength'=>200,
		'includeBlankOption'=>true,
		'tl_class'=>'w50'
	),
	'sql'       => "varchar(255) NOT NULL default ''"
);
