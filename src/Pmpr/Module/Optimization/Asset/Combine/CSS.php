<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631d90d5edea8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Styles; class CSS extends Combiner { const emmwouuqieykokuw = "\x2f\165\x72\154\134\x73\52\134\x28\x5c\163\x2a\50\x3f\41\x5b\42\x27\x5d\x3f\x64\141\x74\141\x3a\x29\50\77\41\x5b\47\x7c\134\42\x5d\77\x5b\134\43\174\134\x25\174\x5d\51\x28\x5b\136\x29\x5d\53\x29\134\163\x2a\134\x29\50\133\x5e\x3b\x7d\54\134\x73\135\52\x29\57\x69"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70\137\160\162\x69\x6e\164\137\163\164\x79\x6c\x65\163", [$this, "\x71\161\143\171\153\x61\x65\x69\x6f\x69\167\167\x61\x71\157\163"], 0, 999); parent::wigskegsqequoeks(); } public function qqcykaeioiwwaqos() { global $wp_styles; $this->gaiaksuyqkeeiqgo($wp_styles); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { $ogomymegcoacqisg = $egsumesakcaaukem->src; if (!$ugmuiugkaygmsagq instanceof WP_Styles) { goto amgsueumgaguceaa; } $eueuqacmukymcyya = $egsumesakcaaukem->handle; $cksswamugeeeawgw = $egsumesakcaaukem->ver; $awyimywmcyoukaao = ManipulateArray::get($egsumesakcaaukem->extra, "\x72\164\154"); $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, $eueuqacmukymcyya); if (!("\162\x74\154" === $ugmuiugkaygmsagq->text_direction && $awyimywmcyoukaao)) { goto mwysseaekcsiesmm; } if (is_bool($awyimywmcyoukaao) || "\x72\x65\x70\154\x61\143\145" === $awyimywmcyoukaao) { goto iiiccouaaqsyikae; } $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($awyimywmcyoukaao, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\x2d\x72\164\x6c"); goto ukkcmocamwgiqayu; iiiccouaaqsyikae: $scqcgogsiaiksiiq = ManipulateArray::get($egsumesakcaaukem->extra, "\163\x75\x66\146\151\x78", ''); $ogomymegcoacqisg = str_replace("{$scqcgogsiaiksiiq}\x2e\143\x73\x73", "\55\x72\x74\154{$scqcgogsiaiksiiq}\56\x63\163\x73", $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\55\162\164\x6c")); ukkcmocamwgiqayu: mwysseaekcsiesmm: amgsueumgaguceaa: return $this->ukacwyckseuqsqgc($ogomymegcoacqisg); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { $ewgwqamkygiqaawc = $this->msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); } public function msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem) { $couygeouymagssgw = untrailingslashit(Manipulate::cmaecekuqkwmemms("\101\x42\123\x50\x41\124\110")); $cgmkimaosyyuqeyg = site_url(); if (!($couygeouymagssgw && $egsumesakcaaukem instanceof _WP_Dependency)) { goto ucqmumuygcywwqma; } $geagigaoacaqqcwc = $couygeouymagssgw . trailingslashit(dirname(str_replace($cgmkimaosyyuqeyg, '', $egsumesakcaaukem->src))); $ksiyqouuaoymsycg = []; $gwgucoaaqcwwciqq = ManipulateArray::get(ManipulateFormat::gooqqcmsyseiaikc($cgmkimaosyyuqeyg), "\x68\x6f\163\x74"); preg_match_all(self::emmwouuqieykokuw, $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto ukqocwewouckikso; } foreach ($meyiiwcswqmuggyg[1] as $wsiwwymgaoqsyagc) { $eeamcawaiqocomwy = trim($wsiwwymgaoqsyagc, "\40\x9\xa\15\x0\xb\x22\47"); $qoqyywgqmicskwsc = realpath("{$geagigaoacaqqcwc}{$eeamcawaiqocomwy}"); if (!$qoqyywgqmicskwsc) { goto gommacygsykyussk; } $ksiyqouuaoymsycg[$wsiwwymgaoqsyagc] = "\57\57" . str_replace($couygeouymagssgw, $gwgucoaaqcwwciqq, $qoqyywgqmicskwsc); gommacygsykyussk: uougwgeyiokewkkm: } gygwewcqsmwqismo: ukqocwewouckikso: $ewgwqamkygiqaawc = $this->qgsuqwiisyaoycya($ewgwqamkygiqaawc, $ksiyqouuaoymsycg); ucqmumuygcywwqma: return $ewgwqamkygiqaawc; } public function qgsuqwiisyaoycya($ewgwqamkygiqaawc, $qqueccegigsqmmmg = []) { if (!$qqueccegigsqmmmg) { goto uykousayyomcaeaa; } $yygmoeguaqyumuui = array_map("\163\x74\x72\154\x65\x6e", array_keys($qqueccegigsqmmmg)); array_multisort($yygmoeguaqyumuui, SORT_DESC, $qqueccegigsqmmmg); $ewgwqamkygiqaawc = str_replace(array_keys($qqueccegigsqmmmg), array_values($qqueccegigsqmmmg), $ewgwqamkygiqaawc); uykousayyomcaeaa: return $ewgwqamkygiqaawc; } }
