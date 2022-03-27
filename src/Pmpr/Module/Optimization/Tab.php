<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a41b79ab5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\160\137\x73\160\145\x65\x64"; const okeoeeywmosegiiy = "\146\x61\151\154\x5f\x73\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto qogqewiwmwiwskgm; } if (function_exists("\x67\145\164\137\x6e\x65\164\167\157\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto cecuyayqoioasumi; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto qiaqsassksqiuyae; cecuyayqoioasumi: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\x70\163\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); qiaqsassksqiuyae: qogqewiwmwiwskgm: return $ucaaeyusaoameywi; } }
