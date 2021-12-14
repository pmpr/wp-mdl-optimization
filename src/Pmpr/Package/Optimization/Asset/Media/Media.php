<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b865b46dbbe             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Media; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Package\Optimization\Asset\Setting; class Media extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto miaiggsoiaekmqwy; } if (!$this->weysguygiseoukqw(Setting::LAZY_LOAD_ENABLE)) { goto gioqkcywauuckmua; } LazyLoad::symcgieuakksimmu(); if (!($this->weysguygiseoukqw(Setting::IMAGE_COLOR_DOMINATOR) && extension_loaded("\107\x44"))) { goto iqeqqwcmaiqakawc; } Dominator::symcgieuakksimmu(); iqeqqwcmaiqakawc: gioqkcywauuckmua: miaiggsoiaekmqwy: } }
