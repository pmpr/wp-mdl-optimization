<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c62928722d7             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\x5f\163\160\x65\145\x64"; const okeoeeywmosegiiy = "\x66\141\151\154\137\163\x61\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto cuommomwmsackoqc; } if (function_exists("\x67\x65\164\x5f\156\x65\164\x77\x6f\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto iqsgossweywksoia; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto awaqksikyomsuaeo; iqsgossweywksoia: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\x70\x73\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); awaqksikyomsuaeo: cuommomwmsackoqc: return $ucaaeyusaoameywi; } }
