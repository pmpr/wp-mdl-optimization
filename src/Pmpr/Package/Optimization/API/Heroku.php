<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c039ca9bf9f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Package\Optimization\Optimization; class Heroku extends Cartridge { public function __construct() { $usmiuwiumyygmucg = DecoratorOption::get(Optimization::HEROKU_APPS, []); if (!$usmiuwiumyygmucg) { goto ugcwqacogqoswyse; } foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!is_string($qcaiykuysiowsimu)) { goto cicegcoqyuoggiwy; } $this->iggeecowsiwyaooe("\x68\x74\x74\160\163\72\57\57{$qcaiykuysiowsimu}\56\x68\145\162\157\153\x75\141\x70\160\x2e\x63\157\x6d"); cicegcoqyuoggiwy: qsmoiwqcuamyuwyu: } aakoeuuosouyeemc: parent::__construct(); ugcwqacogqoswyse: } }
