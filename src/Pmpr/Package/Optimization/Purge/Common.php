<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d54d68de54c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Purge; use Exception; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Container; use Pmpr\Package\Optimization\Setting; class Common extends Container { public function kqmkucymmoswoimq($ocqawgquwsqioses) : bool { $ksaameoqigiaoigg = false; if (!(is_array($ocqawgquwsqioses) && $ocqawgquwsqioses)) { goto yuuyikiacmmueosu; } $ksaameoqigiaoigg = true; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if ($this->ywuwaieucessammu($suaemuyiacqyugsm)) { goto ucuoeymyqeokgsya; } $ksaameoqigiaoigg = false; goto mysueeoswqgccmui; ucuoeymyqeokgsya: egmayaiikwsskgmy: } mysueeoswqgccmui: yuuyikiacmmueosu: return $ksaameoqigiaoigg; } public function ywuwaieucessammu($suaemuyiacqyugsm, &$uamcoiueqaamsqma = '') : bool { $ksaameoqigiaoigg = false; $yyimiwcuegayoskq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\x61\147\145\137\147\x65\164\x5f\x69\156\146\157\137\x62\x79\137\x69\x64"), $suaemuyiacqyugsm); if ($yyimiwcuegayoskq !== $suaemuyiacqyugsm) { goto sguskaeaaqcagqgc; } $uamcoiueqaamsqma = sprintf("\x25\x73\72\40\45\163", __("\103\141\156\40\x6e\x6f\164\x20\x66\x69\x6e\x64\x20\x69\156\146\157\x20\142\171\40\x70\141\147\145\x20\x69\x64", PR__PKG__OPTIMIZATION), $suaemuyiacqyugsm); goto agkmiayuawacakau; sguskaeaaqcagqgc: $auwuoyyagaiegwae[] = ManipulateArray::get($yyimiwcuegayoskq, self::sauwwsocmukoaayu); $ksaameoqigiaoigg = $this->kggeaycqkokcquqk($auwuoyyagaiegwae, $uamcoiueqaamsqma); agkmiayuawacakau: return $ksaameoqigiaoigg; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { try { $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\160\x75\162\147\145\137\x61\x6c\154"), ...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici("\160\165\162\x67\x65\40\x61\x6c\x6c\40\145\x72\162\x6f\162\x3a\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}"); $occymigcemkqucuw = false; } return $occymigcemkqucuw; } public function kggeaycqkokcquqk($auwuoyyagaiegwae = [], &$uamcoiueqaamsqma = '') : bool { $occymigcemkqucuw = false; try { $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\160\x75\x72\147\x65\x5f\x75\162\154\x73\137\x6c\x69\x73\164"), $auwuoyyagaiegwae); if ($auwuoyyagaiegwae && is_array($auwuoyyagaiegwae)) { goto syuaummumssgwwee; } $uamcoiueqaamsqma = __("\125\x72\x6c\163\x20\x61\162\x65\40\x65\x6d\160\x74\171\40\x66\x6f\x72\x20\160\165\x72\147\145\40\x75\162\154\163\x2e", PR__PKG__OPTIMIZATION); goto oocuemosmeeekgas; syuaummumssgwwee: $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\160\x75\x72\147\x65\137\165\x72\154\x73"), $auwuoyyagaiegwae); oocuemosmeeekgas: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf("\x25\x73\72\x20\x25\x73", __("\x50\165\x72\x67\145\x20\165\x72\154\163\40\x65\x72\x72\x6f\162", PR__PKG__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } return $occymigcemkqucuw; } public function ycqquoiyyuesegsy($post) : string { return ManipulatePost::ycqquoiyyuesegsy($post); } public function ugwqkyyoomkmekqg() : bool { $ksaameoqigiaoigg = false; if (!$this->weysguygiseoukqw(Setting::kamcoqgmemeeqmsc)) { goto aoquoewagkseayug; } if (!extension_loaded("\x5a\x65\156\144\x20\x4f\x50\x63\141\x63\x68\x65")) { goto qiaimmucomukkeka; } $iueymcwwscwqkiyq = opcache_get_status(); $iqsymysgkgosmiys = ManipulateArray::get($iueymcwwscwqkiyq, "\157\160\143\141\x63\x68\x65\137\x65\x6e\141\x62\x6c\145\x64", false); if (!($iqsymysgkgosmiys && opcache_reset())) { goto egsycocugqyyswsi; } foreach (ManipulateArray::get($iueymcwwscwqkiyq, "\163\143\x72\151\x70\164\163") as $uusmaiomayssaecw => $icwicymcioeyeyek) { $qmwoqyacswkwkiog[dirname($uusmaiomayssaecw)][basename($uusmaiomayssaecw)] = $icwicymcioeyeyek; opcache_invalidate(ManipulateArray::get($icwicymcioeyeyek, "\x66\x75\x6c\154\x5f\x70\141\164\150"), $cwwowqyuwccuykom = true); uoeasoimegouymka: } qkcsykuocwuyaice: $this->oaumimwssciwumys("\120\x75\x72\x67\145\40\x4f\x50\x63\141\x63\150\x65\x20\143\x61\x63\150\x65"); $ksaameoqigiaoigg = true; egsycocugqyyswsi: qiaimmucomukkeka: aoquoewagkseayug: return $ksaameoqigiaoigg; } public function cekqoisoaceaqiam($post) : array { return ManipulatePost::cekqoisoaceaqiam($post); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); } }
