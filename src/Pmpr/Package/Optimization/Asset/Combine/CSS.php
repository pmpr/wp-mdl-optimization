<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6fa77e922c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Manipulate\Manipulate; use WP_Styles; class CSS extends Combiner { const emmwouuqieykokuw = "\57\165\x72\154\134\x73\x2a\x5c\50\134\163\52\50\77\41\x5b\x22\47\x5d\x3f\x64\141\x74\x61\x3a\51\x28\x3f\x21\x5b\47\174\x5c\42\135\77\133\x5c\x23\x7c\x5c\x25\174\135\x29\x28\133\x5e\51\135\x2b\51\134\163\52\134\51\50\133\136\x3b\175\x2c\x5c\163\x5d\x2a\x29\57\151"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\137\160\162\151\156\164\x5f\163\x74\171\x6c\x65\x73", [$this, "\161\x71\x63\171\x6b\x61\x65\151\x6f\151\x77\x77\x61\161\157\163"], 0, 999); parent::wigskegsqequoeks(); } public function qqcykaeioiwwaqos() { global $wp_styles; $this->gaiaksuyqkeeiqgo($wp_styles); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { $ogomymegcoacqisg = $egsumesakcaaukem->src; if (!$ugmuiugkaygmsagq instanceof WP_Styles) { goto gwksywaoeowkesei; } $eueuqacmukymcyya = $egsumesakcaaukem->handle; $cksswamugeeeawgw = $egsumesakcaaukem->ver; $awyimywmcyoukaao = ManipulateArray::get($egsumesakcaaukem->extra, "\x72\164\x6c"); $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, $eueuqacmukymcyya); if (!("\162\x74\154" === $ugmuiugkaygmsagq->text_direction && $awyimywmcyoukaao)) { goto amgsicqmemeuuaem; } if (is_bool($awyimywmcyoukaao) || "\x72\145\x70\x6c\141\x63\145" === $awyimywmcyoukaao) { goto bagkewioewygysea; } $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($awyimywmcyoukaao, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\x2d\162\x74\154"); goto mgieeyuyuoeccaog; bagkewioewygysea: $scqcgogsiaiksiiq = ManipulateArray::get($egsumesakcaaukem->extra, "\x73\165\146\146\x69\x78", ''); $ogomymegcoacqisg = str_replace("{$scqcgogsiaiksiiq}\x2e\x63\x73\163", "\x2d\x72\x74\154{$scqcgogsiaiksiiq}\56\x63\163\x73", $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\55\x72\164\154")); mgieeyuyuoeccaog: amgsicqmemeuuaem: gwksywaoeowkesei: return $this->ukacwyckseuqsqgc($ogomymegcoacqisg); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { $ewgwqamkygiqaawc = $this->msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); } public function msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem) { $couygeouymagssgw = untrailingslashit(Manipulate::cmaecekuqkwmemms("\101\102\x53\x50\x41\124\110")); $cgmkimaosyyuqeyg = site_url(); if (!($couygeouymagssgw && $egsumesakcaaukem instanceof _WP_Dependency)) { goto uugwoygiyecgymgw; } $geagigaoacaqqcwc = $couygeouymagssgw . trailingslashit(dirname(str_replace($cgmkimaosyyuqeyg, '', $egsumesakcaaukem->src))); $ksiyqouuaoymsycg = []; $gwgucoaaqcwwciqq = ManipulateArray::get(ManipulateFormat::gooqqcmsyseiaikc($cgmkimaosyyuqeyg), "\150\157\163\x74"); preg_match_all(self::emmwouuqieykokuw, $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto gusgywuaimwooawc; } foreach ($meyiiwcswqmuggyg[1] as $wsiwwymgaoqsyagc) { $eeamcawaiqocomwy = trim($wsiwwymgaoqsyagc, "\40\x9\xa\15\0\13\42\47"); $qoqyywgqmicskwsc = realpath("{$geagigaoacaqqcwc}{$eeamcawaiqocomwy}"); if (!$qoqyywgqmicskwsc) { goto cauqmacqkssciwyq; } $ksiyqouuaoymsycg[$wsiwwymgaoqsyagc] = "\57\x2f" . str_replace($couygeouymagssgw, $gwgucoaaqcwwciqq, $qoqyywgqmicskwsc); cauqmacqkssciwyq: emagssesowicacoa: } sgkwaiuukkaqyqki: gusgywuaimwooawc: $ewgwqamkygiqaawc = $this->qgsuqwiisyaoycya($ewgwqamkygiqaawc, $ksiyqouuaoymsycg); uugwoygiyecgymgw: return $ewgwqamkygiqaawc; } public function qgsuqwiisyaoycya($ewgwqamkygiqaawc, $qqueccegigsqmmmg = []) { if (!$qqueccegigsqmmmg) { goto acmgueaoaaweiqqu; } $yygmoeguaqyumuui = array_map("\x73\x74\x72\154\145\156", array_keys($qqueccegigsqmmmg)); array_multisort($yygmoeguaqyumuui, SORT_DESC, $qqueccegigsqmmmg); $ewgwqamkygiqaawc = str_replace(array_keys($qqueccegigsqmmmg), array_values($qqueccegigsqmmmg), $ewgwqamkygiqaawc); acmgueaoaaweiqqu: return $ewgwqamkygiqaawc; } }
