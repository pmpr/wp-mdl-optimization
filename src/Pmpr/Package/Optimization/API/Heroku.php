<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0324e0f3b2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Package\Optimization\Optimization; class Heroku extends Cartridge { public function __construct() { $usmiuwiumyygmucg = DecoratorOption::get(Optimization::HEROKU_APPS, []); if (!$usmiuwiumyygmucg) { goto ugcwqacogqoswyse; } foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!is_string($qcaiykuysiowsimu)) { goto cicegcoqyuoggiwy; } $this->iggeecowsiwyaooe("\150\x74\x74\x70\x73\72\57\57{$qcaiykuysiowsimu}\x2e\x68\x65\x72\157\153\165\141\x70\160\x2e\143\157\x6d"); cicegcoqyuoggiwy: qsmoiwqcuamyuwyu: } aakoeuuosouyeemc: parent::__construct(); ugcwqacogqoswyse: } }
