<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c702ef003ac             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\137\163\x70\145\x65\x64"; const okeoeeywmosegiiy = "\146\x61\151\x6c\x5f\163\x61\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ggeoqeowscwkeumy; } if (function_exists("\x67\145\x74\x5f\x6e\x65\x74\167\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto awaqksikyomsuaeo; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto cuommomwmsackoqc; awaqksikyomsuaeo: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\x70\x73\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cuommomwmsackoqc: ggeoqeowscwkeumy: return $ucaaeyusaoameywi; } }
