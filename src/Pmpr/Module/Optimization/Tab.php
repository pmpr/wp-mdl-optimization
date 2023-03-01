<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbf6dd4c36             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\x5f\x73\160\x65\145\144"; const okeoeeywmosegiiy = "\x66\141\x69\154\x5f\x73\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto kmwwqgiacsoksgcy; } if (function_exists("\x67\145\x74\137\156\145\x74\167\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto seaiwkkgyyegiyug; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto uauuoyigkmqoasaq; seaiwkkgyyegiyug: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\x70\163\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); uauuoyigkmqoasaq: kmwwqgiacsoksgcy: return $ucaaeyusaoameywi; } }
