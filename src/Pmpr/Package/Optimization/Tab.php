<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6226653654432             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\x5f\163\x70\145\x65\x64"; const okeoeeywmosegiiy = "\x66\141\x69\154\x5f\163\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto qogqewiwmwiwskgm; } if (function_exists("\147\x65\164\137\x6e\145\164\167\157\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto cecuyayqoioasumi; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto qiaqsassksqiuyae; cecuyayqoioasumi: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\x70\163\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); qiaqsassksqiuyae: qogqewiwmwiwskgm: return $ucaaeyusaoameywi; } }
