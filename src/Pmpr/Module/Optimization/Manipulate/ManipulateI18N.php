<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65311c76e01aa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; class ManipulateI18N extends Manipulate { public static function umuecysoywoumgwo() { global $sitepress, $q_config, $polylang; if (!(!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\x65\x74\x5f\141\x63\164\151\x76\x65\x5f\154\141\156\x67\165\x61\x67\x65\163"))) { goto wcsysckgigeykkwy; } return "\x77\160\155\x6c"; wcsysckgigeykkwy: if (!(!empty($polylang) && function_exists("\160\x6c\x6c\x5f\154\x61\156\x67\165\x61\147\145\x73\x5f\154\x69\x73\164"))) { goto ceusyscosamyaiws; } $ymkomcgesksuuysk = pll_languages_list(); if (!empty($ymkomcgesksuuysk)) { goto scgmwokeuqwiekkk; } return false; scgmwokeuqwiekkk: return "\160\157\x6c\x79\154\141\156\147"; ceusyscosamyaiws: if (!(!empty($q_config) && is_array($q_config))) { goto acsigwcaesyyoiie; } if (!function_exists("\x71\x74\x72\x61\156\x78\x66\137\143\157\x6e\x76\145\162\164\125\122\x4c")) { goto gysmmooawoeggaow; } return "\x71\x74\162\141\x6e\163\154\141\164\x65\x2d\x78"; gysmmooawoeggaow: if (!function_exists("\161\164\162\x61\x6e\x73\137\143\157\x6e\166\145\162\164\x55\x52\114")) { goto iyikuwuweqigiuey; } return "\x71\164\162\141\156\x73\x6c\141\164\x65"; iyikuwuweqigiuey: acsigwcaesyyoiie: return false; } public static function mceoyuqgagciommq() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); $auwuoyyagaiegwae = []; if ("\x77\160\155\154" === $eokyomeiuimoaiac) { goto yeiokcoikcysyimu; } if ("\x71\x74\x72\141\156\163\x6c\x61\164\x65" === $eokyomeiuimoaiac || "\161\x74\162\x61\x6e\x73\154\x61\164\145\x2d\x78" === $eokyomeiuimoaiac) { goto kkmwwqyesmkescyg; } if ("\x70\157\x6c\171\x6c\141\x6e\147" === $eokyomeiuimoaiac) { goto uamuuwkyuqomqyuy; } goto uqcwyyiykmwygeau; yeiokcoikcysyimu: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { global $sitepress; $auwuoyyagaiegwae[] = $sitepress->language_url($swaukaagekiououo); wycmcqaauqkgegau: } aqaaqeucgoegeeuk: goto uqcwyyiykmwygeau; kkmwwqyesmkescyg: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { if ("\161\164\162\x61\x6e\x73\x6c\x61\x74\145" === $eokyomeiuimoaiac) { goto wcekgciqeggiiwgk; } $auwuoyyagaiegwae[] = qtranxf_convertURL(home_url(), $swaukaagekiououo, true); goto gkwuewqmqeswqukg; wcekgciqeggiiwgk: $auwuoyyagaiegwae[] = qtrans_convertURL(home_url(), $swaukaagekiououo, true); gkwuewqmqeswqukg: iyceygqsmokgmams: } qcweoyigoaeacsow: goto uqcwyyiykmwygeau; uamuuwkyuqomqyuy: global $polylang; $cycooskwyukkaimm = function_exists("\120\114\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm))) { goto sagemooicmgceiug; } $auwuoyyagaiegwae = wp_list_pluck($cycooskwyukkaimm->model->get_languages_list(), "\x73\145\x61\x72\x63\150\137\x75\x72\x6c"); sagemooicmgceiug: uqcwyyiykmwygeau: if (!empty($auwuoyyagaiegwae)) { goto ekwuycsiuqwycqea; } $auwuoyyagaiegwae[] = ManipulateServer::gmigwwwmwemyaayy(); ekwuycsiuqwycqea: return $auwuoyyagaiegwae; } public static function iciiggecqkuyiyaa() { $mmgwamioewukeoom = []; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$eokyomeiuimoaiac) { goto eoeiaccouaymakgm; } if (!("\167\x70\155\154" === $eokyomeiuimoaiac)) { goto iyaugygcsmqqqkmo; } global $sitepress; $mmgwamioewukeoom = array_keys($sitepress->get_active_languages()); iyaugygcsmqqqkmo: if (!("\161\x74\x72\x61\156\x73\154\141\164\145" === $eokyomeiuimoaiac || "\x71\164\162\x61\x6e\x73\154\x61\164\145\55\x78" === $eokyomeiuimoaiac)) { goto cieumoqayigkoocy; } global $q_config; $mmgwamioewukeoom = !empty($q_config["\x65\156\x61\x62\154\145\x64\137\154\141\156\147\165\x61\x67\145\x73"]) ? $q_config["\x65\156\141\142\154\x65\144\x5f\x6c\x61\x6e\147\165\141\x67\145\x73"] : []; cieumoqayigkoocy: if (!("\x70\x6f\154\x79\154\141\156\x67" === $eokyomeiuimoaiac)) { goto yggciikgkomgeqsc; } $mmgwamioewukeoom = pll_languages_list(); yggciikgkomgeqsc: eoeiaccouaymakgm: return $mmgwamioewukeoom; } public static function yeaukamowmkwaowi() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if ($eokyomeiuimoaiac) { goto owaimkmgemoqewmm; } return []; owaimkmgemoqewmm: global $q_config; switch ($eokyomeiuimoaiac) { case "\167\x70\155\x6c": $omkysikckkcieckq = DecoratorOption::get("\151\x63\154\137\163\x69\164\145\x70\x72\145\163\x73\x5f\163\145\164\x74\151\156\147\x73"); if (!(2 === (int) $omkysikckkcieckq["\154\x61\156\147\x75\141\x67\145\137\156\145\x67\x6f\x74\151\x61\164\x69\x6f\156\137\x74\x79\160\x65"])) { goto koiiaewwicsckseu; } return self::mceoyuqgagciommq(); koiiaewwicsckseu: goto ysoqeuugiuswykyu; case "\x71\164\162\x61\x6e\x73\x6c\141\x74\x65": if (!(3 === (int) $q_config["\165\x72\154\137\155\157\x64\x65"])) { goto umcyeiusoakewyaa; } return self::mceoyuqgagciommq(); umcyeiusoakewyaa: goto ysoqeuugiuswykyu; case "\x71\x74\x72\141\156\x73\x6c\141\164\145\x2d\x78": if (!(3 === (int) $q_config["\165\162\154\x5f\x6d\157\144\145"] || 4 === (int) $q_config["\165\x72\154\137\x6d\157\144\x65"])) { goto ksawwekgswywwuwm; } return self::mceoyuqgagciommq(); ksawwekgswywwuwm: goto ysoqeuugiuswykyu; case "\x70\x6f\154\x79\x6c\141\156\147": global $polylang; $cycooskwyukkaimm = function_exists("\120\114\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm) && (2 === (int) $cycooskwyukkaimm->options["\x66\x6f\162\x63\x65\137\x6c\x61\156\x67"] || 3 === (int) $cycooskwyukkaimm->options["\x66\x6f\x72\x63\145\137\x6c\141\156\147"]))) { goto yuqisiwgqacgmsym; } return self::mceoyuqgagciommq(); yuqisiwgqacgmsym: } usmuqsuwuueogimc: ysoqeuugiuswykyu: return []; } public static function emqmaiomewcmuacu($post = null) { $swaukaagekiououo = false; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$post) { goto qmoisuweiskkekca; } if ("\167\x70\155\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\157\x6f\143\x6f\155\x6d\145\162\x63\x65\55\x6d\165\154\164\151\154\x69\x6e\x67\165\x61\154\x2f\x77\x70\155\x6c\55\x77\x6f\x6f\x63\x6f\x6d\155\x65\162\143\x65\x2e\x70\x68\x70")) { goto wmwgeoequuwwwywa; } if ("\160\157\x6c\171\x6c\x61\156\x67" === $eokyomeiuimoaiac && function_exists("\160\x6c\x6c\x5f\147\145\164\137\160\x6f\x73\164\x5f\x6c\141\156\147\x75\x61\x67\x65")) { goto uqugcugeomqakcqo; } goto wickgagwgqqsomum; wmwgeoequuwwwywa: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($post, "\x70\157\x73\164\x5f" . ManipulatePost::gueasuouwqysmomu($post)); goto wickgagwgqqsomum; uqugcugeomqakcqo: $swaukaagekiououo = pll_get_post_language($post); wickgagwgqqsomum: qmoisuweiskkekca: return $swaukaagekiououo; } public static function auksikwsewaywikq($mkomwsiykqigmqca = '') { global $wpml_url_filters; static $uogwqioiiwqsyksu = []; static $sckcicueiusskgie; if (isset($uogwqioiiwqsyksu[$mkomwsiykqigmqca])) { goto ocmwuquguuqigose; } if (isset($sckcicueiusskgie)) { goto wywwieycqskuqcwc; } $sckcicueiusskgie = $wpml_url_filters && is_object($wpml_url_filters) && method_exists($wpml_url_filters, "\150\157\155\x65\137\x75\x72\154\137\x66\x69\x6c\164\x65\162"); wywwieycqskuqcwc: if (!$sckcicueiusskgie) { goto gwyseusuceuwwccu; } DecoratorHook::ggmgmqswqkgecosg("\150\x6f\155\x65\137\x75\x72\x6c", [$wpml_url_filters, "\150\x6f\155\145\x5f\x75\162\154\x5f\146\x69\154\x74\145\162"], -10); gwyseusuceuwwccu: $uogwqioiiwqsyksu[$mkomwsiykqigmqca] = ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca); if (!$sckcicueiusskgie) { goto icouowaoycuuisqe; } DecoratorHook::cecaguuoecmccuse("\150\x6f\x6d\x65\137\165\x72\154", [$wpml_url_filters, "\150\x6f\155\x65\137\x75\x72\x6c\x5f\146\151\154\164\x65\162"], -10, 4); icouowaoycuuisqe: ocmwuquguuqigose: return $uogwqioiiwqsyksu[$mkomwsiykqigmqca]; } public static function csacaukgwwayassy($swaukaagekiououo = '') { $mkysicwccoeicumg = self::umuecysoywoumgwo(); $eeamcawaiqocomwy = home_url(); if (!$mkysicwccoeicumg) { goto iqwsqykoueqyyomy; } switch ($mkysicwccoeicumg) { case "\167\x70\x6d\154": $eeamcawaiqocomwy = $GLOBALS["\x73\151\164\x65\x70\162\x65\x73\163"]->language_url($swaukaagekiououo); goto kmqusaiaiogecyiy; case "\x71\x74\x72\x61\x6e\163\154\141\x74\145": $eeamcawaiqocomwy = qtrans_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto kmqusaiaiogecyiy; case "\161\x74\162\x61\156\x73\154\x61\x74\x65\x2d\170": $eeamcawaiqocomwy = qtranxf_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto kmqusaiaiogecyiy; case "\160\157\x6c\171\x6c\141\156\x67": global $polylang; $cycooskwyukkaimm = function_exists("\120\x4c\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm->options["\x66\x6f\x72\143\x65\x5f\x6c\x61\156\x67"]) && isset($cycooskwyukkaimm->links))) { goto coogyackikgmecic; } $eeamcawaiqocomwy = pll_home_url($swaukaagekiououo); coogyackikgmecic: } swckikycciugciqq: kmqusaiaiogecyiy: iqwsqykoueqyyomy: return $eeamcawaiqocomwy; } public static function augqukusksqwwuus($aakkemqaqeckisew = '', $skacuygeqykiwiwy = '') { $msyoeiaqaaseqiaw = []; if (!($aakkemqaqeckisew && is_string($aakkemqaqeckisew))) { goto aakoeuuosouyeemc; } $mkysicwccoeicumg = self::umuecysoywoumgwo(); if (!$mkysicwccoeicumg) { goto wmcmqmmcweecqmsw; } $ymkomcgesksuuysk = self::iciiggecqkuyiyaa(); if (!$ymkomcgesksuuysk) { goto yoaewquyogiimyic; } $ymkomcgesksuuysk = array_diff($ymkomcgesksuuysk, [$aakkemqaqeckisew]); if (!('' === $skacuygeqykiwiwy)) { goto ggaucuaykyuiikem; } $skacuygeqykiwiwy = self::cmaecekuqkwmemms("\x50\x52\137\117\x50\x54\x5f\x43\101\103\110\105\137\120\101\x54\x48"); ggaucuaykyuiikem: $mwgaccygeckyuamg = []; foreach ($ymkomcgesksuuysk as $swaukaagekiououo) { $parse_url = ManipulateFormat::gooqqcmsyseiaikc(self::csacaukgwwayassy($swaukaagekiououo)); $mwgaccygeckyuamg[] = ManipulateFile::cgwcgscqeqauaagi("{$skacuygeqykiwiwy}{$parse_url["\150\157\x73\x74"]}\x28\x2e\52\51\x2f" . untrailingslashit($parse_url["\x70\141\164\x68"]), true); caaygouikgagsssc: } egikqoaqqegawugu: return (array) DecoratorHook::sscegwueamckwmcy("\143\x61\x63\x68\145\x5f\154\141\x6e\147\x73\x5f\164\157\x5f\160\162\x65\x73\145\x72\166\x65", $mwgaccygeckyuamg); yoaewquyogiimyic: wmcmqmmcweecqmsw: aakoeuuosouyeemc: return $msyoeiaqaaseqiaw; } }
