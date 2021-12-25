<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c707b39ae82             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\137\163\160\x65\145\x64"; const okeoeeywmosegiiy = "\x66\x61\x69\x6c\137\163\141\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ggeoqeowscwkeumy; } if (function_exists("\x67\x65\164\x5f\x6e\x65\x74\167\x6f\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto awaqksikyomsuaeo; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto cuommomwmsackoqc; awaqksikyomsuaeo: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\164\x70\163\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cuommomwmsackoqc: ggeoqeowscwkeumy: return $ucaaeyusaoameywi; } }
