<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63921303a86c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge\Traits; use Exception; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Setting; trait PurgeTrait { public function kqmkucymmoswoimq($ocqawgquwsqioses) : bool { $ksaameoqigiaoigg = false; if (!(is_array($ocqawgquwsqioses) && $ocqawgquwsqioses)) { goto ysggiwiksocomkek; } $ksaameoqigiaoigg = true; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if ($this->ywuwaieucessammu($suaemuyiacqyugsm)) { goto wmsiqkyqsiysgcyy; } $ksaameoqigiaoigg = false; goto ieoiygycmseqmmgc; wmsiqkyqsiysgcyy: gkuwmiusoqwesqoo: } ieoiygycmseqmmgc: ysggiwiksocomkek: return $ksaameoqigiaoigg; } public function ywuwaieucessammu($suaemuyiacqyugsm, &$uamcoiueqaamsqma = '') : bool { $ksaameoqigiaoigg = false; $yyimiwcuegayoskq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x70\141\x67\145\x5f\147\x65\164\x5f\x69\x6e\146\x6f\x5f\142\x79\x5f\x69\x64"), $suaemuyiacqyugsm); if ($eeamcawaiqocomwy = ManipulateArray::get($yyimiwcuegayoskq, self::sauwwsocmukoaayu)) { goto wkqwywgikoyqkyeg; } $uamcoiueqaamsqma = sprintf("\x25\x73\72\40\45\x73", __("\x43\141\x6e\40\x6e\x6f\x74\x20\x66\151\156\144\40\x69\x6e\146\x6f\x20\x62\x79\40\160\141\x67\x65\x20\x69\x64", PR__MDL__OPTIMIZATION), $suaemuyiacqyugsm); goto wqieuwguumokgyqg; wkqwywgikoyqkyeg: $ksaameoqigiaoigg = $this->kggeaycqkokcquqk([$eeamcawaiqocomwy], $uamcoiueqaamsqma); wqieuwguumokgyqg: return $ksaameoqigiaoigg; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { try { $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\160\165\162\x67\145\137\141\x6c\154"), ...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici("\x70\x75\x72\147\145\x20\x61\x6c\x6c\x20\145\162\162\x6f\x72\x3a\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}"); $occymigcemkqucuw = false; } return $occymigcemkqucuw; } public function kggeaycqkokcquqk($auwuoyyagaiegwae = [], &$uamcoiueqaamsqma = '') : bool { $occymigcemkqucuw = false; try { $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\160\x75\x72\147\x65\137\x75\162\154\163\x5f\154\x69\x73\x74"), $auwuoyyagaiegwae); if ($auwuoyyagaiegwae) { goto aueiggyawkmkamum; } $uamcoiueqaamsqma = __("\125\x72\x6c\163\40\141\162\x65\40\x65\155\x70\164\171\x20\x66\x6f\x72\x20\160\165\x72\147\145\x20\x75\x72\x6c\163\x2e", PR__MDL__OPTIMIZATION); goto qswqmgiwiyyqwioa; aueiggyawkmkamum: $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\160\165\162\x67\x65\137\x75\162\x6c\x73"), $auwuoyyagaiegwae); qswqmgiwiyyqwioa: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf("\x25\x73\x3a\40\x25\163", __("\x50\165\x72\147\145\x20\x75\162\154\x73\40\x65\162\x72\x6f\162", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } return $occymigcemkqucuw; } public function ycqquoiyyuesegsy($post) : string { return ManipulatePost::ycqquoiyyuesegsy($post); } public function ugwqkyyoomkmekqg() : bool { $ksaameoqigiaoigg = false; if (!($this->weysguygiseoukqw(Setting::kamcoqgmemeeqmsc) && extension_loaded("\132\145\156\x64\40\117\x50\x63\141\x63\x68\x65"))) { goto miqmoasmioksggkm; } $iueymcwwscwqkiyq = opcache_get_status(); $iqsymysgkgosmiys = ManipulateArray::get($iueymcwwscwqkiyq, "\157\160\143\x61\x63\x68\145\137\x65\156\141\142\x6c\145\x64", false); if (!($iqsymysgkgosmiys && opcache_reset())) { goto uogkcsaewswoaosw; } foreach (ManipulateArray::get($iueymcwwscwqkiyq, "\163\x63\x72\x69\160\x74\163") as $uusmaiomayssaecw => $icwicymcioeyeyek) { $qmwoqyacswkwkiog[dirname($uusmaiomayssaecw)][basename($uusmaiomayssaecw)] = $icwicymcioeyeyek; opcache_invalidate(ManipulateArray::get($icwicymcioeyeyek, "\x66\165\x6c\154\137\x70\141\164\150"), true); giuswooyckooaoms: } omekuqkuugyocmoc: $ksaameoqigiaoigg = true; uogkcsaewswoaosw: miqmoasmioksggkm: return $ksaameoqigiaoigg; } public function cekqoisoaceaqiam($post) : array { return ManipulatePost::cekqoisoaceaqiam($post); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); } }
