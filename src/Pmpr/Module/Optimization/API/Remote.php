<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663698627f721             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\x68\x74\164\160\72\x2f\x2f\x31\x32\67\x2e\60\x2e\x30\56\61\72\x35\60\x30\x30"]; if (!$usmiuwiumyygmucg) { goto mciumqyyossyiuyk; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto uwusswwekqcsisus; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); uwusswwekqcsisus: kssuqmsgmaaeqigw: } egwgyekaiqomyeaa: $this->kiaqywwoysssqgig("\103\x6f\157\x6b\151\x65", "\160\x6d\x70\162\55\x63\154\151\x65\x6e\x74\75\x74\x72\x75\145"); parent::__construct(); mciumqyyossyiuyk: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f{$this->gueasuouwqysmomu()}\x2f\143\150\x65\143\x6b\x2d\152\x6f\x62", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto ugikgkwuwmgymgus; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto omgcsmsikaggaooc; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto wykuosegisygosiq; omgcsmsikaggaooc: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto mukwsuuuqcgesmwc; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto cqeoguiqiymkyweo; mukwsuuuqcgesmwc: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; cqeoguiqiymkyweo: goto acaeigkmigikeuyu; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } kqyeukywmgismyaq: acaeigkmigikeuyu: wykuosegisygosiq: goto gsgyayuaekgyoumc; ugikgkwuwmgymgus: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; gsgyayuaekgyoumc: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
