<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ab9829e21a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use Pmpr\Package\Optimization\Asset\CDN\CDN; use Pmpr\Package\Optimization\Asset\Cleanup\Cleanup; use Pmpr\Package\Optimization\Asset\Critical\Critical; use Pmpr\Package\Optimization\Asset\Minify\Minify; use Pmpr\Package\Optimization\Asset\Media\Media; class Asset extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { goto gcgckeksyymcgays; ogmueiimgsogucqa: if (!is_admin()) { goto kmgoiquwmsayywsc; } goto kyoogyegwukaqoce; maougsuwuoiecwgy: kmgoiquwmsayywsc: goto pseqauyuqgmccuwe; eocaacmwsqqqauuc: HTAccess::symcgieuakksimmu(); goto maougsuwuoiecwgy; emsqksecccqeueoa: Critical::symcgieuakksimmu(); goto ogmueiimgsogucqa; eqmcakqmqkqkweww: Delay::symcgieuakksimmu(); goto iwcsismeakueeiya; iwcsismeakueeiya: Minify::symcgieuakksimmu(); goto gkmgqmcgouseqwyg; gkmgqmcgouseqwyg: Cleanup::symcgieuakksimmu(); goto emsqksecccqeueoa; gcgckeksyymcgays: Media::symcgieuakksimmu(); goto eqmcakqmqkqkweww; kyoogyegwukaqoce: Setting::symcgieuakksimmu(); goto eocaacmwsqqqauuc; pseqauyuqgmccuwe: } }
