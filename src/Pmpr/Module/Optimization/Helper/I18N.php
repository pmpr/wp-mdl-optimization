<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d8c783a6833             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\145\164\x5f\x61\143\x74\151\166\145\137\154\x61\156\x67\x75\141\147\x65\163")) { goto goswwiomuackymqi; } if (!empty($polylang) && function_exists("\x70\x6c\154\x5f\154\x61\156\x67\165\x61\x67\145\x73\x5f\154\x69\x73\x74")) { goto gqaimiooakyykccy; } if (!empty($q_config) && is_array($q_config)) { goto wiaesksmicgikqcm; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\150\x61\x73\x5f\x69\61\x38\156", ''); if (is_string($mkysicwccoeicumg)) { goto auaigccmwqwsqsku; } $mkysicwccoeicumg = ''; auaigccmwqwsqsku: goto mcucegiogmuyogki; wiaesksmicgikqcm: if (function_exists("\x71\164\162\141\x6e\170\x66\x5f\143\x6f\156\166\145\162\164\125\122\x4c")) { goto qckouamqueqiykqi; } if (!function_exists("\x71\164\162\x61\x6e\x73\137\x63\157\156\166\x65\162\x74\125\122\114")) { goto kieyoaoawqacqamy; } $mkysicwccoeicumg = "\161\x74\162\141\156\163\x6c\141\164\x65"; kieyoaoawqacqamy: goto measoqewessauqma; qckouamqueqiykqi: $mkysicwccoeicumg = "\161\164\162\141\x6e\163\x6c\141\164\x65\55\x78"; measoqewessauqma: mcucegiogmuyogki: goto agemeseegiuuowgo; gqaimiooakyykccy: if (empty(pll_languages_list())) { goto eciksmgaqikwegwq; } $mkysicwccoeicumg = "\x70\157\x6c\171\x6c\x61\156\x67"; eciksmgaqikwegwq: agemeseegiuuowgo: goto gykuaukukosiocoy; goswwiomuackymqi: $mkysicwccoeicumg = "\167\x70\155\x6c"; gykuaukukosiocoy: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto ggqeakyaggiuegek; } switch ($mkysicwccoeicumg) { case "\167\160\155\154": $ymkomcgesksuuysk = $GLOBALS["\x73\151\x74\x65\x70\162\x65\x73\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto camawumockccayaq; case "\x71\164\162\x61\156\x73\154\141\x74\145": case "\x71\164\x72\141\x6e\x73\x6c\141\164\145\55\170": $ymkomcgesksuuysk = !empty($GLOBALS["\161\137\143\157\x6e\x66\x69\x67"]["\145\156\141\142\154\145\x64\x5f\x6c\x61\x6e\x67\x75\141\x67\145\163"]) ? $GLOBALS["\x71\137\143\157\x6e\x66\x69\x67"]["\145\156\x61\x62\154\145\x64\x5f\154\141\156\147\165\141\147\x65\x73"] : []; goto camawumockccayaq; case "\160\x6f\154\171\x6c\141\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto camawumockccayaq; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\61\70\156\137\154\141\x6e\147\x75\141\147\145\x73", []); } uuisaeysawuagysg: camawumockccayaq: ggqeakyaggiuegek: if (is_array($ymkomcgesksuuysk)) { goto usgcoawgqswoeiec; } $ymkomcgesksuuysk = []; usgcoawgqswoeiec: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\160\155\x6c" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\167\157\157\143\157\x6d\x6d\145\162\x63\x65\55\155\165\154\164\x69\x6c\151\x6e\x67\x75\x61\x6c\57\x77\160\x6d\x6c\x2d\167\x6f\157\x63\157\155\x6d\x65\x72\143\145\56\160\x68\160")) { goto aqigiwmamkowomiw; } if (!("\160\x6f\154\x79\154\x61\156\147" === $eokyomeiuimoaiac && function_exists("\160\x6c\x6c\x5f\147\145\164\137\160\157\163\x74\x5f\x6c\x61\156\x67\165\141\x67\145"))) { goto qowcwmsiyscackaa; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); qowcwmsiyscackaa: goto qesqgumuouyymcwa; aqigiwmamkowomiw: $swaukaagekiououo = $GLOBALS["\x73\151\x74\x65\160\162\x65\163\163"]->get_language_for_element($gcqseksiskwueksc, "\160\x6f\163\164\x5f" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); qesqgumuouyymcwa: return $swaukaagekiououo; } }
