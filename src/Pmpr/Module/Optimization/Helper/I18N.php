<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675815b20ad5f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\x65\x74\x5f\141\x63\x74\x69\x76\145\x5f\x6c\141\156\x67\x75\141\x67\145\x73")) { $mkysicwccoeicumg = "\x77\x70\155\154"; } else { if (!empty($polylang) && function_exists("\x70\154\x6c\137\x6c\x61\x6e\x67\x75\x61\x67\145\x73\x5f\154\x69\x73\x74")) { if (!empty(pll_languages_list())) { $mkysicwccoeicumg = "\160\157\154\x79\154\x61\156\147"; } } else { if (!empty($q_config) && is_array($q_config)) { if (function_exists("\x71\164\x72\141\x6e\x78\x66\137\x63\x6f\156\x76\x65\x72\x74\x55\x52\x4c")) { $mkysicwccoeicumg = "\161\164\x72\141\x6e\163\x6c\141\164\x65\x2d\x78"; } else { if (function_exists("\x71\164\x72\x61\x6e\163\137\143\x6f\x6e\x76\145\x72\164\x55\122\x4c")) { $mkysicwccoeicumg = "\161\x74\162\x61\156\163\154\141\x74\145"; } } } else { $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\150\141\163\137\x69\x31\x38\x6e", ''); if (!is_string($mkysicwccoeicumg)) { $mkysicwccoeicumg = ''; } } } } return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if ($mkysicwccoeicumg = $this->essaugkeosgskqme()) { switch ($mkysicwccoeicumg) { case "\x77\160\x6d\154": $ymkomcgesksuuysk = $GLOBALS["\x73\x69\164\x65\x70\x72\145\x73\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); break; case "\161\164\162\x61\156\163\154\x61\x74\145": case "\161\x74\162\x61\x6e\163\x6c\x61\x74\x65\55\170": $ymkomcgesksuuysk = !empty($GLOBALS["\161\x5f\x63\x6f\x6e\x66\151\x67"]["\145\156\x61\142\154\145\x64\x5f\x6c\141\x6e\x67\165\x61\x67\145\x73"]) ? $GLOBALS["\161\x5f\x63\x6f\x6e\146\x69\147"]["\x65\156\141\142\154\145\x64\137\154\141\156\x67\x75\141\147\x65\x73"] : []; break; case "\x70\x6f\x6c\171\x6c\141\x6e\147": $ymkomcgesksuuysk = pll_languages_list(); break; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\61\x38\x6e\137\x6c\141\x6e\x67\x75\x61\147\145\x73", []); } } if (!is_array($ymkomcgesksuuysk)) { $ymkomcgesksuuysk = []; } return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\160\155\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\157\x6f\x63\157\x6d\x6d\145\162\x63\145\x2d\155\165\154\x74\x69\154\x69\x6e\x67\x75\141\x6c\x2f\167\x70\155\154\x2d\167\x6f\157\143\157\x6d\155\145\x72\x63\x65\x2e\x70\x68\160")) { $swaukaagekiououo = $GLOBALS["\163\x69\x74\x65\x70\x72\145\163\x73"]->get_language_for_element($gcqseksiskwueksc, "\160\157\163\x74\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); } else { if ("\160\157\154\171\x6c\141\x6e\x67" === $eokyomeiuimoaiac && function_exists("\160\x6c\x6c\x5f\x67\145\164\x5f\x70\157\x73\x74\x5f\x6c\x61\x6e\x67\x75\x61\147\145")) { $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); } } return $swaukaagekiououo; } }
