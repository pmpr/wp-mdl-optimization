<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf2522bd2c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\x70\x5f\163\160\x65\x65\144"; const okeoeeywmosegiiy = "\146\141\151\154\137\x73\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto wmywuusgukmmaams; } if (function_exists("\147\145\x74\x5f\156\x65\164\x77\157\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto ewymsmkkiksgwysk; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\164\x70\x73\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cmegwsegsosyqcai: wmywuusgukmmaams: return $ucaaeyusaoameywi; } }
