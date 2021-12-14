<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b865b46dbbe             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Preloader\API; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\API\Heroku as BaseClass; class Heroku extends BaseClass { public function start($egeqeuwiswigogyk = []) : bool { if (is_array($egeqeuwiswigogyk) && count($egeqeuwiswigogyk) > 0) { goto oqckuigyqswmqcqg; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\120\145\162\x6d\141\x6c\151\156\153\x73\40\x6c\x69\x73\164\40\151\163\40\x65\155\160\x74\171", PR__PKG__OPTIMIZATION)); goto owismwmeqcmukagu; oqckuigyqswmqcqg: $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\160\162\x65\154\x6f\141\144", [self::FORM_PARAMS => ["\141\x70\151\153\145\171" => $this->eegcqkwceasicmek(), "\160\x65\162\x6d\141\154\x69\x6e\x6b\x73" => $egeqeuwiswigogyk]], self::POST); if (isset($sogksuscggsicmac[self::ID])) { goto cceggewquoaemcwq; } $sogksuscggsicmac = $this->oemauiimmycumcsk(ManipulateArray::get($sogksuscggsicmac, self::MESSAGE)); goto ioiwoukauoeamuca; cceggewquoaemcwq: $sogksuscggsicmac = true; ioiwoukauoeamuca: owismwmeqcmukagu: return $sogksuscggsicmac; } }
