<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d7c3928abb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use WP_Post; use WP_Post_Type; class Common extends Container implements CommonInterface { public function okgswumokyoaosow($ccamueccusigaaio) { $yyimiwcuegayoskq = []; $migiiksoiymissge = ''; if ($ccamueccusigaaio instanceof WP_Post) { goto eqsuaywswuesuika; } if (!$ccamueccusigaaio instanceof WP_Post_Type) { goto wasuquysysmqyegg; } $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => self::mswmgkkakuooukme, self::qescuiwgsyuikume => sprintf("\x25\x73\x20\x2d\x20\x25\163", $ccamueccusigaaio->label, __("\x53\160\x65\143\151\x61\x6c\40\120\141\147\x65\163", PR__MDL__OPTIMIZATION)), self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::sauwwsocmukoaayu => $migiiksoiymissge, "\x70\x61\147\145\137\164\171\160\x65" => sprintf(__("\x25\x73\40\50\101\162\x63\x68\151\166\145\x29", PR__MDL__OPTIMIZATION), $ccamueccusigaaio->label)]; wasuquysysmqyegg: goto okawiaowosqickgq; eqsuaywswuesuika: $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio), "\x70\x61\147\145\137\x74\171\160\145" => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio, true)->labels->singular_name, self::qescuiwgsyuikume => ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio), self::mgsccwumkcawaqcy => ManipulatePost::mwikyscisascoeea($ccamueccusigaaio), self::sauwwsocmukoaayu => $migiiksoiymissge]; okawiaowosqickgq: $meqocwsecsywiiqs = ManipulateArray::get($yyimiwcuegayoskq, self::qescuiwgsyuikume, ''); if (!$meqocwsecsywiiqs) { goto ogciikaecauiwgyk; } $yyimiwcuegayoskq[self::qescuiwgsyuikume] = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\x65\x66" => $migiiksoiymissge, "\x74\x61\162\x67\x65\164" => "\x5f\x62\154\141\156\153", "\163\164\171\154\x65" => "\164\145\170\164\55\144\145\x63\157\162\x61\164\x69\157\x6e\72\x20\x6e\157\156\x65\73"], $meqocwsecsywiiqs)); ogciikaecauiwgyk: if (untrailingslashit($migiiksoiymissge)) { goto meiqywmwuoogckss; } $yyimiwcuegayoskq = false; meiqywmwuoogckss: return $yyimiwcuegayoskq; } public function yoeoaweeseqiyesg(&$uamcoiueqaamsqma = '') : bool { $mkecsaoyggsmwmau = API::symcgieuakksimmu()->kwauokaoasomsimk($uamcoiueqaamsqma); $kigowwqauiumummw = false; if (!is_wp_error($mkecsaoyggsmwmau)) { goto eomcuogskessyicy; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($mkecsaoyggsmwmau); goto isaacywgkascmcsw; eomcuogskessyicy: if (!($mkecsaoyggsmwmau && isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]))) { goto oyeygeykqwcqoeic; } $kigowwqauiumummw = true; $uamcoiueqaamsqma = __("\x42\165\x64\147\145\x74\x20\x75\x70\x64\141\164\x65\x64\x20\163\165\x63\x63\145\163\163\146\x75\154\x6c\171", PR__MDL__OPTIMIZATION); DecoratorOption::update(self::kqgagmgieeucmuik, $mkecsaoyggsmwmau); oyeygeykqwcqoeic: isaacywgkascmcsw: if ($kigowwqauiumummw) { goto quiguyyimiqeqcwa; } DecoratorOption::delete(self::kqgagmgieeucmuik); quiguyyimiqeqcwa: return $kigowwqauiumummw; } }