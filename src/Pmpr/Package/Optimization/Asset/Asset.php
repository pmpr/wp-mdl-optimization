<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b7a38689a83             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use Pmpr\Package\Optimization\Asset\CDN\CDN; use Pmpr\Package\Optimization\Asset\Cleanup\Cleanup; use Pmpr\Package\Optimization\Asset\Critical\Critical; use Pmpr\Package\Optimization\Asset\Minify\Minify; use Pmpr\Package\Optimization\Asset\Media\Media; class Asset extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { goto yeemeukcggweaowa; qiaayoymqmmemiiy: if (!is_admin()) { goto mewsemcoqiuuwwme; } goto oummiciwcqkwymss; qmwomemuqyaimiso: mewsemcoqiuuwwme: goto awggeauumiqymcoi; yeemeukcggweaowa: CDN::symcgieuakksimmu(); goto wyucqqggakoceowc; omkkomymwsowywwa: HTAccess::symcgieuakksimmu(); goto qmwomemuqyaimiso; oummiciwcqkwymss: Setting::symcgieuakksimmu(); goto omkkomymwsowywwa; iuiyqyiwisggcywk: Delay::symcgieuakksimmu(); goto weaqamgsuuwuouks; ywumciccwiakyeus: Cleanup::symcgieuakksimmu(); goto qwsioymycmywyqiw; qwsioymycmywyqiw: Critical::symcgieuakksimmu(); goto qiaayoymqmmemiiy; wyucqqggakoceowc: Media::symcgieuakksimmu(); goto iuiyqyiwisggcywk; weaqamgsuuwuouks: Minify::symcgieuakksimmu(); goto ywumciccwiakyeus; awggeauumiqymcoi: } }
