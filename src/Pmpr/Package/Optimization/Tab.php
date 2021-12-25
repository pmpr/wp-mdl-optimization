<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6d174213a3             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\160\137\163\160\x65\145\144"; const okeoeeywmosegiiy = "\x66\x61\x69\154\137\163\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto cuommomwmsackoqc; } if (function_exists("\x67\145\x74\x5f\x6e\145\164\x77\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto iqsgossweywksoia; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto awaqksikyomsuaeo; iqsgossweywksoia: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\160\163\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); awaqksikyomsuaeo: cuommomwmsackoqc: return $ucaaeyusaoameywi; } }
