<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d230b1b85af             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Notfound; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { public function gskqygiceygcguyo() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) . "\57\x6e\157\164\146\157\165\156\x64"; } public function guwogeosiyasimgk() : string { return "{$this->gskqygiceygcguyo()}\x2f\x34\x30\x34\56\x74\170\x74"; } public function wuceuyakuwiquase() : string { return "{$this->gskqygiceygcguyo()}\x2f\64\x30\x34\x2e\150\164\155\154"; } public function cqqyaosqycscowyw() : array { $megmggkiokqkcwou = []; $esaqeawoigqgagum = $this->guwogeosiyasimgk(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto kyggwyywiycksgqq; } $megmggkiokqkcwou = file($esaqeawoigqgagum, FILE_IGNORE_NEW_LINES); if ($megmggkiokqkcwou) { goto gyeayeuuyiemuwuq; } $megmggkiokqkcwou = []; gyeayeuuyiemuwuq: kyggwyywiycksgqq: return $megmggkiokqkcwou; } public function iuwqmqagcwaeoksk(?string $aaokuekaimigoyue, ?array $essikcmqiyqaqoaq = null) { $ksaameoqigiaoigg = false; if (!$aaokuekaimigoyue) { goto aqmiewawgseaqeqk; } if (is_array($essikcmqiyqaqoaq)) { goto sugumgeqcwgekcqs; } $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); sugumgeqcwgekcqs: if (!($essikcmqiyqaqoaq && in_array($aaokuekaimigoyue, $essikcmqiyqaqoaq, true))) { goto imeaiksowuukikui; } $ksaameoqigiaoigg = array_search($aaokuekaimigoyue, $essikcmqiyqaqoaq, true); imeaiksowuukikui: aqmiewawgseaqeqk: return $ksaameoqigiaoigg; } public function kywqieosgkokaiue(?string $aaokuekaimigoyue) { if (!($this->iuwqmqagcwaeoksk($aaokuekaimigoyue) === false)) { goto gaceikykesgywssm; } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), $aaokuekaimigoyue . PHP_EOL, FILE_APPEND); gaceikykesgywssm: } }
