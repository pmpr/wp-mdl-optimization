<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63b5db635063d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; class ManipulateI18N extends Manipulate { public static function umuecysoywoumgwo() { global $sitepress, $q_config, $polylang; if (!(!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\145\164\x5f\x61\143\x74\151\166\145\137\x6c\141\x6e\147\165\x61\x67\x65\x73"))) { goto awkqcyusycccekwq; } return "\x77\x70\155\154"; awkqcyusycccekwq: if (!(!empty($polylang) && function_exists("\x70\x6c\154\x5f\154\x61\x6e\147\x75\141\x67\145\x73\137\x6c\x69\x73\164"))) { goto kqwyogqqwumumiwg; } $ymkomcgesksuuysk = pll_languages_list(); if (!empty($ymkomcgesksuuysk)) { goto yugmwomumkosucsc; } return false; yugmwomumkosucsc: return "\160\x6f\x6c\171\154\x61\156\147"; kqwyogqqwumumiwg: if (!(!empty($q_config) && is_array($q_config))) { goto gmsyoscesymiwwue; } if (!function_exists("\x71\x74\162\141\156\x78\x66\137\x63\157\156\166\145\x72\x74\x55\x52\x4c")) { goto ykogqmmywykgouqy; } return "\161\164\x72\x61\156\x73\154\141\x74\145\x2d\170"; ykogqmmywykgouqy: if (!function_exists("\161\164\162\x61\x6e\x73\137\x63\x6f\x6e\x76\x65\162\x74\x55\x52\114")) { goto aqksouwmeckaqyaq; } return "\161\x74\162\141\x6e\x73\x6c\x61\164\x65"; aqksouwmeckaqyaq: gmsyoscesymiwwue: return false; } public static function mceoyuqgagciommq() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); $auwuoyyagaiegwae = []; if ("\x77\160\x6d\x6c" === $eokyomeiuimoaiac) { goto rgaagksgsewuwgmo; } if ("\161\164\x72\141\156\163\x6c\x61\x74\x65" === $eokyomeiuimoaiac || "\x71\164\162\x61\x6e\x73\x6c\x61\164\145\x2d\170" === $eokyomeiuimoaiac) { goto mcmcocyuugueaeww; } if ("\x70\157\x6c\171\154\x61\156\147" === $eokyomeiuimoaiac) { goto eucakkcoiiwkwsme; } goto kwayumouacgkgyas; rgaagksgsewuwgmo: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { global $sitepress; $auwuoyyagaiegwae[] = $sitepress->language_url($swaukaagekiououo); ayucsuwsiocgycww: } eiicmcasqikiyasw: goto kwayumouacgkgyas; mcmcocyuugueaeww: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { if ("\161\164\162\141\156\163\x6c\x61\164\x65" === $eokyomeiuimoaiac) { goto swesqeqmagkicuws; } $auwuoyyagaiegwae[] = qtranxf_convertURL(home_url(), $swaukaagekiououo, true); goto cwyaysecsakaqgew; swesqeqmagkicuws: $auwuoyyagaiegwae[] = qtrans_convertURL(home_url(), $swaukaagekiououo, true); cwyaysecsakaqgew: wsqeiwkgoiekwasy: } smmagoyuqoigoesc: goto kwayumouacgkgyas; eucakkcoiiwkwsme: global $polylang; $cycooskwyukkaimm = function_exists("\120\114\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm))) { goto kgqgcggccmiwayua; } $auwuoyyagaiegwae = wp_list_pluck($cycooskwyukkaimm->model->get_languages_list(), "\x73\145\141\162\143\150\137\x75\x72\154"); kgqgcggccmiwayua: kwayumouacgkgyas: if (!empty($auwuoyyagaiegwae)) { goto iwsaaiggkciigsmc; } $auwuoyyagaiegwae[] = ManipulateServer::gmigwwwmwemyaayy(); iwsaaiggkciigsmc: return $auwuoyyagaiegwae; } public static function iciiggecqkuyiyaa() { $mmgwamioewukeoom = []; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$eokyomeiuimoaiac) { goto kuaiscyqkgcouiye; } if (!("\x77\160\x6d\154" === $eokyomeiuimoaiac)) { goto agsuaimomgsoyiem; } global $sitepress; $mmgwamioewukeoom = array_keys($sitepress->get_active_languages()); agsuaimomgsoyiem: if (!("\x71\164\162\141\x6e\x73\x6c\x61\164\145" === $eokyomeiuimoaiac || "\161\x74\162\x61\156\163\x6c\141\164\x65\55\170" === $eokyomeiuimoaiac)) { goto kygccamgawookukq; } global $q_config; $mmgwamioewukeoom = !empty($q_config["\x65\156\x61\142\x6c\145\x64\137\x6c\x61\x6e\147\x75\141\147\145\x73"]) ? $q_config["\x65\x6e\141\142\154\145\x64\137\x6c\141\x6e\147\165\141\147\145\x73"] : []; kygccamgawookukq: if (!("\x70\x6f\154\171\154\x61\x6e\147" === $eokyomeiuimoaiac)) { goto qysmyemoucigsmua; } $mmgwamioewukeoom = pll_languages_list(); qysmyemoucigsmua: kuaiscyqkgcouiye: return $mmgwamioewukeoom; } public static function yeaukamowmkwaowi() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if ($eokyomeiuimoaiac) { goto ooooceiweeackgie; } return []; ooooceiweeackgie: global $q_config; switch ($eokyomeiuimoaiac) { case "\167\160\x6d\x6c": $omkysikckkcieckq = DecoratorOption::get("\x69\143\154\137\163\151\x74\145\160\162\145\163\163\137\x73\x65\164\x74\151\156\x67\x73"); if (!(2 === (int) $omkysikckkcieckq["\154\141\156\147\165\141\147\x65\x5f\156\x65\147\157\164\151\x61\164\x69\157\156\x5f\x74\x79\160\x65"])) { goto tagquiiokseckkqs; } return self::mceoyuqgagciommq(); tagquiiokseckkqs: goto gkeymcqqsewayscs; case "\161\x74\162\x61\x6e\x73\154\141\x74\145": if (!(3 === (int) $q_config["\x75\x72\154\137\155\x6f\x64\145"])) { goto qoacckkkwsqkokye; } return self::mceoyuqgagciommq(); qoacckkkwsqkokye: goto gkeymcqqsewayscs; case "\161\164\x72\141\156\x73\x6c\141\x74\145\x2d\x78": if (!(3 === (int) $q_config["\165\162\154\137\x6d\157\x64\x65"] || 4 === (int) $q_config["\x75\x72\154\137\155\x6f\144\145"])) { goto swuggqyiaiqywgge; } return self::mceoyuqgagciommq(); swuggqyiaiqywgge: goto gkeymcqqsewayscs; case "\x70\x6f\154\x79\x6c\141\x6e\147": global $polylang; $cycooskwyukkaimm = function_exists("\x50\x4c\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm) && (2 === (int) $cycooskwyukkaimm->options["\x66\x6f\162\x63\x65\x5f\154\141\156\147"] || 3 === (int) $cycooskwyukkaimm->options["\146\157\x72\x63\145\137\x6c\141\156\x67"]))) { goto ocwouquuwsaqakae; } return self::mceoyuqgagciommq(); ocwouquuwsaqakae: } qwiyicoywcekgyce: gkeymcqqsewayscs: return []; } public static function emqmaiomewcmuacu($post = null) { $swaukaagekiououo = false; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$post) { goto kmseiouukkqiumum; } if ("\167\160\155\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\x6f\x6f\x63\x6f\155\x6d\x65\x72\x63\x65\x2d\155\x75\154\164\x69\154\x69\156\x67\x75\x61\x6c\x2f\x77\160\155\154\55\x77\157\157\x63\157\155\x6d\x65\162\143\x65\x2e\x70\x68\160")) { goto yccuomocgmewkeca; } if ("\160\x6f\154\171\x6c\141\156\x67" === $eokyomeiuimoaiac && function_exists("\160\154\154\x5f\147\145\x74\x5f\160\x6f\x73\164\137\x6c\x61\156\x67\165\141\147\x65")) { goto suiywiakesiegcwu; } goto gcaykgmmmqomsyis; yccuomocgmewkeca: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($post, "\160\x6f\x73\164\137" . ManipulatePost::gueasuouwqysmomu($post)); goto gcaykgmmmqomsyis; suiywiakesiegcwu: $swaukaagekiououo = pll_get_post_language($post); gcaykgmmmqomsyis: kmseiouukkqiumum: return $swaukaagekiououo; } public static function auksikwsewaywikq($mkomwsiykqigmqca = '') { global $wpml_url_filters; static $uogwqioiiwqsyksu = []; static $sckcicueiusskgie; if (isset($uogwqioiiwqsyksu[$mkomwsiykqigmqca])) { goto ycueoqkeakismiqw; } if (isset($sckcicueiusskgie)) { goto syuywgysqyckcqay; } $sckcicueiusskgie = $wpml_url_filters && is_object($wpml_url_filters) && method_exists($wpml_url_filters, "\x68\x6f\x6d\x65\x5f\x75\x72\154\137\x66\151\x6c\164\x65\162"); syuywgysqyckcqay: if (!$sckcicueiusskgie) { goto ggewkaiwwgkmkwgc; } DecoratorHook::ggmgmqswqkgecosg("\x68\157\155\145\137\165\x72\154", [$wpml_url_filters, "\150\157\x6d\145\137\x75\x72\x6c\x5f\x66\x69\154\x74\x65\x72"], -10); ggewkaiwwgkmkwgc: $uogwqioiiwqsyksu[$mkomwsiykqigmqca] = ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca); if (!$sckcicueiusskgie) { goto kkieqqwwascekcmo; } DecoratorHook::cecaguuoecmccuse("\x68\157\155\145\137\165\x72\x6c", [$wpml_url_filters, "\150\x6f\x6d\145\x5f\x75\162\154\137\x66\151\154\164\145\162"], -10, 4); kkieqqwwascekcmo: ycueoqkeakismiqw: return $uogwqioiiwqsyksu[$mkomwsiykqigmqca]; } public static function csacaukgwwayassy($swaukaagekiououo = '') { $mkysicwccoeicumg = self::umuecysoywoumgwo(); $eeamcawaiqocomwy = home_url(); if (!$mkysicwccoeicumg) { goto cquikgykuscqmigw; } switch ($mkysicwccoeicumg) { case "\x77\160\155\x6c": $eeamcawaiqocomwy = $GLOBALS["\163\151\x74\145\160\x72\x65\163\x73"]->language_url($swaukaagekiououo); goto awimwukcyiceackk; case "\x71\164\162\x61\x6e\163\x6c\x61\x74\x65": $eeamcawaiqocomwy = qtrans_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto awimwukcyiceackk; case "\x71\x74\x72\x61\x6e\163\x6c\141\x74\x65\55\170": $eeamcawaiqocomwy = qtranxf_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto awimwukcyiceackk; case "\160\157\x6c\171\x6c\141\156\x67": global $polylang; $cycooskwyukkaimm = function_exists("\120\114\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm->options["\x66\157\162\x63\145\x5f\154\141\x6e\147"]) && isset($cycooskwyukkaimm->links))) { goto euymeegkukskiowq; } $eeamcawaiqocomwy = pll_home_url($swaukaagekiououo); euymeegkukskiowq: } mugeiwyysiemwaym: awimwukcyiceackk: cquikgykuscqmigw: return $eeamcawaiqocomwy; } public static function augqukusksqwwuus($aakkemqaqeckisew = '', $skacuygeqykiwiwy = '') { $msyoeiaqaaseqiaw = []; if (!($aakkemqaqeckisew && is_string($aakkemqaqeckisew))) { goto ewoqyogcaksucksk; } $mkysicwccoeicumg = self::umuecysoywoumgwo(); if (!$mkysicwccoeicumg) { goto auaywaskqooasiuq; } $ymkomcgesksuuysk = self::iciiggecqkuyiyaa(); if (!$ymkomcgesksuuysk) { goto ouaoyqugwsagkqaa; } $ymkomcgesksuuysk = array_diff($ymkomcgesksuuysk, [$aakkemqaqeckisew]); if (!('' === $skacuygeqykiwiwy)) { goto cyymeyomuakqakwo; } $skacuygeqykiwiwy = self::cmaecekuqkwmemms("\x4f\x50\x54\x49\x4d\x49\x5a\101\x54\x49\x4f\116\137\103\101\x43\110\105\x5f\x50\x41\124\x48"); cyymeyomuakqakwo: $mwgaccygeckyuamg = []; foreach ($ymkomcgesksuuysk as $swaukaagekiououo) { $parse_url = ManipulateFormat::gooqqcmsyseiaikc(self::csacaukgwwayassy($swaukaagekiououo)); $mwgaccygeckyuamg[] = ManipulateFile::cgwcgscqeqauaagi("{$skacuygeqykiwiwy}{$parse_url["\x68\x6f\x73\x74"]}\x28\56\52\51\x2f" . untrailingslashit($parse_url["\x70\x61\164\150"]), true); gkwoqoeaecgkymeu: } uwscegkmmumymoaq: return (array) DecoratorHook::sscegwueamckwmcy("\x63\141\x63\150\145\x5f\154\141\156\x67\163\137\164\157\x5f\160\x72\145\163\145\x72\x76\145", $mwgaccygeckyuamg); ouaoyqugwsagkqaa: auaywaskqooasiuq: ewoqyogcaksucksk: return $msyoeiaqaaseqiaw; } }
