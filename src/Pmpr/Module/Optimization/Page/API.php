<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284dbab4ba54             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Manager; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use WP_Error; class API extends Manager { public function kwauokaoasomsimk(&$uamcoiueqaamsqma) { $keccaugmemegoimu = $this->get("\57\142\x75\x64\147\x65\164\x2f\147\145\164\55\x62\165\x64\x67\x65\164"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto gqimwsyemoewagcy; } $mkecsaoyggsmwmau = $this->oemauiimmycumcsk($uamcoiueqaamsqma); goto aoaqwygkaagiuuws; gqimwsyemoewagcy: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto kyiwsiakwgiwouyi; } $mkecsaoyggsmwmau = ManipulateArray::get($sogksuscggsicmac, self::uiwqcumqkgikqyue); goto awgmegueeqeyqamu; kyiwsiakwgiwouyi: $mkecsaoyggsmwmau = $this->oemauiimmycumcsk(__("\x59\x6f\x75\40\141\162\x65\x20\157\165\x74\40\157\146\x20\164\150\145\40\x62\165\x64\147\145\x74", PR__MDL__OPTIMIZATION)); awgmegueeqeyqamu: aoaqwygkaagiuuws: return $mkecsaoyggsmwmau; } private function ycqquoiyyuesegsy($sqeykgyoooqysmca, $ccamueccusigaaio) : string { return $sqeykgyoooqysmca === self::mswmgkkakuooukme ? ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio) : ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); } public function auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\x61\x64\144", $uamcoiueqaamsqma, $kgicwkyskyemksca, self::mswoacegomcucaik, [self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]); } public function kgyokgoeqoaewyye($sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\162\145\x6d\x6f\x76\145", $uamcoiueqaamsqma, $kgicwkyskyemksca, "\x64\145\x6c\x65\x74\145"); } public function oskcgsywauyywyum($iueymcwwscwqkiyq, $sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\143\150\141\156\x67\x65\55\163\x74\141\164\x75\163", $uamcoiueqaamsqma, $kgicwkyskyemksca, self::mswoacegomcucaik, [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); } private function ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, $aiamqeawckcsuaou, &$uamcoiueqaamsqma, &$kgicwkyskyemksca, $qgciuiagkkguykgs = self::mswoacegomcucaik, $icwicymcioeyeyek = []) : bool { $kigowwqauiumummw = false; $migiiksoiymissge = $this->ycqquoiyyuesegsy($sqeykgyoooqysmca, $ccamueccusigaaio); if ($migiiksoiymissge) { goto aeiemwacaiygemmg; } $uamcoiueqaamsqma = __("\120\141\x67\145\40\151\163\x20\x6e\157\164\x20\166\141\154\151\144", PR__MDL__OPTIMIZATION); goto yyqygaokeccgugos; aeiemwacaiygemmg: if ($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, $qgciuiagkkguykgs)) { goto iuwkiyimqmgguose; } $uamcoiueqaamsqma = __("\123\145\x72\x76\145\162\40\x65\162\162\157\162", PR__MDL__OPTIMIZATION); goto yggseoaommssscwo; iuwkiyimqmgguose: $keccaugmemegoimu = $this->{$qgciuiagkkguykgs}("\x2f\x70\141\x67\145\57{$aiamqeawckcsuaou}", [self::qmwqkaeamecekiso => ManipulateFormat::omaawkkwwyesqwcc($icwicymcioeyeyek, [self::imywcsggckkcywgk => $migiiksoiymissge])]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto sksgcusuyqcwqswe; } $kgicwkyskyemksca = ManipulateArray::get($amkukiggyuqwkuyo, self::vswoiouoaykswgym); switch ($kgicwkyskyemksca) { case 404: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $suaemuyiacqyugsm = $jwsqucqyaoaasykk->oqomcmyuuakigusk([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::mgsccwumkcawaqcy => $ccamueccusigaaio]); if (!$suaemuyiacqyugsm) { goto qkyciyiwkmgkmquk; } $jwsqucqyaoaasykk->sgcuwcowgwimgsgk($jwsqucqyaoaasykk->keeuqgyooycqoygw($suaemuyiacqyugsm)); qkyciyiwkmgkmquk: goto esagiiawomyacuiw; } maaisuqwkymeguys: esagiiawomyacuiw: goto ayceeyuocgowqwsa; sksgcusuyqcwqswe: $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($keccaugmemegoimu, $uamcoiueqaamsqma); ayceeyuocgowqwsa: yggseoaommssscwo: yyqygaokeccgugos: return $kigowwqauiumummw; } }
