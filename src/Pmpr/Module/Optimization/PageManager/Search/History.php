<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663698627f721             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Module\Optimization\Optimizer\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { public $timestamps = null; const imkkyggguymaqgqi = "\150\141\x73\137\162\x65\163\165\154\x74"; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\123\x65\141\162\143\150\x20\110\x69\163\164\x6f\x72\x79", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\x53\145\x61\x72\143\x68\40\110\x69\x73\x74\x6f\162\x69\x65\163", PR__MDL__OPTIMIZATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->usqseiuaeauwuwus(self::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\123\145\x61\x72\143\x68\145\144\40\x54\145\162\155", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->vsuwiusoqmuueegu(self::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\103\x6f\x75\156\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\110\141\x73\40\x52\145\163\x75\154\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\x53\x74\141\x74\165\x73", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, self::sgoswgskyiiwkyuo, __("\120\x65\156\144\x69\x6e\147", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, self::cqymgkkgeosmoowe, __("\101\x64\144\x65\x64", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(self::sgoswgskyiiwkyuo)); parent::ewaqwooqoqmcoomi(); } public function ysouksugwwuisyye($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (!(self::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, self::yuwueyysmgkecygw))) { goto qmuwoecuacmkwgem; } $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[self::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; qmuwoecuacmkwgem: if (!$auuqggkaeoomcksu) { goto mwsmsguqqkcwiiuk; } if (!(self::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, self::qwssyugmmaoeqiei))) { goto owmuceyswmgueasi; } $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; owmuceyswmgueasi: mwsmsguqqkcwiiuk: if (!$auuqggkaeoomcksu) { goto msemumccgceyugmg; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->oqomcmyuuakigusk([Pattern::squoamkioomemiyi => Pattern::usoeisyyakwkuyoy, Pattern::usoeisyyakwkuyoy => Pattern::yayciqueeakqwese]); if (!$eouekqmooogkoqoo) { goto eogwckcymuugikuy; } $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\57\x3f\x73\x3d{$icwicymcioeyeyek[self::yoayaissyomokiui]}", $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo), self::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if (!($sogksuscggsicmac && $sogksuscggsicmac[self::ckcawaoawwioqecq])) { goto eeauyscekuckoues; } $icwicymcioeyeyek[self::ciywsqoeiymemsys] = self::cqymgkkgeosmoowe; eeauyscekuckoues: eogwckcymuugikuy: msemumccgceyugmg: return parent::ysouksugwwuisyye($icwicymcioeyeyek); } }
