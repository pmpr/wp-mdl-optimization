<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec8032739             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Preload extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\150\x65\141\144", [$this, "\163\147\157\x6f\x6f\165\x61\x69\x67\161\x77\151\x61\x71\157\x71"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\143\x61\143\150\145\x5f\x68\x65\x61\x64\x65\162\x73\137\x6c\151\x73\x74", [$this, "\x73\x73\x67\x79\x6b\x75\165\165\x63\153\x61\x6b\171\147\x77\x67"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\141\163\x73\x65\164\x5f\x70\x72\145\x6c\157\x61\x64\137\154\x69\156\x6b\163", []); } public function sgooouaigqwiaqoq() { if (!$this->ocysssyiuaueqiei()) { goto iyocimuyeemkaaso; } if (!headers_sent()) { goto scccyaiaggeasgqg; } echo $this->ukkcoiggmmycaeuw(); goto asueqykmkoaimguq; scccyaiaggeasgqg: header("\61\x30\x33\40\105\x61\x72\154\171\x20\110\151\156\164\163", false); header("\x4c\x69\156\x6b\72\40" . $this->wecsewaimwquoqkk(), false); asueqykmkoaimguq: iyocimuyeemkaaso: } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\54"; kcwyeqmysgqkoqcm: } isaouwiaamimceeg: return rtrim($aqykuigiuwmmcieu, "\54"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (!isset($ogiyyuwciysokiuc["\156\157\x73\x63\x72\x69\x70\x74"])) { goto ugowqoisymsioeye; } $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\156\157\163\x63\162\151\x70\x74"]; unset($ogiyyuwciysokiuc["\156\157\163\x63\162\151\160\x74"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); ugowqoisymsioeye: $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); mwgaaiaswusakkaq: } wamgcqkaieummksu: return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if (!$aiwcguiecocoyqqi) { goto gooqkmwgsmseuiwq; } $uykgysuswksgmwqy[] = "\61\x30\x33\40\105\141\162\x6c\171\40\x48\x69\156\164\x73"; $uykgysuswksgmwqy["\114\151\156\153"] = $aiwcguiecocoyqqi; gooqkmwgsmseuiwq: return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto mmusoowesqcmuqew; } if (isset($siquossayskcwkea["\x72\x65\154"])) { goto oeosugomyqyekmuq; } $siquossayskcwkea["\162\145\154"] = Constants::iwksyuwwwkucsisq; oeosugomyqyekmuq: $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\x65\154", "\x61\163", "\143\x72\157\x73\163\157\x72\151\x67\x69\x6e", "\x74\x79\x70\x65", "\x6e\157\x70\x75\163\x68"], true))) { goto yskswskmsgoouyco; } goto ysusaysykymegguk; yskswskmsgoouyco: if (!is_string($eqgoocgaqwqcimie)) { goto oaciskoioaecgwee; } $qookweymeqawmcwo .= "\40{$ymkomoccmymcoiea}\75\42{$eqgoocgaqwqcimie}\42\73"; goto csskguekqcwcmocu; oaciskoioaecgwee: $qookweymeqawmcwo .= "\x20{$eqgoocgaqwqcimie}\73"; csskguekqcwcmocu: ysusaysykymegguk: } emgssiqceagusgyg: $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\73"); $sogksuscggsicmac = sprintf("\74\45\x73\x3e\x3b\40\45\x73", esc_url_raw($siquossayskcwkea["\150\162\145\x66"]), $qookweymeqawmcwo); mmusoowesqcmuqew: return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto kygcymkakucoeock; } $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\x65\x6c", "\x68\x72\x65\x66", "\141\x73", "\143\x72\157\163\163\x6f\x72\x69\x67\x69\x6e", "\164\x79\160\145", "\157\x6e\154\x6f\x61\144"], true))) { goto yuoyeeuqqaockyqw; } goto ugcyukgoaiiysymc; yuoyeeuqqaockyqw: $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; ugcyukgoaiiysymc: } wkwkeicwosmkcygc: $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\154\x69\156\x6b", $wwgucssaecqekuek); kygcymkakucoeock: return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (isset($siquossayskcwkea["\150\162\x65\146"])) { goto qkiqquymecyoouki; } return []; qkiqquymecyoouki: if (!isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { goto iqukigoyiqgcggue; } $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; iqukigoyiqgcggue: return $siquossayskcwkea; } }
