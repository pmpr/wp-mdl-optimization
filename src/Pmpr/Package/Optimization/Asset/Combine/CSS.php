<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6236574ee781a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Manipulate\Manipulate; use WP_Styles; class CSS extends Combiner { const emmwouuqieykokuw = "\57\165\162\154\134\x73\x2a\134\x28\x5c\x73\x2a\50\77\41\133\x22\x27\x5d\x3f\x64\141\x74\x61\72\x29\50\77\x21\x5b\x27\x7c\134\x22\135\77\x5b\x5c\x23\x7c\x5c\x25\174\x5d\x29\x28\x5b\x5e\x29\x5d\x2b\x29\x5c\163\52\x5c\51\50\x5b\x5e\x3b\x7d\x2c\x5c\x73\135\x2a\x29\57\x69"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\x5f\160\162\x69\156\164\137\x73\x74\171\154\x65\x73", [$this, "\x71\161\x63\x79\153\141\x65\151\x6f\151\167\167\x61\x71\x6f\x73"], 0, 999); parent::wigskegsqequoeks(); } public function qqcykaeioiwwaqos() { global $wp_styles; $this->gaiaksuyqkeeiqgo($wp_styles); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { $ogomymegcoacqisg = $egsumesakcaaukem->src; if (!$ugmuiugkaygmsagq instanceof WP_Styles) { goto qkcsykuocwuyaice; } $eueuqacmukymcyya = $egsumesakcaaukem->handle; $cksswamugeeeawgw = $egsumesakcaaukem->ver; $awyimywmcyoukaao = ManipulateArray::get($egsumesakcaaukem->extra, "\x72\x74\x6c"); $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, $eueuqacmukymcyya); if (!("\162\164\x6c" === $ugmuiugkaygmsagq->text_direction && $awyimywmcyoukaao)) { goto oocuemosmeeekgas; } if (is_bool($awyimywmcyoukaao) || "\x72\145\x70\154\x61\143\x65" === $awyimywmcyoukaao) { goto agkmiayuawacakau; } $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($awyimywmcyoukaao, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\55\162\x74\x6c"); goto syuaummumssgwwee; agkmiayuawacakau: $scqcgogsiaiksiiq = ManipulateArray::get($egsumesakcaaukem->extra, "\163\165\146\146\151\x78", ''); $ogomymegcoacqisg = str_replace("{$scqcgogsiaiksiiq}\56\143\163\163", "\x2d\x72\x74\154{$scqcgogsiaiksiiq}\56\x63\163\163", $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\55\x72\164\154")); syuaummumssgwwee: oocuemosmeeekgas: qkcsykuocwuyaice: return $this->ukacwyckseuqsqgc($ogomymegcoacqisg); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { $ewgwqamkygiqaawc = $this->msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); } public function msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem) { $couygeouymagssgw = untrailingslashit(Manipulate::cmaecekuqkwmemms("\101\x42\123\x50\x41\124\x48")); $cgmkimaosyyuqeyg = site_url(); if (!($couygeouymagssgw && $egsumesakcaaukem instanceof _WP_Dependency)) { goto osuscoaaomwcqkew; } $geagigaoacaqqcwc = $couygeouymagssgw . trailingslashit(dirname(str_replace($cgmkimaosyyuqeyg, '', $egsumesakcaaukem->src))); $ksiyqouuaoymsycg = []; $gwgucoaaqcwwciqq = ManipulateArray::get(ManipulateFormat::gooqqcmsyseiaikc($cgmkimaosyyuqeyg), "\x68\157\163\164"); preg_match_all(self::emmwouuqieykokuw, $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto aoquoewagkseayug; } foreach ($meyiiwcswqmuggyg[1] as $wsiwwymgaoqsyagc) { $eeamcawaiqocomwy = trim($wsiwwymgaoqsyagc, "\40\x9\12\xd\x0\13\42\x27"); $qoqyywgqmicskwsc = realpath("{$geagigaoacaqqcwc}{$eeamcawaiqocomwy}"); if (!$qoqyywgqmicskwsc) { goto qiaimmucomukkeka; } $ksiyqouuaoymsycg[$wsiwwymgaoqsyagc] = "\x2f\57" . str_replace($couygeouymagssgw, $gwgucoaaqcwwciqq, $qoqyywgqmicskwsc); qiaimmucomukkeka: egsycocugqyyswsi: } uoeasoimegouymka: aoquoewagkseayug: $ewgwqamkygiqaawc = $this->qgsuqwiisyaoycya($ewgwqamkygiqaawc, $ksiyqouuaoymsycg); osuscoaaomwcqkew: return $ewgwqamkygiqaawc; } public function qgsuqwiisyaoycya($ewgwqamkygiqaawc, $qqueccegigsqmmmg = []) { if (!$qqueccegigsqmmmg) { goto ciucewqgyoiouesq; } $yygmoeguaqyumuui = array_map("\x73\164\162\154\x65\156", array_keys($qqueccegigsqmmmg)); array_multisort($yygmoeguaqyumuui, SORT_DESC, $qqueccegigsqmmmg); $ewgwqamkygiqaawc = str_replace(array_keys($qqueccegigsqmmmg), array_values($qqueccegigsqmmmg), $ewgwqamkygiqaawc); ciucewqgyoiouesq: return $ewgwqamkygiqaawc; } }
