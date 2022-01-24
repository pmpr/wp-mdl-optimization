<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec5407a60a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\160\137\163\160\145\145\144"; const okeoeeywmosegiiy = "\x66\x61\151\x6c\137\163\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto cmmusgkieoqyymgs; } if (function_exists("\x67\x65\164\137\156\x65\164\x77\157\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto kmooekeyemqgucci; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto skuuyysooocugyww; kmooekeyemqgucci: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\160\163\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); skuuyysooocugyww: cmmusgkieoqyymgs: return $ucaaeyusaoameywi; } }
