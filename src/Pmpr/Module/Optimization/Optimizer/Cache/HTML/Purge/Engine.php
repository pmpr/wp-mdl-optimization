<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf4f986c850             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto gygqgauaceiuawkq; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto ayamomygygmgwgkg; } $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\141\x63\150\145\137\150\x74\155\154\x5f\141\x6c\x6c\x5f\160\x75\x72\147\x65\144", ...$ywmkwiwkosakssii); ayamomygygmgwgkg: gygqgauaceiuawkq: return $ksaameoqigiaoigg; } public function sksuceuccwmiokoe($ccamueccusigaaio) : bool { if (!is_string($ccamueccusigaaio)) { goto ucksaiwquekagyqe; } $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($ccamueccusigaaio))); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\x61\143\x68\x65\x5f\x68\x74\x6d\x6c\x5f\165\162\x6c\137\x70\165\162\x67\x65\x64", $ccamueccusigaaio); return true; ucksaiwquekagyqe: return false; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\141\143\150\x65\x5f\x68\164\x6d\154\x5f\160\165\162\x67\145\137\x75\x72\x6c\163", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto iyeswoaqkaeggiiy; } return false; iyeswoaqkaeggiiy: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sksuceuccwmiokoe($eeamcawaiqocomwy); jkgouewqysmscmqs: } asqqqqakiagymemk: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\x61\x63\x68\x65\x5f\150\x74\155\154\x5f\x75\x72\154\163\137\160\x75\162\147\145\x64", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto sgiuwkisugmewmcs; } return false; sgiuwkisugmewmcs: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { if ($this->gimogqqgyqwiwsmi()) { goto kceeuicccqscwgsu; } return false; kceeuicccqscwgsu: return true; } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto iquecygaakmiomeg; } return false; iquecygaakmiomeg: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto eacysqsegwcqawsa; } return false; eacysqsegwcqawsa: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto yimeskeioamqmuwg; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); yimeskeioamqmuwg: if (is_object($post)) { goto yeemsgmumygmumqw; } return false; yeemsgmumygmumqw: if ($gcqseksiskwueksc) { goto wkaoyycsoeoyqcae; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); wkaoyycsoeoyqcae: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto cwugokqsmiomgmqg; } return false; cwugokqsmiomgmqg: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [Constants::iuemaweiggauysws, Constants::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [Constants::mskugisegsqmcqkk, Constants::cqycgsyykemiygou], true))) { goto uuuceqkseqkqawko; } return false; uuuceqkseqkqawko: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto ekoegocuqoycoeyq; } return false; ekoegocuqoycoeyq: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\160\x6f\x73\x74\x5f\x70\165\x72\x67\145\137\165\162\x6c\163", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\142\145\x66\x6f\x72\x65\137\143\154\145\x61\156\x5f\160\x6f\x73\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x61\x66\x74\x65\162\x5f\x63\154\145\141\156\137\x70\157\163\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto yksamaucqkqsawkk; } return false; yksamaucqkqsawkk: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto ygskksomysgaokek; } if ($mksyucucyswaukig instanceof WP_Term) { goto kskqquqsegiiogek; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto akeoaicoieaiekcw; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); akeoaicoieaiekcw: goto mocaoayiouggauiy; kskqquqsegiiogek: $this->syicukiqeoyaqsok($mksyucucyswaukig); mocaoayiouggauiy: goto wwcwmkowgooocaem; ygskksomysgaokek: $this->ussmokeesuogauca($mksyucucyswaukig); wwcwmkowgooocaem: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto qgkiguggkyiycwow; } return false; qgkiguggkyiycwow: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); wyugqoowakyicyic: } becceuuwokgoaewy: return true; } }
