<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b865b46dbbe             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Package\Optimization\Optimization; class Heroku extends Cartridge { public function __construct() { $usmiuwiumyygmucg = DecoratorOption::get(Optimization::HEROKU_APPS, []); if (!$usmiuwiumyygmucg) { goto ggaucuaykyuiikem; } foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!is_string($qcaiykuysiowsimu)) { goto iqwsqykoueqyyomy; } $this->iggeecowsiwyaooe("\x68\x74\164\x70\x73\72\x2f\57{$qcaiykuysiowsimu}\56\x68\145\x72\157\153\165\141\x70\160\56\143\x6f\x6d"); iqwsqykoueqyyomy: coogyackikgmecic: } swckikycciugciqq: parent::__construct(); ggaucuaykyuiikem: } }
