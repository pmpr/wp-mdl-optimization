<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce7059178ec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Remote extends Cartridge { const ikmkgmwegyasgqmo = Optimization::kgswyesggeyekgmg . "\x72\x65\x6d\x6f\164\145\137\x61\160\x70\163"; protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ikmkgmwegyasgqmo, []); if (!$usmiuwiumyygmucg) { goto qwigomakwmyiwkgo; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto qgoiooayqmqqsiok; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); qgoiooayqmqqsiok: qogqewiwmwiwskgm: } qiaqsassksqiuyae: $this->kiaqywwoysssqgig("\103\x6f\157\153\151\145", "\x70\155\x70\x72\55\143\154\x69\145\x6e\x74\75\x74\162\165\145"); parent::__construct(); qwigomakwmyiwkgo: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\57\143\150\x65\143\153\55\152\x6f\142", [self::kugiewcgiawaeiaq => [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm]], Constants::mswoacegomcucaik); $iueymcwwscwqkiyq = Constants::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto sciwggaeogcoesiu; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[Constants::eikgweiqgomeisyo])) { goto kuicqywysciceggs; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto mkwskuycuyguqqok; kuicqywysciceggs: switch ($sogksuscggsicmac[Constants::eikgweiqgomeisyo]) { case Constants::amcogigwsaqssuai: if (isset($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) && $sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto csscmcacoikwsecs; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto cuykwgmswkskqkyi; csscmcacoikwsecs: $iueymcwwscwqkiyq = Constants::gymusgeumuwomwuy; cuykwgmswkskqkyi: goto myoicgcuugciueis; case Constants::uasuowkaguiwoouw: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } asmecuqiyyswueqe: myoicgcuugciueis: mkwskuycuyguqqok: goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; eqkauqciwewmgeoi: return [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::uiwqcumqkgikqyue => $sogksuscggsicmac[Constants::uiwqcumqkgikqyue] ?? []]; } }
