<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d5223571c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use WP_Post; use WP_Post_Type; class Common extends Container implements CommonInterface { public function okgswumokyoaosow($ccamueccusigaaio) { $yyimiwcuegayoskq = []; $migiiksoiymissge = ''; if ($ccamueccusigaaio instanceof WP_Post) { goto eimouyomcoqkmaae; } if (!$ccamueccusigaaio instanceof WP_Post_Type) { goto gimquiiwucueoqkw; } $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => self::mswmgkkakuooukme, self::qescuiwgsyuikume => sprintf("\x25\x73\x20\x2d\40\45\x73", $ccamueccusigaaio->label, __("\123\160\145\143\151\x61\154\40\120\141\147\145\163", PR__MDL__OPTIMIZATION)), self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::sauwwsocmukoaayu => $migiiksoiymissge, "\x70\141\147\145\x5f\164\171\x70\x65" => sprintf(__("\45\x73\x20\50\101\162\143\150\151\166\x65\51", PR__MDL__OPTIMIZATION), $ccamueccusigaaio->label)]; gimquiiwucueoqkw: goto kkwqmoeeqygoimwg; eimouyomcoqkmaae: $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio), "\x70\x61\x67\145\137\164\x79\160\145" => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio, true)->labels->singular_name, self::qescuiwgsyuikume => ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio), self::mgsccwumkcawaqcy => ManipulatePost::mwikyscisascoeea($ccamueccusigaaio), self::sauwwsocmukoaayu => $migiiksoiymissge]; kkwqmoeeqygoimwg: $meqocwsecsywiiqs = ManipulateArray::get($yyimiwcuegayoskq, self::qescuiwgsyuikume, ''); if (!$meqocwsecsywiiqs) { goto mwqcykaeywsmoumm; } $yyimiwcuegayoskq[self::qescuiwgsyuikume] = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\145\146" => $migiiksoiymissge, "\x74\141\x72\x67\x65\x74" => "\x5f\x62\154\141\156\x6b", "\x73\x74\x79\154\x65" => "\x74\x65\x78\x74\55\144\145\x63\x6f\x72\x61\164\x69\x6f\156\x3a\40\156\157\156\x65\x3b"], $meqocwsecsywiiqs)); mwqcykaeywsmoumm: if (untrailingslashit($migiiksoiymissge)) { goto awgmyaycugswmwae; } $yyimiwcuegayoskq = false; awgmyaycugswmwae: return $yyimiwcuegayoskq; } public function yoeoaweeseqiyesg(&$uamcoiueqaamsqma = '') : bool { $mkecsaoyggsmwmau = API::symcgieuakksimmu()->kwauokaoasomsimk($uamcoiueqaamsqma); $kigowwqauiumummw = false; if (!is_wp_error($mkecsaoyggsmwmau)) { goto iauwkeeaqsgweeoo; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($mkecsaoyggsmwmau); goto aycqgowuwagcgque; iauwkeeaqsgweeoo: if (!($mkecsaoyggsmwmau && isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]))) { goto ywoyioqqyuocoygk; } $kigowwqauiumummw = true; $uamcoiueqaamsqma = __("\x42\165\144\147\x65\x74\x20\x75\x70\144\141\164\145\x64\x20\x73\x75\x63\143\x65\x73\x73\x66\165\x6c\154\171", PR__MDL__OPTIMIZATION); DecoratorOption::update(self::kqgagmgieeucmuik, $mkecsaoyggsmwmau); ywoyioqqyuocoygk: aycqgowuwagcgque: if ($kigowwqauiumummw) { goto icuukwkwqeoogyae; } DecoratorOption::delete(self::kqgagmgieeucmuik); icuukwkwqeoogyae: return $kigowwqauiumummw; } }
