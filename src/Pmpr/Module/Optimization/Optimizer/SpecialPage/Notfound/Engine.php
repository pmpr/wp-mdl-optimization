<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663757b0e9f86             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\SpecialPage\Notfound; class Engine extends Common { public function gskqygiceygcguyo() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::umciwouwwsyqumae)) . "\57\156\157\x74\146\x6f\x75\156\144"; } public function guwogeosiyasimgk() : string { return "{$this->gskqygiceygcguyo()}\57\x34\60\64\56\164\x78\x74"; } public function wuceuyakuwiquase() : string { return "{$this->gskqygiceygcguyo()}\x2f\64\60\64\56\150\x74\155\x6c"; } public function cqqyaosqycscowyw() : array { $megmggkiokqkcwou = []; $esaqeawoigqgagum = $this->guwogeosiyasimgk(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto csyoimsqgwcmiwki; } $megmggkiokqkcwou = file($esaqeawoigqgagum, FILE_IGNORE_NEW_LINES); if ($megmggkiokqkcwou) { goto qesqgumuouyymcwa; } $megmggkiokqkcwou = []; qesqgumuouyymcwa: csyoimsqgwcmiwki: return $megmggkiokqkcwou; } public function iuwqmqagcwaeoksk(?string $aaokuekaimigoyue, ?array $essikcmqiyqaqoaq = null) { $ksaameoqigiaoigg = false; if (!$aaokuekaimigoyue) { goto mmkoqmccusoeaoyi; } if (is_array($essikcmqiyqaqoaq)) { goto ggqwcqssoauckuic; } $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); ggqwcqssoauckuic: if (!($essikcmqiyqaqoaq && in_array($aaokuekaimigoyue, $essikcmqiyqaqoaq))) { goto ggwcauaeuagekeyo; } $ksaameoqigiaoigg = array_search($aaokuekaimigoyue, $essikcmqiyqaqoaq); ggwcauaeuagekeyo: mmkoqmccusoeaoyi: return $ksaameoqigiaoigg; } public function kywqieosgkokaiue(?string $aaokuekaimigoyue) { if (!($this->iuwqmqagcwaeoksk($aaokuekaimigoyue) === false)) { goto waewaiuiogywqigu; } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), $aaokuekaimigoyue . PHP_EOL, FILE_APPEND); waewaiuiogywqigu: } public function wywmcmiueimeaegy(?string $aaokuekaimigoyue) { $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); $momcykaoccoymeig = $this->iuwqmqagcwaeoksk($aaokuekaimigoyue, $essikcmqiyqaqoaq); if (!($momcykaoccoymeig !== false)) { goto yyamycyesguwueuw; } unset($essikcmqiyqaqoaq[$momcykaoccoymeig]); $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), implode(PHP_EOL, $essikcmqiyqaqoaq)); yyamycyesguwueuw: } public function iwmwsmkugeeuyasg() { $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk()); } }
