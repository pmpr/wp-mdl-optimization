<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66bd21640c7ca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Notfound; class Engine extends Common { public function gskqygiceygcguyo() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::umciwouwwsyqumae)) . "\x2f\156\x6f\164\146\x6f\x75\x6e\144"; } public function guwogeosiyasimgk() : string { return "{$this->gskqygiceygcguyo()}\x2f\64\60\64\56\x74\x78\x74"; } public function wuceuyakuwiquase() : string { return "{$this->gskqygiceygcguyo()}\57\x34\60\x34\56\x68\x74\155\x6c"; } public function cqqyaosqycscowyw() : array { $megmggkiokqkcwou = []; $esaqeawoigqgagum = $this->guwogeosiyasimgk(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto kceeuicccqscwgsu; } $megmggkiokqkcwou = file($esaqeawoigqgagum, FILE_IGNORE_NEW_LINES); if ($megmggkiokqkcwou) { goto sgiuwkisugmewmcs; } $megmggkiokqkcwou = []; sgiuwkisugmewmcs: kceeuicccqscwgsu: return $megmggkiokqkcwou; } public function iuwqmqagcwaeoksk(?string $aaokuekaimigoyue, ?array $essikcmqiyqaqoaq = null) { $ksaameoqigiaoigg = false; if (!$aaokuekaimigoyue) { goto yimeskeioamqmuwg; } if (is_array($essikcmqiyqaqoaq)) { goto iquecygaakmiomeg; } $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); iquecygaakmiomeg: if (!($essikcmqiyqaqoaq && in_array($aaokuekaimigoyue, $essikcmqiyqaqoaq))) { goto eacysqsegwcqawsa; } $ksaameoqigiaoigg = array_search($aaokuekaimigoyue, $essikcmqiyqaqoaq); eacysqsegwcqawsa: yimeskeioamqmuwg: return $ksaameoqigiaoigg; } public function kywqieosgkokaiue(?string $aaokuekaimigoyue) { if (!($this->iuwqmqagcwaeoksk($aaokuekaimigoyue) === false)) { goto yeemsgmumygmumqw; } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), $aaokuekaimigoyue . PHP_EOL, FILE_APPEND); yeemsgmumygmumqw: } }
