<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652e84fe9c69b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Module\Optimization\Optimization; class Remote extends Cartridge { public function __construct() { if (!($usmiuwiumyygmucg = DecoratorOption::get(Optimization::ikmkgmwegyasgqmo, []))) { goto ckuagmyqkyoeeaeu; } foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!ManipulateValidation::wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto kcomueysiyyqagus; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); kcomueysiyyqagus: amoygaweoeymiuiy: } moimkkmkooeiyisc: $this->kiaqywwoysssqgig("\103\x6f\x6f\153\151\145", "\x70\155\160\162\55\143\154\151\145\156\164\x3d\164\162\165\x65"); parent::__construct(); ckuagmyqkyoeeaeu: } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm, ?string $sqeykgyoooqysmca) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x6a\x6f\x62\57\x63\x68\145\143\x6b", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm, self::squoamkioomemiyi => $sqeykgyoooqysmca]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto ossyqogewmggmaoc; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto eekeksysqeuoskoo; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto okemsmmeceoeaswi; eekeksysqeuoskoo: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto kiwiesucugwoiuum; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto cmagycousakeeaei; kiwiesucugwoiuum: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; cmagycousakeeaei: goto cqwgmwqiakmgyuee; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } ksgwgcguemcescqg: cqwgmwqiakmgyuee: okemsmmeceoeaswi: goto ggkoiouwecyiosym; ossyqogewmggmaoc: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; ggkoiouwecyiosym: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
