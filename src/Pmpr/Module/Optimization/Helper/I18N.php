<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663757b0e9f86             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\164\x5f\x61\x63\x74\151\x76\145\x5f\154\x61\156\147\x75\141\147\145\x73")) { goto kkwqmewaksmokuqy; } if (!empty($polylang) && function_exists("\x70\154\x6c\x5f\x6c\141\156\147\165\x61\x67\x65\x73\x5f\154\151\x73\164")) { goto seieguyaaiqismgo; } if (!empty($q_config) && is_array($q_config)) { goto giooasyeqwaaocea; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\150\x61\163\x5f\x69\x31\x38\156", ''); if (is_string($mkysicwccoeicumg)) { goto qmegcmqemmywoqas; } $mkysicwccoeicumg = ''; qmegcmqemmywoqas: goto uueywyysiicuauem; giooasyeqwaaocea: if (function_exists("\161\x74\x72\141\x6e\x78\146\x5f\x63\x6f\x6e\x76\145\x72\x74\125\x52\114")) { goto yyieomeeqycmikqw; } if (!function_exists("\161\164\162\141\156\x73\x5f\143\157\156\166\x65\162\164\x55\x52\114")) { goto gskacikgkwcuauko; } $mkysicwccoeicumg = "\x71\164\x72\x61\x6e\x73\154\x61\x74\145"; gskacikgkwcuauko: goto kwiuqqwamsimqgme; yyieomeeqycmikqw: $mkysicwccoeicumg = "\x71\x74\x72\141\156\163\x6c\141\x74\x65\x2d\170"; kwiuqqwamsimqgme: uueywyysiicuauem: goto qgyoesyiasqimcoe; seieguyaaiqismgo: if (empty(pll_languages_list())) { goto ssyukuseoymackeo; } $mkysicwccoeicumg = "\x70\157\154\171\x6c\141\156\147"; ssyukuseoymackeo: qgyoesyiasqimcoe: goto gsgkayokisiesciy; kkwqmewaksmokuqy: $mkysicwccoeicumg = "\167\x70\155\154"; gsgkayokisiesciy: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto kiemqsgcmouqscao; } switch ($mkysicwccoeicumg) { case "\x77\160\x6d\x6c": $ymkomcgesksuuysk = $GLOBALS["\163\151\x74\x65\160\162\x65\x73\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto ascogkesqmuuaesq; case "\161\x74\x72\x61\x6e\163\x6c\x61\x74\145": case "\x71\164\x72\x61\156\x73\154\141\x74\x65\55\170": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\x5f\143\x6f\x6e\146\151\147"]["\145\x6e\141\142\154\x65\x64\x5f\154\141\156\x67\165\141\147\x65\163"]) ? $GLOBALS["\x71\137\143\x6f\156\x66\151\147"]["\145\156\141\142\154\145\144\x5f\154\x61\x6e\x67\165\141\x67\145\163"] : []; goto ascogkesqmuuaesq; case "\160\157\154\x79\154\x61\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto ascogkesqmuuaesq; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x69\61\x38\156\137\x6c\x61\x6e\147\165\141\x67\145\x73", []); } askukaucmocewkgg: ascogkesqmuuaesq: kiemqsgcmouqscao: if (is_array($ymkomcgesksuuysk)) { goto wssaaemscmmiomee; } $ymkomcgesksuuysk = []; wssaaemscmmiomee: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\160\x6d\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\x6f\x6f\143\x6f\155\x6d\x65\x72\x63\x65\x2d\155\x75\x6c\x74\151\x6c\151\156\147\x75\x61\154\57\167\x70\x6d\154\55\x77\157\157\143\x6f\x6d\155\x65\162\143\145\x2e\x70\x68\160")) { goto euskosgaksmimgug; } if (!("\x70\157\x6c\171\154\141\156\147" === $eokyomeiuimoaiac && function_exists("\160\154\154\x5f\x67\x65\164\x5f\160\157\163\x74\x5f\154\x61\156\x67\x75\x61\x67\x65"))) { goto meqmcgmksqiqcoyq; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); meqmcgmksqiqcoyq: goto iusaeoimukymskgs; euskosgaksmimgug: $swaukaagekiououo = $GLOBALS["\x73\151\164\x65\x70\162\x65\x73\x73"]->get_language_for_element($gcqseksiskwueksc, "\x70\157\x73\x74\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); iusaeoimukymskgs: return $swaukaagekiououo; } }
