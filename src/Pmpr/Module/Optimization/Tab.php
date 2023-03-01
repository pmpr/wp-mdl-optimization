<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff95f0a006d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\160\137\x73\x70\x65\145\144"; const okeoeeywmosegiiy = "\146\x61\x69\154\x5f\x73\x61\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto kmwwqgiacsoksgcy; } if (function_exists("\x67\x65\x74\x5f\x6e\x65\164\x77\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto seaiwkkgyyegiyug; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto uauuoyigkmqoasaq; seaiwkkgyyegiyug: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\x74\160\163\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); uauuoyigkmqoasaq: kmwwqgiacsoksgcy: return $ucaaeyusaoameywi; } }
