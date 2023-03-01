<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbdfd59a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\x5f\163\x70\145\145\144"; const okeoeeywmosegiiy = "\x66\141\x69\x6c\x5f\x73\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto kmwwqgiacsoksgcy; } if (function_exists("\147\x65\164\x5f\156\145\164\167\x6f\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto seaiwkkgyyegiyug; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto uauuoyigkmqoasaq; seaiwkkgyyegiyug: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\x74\x70\163\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); uauuoyigkmqoasaq: kmwwqgiacsoksgcy: return $ucaaeyusaoameywi; } }
