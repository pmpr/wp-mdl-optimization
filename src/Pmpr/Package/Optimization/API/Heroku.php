<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0278673873             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Package\Optimization\Optimization; class Heroku extends Cartridge { public function __construct() { $usmiuwiumyygmucg = DecoratorOption::get(Optimization::HEROKU_APPS, []); if (!$usmiuwiumyygmucg) { goto ugcwqacogqoswyse; } foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!is_string($qcaiykuysiowsimu)) { goto cicegcoqyuoggiwy; } $this->iggeecowsiwyaooe("\x68\164\x74\x70\163\x3a\x2f\x2f{$qcaiykuysiowsimu}\56\x68\x65\162\157\x6b\165\x61\160\160\56\x63\157\155"); cicegcoqyuoggiwy: qsmoiwqcuamyuwyu: } aakoeuuosouyeemc: parent::__construct(); ugcwqacogqoswyse: } }
