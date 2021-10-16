<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ae7005588d             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use Pmpr\Package\Optimization\Asset\CDN\CDN; use Pmpr\Package\Optimization\Asset\Cleanup\Cleanup; use Pmpr\Package\Optimization\Asset\Critical\Critical; use Pmpr\Package\Optimization\Asset\Minify\Minify; use Pmpr\Package\Optimization\Asset\Media\Media; class Asset extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { goto gcgckeksyymcgays; maougsuwuoiecwgy: kmgoiquwmsayywsc: goto pseqauyuqgmccuwe; gcgckeksyymcgays: Media::symcgieuakksimmu(); goto eqmcakqmqkqkweww; eocaacmwsqqqauuc: HTAccess::symcgieuakksimmu(); goto maougsuwuoiecwgy; emsqksecccqeueoa: Critical::symcgieuakksimmu(); goto ogmueiimgsogucqa; eqmcakqmqkqkweww: Delay::symcgieuakksimmu(); goto iwcsismeakueeiya; gkmgqmcgouseqwyg: Cleanup::symcgieuakksimmu(); goto emsqksecccqeueoa; ogmueiimgsogucqa: if (!is_admin()) { goto kmgoiquwmsayywsc; } goto kyoogyegwukaqoce; kyoogyegwukaqoce: Setting::symcgieuakksimmu(); goto eocaacmwsqqqauuc; iwcsismeakueeiya: Minify::symcgieuakksimmu(); goto gkmgqmcgouseqwyg; pseqauyuqgmccuwe: } }
