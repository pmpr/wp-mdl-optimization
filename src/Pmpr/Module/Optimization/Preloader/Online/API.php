<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642bcfa634da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader\Online; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Remote; use WP_Error; class API extends Remote { public function start(array $egeqeuwiswigogyk = []) { if (is_array($egeqeuwiswigogyk) && count($egeqeuwiswigogyk) > 0) { goto cugkqmkuyuwwqcec; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x50\x65\162\x6d\141\154\x69\156\153\163\x20\154\151\x73\164\x20\151\163\40\145\x6d\160\164\171", PR__MDL__OPTIMIZATION)); goto ewooakeuigcyuemu; cugkqmkuyuwwqcec: $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x6a\157\x62\x2f\x70\162\x65\154\157\141\x64", [self::kugiewcgiawaeiaq => ["\141\x70\151\153\145\x79" => $this->eegcqkwceasicmek(), "\x70\145\x72\155\x61\154\151\x6e\x6b\x73" => $egeqeuwiswigogyk]], self::mswoacegomcucaik); if (is_wp_error($sogksuscggsicmac)) { goto ekmqouqsgsaukeiq; } $sogksuscggsicmac = $sogksuscggsicmac[self::gouqcwikiiygyasc] ?? $this->oemauiimmycumcsk(ManipulateArray::get($sogksuscggsicmac, self::eoskkkieowogacws)); ekmqouqsgsaukeiq: ewooakeuigcyuemu: return $sogksuscggsicmac; } public function yucicikmqgicagas($aokagokqyuysuksm) : string { $sogksuscggsicmac = $this->uiqqikcuycqyeooa($aokagokqyuysuksm, "\x70\162\145\x6c\x6f\141\x64"); return ManipulateArray::get($sogksuscggsicmac, self::ciywsqoeiymemsys); } }
