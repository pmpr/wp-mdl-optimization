<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d7c3928abb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Manipulate\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function guugkagukymokgas(?string $mkomwsiykqigmqca) { $occimwuwscksgwaw = self::cmaecekuqkwmemms("\x4f\120\124\111\x4d\111\132\x41\124\111\x4f\116\137\103\x52\x49\124\x49\103\101\x4c\x5f\120\x41\124\x48"); return untrailingslashit($occimwuwscksgwaw) . $mkomwsiykqigmqca; } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { if ($migiiksoiymissge) { goto euymeegkukskiowq; } if (ManipulateAjax::mcgoysmkqsqooceq()) { goto awimwukcyiceackk; } $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); goto mugeiwyysiemwaym; awimwukcyiceackk: $migiiksoiymissge = ManipulateServer::ayueggmoqeeukqmq("\160\145\162\x6d\x61\x6c\151\x6e\153", null); mugeiwyysiemwaym: euymeegkukskiowq: $ieqwoiuickwucauq = ManipulateFile::usoyisqwsqsegiam($migiiksoiymissge); $mmicssmagyqiooei = trailingslashit(self::guugkagukymokgas($mkomwsiykqigmqca)) . $ieqwoiuickwucauq; return trailingslashit($mmicssmagyqiooei) . "\163\x74\x79\x6c\x65\163\x2e\143\x73\163"; } }