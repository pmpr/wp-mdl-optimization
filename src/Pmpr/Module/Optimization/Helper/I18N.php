<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686a1be47069             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\x74\137\141\143\164\151\x76\145\137\154\141\156\x67\165\x61\x67\x65\163")) { goto goeoymmqqqeeoime; } if (!empty($polylang) && function_exists("\x70\x6c\x6c\137\x6c\x61\x6e\x67\x75\141\147\x65\x73\x5f\154\151\x73\164")) { goto qgegkeomwscwwiuw; } if (!empty($q_config) && is_array($q_config)) { goto egasokooagakisiy; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x68\x61\163\x5f\x69\61\x38\156", ''); if (is_string($mkysicwccoeicumg)) { goto mswsoaimesegiiic; } $mkysicwccoeicumg = ''; mswsoaimesegiiic: goto kecwuwwcwokuksyq; egasokooagakisiy: if (function_exists("\161\164\162\141\156\170\x66\137\x63\x6f\156\166\145\x72\x74\125\122\114")) { goto wcesymwqykqoyuqk; } if (!function_exists("\x71\164\162\x61\156\163\137\143\157\156\166\x65\x72\164\125\x52\x4c")) { goto meawswgwagoqgkye; } $mkysicwccoeicumg = "\161\164\x72\x61\x6e\x73\x6c\x61\164\x65"; meawswgwagoqgkye: goto usqgaogkqgemuima; wcesymwqykqoyuqk: $mkysicwccoeicumg = "\x71\x74\x72\141\156\163\x6c\141\164\x65\55\x78"; usqgaogkqgemuima: kecwuwwcwokuksyq: goto qmiwsequckckoaei; qgegkeomwscwwiuw: if (empty(pll_languages_list())) { goto goacqqsgaaigyuaw; } $mkysicwccoeicumg = "\x70\157\x6c\171\154\x61\x6e\x67"; goacqqsgaaigyuaw: qmiwsequckckoaei: goto eiawsoasmscmqswa; goeoymmqqqeeoime: $mkysicwccoeicumg = "\x77\160\155\x6c"; eiawsoasmscmqswa: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto ygkcacsyyckescqs; } switch ($mkysicwccoeicumg) { case "\167\160\x6d\154": $ymkomcgesksuuysk = $GLOBALS["\163\x69\x74\x65\x70\x72\145\x73\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto ickcmqoiosquugwe; case "\161\164\162\x61\x6e\163\154\141\x74\x65": case "\x71\164\x72\141\156\x73\154\x61\164\145\55\170": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\137\143\157\156\146\151\147"]["\x65\156\141\142\154\145\x64\x5f\x6c\x61\x6e\147\x75\141\147\145\163"]) ? $GLOBALS["\x71\137\x63\x6f\156\146\x69\x67"]["\145\156\x61\142\x6c\145\x64\137\x6c\x61\156\147\x75\x61\x67\145\x73"] : []; goto ickcmqoiosquugwe; case "\x70\x6f\154\x79\x6c\141\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto ickcmqoiosquugwe; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x31\70\x6e\137\154\x61\156\147\x75\x61\x67\x65\163", []); } qmeoaqmsuseueqiy: ickcmqoiosquugwe: ygkcacsyyckescqs: if (is_array($ymkomcgesksuuysk)) { goto cuoqqgaygogsmmic; } $ymkomcgesksuuysk = []; cuoqqgaygogsmmic: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\x70\x6d\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\x6f\157\143\x6f\x6d\155\145\162\x63\145\x2d\x6d\165\154\164\x69\x6c\x69\156\x67\165\x61\x6c\57\167\160\155\x6c\55\167\157\157\143\x6f\x6d\155\x65\162\143\x65\x2e\160\150\160")) { goto sukskmcwsoysiuqu; } if (!("\x70\x6f\154\x79\x6c\141\x6e\147" === $eokyomeiuimoaiac && function_exists("\160\x6c\154\x5f\147\x65\164\x5f\x70\x6f\x73\164\x5f\154\x61\156\x67\x75\x61\x67\x65"))) { goto cgewcsueoyaeikgm; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); cgewcsueoyaeikgm: goto igymseewwyiocoug; sukskmcwsoysiuqu: $swaukaagekiououo = $GLOBALS["\x73\x69\164\145\x70\x72\x65\163\163"]->get_language_for_element($gcqseksiskwueksc, "\160\x6f\163\164\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); igymseewwyiocoug: return $swaukaagekiououo; } }
