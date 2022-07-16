<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d28016e6c23             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\x70\137\x73\x70\145\145\144"; const okeoeeywmosegiiy = "\146\141\151\154\x5f\163\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto wmywuusgukmmaams; } if (function_exists("\x67\x65\x74\x5f\x6e\145\164\167\x6f\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto ewymsmkkiksgwysk; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\160\163\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cmegwsegsosyqcai: wmywuusgukmmaams: return $ucaaeyusaoameywi; } }
