<?php

namespace rallo88\ContaoHelloWorldBundle\Module;

class HelloWorldModule extends \Module
{
    /**
     * @var string
     */
    protected $strTemplate = 'mod_helloWorld';

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');

            $template->wildcard = '### '.utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['helloWorld'][0]).' ###';
            $template->title = $this->headline;
            $template->id = $this->id;
            $template->link = $this->name;
            $template->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id='.$this->id;

            return $template->parse();
        }

        return parent::generate();
    }

    public function Kennwort($strRegexp, $varValue, Widget $objWidget) {

        $kennwort = $GLOBALS['TL_CONFIG']['captcha_kennwort'];

        if ($strRegexp == 'captcha_kennwort') {

            if ($varValue != $kennwort) {
                $objWidget->addError('Falsches Kennwort.');
            }

            return true;
        }

        return false;
    }


    /**
     * Generates the module.
     */
    protected function compile()
    {
        $this->Template->message = $GLOBALS['TL_CONFIG']['captcha_kennwort'];
    }




}
