<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a57ce0afbe8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto ccgsycueagwegqeu; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto qmqmskywcgiqgygm; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\141\143\x68\x65\137\150\164\155\x6c\x5f\141\x6c\x6c\137\x70\x75\162\x67\145\x64", ...$ywmkwiwkosakssii); qmqmskywcgiqgygm: ccgsycueagwegqeu: return $ksaameoqigiaoigg; } public function sksuceuccwmiokoe($ccamueccusigaaio) : bool { if (!is_string($ccamueccusigaaio)) { goto gmeiuoeewucukque; } $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($ccamueccusigaaio))); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\x61\143\150\145\137\150\x74\x6d\x6c\137\165\x72\154\x5f\x70\165\162\x67\145\144", $ccamueccusigaaio); return true; gmeiuoeewucukque: return false; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\141\143\x68\145\137\x68\164\x6d\154\x5f\x70\165\162\147\145\x5f\x75\x72\x6c\163", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto sayqggaieocmskko; } return false; sayqggaieocmskko: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sksuceuccwmiokoe($eeamcawaiqocomwy); ycecaauekkiqacuu: } qmguoqeawegcoeoa: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\143\x61\x63\x68\x65\x5f\150\164\155\x6c\x5f\165\162\x6c\x73\x5f\160\165\162\147\x65\x64", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto ceaamccscgcmqgka; } return false; ceaamccscgcmqgka: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { if ($this->gimogqqgyqwiwsmi()) { goto omumkeywqqogwwue; } return false; omumkeywqqogwwue: return true; } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto igyesgemqesackws; } return false; igyesgemqesackws: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto wiaymoucakyaikii; } return false; wiaymoucakyaikii: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto ociesuicgmkekcue; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); ociesuicgmkekcue: if (is_object($post)) { goto ymucaguacemwsgsi; } return false; ymucaguacemwsgsi: if ($gcqseksiskwueksc) { goto qiikwossequwiuom; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); qiikwossequwiuom: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto gaouaiemokqqgssw; } return false; gaouaiemokqqgssw: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [self::iuemaweiggauysws, self::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [self::mskugisegsqmcqkk, self::cqycgsyykemiygou], true))) { goto wqwmuuicoqigqwyc; } return false; wqwmuuicoqigqwyc: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto oqgymyiwckkwueuw; } return false; oqgymyiwckkwueuw: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\160\x6f\x73\164\x5f\160\x75\162\x67\145\137\165\x72\x6c\163", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\142\145\146\157\162\x65\x5f\143\154\145\x61\x6e\137\160\x6f\163\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x61\x66\x74\145\162\137\x63\154\145\141\x6e\137\x70\x6f\163\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto qywkykqkeeuccoui; } return false; qywkykqkeeuccoui: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto sockocsycmkaeosg; } if ($mksyucucyswaukig instanceof WP_Term) { goto ywokggauuiosegog; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto yqqseqskcqeqkacm; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); yqqseqskcqeqkacm: goto uoewiggumomegksg; ywokggauuiosegog: $this->syicukiqeoyaqsok($mksyucucyswaukig); uoewiggumomegksg: goto ugkwqaywmwqucoeo; sockocsycmkaeosg: $this->ussmokeesuogauca($mksyucucyswaukig); ugkwqaywmwqucoeo: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto syisomgawcsqeemk; } return false; syisomgawcsqeemk: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); kwasqmcyiswoaiuu: } asoecuscmsyusmkg: return true; } }
