<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631839907f5b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Exception; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; class Buffer extends BaseClass implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = "\x6f\160\164\x69\155\x69\172\x61\x74\151\157\x6e\x5f\160\x72\x6f\x63\x65\163\163"; public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto mkwskuycuyguqqok; } ob_start([$this, "\x6f\161\143\x71\153\157\161\167\143\x75\157\x71\x75\x73\153\x75"]); mkwskuycuyguqqok: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\142\x75\x66\146\x65\162\137\x62\145\146\157\162\x65\137\x6d\141\x79\142\145\137\160\162\x6f\x63\x65\x73\x73"), $moooemyaqewumiay); if (!$this->uuksaskqamgouosy($moooemyaqewumiay)) { goto kwagwqyusyiyoaqs; } if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto sciwggaeogcoesiu; } $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\x62\165\146\146\145\x72\x5f\x6e\x6f\x74\x5f\x70\162\157\x63\x65\163\x73\x65\144"), $moooemyaqewumiay); goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x62\165\x66\146\145\162\x5f\x62\x65\x66\x6f\x72\145\137\160\162\x6f\x63\145\x73\x73"), $moooemyaqewumiay); $this->log("\x6f\160\x74\x69\x6d\151\x7a\141\x74\151\x6f\x6e\x20\142\165\146\x66\x65\162\40\x70\162\x6f\x63\x65\x73\x73\x20\x73\164\141\x72\x74\x2e"); try { $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\142\165\x66\x66\145\162\x5f\x70\162\x6f\x63\145\x73\163"), $moooemyaqewumiay); } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); $this->log("\x65\162\x72\x6f\x72\x20\157\x6e\40\142\165\146\x66\145\162\x20\x6f\x70\164\x69\x6d\151\x7a\x61\x74\x69\157\x6e\72\x20{$uamcoiueqaamsqma}"); } eqkauqciwewmgeoi: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\x62\x75\x66\146\145\x72\x5f\x61\x66\164\145\162\x5f\x70\162\x6f\x63\x65\163\x73"), $moooemyaqewumiay); $moooemyaqewumiay = $this->kcikawaummeuyeoq($moooemyaqewumiay); kwagwqyusyiyoaqs: return $moooemyaqewumiay; } public function kcikawaummeuyeoq($moooemyaqewumiay) { $moooemyaqewumiay = html_entity_decode($moooemyaqewumiay); if (!preg_match_all("\57\150\162\x65\146\134\163\x2a\75\134\163\x2a\50\x3f\x3a\133\42\47\x5d\50\133\136\x22\x27\x5d\52\x29\x5b\x22\x27\135\174\50\x5c\123\53\x29\51\x2f", $moooemyaqewumiay, $meyiiwcswqmuggyg)) { goto iomcaiwewsawiamu; } foreach ($meyiiwcswqmuggyg[1] as $geecqyososceumsk) { $moooemyaqewumiay = str_replace($geecqyososceumsk, urldecode($geecqyososceumsk), $moooemyaqewumiay); kiqogmwcgcamwiig: } yowsmsiyimmimemc: iomcaiwewsawiamu: return $moooemyaqewumiay; } }
