<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b8710debefd             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Preloader\API; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\API\Heroku as BaseClass; class Heroku extends BaseClass { public function start($egeqeuwiswigogyk = []) : bool { if (is_array($egeqeuwiswigogyk) && count($egeqeuwiswigogyk) > 0) { goto owismwmeqcmukagu; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x50\x65\x72\x6d\x61\154\151\156\x6b\163\40\154\151\163\164\x20\151\x73\40\145\155\160\164\171", PR__PKG__OPTIMIZATION)); goto oiywguooqeasueqq; owismwmeqcmukagu: $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\160\162\145\x6c\x6f\141\144", [self::FORM_PARAMS => ["\x61\160\x69\x6b\x65\x79" => $this->eegcqkwceasicmek(), "\160\x65\162\x6d\141\154\x69\156\153\163" => $egeqeuwiswigogyk]], self::POST); if (isset($sogksuscggsicmac[self::ID])) { goto ioiwoukauoeamuca; } $sogksuscggsicmac = $this->oemauiimmycumcsk(ManipulateArray::get($sogksuscggsicmac, self::MESSAGE)); goto oqckuigyqswmqcqg; ioiwoukauoeamuca: $sogksuscggsicmac = true; oqckuigyqswmqcqg: oiywguooqeasueqq: return $sogksuscggsicmac; } }
