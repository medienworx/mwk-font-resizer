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


/**
 * Run in a custom namespace, so the class can be replaced
 */

namespace medienworx;

class ModuleMwkFontResizer extends \Module
{
	/**
	 * @var string
	 */
	protected $strTemplate = 'mod_mwk_font_resizer';


	protected function compile()
	{
		$jsSelector = 'mwk'.$this->id.'2';

		$fontResizerButtonDown = '<button id="decfont-'.$jsSelector.'" type="button" class="btn '.$this->font_resizer_button_down.' '.$this->font_resizer_button_size_down.'">'.$this->font_resizer_button_label_down.'</button>';
		$fontResizerButtonUp = '<button id="incfont-'.$jsSelector.'" type="button" class="btn '.$this->font_resizer_button_up.' '.$this->font_resizer_button_size_up.'">'.$this->font_resizer_button_label_up.'</button>';
		$fontResizerButtonReset = '<button id="resetfont-'.$jsSelector.'" type="button" class="btn '.$this->font_resizer_button_reset.' '.$this->font_resizer_button_size_reset.'">'.$this->font_resizer_button_label_reset.'</button>';


		$this->Template->jsSelector = $jsSelector;
		$this->Template->fontResizerButtonDown = $fontResizerButtonDown;
		$this->Template->fontResizerButtonUp = $fontResizerButtonUp;
		$this->Template->fontResizerButtonReset = $fontResizerButtonReset;
		$this->Template->fontResizerHtmlTags = $this->font_resizer_html_tags;
		$this->Template->fontResizerMinFontsize = $this->font_resizer_min_fontsize;
		$this->Template->fontResizerMaxFontsize = $this->font_resizer_max_fontsize;

		// load css and javascript
		if(TL_MODE == 'FE')
		{
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-font-resizer/assets/jquery/1.11.2/jquery.min.js');
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-font-resizer/assets/bootstrap/js/bootstrap.min.js');
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-font-resizer/assets/bootstrap/css/bootstrap.min.css');
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-font-resizer/assets/js-cookie/js.cookie.js');
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-font-resizer/assets/font-awesome/css/font-awesome.min.css');
		}
	}
}
