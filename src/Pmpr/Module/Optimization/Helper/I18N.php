<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d22efa3658b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\x74\x5f\141\143\x74\151\166\x65\137\x6c\x61\156\x67\x75\141\147\145\x73")) { goto awaaowoqskgokwiy; } if (!empty($polylang) && function_exists("\x70\154\154\x5f\154\x61\156\147\x75\x61\147\x65\x73\137\154\151\163\164")) { goto uugwoygiyecgymgw; } if (!empty($q_config) && is_array($q_config)) { goto cauqmacqkssciwyq; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x68\141\x73\137\x69\x31\70\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto emagssesowicacoa; } $mkysicwccoeicumg = ''; emagssesowicacoa: goto gusgywuaimwooawc; cauqmacqkssciwyq: if (function_exists("\x71\164\162\141\156\x78\146\137\x63\157\156\x76\145\162\164\125\122\114")) { goto gwksywaoeowkesei; } if (!function_exists("\161\x74\x72\x61\x6e\x73\137\143\157\x6e\166\145\162\164\x55\x52\114")) { goto amgsicqmemeuuaem; } $mkysicwccoeicumg = "\x71\x74\162\141\156\x73\x6c\x61\164\x65"; amgsicqmemeuuaem: goto sgkwaiuukkaqyqki; gwksywaoeowkesei: $mkysicwccoeicumg = "\161\164\x72\x61\x6e\163\154\141\x74\x65\55\170"; sgkwaiuukkaqyqki: gusgywuaimwooawc: goto acmgueaoaaweiqqu; uugwoygiyecgymgw: if (empty(pll_languages_list())) { goto mgieeyuyuoeccaog; } $mkysicwccoeicumg = "\x70\157\x6c\171\154\x61\156\x67"; mgieeyuyuoeccaog: acmgueaoaaweiqqu: goto uqiekawkwcegsumy; awaaowoqskgokwiy: $mkysicwccoeicumg = "\167\x70\x6d\154"; uqiekawkwcegsumy: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto gkoyqgogsukuowqi; } switch ($mkysicwccoeicumg) { case "\x77\160\x6d\154": $ymkomcgesksuuysk = $GLOBALS["\x73\x69\x74\x65\160\162\x65\x73\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto kgikoagqwkuocesg; case "\161\x74\x72\x61\x6e\163\x6c\141\x74\x65": case "\x71\164\x72\141\x6e\x73\154\141\164\x65\x2d\x78": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\137\x63\157\156\146\x69\147"]["\x65\x6e\141\142\154\x65\x64\x5f\154\141\156\x67\x75\x61\147\x65\163"]) ? $GLOBALS["\x71\137\143\157\x6e\146\x69\x67"]["\145\156\141\x62\154\145\x64\137\154\141\156\147\x75\x61\x67\145\x73"] : []; goto kgikoagqwkuocesg; case "\x70\157\x6c\x79\154\x61\156\147": $ymkomcgesksuuysk = pll_languages_list(); goto kgikoagqwkuocesg; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\61\x38\x6e\137\154\141\x6e\147\x75\141\x67\x65\163", []); } skaayekywasksoug: kgikoagqwkuocesg: gkoyqgogsukuowqi: if (is_array($ymkomcgesksuuysk)) { goto sgikkoswwyesqomo; } $ymkomcgesksuuysk = []; sgikkoswwyesqomo: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\160\x6d\x6c" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\157\x6f\x63\x6f\155\155\x65\162\x63\145\x2d\155\165\x6c\x74\151\x6c\151\x6e\x67\165\x61\154\57\x77\160\x6d\154\x2d\x77\x6f\157\143\157\x6d\155\x65\x72\143\145\x2e\x70\x68\x70")) { goto cksoeiwawiygyiyg; } if (!("\x70\157\154\171\154\x61\x6e\x67" === $eokyomeiuimoaiac && function_exists("\160\154\154\x5f\147\145\164\x5f\x70\x6f\x73\164\x5f\154\x61\156\x67\165\141\x67\x65"))) { goto aayysiegiyweiyuu; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); aayysiegiyweiyuu: goto cyqokqcacysioeyc; cksoeiwawiygyiyg: $swaukaagekiououo = $GLOBALS["\163\151\164\x65\160\x72\145\163\163"]->get_language_for_element($gcqseksiskwueksc, "\x70\x6f\x73\x74\x5f" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); cyqokqcacysioeyc: return $swaukaagekiououo; } }
