<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d54d68de54c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\x70\137\163\x70\x65\x65\144"; const okeoeeywmosegiiy = "\x66\x61\151\154\137\163\141\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ggeoqeowscwkeumy; } if (function_exists("\147\x65\x74\x5f\156\145\164\167\157\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto awaqksikyomsuaeo; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto cuommomwmsackoqc; awaqksikyomsuaeo: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\164\x70\163\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cuommomwmsackoqc: ggeoqeowscwkeumy: return $ucaaeyusaoameywi; } }
