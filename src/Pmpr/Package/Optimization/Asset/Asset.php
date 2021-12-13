<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b74f0fae008             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use Pmpr\Package\Optimization\Asset\CDN\CDN; use Pmpr\Package\Optimization\Asset\Cleanup\Cleanup; use Pmpr\Package\Optimization\Asset\Critical\Critical; use Pmpr\Package\Optimization\Asset\Minify\Minify; use Pmpr\Package\Optimization\Asset\Media\Media; class Asset extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { goto yeemeukcggweaowa; weaqamgsuuwuouks: Minify::symcgieuakksimmu(); goto ywumciccwiakyeus; iuiyqyiwisggcywk: Delay::symcgieuakksimmu(); goto weaqamgsuuwuouks; qmwomemuqyaimiso: mewsemcoqiuuwwme: goto awggeauumiqymcoi; qiaayoymqmmemiiy: if (!is_admin()) { goto mewsemcoqiuuwwme; } goto oummiciwcqkwymss; wyucqqggakoceowc: Media::symcgieuakksimmu(); goto iuiyqyiwisggcywk; omkkomymwsowywwa: HTAccess::symcgieuakksimmu(); goto qmwomemuqyaimiso; qwsioymycmywyqiw: Critical::symcgieuakksimmu(); goto qiaayoymqmmemiiy; yeemeukcggweaowa: CDN::symcgieuakksimmu(); goto wyucqqggakoceowc; oummiciwcqkwymss: Setting::symcgieuakksimmu(); goto omkkomymwsowywwa; ywumciccwiakyeus: Cleanup::symcgieuakksimmu(); goto qwsioymycmywyqiw; awggeauumiqymcoi: } }
