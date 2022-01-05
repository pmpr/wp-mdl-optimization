<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d55de5ebbe6             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\x5f\x73\160\x65\x65\x64"; const okeoeeywmosegiiy = "\146\x61\x69\x6c\x5f\163\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ggeoqeowscwkeumy; } if (function_exists("\x67\145\164\137\x6e\145\164\x77\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto awaqksikyomsuaeo; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto cuommomwmsackoqc; awaqksikyomsuaeo: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\x74\x70\163\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cuommomwmsackoqc: ggeoqeowscwkeumy: return $ucaaeyusaoameywi; } }
