<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63921303a86c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader\Online; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Remote; use WP_Error; class API extends Remote { public function start(array $egeqeuwiswigogyk = []) { if (is_array($egeqeuwiswigogyk) && count($egeqeuwiswigogyk) > 0) { goto yoociieskmuucgms; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x50\x65\x72\x6d\x61\154\151\x6e\x6b\x73\40\x6c\151\x73\164\x20\x69\163\x20\145\x6d\160\164\171", PR__MDL__OPTIMIZATION)); goto ysiuiuqawkaaamus; yoociieskmuucgms: $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\152\157\x62\x2f\x70\162\145\x6c\157\x61\x64", [self::kugiewcgiawaeiaq => ["\x61\x70\151\153\145\171" => $this->eegcqkwceasicmek(), "\x70\145\x72\x6d\141\x6c\151\156\x6b\x73" => $egeqeuwiswigogyk]], self::mswoacegomcucaik); if (is_wp_error($sogksuscggsicmac)) { goto dwciioycickkwawq; } $sogksuscggsicmac = $sogksuscggsicmac[self::gouqcwikiiygyasc] ?? $this->oemauiimmycumcsk(ManipulateArray::get($sogksuscggsicmac, self::eoskkkieowogacws)); dwciioycickkwawq: ysiuiuqawkaaamus: return $sogksuscggsicmac; } public function yucicikmqgicagas($aokagokqyuysuksm) : string { $sogksuscggsicmac = $this->uiqqikcuycqyeooa($aokagokqyuysuksm, "\160\162\145\154\157\x61\144"); return ManipulateArray::get($sogksuscggsicmac, self::ciywsqoeiymemsys); } }
