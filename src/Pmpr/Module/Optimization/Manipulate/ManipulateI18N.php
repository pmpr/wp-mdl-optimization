<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c270985b578             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; class ManipulateI18N extends Manipulate { public static function umuecysoywoumgwo() { global $sitepress, $q_config, $polylang; if (!(!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\x65\164\137\141\x63\164\x69\x76\145\x5f\154\141\x6e\x67\165\x61\147\x65\163"))) { goto mieoguuqiwqioeqa; } return "\x77\x70\x6d\x6c"; mieoguuqiwqioeqa: if (!(!empty($polylang) && function_exists("\160\x6c\154\137\x6c\141\156\147\x75\x61\x67\145\x73\137\x6c\x69\x73\164"))) { goto swicauyqusmgeccu; } $ymkomcgesksuuysk = pll_languages_list(); if (!empty($ymkomcgesksuuysk)) { goto qosswumywsaeyqus; } return false; qosswumywsaeyqus: return "\160\157\x6c\x79\154\x61\x6e\x67"; swicauyqusmgeccu: if (!(!empty($q_config) && is_array($q_config))) { goto kocaieyauyiqmyiy; } if (!function_exists("\161\x74\x72\141\x6e\170\x66\137\143\x6f\x6e\x76\x65\162\164\x55\x52\x4c")) { goto maguoggkqamaiuag; } return "\161\x74\x72\141\x6e\163\154\x61\x74\x65\x2d\x78"; maguoggkqamaiuag: if (!function_exists("\x71\164\x72\x61\x6e\163\137\143\x6f\156\x76\x65\162\x74\125\122\114")) { goto icoiqskygugkgmkm; } return "\161\164\x72\x61\156\163\154\x61\x74\145"; icoiqskygugkgmkm: kocaieyauyiqmyiy: return false; } public static function mceoyuqgagciommq() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); $auwuoyyagaiegwae = []; if ("\x77\160\x6d\x6c" === $eokyomeiuimoaiac) { goto gqaqamewqeaqwcia; } if ("\161\x74\162\x61\x6e\163\154\141\164\145" === $eokyomeiuimoaiac || "\161\164\162\x61\x6e\163\154\141\x74\x65\55\x78" === $eokyomeiuimoaiac) { goto okuqsqaiwwiigmyu; } if ("\x70\x6f\154\171\x6c\x61\x6e\x67" === $eokyomeiuimoaiac) { goto ksiwgckusukisueg; } goto gaskcgoeywuyukke; gqaqamewqeaqwcia: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { global $sitepress; $auwuoyyagaiegwae[] = $sitepress->language_url($swaukaagekiououo); eekkcooqswqouoei: } gcqssckowmywoesw: goto gaskcgoeywuyukke; okuqsqaiwwiigmyu: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { if ("\x71\x74\x72\141\x6e\x73\x6c\141\164\x65" === $eokyomeiuimoaiac) { goto iomwkkieqcswkkaw; } $auwuoyyagaiegwae[] = qtranxf_convertURL(home_url(), $swaukaagekiououo, true); goto eussqkkimciywios; iomwkkieqcswkkaw: $auwuoyyagaiegwae[] = qtrans_convertURL(home_url(), $swaukaagekiououo, true); eussqkkimciywios: igmawmwssyskqqag: } cuayqmasemsqsume: goto gaskcgoeywuyukke; ksiwgckusukisueg: global $polylang; $cycooskwyukkaimm = function_exists("\120\x4c\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm))) { goto ewsigoeswimiueqe; } $auwuoyyagaiegwae = wp_list_pluck($cycooskwyukkaimm->model->get_languages_list(), "\163\145\141\162\x63\x68\x5f\165\x72\x6c"); ewsigoeswimiueqe: gaskcgoeywuyukke: if (!empty($auwuoyyagaiegwae)) { goto sgkqgucguyccaaki; } $auwuoyyagaiegwae[] = ManipulateServer::gmigwwwmwemyaayy(); sgkqgucguyccaaki: return $auwuoyyagaiegwae; } public static function iciiggecqkuyiyaa() { $mmgwamioewukeoom = []; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$eokyomeiuimoaiac) { goto qmqmskywcgiqgygm; } if (!("\167\160\155\154" === $eokyomeiuimoaiac)) { goto omuemegmkesqgwys; } global $sitepress; $mmgwamioewukeoom = array_keys($sitepress->get_active_languages()); omuemegmkesqgwys: if (!("\x71\164\162\x61\x6e\x73\154\x61\x74\145" === $eokyomeiuimoaiac || "\161\x74\162\x61\156\x73\x6c\141\x74\145\55\170" === $eokyomeiuimoaiac)) { goto geyiosucqswaeasw; } global $q_config; $mmgwamioewukeoom = !empty($q_config["\x65\156\x61\x62\154\x65\144\137\154\141\x6e\x67\x75\141\147\x65\x73"]) ? $q_config["\x65\x6e\x61\142\x6c\x65\144\x5f\x6c\141\x6e\147\165\141\147\145\163"] : []; geyiosucqswaeasw: if (!("\x70\x6f\x6c\x79\x6c\141\x6e\147" === $eokyomeiuimoaiac)) { goto cmsiuimsiycomyay; } $mmgwamioewukeoom = pll_languages_list(); cmsiuimsiycomyay: qmqmskywcgiqgygm: return $mmgwamioewukeoom; } public static function yeaukamowmkwaowi() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if ($eokyomeiuimoaiac) { goto ccgsycueagwegqeu; } return []; ccgsycueagwegqeu: global $q_config; switch ($eokyomeiuimoaiac) { case "\x77\160\155\154": $omkysikckkcieckq = DecoratorOption::get("\151\x63\154\137\x73\151\x74\x65\x70\x72\x65\x73\163\x5f\163\x65\164\x74\x69\156\147\x73"); if (!(2 === (int) $omkysikckkcieckq["\x6c\141\x6e\147\165\141\x67\x65\x5f\156\145\x67\157\x74\x69\141\x74\151\157\156\137\x74\171\x70\145"])) { goto qmguoqeawegcoeoa; } return self::mceoyuqgagciommq(); qmguoqeawegcoeoa: goto gmeiuoeewucukque; case "\x71\x74\x72\x61\156\x73\154\x61\164\145": if (!(3 === (int) $q_config["\x75\x72\x6c\x5f\155\157\x64\x65"])) { goto ycecaauekkiqacuu; } return self::mceoyuqgagciommq(); ycecaauekkiqacuu: goto gmeiuoeewucukque; case "\161\164\162\141\156\x73\154\x61\x74\x65\55\x78": if (!(3 === (int) $q_config["\x75\x72\154\x5f\x6d\x6f\144\145"] || 4 === (int) $q_config["\165\x72\154\137\155\157\x64\x65"])) { goto ceaamccscgcmqgka; } return self::mceoyuqgagciommq(); ceaamccscgcmqgka: goto gmeiuoeewucukque; case "\x70\157\x6c\171\154\141\156\x67": global $polylang; $cycooskwyukkaimm = function_exists("\x50\x4c\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm) && (2 === (int) $cycooskwyukkaimm->options["\x66\x6f\x72\x63\x65\x5f\154\141\x6e\147"] || 3 === (int) $cycooskwyukkaimm->options["\x66\157\x72\143\145\137\154\x61\x6e\x67"]))) { goto omumkeywqqogwwue; } return self::mceoyuqgagciommq(); omumkeywqqogwwue: } sayqggaieocmskko: gmeiuoeewucukque: return []; } public static function emqmaiomewcmuacu($post = null) { $swaukaagekiououo = false; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$post) { goto ymucaguacemwsgsi; } if ("\x77\160\x6d\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\x6f\x6f\x63\157\x6d\x6d\x65\x72\x63\x65\x2d\x6d\x75\x6c\x74\151\154\x69\156\147\165\141\154\x2f\167\160\x6d\154\55\x77\x6f\x6f\x63\x6f\155\155\x65\162\x63\x65\56\x70\150\x70")) { goto wiaymoucakyaikii; } if ("\x70\x6f\154\x79\x6c\x61\x6e\x67" === $eokyomeiuimoaiac && function_exists("\x70\154\x6c\x5f\x67\x65\x74\x5f\x70\x6f\x73\164\x5f\x6c\141\x6e\147\x75\141\x67\145")) { goto ociesuicgmkekcue; } goto igyesgemqesackws; wiaymoucakyaikii: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($post, "\x70\x6f\x73\x74\x5f" . ManipulatePost::gueasuouwqysmomu($post)); goto igyesgemqesackws; ociesuicgmkekcue: $swaukaagekiououo = pll_get_post_language($post); igyesgemqesackws: ymucaguacemwsgsi: return $swaukaagekiououo; } public static function auksikwsewaywikq($mkomwsiykqigmqca = '') { global $wpml_url_filters; static $uogwqioiiwqsyksu = []; static $sckcicueiusskgie; if (isset($uogwqioiiwqsyksu[$mkomwsiykqigmqca])) { goto oqgymyiwckkwueuw; } if (isset($sckcicueiusskgie)) { goto qiikwossequwiuom; } $sckcicueiusskgie = $wpml_url_filters && is_object($wpml_url_filters) && method_exists($wpml_url_filters, "\150\x6f\x6d\145\x5f\165\x72\x6c\137\x66\151\x6c\164\x65\162"); qiikwossequwiuom: if (!$sckcicueiusskgie) { goto gaouaiemokqqgssw; } DecoratorHook::ggmgmqswqkgecosg("\150\157\155\145\x5f\x75\162\154", [$wpml_url_filters, "\x68\157\x6d\x65\137\x75\162\154\x5f\146\151\x6c\164\x65\162"], -10); gaouaiemokqqgssw: $uogwqioiiwqsyksu[$mkomwsiykqigmqca] = ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca); if (!$sckcicueiusskgie) { goto wqwmuuicoqigqwyc; } DecoratorHook::cecaguuoecmccuse("\x68\x6f\x6d\x65\137\x75\x72\154", [$wpml_url_filters, "\150\157\x6d\145\x5f\x75\162\x6c\x5f\146\151\154\164\x65\x72"], -10, 4); wqwmuuicoqigqwyc: oqgymyiwckkwueuw: return $uogwqioiiwqsyksu[$mkomwsiykqigmqca]; } public static function csacaukgwwayassy($swaukaagekiououo = '') { $mkysicwccoeicumg = self::umuecysoywoumgwo(); $eeamcawaiqocomwy = home_url(); if (!$mkysicwccoeicumg) { goto uoewiggumomegksg; } switch ($mkysicwccoeicumg) { case "\167\160\155\154": $eeamcawaiqocomwy = $GLOBALS["\x73\x69\x74\145\160\x72\x65\x73\x73"]->language_url($swaukaagekiououo); goto qywkykqkeeuccoui; case "\x71\x74\x72\141\156\163\x6c\141\164\145": $eeamcawaiqocomwy = qtrans_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto qywkykqkeeuccoui; case "\161\164\x72\x61\x6e\x73\154\141\x74\145\x2d\x78": $eeamcawaiqocomwy = qtranxf_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto qywkykqkeeuccoui; case "\x70\x6f\x6c\x79\154\x61\156\147": global $polylang; $cycooskwyukkaimm = function_exists("\120\x4c\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm->options["\x66\157\162\x63\145\x5f\x6c\x61\156\x67"]) && isset($cycooskwyukkaimm->links))) { goto ywokggauuiosegog; } $eeamcawaiqocomwy = pll_home_url($swaukaagekiououo); ywokggauuiosegog: } yqqseqskcqeqkacm: qywkykqkeeuccoui: uoewiggumomegksg: return $eeamcawaiqocomwy; } public static function augqukusksqwwuus($aakkemqaqeckisew = '', $skacuygeqykiwiwy = '') { $msyoeiaqaaseqiaw = []; if (!($aakkemqaqeckisew && is_string($aakkemqaqeckisew))) { goto kiskwawumeiiieuk; } $mkysicwccoeicumg = self::umuecysoywoumgwo(); if (!$mkysicwccoeicumg) { goto kwasqmcyiswoaiuu; } $ymkomcgesksuuysk = self::iciiggecqkuyiyaa(); if (!$ymkomcgesksuuysk) { goto asoecuscmsyusmkg; } $ymkomcgesksuuysk = array_diff($ymkomcgesksuuysk, [$aakkemqaqeckisew]); if (!('' === $skacuygeqykiwiwy)) { goto sockocsycmkaeosg; } $skacuygeqykiwiwy = self::cmaecekuqkwmemms("\117\120\x54\x49\115\111\x5a\x41\124\111\117\116\137\103\101\103\x48\x45\137\120\x41\124\110"); sockocsycmkaeosg: $mwgaccygeckyuamg = []; foreach ($ymkomcgesksuuysk as $swaukaagekiououo) { $parse_url = ManipulateFormat::gooqqcmsyseiaikc(self::csacaukgwwayassy($swaukaagekiououo)); $mwgaccygeckyuamg[] = ManipulateFile::cgwcgscqeqauaagi("{$skacuygeqykiwiwy}{$parse_url["\x68\x6f\x73\x74"]}\x28\56\52\x29\57" . untrailingslashit($parse_url["\160\141\x74\150"]), true); syisomgawcsqeemk: } ugkwqaywmwqucoeo: return (array) DecoratorHook::sscegwueamckwmcy("\x63\x61\143\150\145\x5f\154\x61\156\x67\x73\x5f\164\x6f\137\160\162\x65\x73\145\162\166\145", $mwgaccygeckyuamg); asoecuscmsyusmkg: kwasqmcyiswoaiuu: kiskwawumeiiieuk: return $msyoeiaqaaseqiaw; } }
