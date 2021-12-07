<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe111519f2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use Pmpr\Package\Optimization\Asset\CDN\CDN; use Pmpr\Package\Optimization\Asset\Cleanup\Cleanup; use Pmpr\Package\Optimization\Asset\Critical\Critical; use Pmpr\Package\Optimization\Asset\Minify\Minify; use Pmpr\Package\Optimization\Asset\Media\Media; class Asset extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { goto iekesyeicomwcuas; wiigoqowismumcsm: if (!is_admin()) { goto jgaoqcmiqagoiuko; } goto mwkcmgksoyycumos; wimggeysyugwwkca: Media::symcgieuakksimmu(); goto oycikycyewimcaew; iekesyeicomwcuas: CDN::symcgieuakksimmu(); goto wimggeysyugwwkca; sqokyowsuawgkusy: Minify::symcgieuakksimmu(); goto iyekgiaayeasoggw; mwkcmgksoyycumos: Setting::symcgieuakksimmu(); goto aikukgimkamkgwsu; aikukgimkamkgwsu: HTAccess::symcgieuakksimmu(); goto ukcukckucsyaggmw; iyekgiaayeasoggw: Cleanup::symcgieuakksimmu(); goto cwsgieeaugwciiwu; cwsgieeaugwciiwu: Critical::symcgieuakksimmu(); goto wiigoqowismumcsm; ukcukckucsyaggmw: jgaoqcmiqagoiuko: goto caskqicqwmyuugku; oycikycyewimcaew: Delay::symcgieuakksimmu(); goto sqokyowsuawgkusy; caskqicqwmyuugku: } }
