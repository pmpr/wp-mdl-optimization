<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffc5814be8b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\x5f\163\160\145\145\x64"; const okeoeeywmosegiiy = "\146\x61\x69\154\137\163\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto kmwwqgiacsoksgcy; } if (function_exists("\147\145\164\x5f\x6e\x65\x74\x77\x6f\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto seaiwkkgyyegiyug; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto uauuoyigkmqoasaq; seaiwkkgyyegiyug: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\160\x73\72\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); uauuoyigkmqoasaq: kmwwqgiacsoksgcy: return $ucaaeyusaoameywi; } }
