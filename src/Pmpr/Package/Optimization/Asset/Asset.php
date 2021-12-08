<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b0d2da8c55b             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use Pmpr\Package\Optimization\Asset\CDN\CDN; use Pmpr\Package\Optimization\Asset\Cleanup\Cleanup; use Pmpr\Package\Optimization\Asset\Critical\Critical; use Pmpr\Package\Optimization\Asset\Minify\Minify; use Pmpr\Package\Optimization\Asset\Media\Media; class Asset extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { goto iekesyeicomwcuas; iyekgiaayeasoggw: Cleanup::symcgieuakksimmu(); goto cwsgieeaugwciiwu; aikukgimkamkgwsu: HTAccess::symcgieuakksimmu(); goto ukcukckucsyaggmw; iekesyeicomwcuas: CDN::symcgieuakksimmu(); goto wimggeysyugwwkca; oycikycyewimcaew: Delay::symcgieuakksimmu(); goto sqokyowsuawgkusy; cwsgieeaugwciiwu: Critical::symcgieuakksimmu(); goto wiigoqowismumcsm; sqokyowsuawgkusy: Minify::symcgieuakksimmu(); goto iyekgiaayeasoggw; ukcukckucsyaggmw: jgaoqcmiqagoiuko: goto caskqicqwmyuugku; wiigoqowismumcsm: if (!is_admin()) { goto jgaoqcmiqagoiuko; } goto mwkcmgksoyycumos; mwkcmgksoyycumos: Setting::symcgieuakksimmu(); goto aikukgimkamkgwsu; wimggeysyugwwkca: Media::symcgieuakksimmu(); goto oycikycyewimcaew; caskqicqwmyuugku: } }
