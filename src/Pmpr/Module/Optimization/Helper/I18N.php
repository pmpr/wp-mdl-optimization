<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             666957c99839f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\x65\x74\137\141\x63\164\151\x76\x65\x5f\154\141\156\x67\x75\141\147\x65\163")) { goto aqekkeqmmewoyawu; } if (!empty($polylang) && function_exists("\x70\154\x6c\137\x6c\141\x6e\x67\165\141\147\x65\x73\x5f\x6c\x69\163\x74")) { goto awuwuuuagqysukku; } if (!empty($q_config) && is_array($q_config)) { goto oaqeoqsksuyyggmg; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\150\141\x73\x5f\151\61\70\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto kiskwawumeiiieuk; } $mkysicwccoeicumg = ''; kiskwawumeiiieuk: goto kkmuuoscccmokkiw; oaqeoqsksuyyggmg: if (function_exists("\x71\164\x72\141\156\x78\146\x5f\x63\x6f\x6e\166\145\162\x74\x55\122\114")) { goto asoecuscmsyusmkg; } if (!function_exists("\x71\164\x72\x61\156\163\137\x63\x6f\156\166\x65\162\x74\x55\x52\x4c")) { goto syisomgawcsqeemk; } $mkysicwccoeicumg = "\161\164\x72\141\x6e\x73\x6c\x61\164\x65"; syisomgawcsqeemk: goto kwasqmcyiswoaiuu; asoecuscmsyusmkg: $mkysicwccoeicumg = "\161\x74\162\141\x6e\163\x6c\x61\x74\145\x2d\x78"; kwasqmcyiswoaiuu: kkmuuoscccmokkiw: goto miugmimciywcgswm; awuwuuuagqysukku: if (empty(pll_languages_list())) { goto ugkwqaywmwqucoeo; } $mkysicwccoeicumg = "\160\x6f\x6c\x79\154\141\x6e\147"; ugkwqaywmwqucoeo: miugmimciywcgswm: goto mcqwuawosciucemq; aqekkeqmmewoyawu: $mkysicwccoeicumg = "\167\160\155\x6c"; mcqwuawosciucemq: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto csaksaisgawusswg; } switch ($mkysicwccoeicumg) { case "\167\160\155\x6c": $ymkomcgesksuuysk = $GLOBALS["\x73\x69\164\145\160\x72\x65\163\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto emeeocqaisksyioq; case "\161\164\x72\141\156\163\154\141\164\x65": case "\x71\x74\x72\141\x6e\x73\154\x61\164\x65\55\170": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\137\143\x6f\156\x66\151\x67"]["\145\156\141\x62\x6c\145\x64\137\154\x61\x6e\147\165\141\147\x65\x73"]) ? $GLOBALS["\161\137\x63\x6f\156\146\x69\147"]["\x65\156\x61\142\154\x65\x64\137\154\141\x6e\147\x75\x61\x67\x65\x73"] : []; goto emeeocqaisksyioq; case "\x70\x6f\x6c\171\x6c\x61\x6e\x67": $ymkomcgesksuuysk = pll_languages_list(); goto emeeocqaisksyioq; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x31\x38\156\137\154\141\156\147\165\x61\x67\145\x73", []); } maggecymmmesqmqs: emeeocqaisksyioq: csaksaisgawusswg: if (is_array($ymkomcgesksuuysk)) { goto ecgwgamiseokmise; } $ymkomcgesksuuysk = []; ecgwgamiseokmise: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\x70\x6d\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\157\x6f\x63\157\155\x6d\x65\162\143\145\x2d\155\x75\x6c\x74\151\x6c\x69\x6e\147\x75\141\x6c\x2f\x77\160\155\154\55\x77\x6f\x6f\143\157\x6d\155\145\x72\143\x65\x2e\160\x68\x70")) { goto gyskcwykkyakeims; } if (!("\160\x6f\x6c\171\x6c\141\x6e\147" === $eokyomeiuimoaiac && function_exists("\x70\x6c\154\x5f\x67\x65\164\137\x70\x6f\163\164\137\154\x61\x6e\x67\x75\x61\147\x65"))) { goto qkiyyywwuiuackao; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); qkiyyywwuiuackao: goto ossakckwskyqusmm; gyskcwykkyakeims: $swaukaagekiououo = $GLOBALS["\163\151\x74\145\160\162\145\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\160\157\x73\x74\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); ossakckwskyqusmm: return $swaukaagekiououo; } }
