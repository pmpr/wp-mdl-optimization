<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec8032739             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto yqqseqskcqeqkacm; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto qywkykqkeeuccoui; } $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\141\143\x68\x65\137\150\x74\155\154\137\x61\x6c\154\x5f\x70\165\x72\x67\145\144", ...$ywmkwiwkosakssii); qywkykqkeeuccoui: yqqseqskcqeqkacm: return $ksaameoqigiaoigg; } public function sksuceuccwmiokoe($ccamueccusigaaio) : bool { if (!is_string($ccamueccusigaaio)) { goto ywokggauuiosegog; } $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($ccamueccusigaaio))); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\x61\143\150\x65\x5f\150\x74\x6d\154\x5f\x75\x72\x6c\137\160\165\162\147\x65\144", $ccamueccusigaaio); return true; ywokggauuiosegog: return false; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\x61\x63\x68\145\x5f\150\x74\x6d\154\x5f\160\165\162\x67\x65\x5f\x75\x72\154\x73", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto uoewiggumomegksg; } return false; uoewiggumomegksg: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sksuceuccwmiokoe($eeamcawaiqocomwy); ugkwqaywmwqucoeo: } sockocsycmkaeosg: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\x61\143\x68\145\x5f\x68\x74\x6d\154\137\x75\162\x6c\163\x5f\160\165\162\x67\145\144", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto syisomgawcsqeemk; } return false; syisomgawcsqeemk: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { if ($this->gimogqqgyqwiwsmi()) { goto asoecuscmsyusmkg; } return false; asoecuscmsyusmkg: return true; } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto kwasqmcyiswoaiuu; } return false; kwasqmcyiswoaiuu: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto kiskwawumeiiieuk; } return false; kiskwawumeiiieuk: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto oaqeoqsksuyyggmg; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); oaqeoqsksuyyggmg: if (is_object($post)) { goto kkmuuoscccmokkiw; } return false; kkmuuoscccmokkiw: if ($gcqseksiskwueksc) { goto awuwuuuagqysukku; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); awuwuuuagqysukku: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto miugmimciywcgswm; } return false; miugmimciywcgswm: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [Constants::iuemaweiggauysws, Constants::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [Constants::mskugisegsqmcqkk, Constants::cqycgsyykemiygou], true))) { goto aqekkeqmmewoyawu; } return false; aqekkeqmmewoyawu: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto mcqwuawosciucemq; } return false; mcqwuawosciucemq: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\160\x6f\x73\x74\137\160\165\x72\147\145\137\165\x72\154\x73", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x62\x65\146\157\162\145\137\x63\154\145\141\x6e\137\x70\157\163\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x61\x66\x74\x65\162\x5f\x63\x6c\x65\141\156\x5f\160\157\163\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto emeeocqaisksyioq; } return false; emeeocqaisksyioq: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto qkiyyywwuiuackao; } if ($mksyucucyswaukig instanceof WP_Term) { goto csaksaisgawusswg; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto maggecymmmesqmqs; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); maggecymmmesqmqs: goto ecgwgamiseokmise; csaksaisgawusswg: $this->syicukiqeoyaqsok($mksyucucyswaukig); ecgwgamiseokmise: goto gyskcwykkyakeims; qkiyyywwuiuackao: $this->ussmokeesuogauca($mksyucucyswaukig); gyskcwykkyakeims: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto ossakckwskyqusmm; } return false; ossakckwskyqusmm: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); aamgqoqyyooimqkm: } mcagemacuqyskogs: return true; } }
