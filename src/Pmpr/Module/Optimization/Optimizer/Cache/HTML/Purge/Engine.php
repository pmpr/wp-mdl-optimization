<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686a1be47069             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto oimkeqocuguqqsqk; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto wkwamkgkwykeqkec; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\143\x61\x63\150\x65\137\x68\x74\155\x6c\137\x61\154\x6c\137\x70\x75\x72\x67\145\144", ...$ywmkwiwkosakssii); wkwamkgkwykeqkec: oimkeqocuguqqsqk: return $ksaameoqigiaoigg; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x61\143\x68\145\x5f\150\x74\x6d\154\x5f\160\x75\162\147\145\137\165\162\154\x73", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto oeocukauoyosicso; } return false; oeocukauoyosicso: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($eeamcawaiqocomwy))); yykqaowwsqgqysmq: } suqceasgacskcmkc: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\x61\x63\x68\145\137\x68\164\155\154\x5f\165\x72\x6c\163\x5f\160\165\x72\x67\x65\144", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto kwiggogcgciwuwqk; } return false; kwiggogcgciwuwqk: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto uckewycoogsogwiy; } return false; uckewycoogsogwiy: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto ikuuiauwouuqawuw; } return false; ikuuiauwouuqawuw: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto yoqakewookqoqacm; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); yoqakewookqoqacm: if (is_object($post)) { goto gswcoeiisamakwii; } return false; gswcoeiisamakwii: if ($gcqseksiskwueksc) { goto yuimwyoywaiiqacs; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); yuimwyoywaiiqacs: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto ocywegekakimmwcq; } return false; ocywegekakimmwcq: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [self::iuemaweiggauysws, self::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [self::mskugisegsqmcqkk, self::cqycgsyykemiygou], true))) { goto emqswoaawgeyosmi; } return false; emqswoaawgeyosmi: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto iwsmmkqaoksmocok; } return false; iwsmmkqaoksmocok: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x70\157\163\x74\137\x70\165\x72\147\x65\x5f\x75\x72\154\x73", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\142\145\x66\157\162\145\x5f\x63\x6c\145\141\x6e\137\160\157\x73\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x61\146\164\x65\x72\x5f\143\x6c\145\141\156\x5f\x70\x6f\163\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto esikeyqyuikmaiek; } return false; esikeyqyuikmaiek: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto ikqeeaysmqgcgawq; } if ($mksyucucyswaukig instanceof WP_Term) { goto qiiigwkqeoewsuwm; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto okkmcocqokkskasy; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); okkmcocqokkskasy: goto esaqcqqwuussiiwo; qiiigwkqeoewsuwm: $this->syicukiqeoyaqsok($mksyucucyswaukig); esaqcqqwuussiiwo: goto mscgewkcqcoowweg; ikqeeaysmqgcgawq: $this->ussmokeesuogauca($mksyucucyswaukig); mscgewkcqcoowweg: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto suqcsgaosywaauuu; } return false; suqcsgaosywaauuu: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); gsygwgsiawgmqiyi: } wwukgaquuyoissgy: return true; } }
