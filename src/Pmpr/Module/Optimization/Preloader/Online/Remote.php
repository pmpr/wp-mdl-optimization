<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6318774774141             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader\Online; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Remote as BaseClass; use WP_Error; class Remote extends BaseClass { public function start(array $egeqeuwiswigogyk = []) { if (is_array($egeqeuwiswigogyk) && count($egeqeuwiswigogyk) > 0) { goto coywmiyqgsweuiic; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x50\x65\162\x6d\141\154\x69\156\153\163\x20\x6c\151\x73\x74\x20\x69\x73\40\x65\155\x70\x74\x79", PR__MDL__OPTIMIZATION)); goto siqagquguiemuoku; coywmiyqgsweuiic: $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x70\162\145\154\x6f\x61\x64", [self::kugiewcgiawaeiaq => ["\x61\160\151\x6b\x65\x79" => $this->eegcqkwceasicmek(), "\160\x65\162\x6d\141\x6c\151\156\153\163" => $egeqeuwiswigogyk]], self::mswoacegomcucaik); if (is_wp_error($sogksuscggsicmac)) { goto ieumumsgyguceusy; } $sogksuscggsicmac = $sogksuscggsicmac[self::gouqcwikiiygyasc] ?? $this->oemauiimmycumcsk(ManipulateArray::get($sogksuscggsicmac, self::eoskkkieowogacws)); ieumumsgyguceusy: siqagquguiemuoku: return $sogksuscggsicmac; } public function iiqkkwaioemuymuu($aokagokqyuysuksm) : string { $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x63\x68\x65\x63\x6b", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm, self::squoamkioomemiyi => "\x70\162\145\154\x6f\x61\144"]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto kciouyuaqkyqomam; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto wwkgkaecgiwggcck; kciouyuaqkyqomam: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto sycygoiaiqqageym; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto gygawoqywkukmqee; sycygoiaiqqageym: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; gygawoqywkukmqee: goto ycakugokkqkuqyiu; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } oouoqimaaqcmccay: ycakugokkqkuqyiu: wwkgkaecgiwggcck: return $iueymcwwscwqkiyq; } }
