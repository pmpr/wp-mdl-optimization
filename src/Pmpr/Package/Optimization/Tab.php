<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623bbb7c4a174             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\x5f\x73\x70\145\145\x64"; const okeoeeywmosegiiy = "\146\141\x69\x6c\137\x73\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto qogqewiwmwiwskgm; } if (function_exists("\x67\x65\x74\x5f\156\145\164\167\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto cecuyayqoioasumi; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto qiaqsassksqiuyae; cecuyayqoioasumi: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\x70\x73\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); qiaqsassksqiuyae: qogqewiwmwiwskgm: return $ucaaeyusaoameywi; } }
