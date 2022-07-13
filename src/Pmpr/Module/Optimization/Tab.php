<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf030b239b1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\137\163\160\145\145\x64"; const okeoeeywmosegiiy = "\x66\141\151\154\x5f\163\141\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto wmywuusgukmmaams; } if (function_exists("\x67\145\x74\137\156\x65\x74\167\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto ewymsmkkiksgwysk; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\x74\160\163\x3a\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cmegwsegsosyqcai: wmywuusgukmmaams: return $ucaaeyusaoameywi; } }
