<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf1b954785e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\x70\137\163\160\x65\x65\144"; const okeoeeywmosegiiy = "\x66\x61\x69\x6c\137\163\x61\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto wmywuusgukmmaams; } if (function_exists("\x67\145\164\137\156\145\164\167\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto ewymsmkkiksgwysk; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\x74\x70\163\72\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cmegwsegsosyqcai: wmywuusgukmmaams: return $ucaaeyusaoameywi; } }
