<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629e44ab568a6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; class ManipulateI18N extends Manipulate { public static function umuecysoywoumgwo() { global $sitepress, $q_config, $polylang; if (!(!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\x65\164\x5f\x61\143\x74\151\166\145\137\154\x61\x6e\x67\x75\141\147\x65\163"))) { goto kqkymieyyqaoeymw; } return "\x77\x70\155\154"; kqkymieyyqaoeymw: if (!(!empty($polylang) && function_exists("\160\154\x6c\x5f\x6c\x61\156\147\x75\x61\147\x65\163\137\x6c\151\x73\164"))) { goto sykuuisikqcwuaqu; } $ymkomcgesksuuysk = pll_languages_list(); if (!empty($ymkomcgesksuuysk)) { goto gqyyccceswkqcmaa; } return false; gqyyccceswkqcmaa: return "\x70\x6f\154\171\x6c\141\x6e\147"; sykuuisikqcwuaqu: if (!(!empty($q_config) && is_array($q_config))) { goto bagkewioewygysea; } if (!function_exists("\161\164\x72\141\x6e\170\x66\137\x63\157\x6e\166\x65\x72\x74\125\122\114")) { goto mquyemuqcqeassqc; } return "\x71\x74\x72\x61\x6e\163\154\141\164\145\55\170"; mquyemuqcqeassqc: if (!function_exists("\x71\x74\x72\x61\156\163\x5f\x63\157\x6e\166\145\x72\x74\125\x52\114")) { goto weiaigyyigkusucy; } return "\x71\164\x72\x61\x6e\x73\154\x61\x74\x65"; weiaigyyigkusucy: bagkewioewygysea: return false; } public static function mceoyuqgagciommq() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); $auwuoyyagaiegwae = []; if ("\167\x70\x6d\x6c" === $eokyomeiuimoaiac) { goto acmgueaoaaweiqqu; } if ("\161\164\x72\141\156\163\x6c\141\x74\145" === $eokyomeiuimoaiac || "\161\164\x72\x61\156\x73\154\x61\164\x65\55\x78" === $eokyomeiuimoaiac) { goto awaaowoqskgokwiy; } if ("\x70\157\154\x79\154\x61\x6e\x67" === $eokyomeiuimoaiac) { goto uqiekawkwcegsumy; } goto uugwoygiyecgymgw; acmgueaoaaweiqqu: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { global $sitepress; $auwuoyyagaiegwae[] = $sitepress->language_url($swaukaagekiououo); amgsicqmemeuuaem: } mgieeyuyuoeccaog: goto uugwoygiyecgymgw; awaaowoqskgokwiy: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { if ("\x71\164\162\141\x6e\163\154\x61\164\x65" === $eokyomeiuimoaiac) { goto emagssesowicacoa; } $auwuoyyagaiegwae[] = qtranxf_convertURL(home_url(), $swaukaagekiououo, true); goto cauqmacqkssciwyq; emagssesowicacoa: $auwuoyyagaiegwae[] = qtrans_convertURL(home_url(), $swaukaagekiououo, true); cauqmacqkssciwyq: sgkwaiuukkaqyqki: } gwksywaoeowkesei: goto uugwoygiyecgymgw; uqiekawkwcegsumy: global $polylang; $cycooskwyukkaimm = function_exists("\x50\x4c\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm))) { goto gusgywuaimwooawc; } $auwuoyyagaiegwae = wp_list_pluck($cycooskwyukkaimm->model->get_languages_list(), "\163\x65\141\162\143\150\x5f\165\x72\154"); gusgywuaimwooawc: uugwoygiyecgymgw: if (!empty($auwuoyyagaiegwae)) { goto kgikoagqwkuocesg; } $auwuoyyagaiegwae[] = ManipulateServer::gmigwwwmwemyaayy(); kgikoagqwkuocesg: return $auwuoyyagaiegwae; } public static function iciiggecqkuyiyaa() { $mmgwamioewukeoom = []; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$eokyomeiuimoaiac) { goto aayysiegiyweiyuu; } if (!("\167\160\155\x6c" === $eokyomeiuimoaiac)) { goto skaayekywasksoug; } global $sitepress; $mmgwamioewukeoom = array_keys($sitepress->get_active_languages()); skaayekywasksoug: if (!("\x71\164\162\141\156\x73\154\141\x74\145" === $eokyomeiuimoaiac || "\161\164\162\x61\x6e\163\154\x61\x74\145\x2d\170" === $eokyomeiuimoaiac)) { goto gkoyqgogsukuowqi; } global $q_config; $mmgwamioewukeoom = !empty($q_config["\145\156\x61\x62\x6c\x65\x64\137\x6c\x61\156\147\165\141\x67\x65\163"]) ? $q_config["\145\x6e\x61\142\154\x65\x64\x5f\154\141\x6e\x67\x75\141\147\145\x73"] : []; gkoyqgogsukuowqi: if (!("\x70\x6f\154\171\154\141\x6e\147" === $eokyomeiuimoaiac)) { goto sgikkoswwyesqomo; } $mmgwamioewukeoom = pll_languages_list(); sgikkoswwyesqomo: aayysiegiyweiyuu: return $mmgwamioewukeoom; } public static function yeaukamowmkwaowi() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if ($eokyomeiuimoaiac) { goto cksoeiwawiygyiyg; } return []; cksoeiwawiygyiyg: global $q_config; switch ($eokyomeiuimoaiac) { case "\167\x70\155\x6c": $omkysikckkcieckq = DecoratorOption::get("\x69\143\x6c\137\x73\151\x74\145\160\162\145\x73\x73\x5f\x73\x65\164\x74\x69\156\x67\163"); if (!(2 === (int) $omkysikckkcieckq["\x6c\x61\156\x67\165\x61\x67\x65\x5f\156\145\147\157\164\151\x61\x74\x69\157\x6e\137\164\171\x70\x65"])) { goto ueqsiwuwumoqgsck; } return self::mceoyuqgagciommq(); ueqsiwuwumoqgsck: goto cyqokqcacysioeyc; case "\161\x74\162\141\156\163\x6c\141\x74\145": if (!(3 === (int) $q_config["\x75\162\154\x5f\155\157\144\x65"])) { goto iikgiaocummweiga; } return self::mceoyuqgagciommq(); iikgiaocummweiga: goto cyqokqcacysioeyc; case "\161\164\162\x61\156\x73\x6c\x61\x74\145\x2d\x78": if (!(3 === (int) $q_config["\x75\x72\x6c\x5f\x6d\x6f\144\x65"] || 4 === (int) $q_config["\x75\162\154\x5f\155\157\144\x65"])) { goto gsusqquicmukegcs; } return self::mceoyuqgagciommq(); gsusqquicmukegcs: goto cyqokqcacysioeyc; case "\160\x6f\x6c\x79\x6c\x61\x6e\x67": global $polylang; $cycooskwyukkaimm = function_exists("\120\114\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm) && (2 === (int) $cycooskwyukkaimm->options["\146\x6f\x72\143\145\x5f\154\141\x6e\x67"] || 3 === (int) $cycooskwyukkaimm->options["\x66\x6f\162\143\145\137\154\141\x6e\x67"]))) { goto wcsysckgigeykkwy; } return self::mceoyuqgagciommq(); wcsysckgigeykkwy: } akwwuuiykscgicuw: cyqokqcacysioeyc: return []; } public static function emqmaiomewcmuacu($post = null) { $swaukaagekiououo = false; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$post) { goto iyikuwuweqigiuey; } if ("\x77\160\x6d\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\157\x6f\x63\x6f\155\155\x65\162\x63\x65\x2d\155\x75\x6c\164\151\154\x69\x6e\x67\165\x61\x6c\57\167\160\x6d\154\55\167\x6f\x6f\143\157\x6d\x6d\145\162\x63\145\56\x70\x68\x70")) { goto ceusyscosamyaiws; } if ("\x70\157\154\x79\154\141\156\x67" === $eokyomeiuimoaiac && function_exists("\160\x6c\154\137\x67\145\164\x5f\x70\157\x73\x74\x5f\x6c\141\x6e\147\x75\x61\147\145")) { goto gysmmooawoeggaow; } goto scgmwokeuqwiekkk; ceusyscosamyaiws: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($post, "\x70\x6f\163\x74\137" . ManipulatePost::gueasuouwqysmomu($post)); goto scgmwokeuqwiekkk; gysmmooawoeggaow: $swaukaagekiououo = pll_get_post_language($post); scgmwokeuqwiekkk: iyikuwuweqigiuey: return $swaukaagekiououo; } public static function auksikwsewaywikq($mkomwsiykqigmqca = '') { global $wpml_url_filters; static $uogwqioiiwqsyksu = []; static $sckcicueiusskgie; if (isset($uogwqioiiwqsyksu[$mkomwsiykqigmqca])) { goto qcweoyigoaeacsow; } if (isset($sckcicueiusskgie)) { goto acsigwcaesyyoiie; } $sckcicueiusskgie = $wpml_url_filters && is_object($wpml_url_filters) && method_exists($wpml_url_filters, "\x68\157\155\x65\137\x75\162\154\x5f\x66\151\154\164\145\162"); acsigwcaesyyoiie: if (!$sckcicueiusskgie) { goto aqaaqeucgoegeeuk; } DecoratorHook::ggmgmqswqkgecosg("\x68\x6f\155\x65\x5f\x75\x72\154", [$wpml_url_filters, "\x68\157\155\x65\137\165\x72\x6c\x5f\x66\x69\154\x74\145\162"], -10); aqaaqeucgoegeeuk: $uogwqioiiwqsyksu[$mkomwsiykqigmqca] = ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca); if (!$sckcicueiusskgie) { goto wycmcqaauqkgegau; } DecoratorHook::cecaguuoecmccuse("\150\x6f\155\145\x5f\165\162\154", [$wpml_url_filters, "\x68\x6f\x6d\x65\137\x75\162\x6c\x5f\146\x69\154\164\x65\x72"], -10, 4); wycmcqaauqkgegau: qcweoyigoaeacsow: return $uogwqioiiwqsyksu[$mkomwsiykqigmqca]; } public static function csacaukgwwayassy($swaukaagekiououo = '') { $mkysicwccoeicumg = self::umuecysoywoumgwo(); $eeamcawaiqocomwy = home_url(); if (!$mkysicwccoeicumg) { goto sagemooicmgceiug; } switch ($mkysicwccoeicumg) { case "\167\x70\155\154": $eeamcawaiqocomwy = $GLOBALS["\163\151\x74\145\160\162\x65\x73\163"]->language_url($swaukaagekiououo); goto iyceygqsmokgmams; case "\x71\164\162\141\156\163\154\141\164\x65": $eeamcawaiqocomwy = qtrans_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto iyceygqsmokgmams; case "\161\x74\162\x61\x6e\x73\x6c\x61\x74\x65\55\x78": $eeamcawaiqocomwy = qtranxf_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto iyceygqsmokgmams; case "\160\157\x6c\171\x6c\141\156\x67": global $polylang; $cycooskwyukkaimm = function_exists("\x50\114\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm->options["\x66\157\x72\x63\x65\137\154\x61\x6e\147"]) && isset($cycooskwyukkaimm->links))) { goto gkwuewqmqeswqukg; } $eeamcawaiqocomwy = pll_home_url($swaukaagekiououo); gkwuewqmqeswqukg: } wcekgciqeggiiwgk: iyceygqsmokgmams: sagemooicmgceiug: return $eeamcawaiqocomwy; } public static function augqukusksqwwuus($aakkemqaqeckisew = '', $skacuygeqykiwiwy = '') { $msyoeiaqaaseqiaw = []; if (!($aakkemqaqeckisew && is_string($aakkemqaqeckisew))) { goto iyaugygcsmqqqkmo; } $mkysicwccoeicumg = self::umuecysoywoumgwo(); if (!$mkysicwccoeicumg) { goto ekwuycsiuqwycqea; } $ymkomcgesksuuysk = self::iciiggecqkuyiyaa(); if (!$ymkomcgesksuuysk) { goto uamuuwkyuqomqyuy; } $ymkomcgesksuuysk = array_diff($ymkomcgesksuuysk, [$aakkemqaqeckisew]); if (!('' === $skacuygeqykiwiwy)) { goto uqcwyyiykmwygeau; } $skacuygeqykiwiwy = self::cmaecekuqkwmemms("\x4f\120\124\x49\115\111\132\101\x54\111\x4f\x4e\137\103\101\x43\110\105\137\120\101\124\x48"); uqcwyyiykmwygeau: $mwgaccygeckyuamg = []; foreach ($ymkomcgesksuuysk as $swaukaagekiououo) { $parse_url = ManipulateFormat::gooqqcmsyseiaikc(self::csacaukgwwayassy($swaukaagekiououo)); $mwgaccygeckyuamg[] = ManipulateFile::cgwcgscqeqauaagi("{$skacuygeqykiwiwy}{$parse_url["\x68\x6f\x73\164"]}\50\56\52\51\x2f" . untrailingslashit($parse_url["\x70\141\x74\x68"]), true); kkmwwqyesmkescyg: } yeiokcoikcysyimu: return (array) DecoratorHook::sscegwueamckwmcy("\143\x61\x63\x68\x65\137\154\x61\x6e\x67\x73\x5f\164\x6f\x5f\x70\x72\x65\x73\145\x72\x76\x65", $mwgaccygeckyuamg); uamuuwkyuqomqyuy: ekwuycsiuqwycqea: iyaugygcsmqqqkmo: return $msyoeiaqaaseqiaw; } }
