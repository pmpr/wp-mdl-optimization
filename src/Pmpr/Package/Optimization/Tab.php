<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6df5c89942             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\x70\x5f\163\160\145\145\x64"; const okeoeeywmosegiiy = "\x66\x61\151\154\137\163\141\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ggeoqeowscwkeumy; } if (function_exists("\147\x65\164\137\x6e\x65\164\167\157\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto awaqksikyomsuaeo; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto cuommomwmsackoqc; awaqksikyomsuaeo: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\164\160\163\x3a\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cuommomwmsackoqc: ggeoqeowscwkeumy: return $ucaaeyusaoameywi; } }
