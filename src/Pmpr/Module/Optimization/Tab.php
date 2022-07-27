<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0ae98933fc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\160\137\x73\160\x65\145\x64"; const okeoeeywmosegiiy = "\x66\x61\151\154\137\x73\x61\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ewooakeuigcyuemu; } if (function_exists("\147\x65\164\137\x6e\x65\164\x77\x6f\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto ekmqouqsgsaukeiq; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto cugkqmkuyuwwqcec; ekmqouqsgsaukeiq: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\164\x70\x73\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cugkqmkuyuwwqcec: ewooakeuigcyuemu: return $ucaaeyusaoameywi; } }
