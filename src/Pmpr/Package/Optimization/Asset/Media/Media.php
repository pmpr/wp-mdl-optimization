<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c039ca9bf9f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Media; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Package\Optimization\Asset\Setting; class Media extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto aakwscykmyyykoms; } if (!$this->weysguygiseoukqw(Setting::LAZY_LOAD_ENABLE)) { goto ccqgkeesikyegcik; } LazyLoad::symcgieuakksimmu(); if (!($this->weysguygiseoukqw(Setting::IMAGE_COLOR_DOMINATOR) && extension_loaded("\x47\x44"))) { goto kwaqakoogeiacmwi; } Dominator::symcgieuakksimmu(); kwaqakoogeiacmwi: ccqgkeesikyegcik: aakwscykmyyykoms: } }
