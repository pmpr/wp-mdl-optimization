<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce7059178ec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Notfound; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { public function gskqygiceygcguyo() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) . "\x2f\x6e\157\164\146\x6f\x75\156\x64"; } public function guwogeosiyasimgk() : string { return "{$this->gskqygiceygcguyo()}\57\64\x30\64\x2e\x74\x78\164"; } public function wuceuyakuwiquase() : string { return "{$this->gskqygiceygcguyo()}\57\x34\x30\64\x2e\x68\x74\155\154"; } public function cqqyaosqycscowyw() : array { $megmggkiokqkcwou = []; $esaqeawoigqgagum = $this->guwogeosiyasimgk(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto omsmaougqkqigogw; } $megmggkiokqkcwou = file($esaqeawoigqgagum, FILE_IGNORE_NEW_LINES); if ($megmggkiokqkcwou) { goto umemmgiwimkymaya; } $megmggkiokqkcwou = []; umemmgiwimkymaya: omsmaougqkqigogw: return $megmggkiokqkcwou; } public function iuwqmqagcwaeoksk(?string $aaokuekaimigoyue, ?array $essikcmqiyqaqoaq = null) { $ksaameoqigiaoigg = false; if (!$aaokuekaimigoyue) { goto guqmgiqaaowaauyo; } if (is_array($essikcmqiyqaqoaq)) { goto geasgywiogoeamek; } $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); geasgywiogoeamek: if (!($essikcmqiyqaqoaq && in_array($aaokuekaimigoyue, $essikcmqiyqaqoaq, true))) { goto qweyymyuuqwcmkqg; } $ksaameoqigiaoigg = array_search($aaokuekaimigoyue, $essikcmqiyqaqoaq, true); qweyymyuuqwcmkqg: guqmgiqaaowaauyo: return $ksaameoqigiaoigg; } public function kywqieosgkokaiue(?string $aaokuekaimigoyue) { if (!($this->iuwqmqagcwaeoksk($aaokuekaimigoyue) === false)) { goto mccimkgwkkamsime; } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), $aaokuekaimigoyue . PHP_EOL, FILE_APPEND); mccimkgwkkamsime: } }
