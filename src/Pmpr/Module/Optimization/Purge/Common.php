<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c868b328afe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge; use Exception; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Setting; class Common extends Container { public function kqmkucymmoswoimq($ocqawgquwsqioses) : bool { $ksaameoqigiaoigg = false; if (!(is_array($ocqawgquwsqioses) && $ocqawgquwsqioses)) { goto mgwgiesscqoaqcau; } $ksaameoqigiaoigg = true; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if ($this->ywuwaieucessammu($suaemuyiacqyugsm)) { goto geugsymgsiuuqccg; } $ksaameoqigiaoigg = false; goto eyuoecmogqwkmomi; geugsymgsiuuqccg: quewwumogiocouii: } eyuoecmogqwkmomi: mgwgiesscqoaqcau: return $ksaameoqigiaoigg; } public function ywuwaieucessammu($suaemuyiacqyugsm, &$uamcoiueqaamsqma = '') : bool { $ksaameoqigiaoigg = false; $yyimiwcuegayoskq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\160\x61\147\x65\x5f\x67\145\164\x5f\x69\x6e\146\x6f\137\142\171\137\151\x64"), $suaemuyiacqyugsm); if ($yyimiwcuegayoskq !== $suaemuyiacqyugsm) { goto ioacywuoyuskqmwy; } $uamcoiueqaamsqma = sprintf("\45\x73\72\x20\45\163", __("\x43\x61\156\40\x6e\157\164\x20\146\x69\156\144\x20\151\156\x66\x6f\40\x62\171\40\x70\141\147\x65\40\151\x64", PR__MDL__OPTIMIZATION), $suaemuyiacqyugsm); goto bgoygegmogcmeaou; ioacywuoyuskqmwy: $auwuoyyagaiegwae[] = ManipulateArray::get($yyimiwcuegayoskq, self::sauwwsocmukoaayu); $ksaameoqigiaoigg = $this->kggeaycqkokcquqk($auwuoyyagaiegwae, $uamcoiueqaamsqma); bgoygegmogcmeaou: return $ksaameoqigiaoigg; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { try { $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x70\165\162\147\145\x5f\x61\x6c\x6c"), ...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici("\160\x75\x72\x67\145\x20\141\x6c\154\x20\145\162\x72\x6f\162\x3a\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}"); $occymigcemkqucuw = false; } return $occymigcemkqucuw; } public function kggeaycqkokcquqk($auwuoyyagaiegwae = [], &$uamcoiueqaamsqma = '') : bool { $occymigcemkqucuw = false; try { $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\160\165\x72\x67\x65\137\x75\162\x6c\163\137\x6c\x69\x73\164"), $auwuoyyagaiegwae); if ($auwuoyyagaiegwae && is_array($auwuoyyagaiegwae)) { goto awgaewwsskasueke; } $uamcoiueqaamsqma = __("\x55\x72\154\x73\40\141\162\x65\x20\x65\x6d\160\164\x79\40\x66\157\162\x20\160\165\162\x67\x65\40\165\162\154\163\56", PR__MDL__OPTIMIZATION); goto cgmcwkmmcmmkiooc; awgaewwsskasueke: $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\x70\165\x72\147\145\137\x75\x72\x6c\x73"), $auwuoyyagaiegwae); cgmcwkmmcmmkiooc: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf("\x25\x73\x3a\40\45\x73", __("\x50\x75\162\x67\145\40\x75\162\154\x73\40\145\162\x72\157\x72", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } return $occymigcemkqucuw; } public function ycqquoiyyuesegsy($post) : string { return ManipulatePost::ycqquoiyyuesegsy($post); } public function ugwqkyyoomkmekqg() : bool { $ksaameoqigiaoigg = false; if (!$this->weysguygiseoukqw(Setting::kamcoqgmemeeqmsc)) { goto iisieuaeyiqwckou; } if (!extension_loaded("\x5a\x65\156\144\40\x4f\x50\x63\141\143\150\x65")) { goto uykwmucgoywoesui; } $iueymcwwscwqkiyq = opcache_get_status(); $iqsymysgkgosmiys = ManipulateArray::get($iueymcwwscwqkiyq, "\157\x70\x63\x61\143\x68\145\x5f\145\x6e\x61\142\x6c\145\144", false); if (!($iqsymysgkgosmiys && opcache_reset())) { goto eygqeoiskweuiuqi; } foreach (ManipulateArray::get($iueymcwwscwqkiyq, "\x73\143\162\151\x70\164\163") as $uusmaiomayssaecw => $icwicymcioeyeyek) { $qmwoqyacswkwkiog[dirname($uusmaiomayssaecw)][basename($uusmaiomayssaecw)] = $icwicymcioeyeyek; opcache_invalidate(ManipulateArray::get($icwicymcioeyeyek, "\146\165\x6c\x6c\x5f\160\141\x74\150"), $cwwowqyuwccuykom = true); wwccoougkywoaoui: } iamooqskosymqsmw: $this->oaumimwssciwumys("\120\165\162\x67\x65\x20\x4f\x50\143\141\x63\150\x65\40\143\141\143\x68\145"); $ksaameoqigiaoigg = true; eygqeoiskweuiuqi: uykwmucgoywoesui: iisieuaeyiqwckou: return $ksaameoqigiaoigg; } public function cekqoisoaceaqiam($post) : array { return ManipulatePost::cekqoisoaceaqiam($post); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); } }
