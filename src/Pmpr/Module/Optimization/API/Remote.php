<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6689580cbf1c8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\150\x74\164\x70\72\x2f\57\61\x32\67\x2e\60\x2e\x30\56\61\72\65\x30\60\x30"]; if (!$usmiuwiumyygmucg) { goto cuykwgmswkskqkyi; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto csscmcacoikwsecs; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); csscmcacoikwsecs: asmecuqiyyswueqe: } myoicgcuugciueis: $this->kiaqywwoysssqgig("\x43\x6f\157\153\x69\x65", "\160\x6d\160\162\x2d\143\x6c\151\x65\156\164\75\x74\162\x75\x65"); parent::__construct(); cuykwgmswkskqkyi: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\57\x63\150\145\x63\x6b\x2d\x6a\x6f\x62", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto kiqogmwcgcamwiig; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto kwagwqyusyiyoaqs; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto sciwggaeogcoesiu; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; eqkauqciwewmgeoi: goto kuicqywysciceggs; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } mkwskuycuyguqqok: kuicqywysciceggs: yowsmsiyimmimemc: goto iomcaiwewsawiamu; kiqogmwcgcamwiig: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; iomcaiwewsawiamu: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
