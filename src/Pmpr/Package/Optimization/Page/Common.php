<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b74f0fae008             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Container; use Pmpr\Package\Optimization\Page\Interfaces\CommonInterface; use WP_Post; use WP_Post_Type; class Common extends Container implements CommonInterface { public function okgswumokyoaosow($ccamueccusigaaio) { goto awqycuuoeeoioskq; sckwuwwueomkksag: ueqmgcsqwciauqes: goto uukskyequmqsieuk; awqycuuoeeoioskq: $yyimiwcuegayoskq = []; goto uoykoouwyqwskyqs; eaqoyysesmoykmqa: $yyimiwcuegayoskq = false; goto ckicaukcwwiukieg; qqcciieyaqwkcasi: if (!$meqocwsecsywiiqs) { goto ueqmgcsqwciauqes; } goto oyskccqkmomukcoi; sgyickkqymqecksi: $yyimiwcuegayoskq = [self::TYPE => self::ARCHIVE, self::TITLE => sprintf("\x25\x73\x20\55\40\x25\x73", $ccamueccusigaaio->label, __("\123\160\x65\x63\x69\x61\x6c\x20\120\141\147\145\x73", PR__PKG__OPTIMIZATION)), self::TARGET => $ccamueccusigaaio->name, self::PERMALINK => $migiiksoiymissge, "\160\x61\147\x65\x5f\x74\171\x70\145" => sprintf(__("\45\x73\x20\x28\x41\162\143\150\151\x76\x65\x29", PR__PKG__OPTIMIZATION), $ccamueccusigaaio->label)]; goto aqiiysigquiqsgeg; umquossmsyaiciag: if ($ccamueccusigaaio instanceof WP_Post) { goto gegweammscwsquwi; } goto ggooeiyqcockogcy; icageksksqqgmqom: $meqocwsecsywiiqs = ManipulateArray::get($yyimiwcuegayoskq, self::TITLE, ''); goto qqcciieyaqwkcasi; ggooeiyqcockogcy: if (!$ccamueccusigaaio instanceof WP_Post_Type) { goto osmmmeymmeueymog; } goto acuusyssiosuysmg; ooeaciyoeskuouqi: return $yyimiwcuegayoskq; goto eqkakgkyqqaewqiu; eickyskkcemimcqy: $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); goto eygwumawcmyaisee; kiqaiwiwmeesaagy: goto mmmcsikmcyocmgiw; goto euosgyacescsiqgc; ikusickyaccgogwg: mmmcsikmcyocmgiw: goto icageksksqqgmqom; uukskyequmqsieuk: if (untrailingslashit($migiiksoiymissge)) { goto wqyygmuggeegmuua; } goto eaqoyysesmoykmqa; uoykoouwyqwskyqs: $migiiksoiymissge = ''; goto umquossmsyaiciag; ckicaukcwwiukieg: wqyygmuggeegmuua: goto ooeaciyoeskuouqi; aqiiysigquiqsgeg: osmmmeymmeueymog: goto kiqaiwiwmeesaagy; acuusyssiosuysmg: $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio); goto sgyickkqymqecksi; oyskccqkmomukcoi: $yyimiwcuegayoskq[self::TITLE] = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\x65\x66" => $migiiksoiymissge, "\164\141\x72\x67\145\x74" => "\x5f\142\154\x61\156\x6b", "\x73\x74\x79\154\145" => "\164\145\x78\x74\55\x64\145\143\157\162\141\164\151\x6f\x6e\x3a\x20\156\157\156\145\73"], $meqocwsecsywiiqs)); goto sckwuwwueomkksag; eygwumawcmyaisee: $yyimiwcuegayoskq = [self::TYPE => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio), "\160\x61\147\145\137\x74\171\x70\x65" => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio, true)->labels->singular_name, self::TITLE => ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio), self::TARGET => ManipulatePost::mwikyscisascoeea($ccamueccusigaaio), self::PERMALINK => $migiiksoiymissge]; goto ikusickyaccgogwg; euosgyacescsiqgc: gegweammscwsquwi: goto eickyskkcemimcqy; eqkakgkyqqaewqiu: } }
