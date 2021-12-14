<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b8710debefd             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Package\Optimization\Optimization; class Heroku extends Cartridge { public function __construct() { $usmiuwiumyygmucg = DecoratorOption::get(Optimization::HEROKU_APPS, []); if (!$usmiuwiumyygmucg) { goto egikqoaqqegawugu; } foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!is_string($qcaiykuysiowsimu)) { goto ggaucuaykyuiikem; } $this->iggeecowsiwyaooe("\150\164\x74\160\163\x3a\57\57{$qcaiykuysiowsimu}\56\x68\x65\162\x6f\153\165\x61\x70\160\x2e\143\157\155"); ggaucuaykyuiikem: iqwsqykoueqyyomy: } coogyackikgmecic: parent::__construct(); egikqoaqqegawugu: } }
