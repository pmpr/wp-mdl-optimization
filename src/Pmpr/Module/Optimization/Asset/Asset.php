<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284dbab4ba54             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset; use Pmpr\Module\Optimization\Asset\CDN\CDN; use Pmpr\Module\Optimization\Asset\Cleanup\Cleanup; use Pmpr\Module\Optimization\Asset\Critical\Critical; use Pmpr\Module\Optimization\Asset\Minify\Minify; use Pmpr\Module\Optimization\Asset\Media\Media; class Asset extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { CDN::symcgieuakksimmu(); Media::symcgieuakksimmu(); Delay::symcgieuakksimmu(); Minify::symcgieuakksimmu(); Cleanup::symcgieuakksimmu(); Critical::symcgieuakksimmu(); if (!is_admin()) { goto qwosyqcomiosguoa; } Setting::symcgieuakksimmu(); HTAccess::symcgieuakksimmu(); qwosyqcomiosguoa: } }
