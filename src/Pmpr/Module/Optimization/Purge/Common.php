<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6280d28b3a80d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge; use Exception; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Setting; class Common extends Container { public function kqmkucymmoswoimq($ocqawgquwsqioses) : bool { $ksaameoqigiaoigg = false; if (!(is_array($ocqawgquwsqioses) && $ocqawgquwsqioses)) { goto qiaimmucomukkeka; } $ksaameoqigiaoigg = true; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if ($this->ywuwaieucessammu($suaemuyiacqyugsm)) { goto egsycocugqyyswsi; } $ksaameoqigiaoigg = false; goto qkcsykuocwuyaice; egsycocugqyyswsi: uoeasoimegouymka: } qkcsykuocwuyaice: qiaimmucomukkeka: return $ksaameoqigiaoigg; } public function ywuwaieucessammu($suaemuyiacqyugsm, &$uamcoiueqaamsqma = '') : bool { $ksaameoqigiaoigg = false; $yyimiwcuegayoskq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\x70\x61\147\x65\137\x67\145\164\x5f\x69\156\x66\x6f\x5f\142\x79\137\151\144"), $suaemuyiacqyugsm); if ($yyimiwcuegayoskq !== $suaemuyiacqyugsm) { goto aoquoewagkseayug; } $uamcoiueqaamsqma = sprintf("\x25\163\72\40\x25\x73", __("\x43\x61\x6e\40\x6e\x6f\x74\x20\x66\x69\x6e\144\40\151\x6e\146\157\x20\x62\171\x20\x70\x61\x67\x65\x20\x69\144", PR__MDL__OPTIMIZATION), $suaemuyiacqyugsm); goto osuscoaaomwcqkew; aoquoewagkseayug: $auwuoyyagaiegwae[] = ManipulateArray::get($yyimiwcuegayoskq, self::sauwwsocmukoaayu); $ksaameoqigiaoigg = $this->kggeaycqkokcquqk($auwuoyyagaiegwae, $uamcoiueqaamsqma); osuscoaaomwcqkew: return $ksaameoqigiaoigg; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { try { $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\160\165\x72\147\145\137\x61\x6c\x6c"), ...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici("\x70\x75\x72\x67\145\40\141\x6c\154\40\x65\x72\x72\x6f\x72\72\40{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}"); $occymigcemkqucuw = false; } return $occymigcemkqucuw; } public function kggeaycqkokcquqk($auwuoyyagaiegwae = [], &$uamcoiueqaamsqma = '') : bool { $occymigcemkqucuw = false; try { $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x70\165\x72\x67\x65\x5f\x75\x72\x6c\163\x5f\154\x69\x73\164"), $auwuoyyagaiegwae); if ($auwuoyyagaiegwae && is_array($auwuoyyagaiegwae)) { goto ciucewqgyoiouesq; } $uamcoiueqaamsqma = __("\x55\162\x6c\163\x20\x61\x72\145\40\145\155\160\164\x79\x20\x66\157\162\x20\160\165\x72\147\145\40\x75\x72\x6c\x73\56", PR__MDL__OPTIMIZATION); goto cgmgqucewwssmicq; ciucewqgyoiouesq: $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\160\165\162\x67\x65\x5f\165\x72\x6c\163"), $auwuoyyagaiegwae); cgmgqucewwssmicq: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf("\x25\x73\72\40\x25\x73", __("\120\x75\x72\x67\145\40\165\162\154\x73\40\x65\x72\162\x6f\x72", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } return $occymigcemkqucuw; } public function ycqquoiyyuesegsy($post) : string { return ManipulatePost::ycqquoiyyuesegsy($post); } public function ugwqkyyoomkmekqg() : bool { $ksaameoqigiaoigg = false; if (!$this->weysguygiseoukqw(Setting::kamcoqgmemeeqmsc)) { goto sqmoqymckwsogsqg; } if (!extension_loaded("\x5a\145\x6e\x64\x20\117\120\x63\x61\143\150\145")) { goto gqmewagyagamokok; } $iueymcwwscwqkiyq = opcache_get_status(); $iqsymysgkgosmiys = ManipulateArray::get($iueymcwwscwqkiyq, "\157\160\x63\x61\143\150\145\137\145\156\x61\142\154\x65\144", false); if (!($iqsymysgkgosmiys && opcache_reset())) { goto oyiuemaaykgkqqam; } foreach (ManipulateArray::get($iueymcwwscwqkiyq, "\163\x63\162\x69\160\164\163") as $uusmaiomayssaecw => $icwicymcioeyeyek) { $qmwoqyacswkwkiog[dirname($uusmaiomayssaecw)][basename($uusmaiomayssaecw)] = $icwicymcioeyeyek; opcache_invalidate(ManipulateArray::get($icwicymcioeyeyek, "\x66\165\154\154\x5f\160\141\x74\150"), $cwwowqyuwccuykom = true); ussceseaimqywuiy: } mkomygccqkmkumsi: $this->oaumimwssciwumys("\x50\165\162\147\x65\40\117\120\143\141\x63\150\145\40\143\141\x63\x68\145"); $ksaameoqigiaoigg = true; oyiuemaaykgkqqam: gqmewagyagamokok: sqmoqymckwsogsqg: return $ksaameoqigiaoigg; } public function cekqoisoaceaqiam($post) : array { return ManipulatePost::cekqoisoaceaqiam($post); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); } }
