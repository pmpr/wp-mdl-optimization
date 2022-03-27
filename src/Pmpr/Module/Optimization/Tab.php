<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62400e586ca94             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\x70\x5f\163\x70\145\145\x64"; const okeoeeywmosegiiy = "\x66\x61\151\x6c\137\163\x61\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto qogqewiwmwiwskgm; } if (function_exists("\147\x65\x74\137\156\145\164\167\157\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto cecuyayqoioasumi; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto qiaqsassksqiuyae; cecuyayqoioasumi: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\164\160\x73\72\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); qiaqsassksqiuyae: qogqewiwmwiwskgm: return $ucaaeyusaoameywi; } }
