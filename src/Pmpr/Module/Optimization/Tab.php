<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb0824ce5d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\137\x73\160\x65\145\x64"; const okeoeeywmosegiiy = "\146\141\x69\154\137\x73\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto kiqmcymowosckmii; } if (function_exists("\x67\x65\x74\x5f\x6e\x65\164\167\x6f\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto iisieuaeyiqwckou; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto oskwkeaemiqcaqkc; iisieuaeyiqwckou: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\x70\x73\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); oskwkeaemiqcaqkc: kiqmcymowosckmii: return $ucaaeyusaoameywi; } }
