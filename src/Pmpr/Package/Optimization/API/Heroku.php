<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066895a7f9             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Package\Optimization\Optimization; class Heroku extends Cartridge { public function __construct() { $usmiuwiumyygmucg = DecoratorOption::get(Optimization::HEROKU_APPS, []); if (!$usmiuwiumyygmucg) { goto ugcwqacogqoswyse; } foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!is_string($qcaiykuysiowsimu)) { goto cicegcoqyuoggiwy; } $this->iggeecowsiwyaooe("\x68\x74\x74\x70\x73\72\57\57{$qcaiykuysiowsimu}\56\x68\145\162\157\153\165\x61\x70\x70\56\x63\157\155"); cicegcoqyuoggiwy: qsmoiwqcuamyuwyu: } aakoeuuosouyeemc: parent::__construct(); ugcwqacogqoswyse: } }
