<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66350bd82c2a9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Module\Optimization\Optimizer\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { public $timestamps = null; const imkkyggguymaqgqi = "\150\x61\x73\x5f\162\x65\163\165\154\164"; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\123\145\141\x72\x63\x68\40\x48\151\x73\x74\x6f\x72\x79", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\x53\145\x61\162\143\150\40\110\x69\x73\164\x6f\x72\x69\x65\x73", PR__MDL__OPTIMIZATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->usqseiuaeauwuwus(self::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x53\x65\x61\x72\x63\150\145\x64\x20\124\145\x72\155", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->vsuwiusoqmuueegu(self::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\103\x6f\165\x6e\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\110\x61\x73\x20\x52\x65\x73\x75\x6c\x74", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\123\x74\x61\164\x75\x73", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, self::sgoswgskyiiwkyuo, __("\120\x65\156\x64\x69\156\x67", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, self::cqymgkkgeosmoowe, __("\101\144\x64\x65\x64", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(self::sgoswgskyiiwkyuo)); parent::ewaqwooqoqmcoomi(); } public function ysouksugwwuisyye($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (!(self::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, self::yuwueyysmgkecygw))) { goto qmuwoecuacmkwgem; } $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[self::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; qmuwoecuacmkwgem: if (!$auuqggkaeoomcksu) { goto mwsmsguqqkcwiiuk; } if (!(self::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, self::qwssyugmmaoeqiei))) { goto owmuceyswmgueasi; } $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; owmuceyswmgueasi: mwsmsguqqkcwiiuk: if (!$auuqggkaeoomcksu) { goto msemumccgceyugmg; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->oqomcmyuuakigusk([Pattern::squoamkioomemiyi => Pattern::usoeisyyakwkuyoy, Pattern::usoeisyyakwkuyoy => Pattern::yayciqueeakqwese]); if (!$eouekqmooogkoqoo) { goto eogwckcymuugikuy; } $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\x2f\77\x73\x3d{$icwicymcioeyeyek[self::yoayaissyomokiui]}", $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo), self::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if (!($sogksuscggsicmac && $sogksuscggsicmac[self::ckcawaoawwioqecq])) { goto eeauyscekuckoues; } $icwicymcioeyeyek[self::ciywsqoeiymemsys] = self::cqymgkkgeosmoowe; eeauyscekuckoues: eogwckcymuugikuy: msemumccgceyugmg: return parent::ysouksugwwuisyye($icwicymcioeyeyek); } }
