<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0dd9fa068f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Styles; class CSS extends Combiner { const emmwouuqieykokuw = "\x2f\165\x72\154\x5c\163\x2a\x5c\50\x5c\x73\52\x28\x3f\41\x5b\x22\47\135\x3f\144\141\164\141\x3a\x29\50\77\x21\133\47\x7c\134\42\x5d\77\x5b\x5c\x23\x7c\x5c\45\x7c\x5d\x29\x28\133\x5e\x29\x5d\x2b\x29\134\163\x2a\134\51\50\133\x5e\x3b\x7d\x2c\134\163\135\x2a\x29\x2f\151"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\137\160\162\151\x6e\164\137\163\x74\171\x6c\x65\x73", [$this, "\x71\161\143\171\x6b\x61\145\x69\157\151\x77\167\141\x71\157\x73"], 0, 999); parent::wigskegsqequoeks(); } public function qqcykaeioiwwaqos() { global $wp_styles; $this->gaiaksuyqkeeiqgo($wp_styles); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { $ogomymegcoacqisg = $egsumesakcaaukem->src; if (!$ugmuiugkaygmsagq instanceof WP_Styles) { goto agyycikucwgmysee; } $eueuqacmukymcyya = $egsumesakcaaukem->handle; $cksswamugeeeawgw = $egsumesakcaaukem->ver; $awyimywmcyoukaao = ManipulateArray::get($egsumesakcaaukem->extra, "\162\164\x6c"); $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, $eueuqacmukymcyya); if (!("\x72\x74\x6c" === $ugmuiugkaygmsagq->text_direction && $awyimywmcyoukaao)) { goto mqoygcuqwacgycek; } if (is_bool($awyimywmcyoukaao) || "\162\145\160\154\141\x63\x65" === $awyimywmcyoukaao) { goto yaumwqeommqigswq; } $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($awyimywmcyoukaao, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\x2d\x72\x74\154"); goto wiiqigwgyuiuksia; yaumwqeommqigswq: $scqcgogsiaiksiiq = ManipulateArray::get($egsumesakcaaukem->extra, "\x73\165\146\146\x69\170", ''); $ogomymegcoacqisg = str_replace("{$scqcgogsiaiksiiq}\x2e\143\163\x73", "\x2d\x72\164\154{$scqcgogsiaiksiiq}\56\143\x73\163", $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\55\x72\x74\154")); wiiqigwgyuiuksia: mqoygcuqwacgycek: agyycikucwgmysee: return $this->ukacwyckseuqsqgc($ogomymegcoacqisg); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { $ewgwqamkygiqaawc = $this->msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); } public function msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem) { $couygeouymagssgw = untrailingslashit(Manipulate::cmaecekuqkwmemms("\101\102\123\x50\x41\x54\x48")); $cgmkimaosyyuqeyg = site_url(); if (!($couygeouymagssgw && $egsumesakcaaukem instanceof _WP_Dependency)) { goto yyieomeeqycmikqw; } $geagigaoacaqqcwc = $couygeouymagssgw . trailingslashit(dirname(str_replace($cgmkimaosyyuqeyg, '', $egsumesakcaaukem->src))); $ksiyqouuaoymsycg = []; $gwgucoaaqcwwciqq = ManipulateArray::get(ManipulateFormat::gooqqcmsyseiaikc($cgmkimaosyyuqeyg), "\150\x6f\163\x74"); preg_match_all(self::emmwouuqieykokuw, $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto gskacikgkwcuauko; } foreach ($meyiiwcswqmuggyg[1] as $wsiwwymgaoqsyagc) { $eeamcawaiqocomwy = trim($wsiwwymgaoqsyagc, "\40\11\xa\xd\0\xb\x22\47"); $qoqyywgqmicskwsc = realpath("{$geagigaoacaqqcwc}{$eeamcawaiqocomwy}"); if (!$qoqyywgqmicskwsc) { goto ssyukuseoymackeo; } $ksiyqouuaoymsycg[$wsiwwymgaoqsyagc] = "\x2f\x2f" . str_replace($couygeouymagssgw, $gwgucoaaqcwwciqq, $qoqyywgqmicskwsc); ssyukuseoymackeo: mcmkqgkwyqoiikcq: } aiukiwqmikscoswm: gskacikgkwcuauko: $ewgwqamkygiqaawc = $this->qgsuqwiisyaoycya($ewgwqamkygiqaawc, $ksiyqouuaoymsycg); yyieomeeqycmikqw: return $ewgwqamkygiqaawc; } public function qgsuqwiisyaoycya($ewgwqamkygiqaawc, $qqueccegigsqmmmg = []) { if (!$qqueccegigsqmmmg) { goto kwiuqqwamsimqgme; } $yygmoeguaqyumuui = array_map("\x73\164\162\154\x65\156", array_keys($qqueccegigsqmmmg)); array_multisort($yygmoeguaqyumuui, SORT_DESC, $qqueccegigsqmmmg); $ewgwqamkygiqaawc = str_replace(array_keys($qqueccegigsqmmmg), array_values($qqueccegigsqmmmg), $ewgwqamkygiqaawc); kwiuqqwamsimqgme: return $ewgwqamkygiqaawc; } }
