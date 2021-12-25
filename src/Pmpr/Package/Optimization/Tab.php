<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6c811ce588             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\x70\x5f\x73\x70\145\145\x64"; const okeoeeywmosegiiy = "\x66\141\x69\154\137\163\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto cuommomwmsackoqc; } if (function_exists("\147\145\x74\x5f\x6e\x65\x74\x77\x6f\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto iqsgossweywksoia; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto awaqksikyomsuaeo; iqsgossweywksoia: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\x74\160\163\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); awaqksikyomsuaeo: cuommomwmsackoqc: return $ucaaeyusaoameywi; } }
