<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665ae9484d070             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\SpecialPage\Notfound; class Engine extends Common { public function gskqygiceygcguyo() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::umciwouwwsyqumae)) . "\57\x6e\x6f\x74\146\x6f\x75\156\x64"; } public function guwogeosiyasimgk() : string { return "{$this->gskqygiceygcguyo()}\57\x34\60\x34\56\164\x78\164"; } public function wuceuyakuwiquase() : string { return "{$this->gskqygiceygcguyo()}\x2f\64\x30\x34\x2e\x68\164\155\154"; } public function cqqyaosqycscowyw() : array { $megmggkiokqkcwou = []; $esaqeawoigqgagum = $this->guwogeosiyasimgk(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto yqykqysmiquwoasu; } $megmggkiokqkcwou = file($esaqeawoigqgagum, FILE_IGNORE_NEW_LINES); if ($megmggkiokqkcwou) { goto cmqucgoewuyieoyk; } $megmggkiokqkcwou = []; cmqucgoewuyieoyk: yqykqysmiquwoasu: return $megmggkiokqkcwou; } public function iuwqmqagcwaeoksk(?string $aaokuekaimigoyue, ?array $essikcmqiyqaqoaq = null) { $ksaameoqigiaoigg = false; if (!$aaokuekaimigoyue) { goto omugkkesagcyagmk; } if (is_array($essikcmqiyqaqoaq)) { goto ayyweymyuuiauamo; } $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); ayyweymyuuiauamo: if (!($essikcmqiyqaqoaq && in_array($aaokuekaimigoyue, $essikcmqiyqaqoaq))) { goto mosqsmqimqgqoase; } $ksaameoqigiaoigg = array_search($aaokuekaimigoyue, $essikcmqiyqaqoaq); mosqsmqimqgqoase: omugkkesagcyagmk: return $ksaameoqigiaoigg; } public function kywqieosgkokaiue(?string $aaokuekaimigoyue) { if (!($this->iuwqmqagcwaeoksk($aaokuekaimigoyue) === false)) { goto ygcsmkuycoagwyou; } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), $aaokuekaimigoyue . PHP_EOL, FILE_APPEND); ygcsmkuycoagwyou: } public function wywmcmiueimeaegy(?string $aaokuekaimigoyue) { $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); $momcykaoccoymeig = $this->iuwqmqagcwaeoksk($aaokuekaimigoyue, $essikcmqiyqaqoaq); if (!($momcykaoccoymeig !== false)) { goto kqksuugcgsyeoayy; } unset($essikcmqiyqaqoaq[$momcykaoccoymeig]); $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), implode(PHP_EOL, $essikcmqiyqaqoaq)); kqksuugcgsyeoayy: } public function iwmwsmkugeeuyasg() { $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk()); } }
