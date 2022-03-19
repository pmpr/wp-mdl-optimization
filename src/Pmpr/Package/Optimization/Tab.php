<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6236574ee781a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\137\163\x70\145\145\x64"; const okeoeeywmosegiiy = "\146\141\x69\154\137\x73\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto qogqewiwmwiwskgm; } if (function_exists("\x67\x65\164\x5f\x6e\x65\x74\x77\x6f\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto cecuyayqoioasumi; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto qiaqsassksqiuyae; cecuyayqoioasumi: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\160\163\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); qiaqsassksqiuyae: qogqewiwmwiwskgm: return $ucaaeyusaoameywi; } }
