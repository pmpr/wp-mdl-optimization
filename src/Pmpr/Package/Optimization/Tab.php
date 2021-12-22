<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c342aab9e69             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\x70\137\x73\160\145\x65\x64"; const okeoeeywmosegiiy = "\x66\x61\151\x6c\137\x73\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ekoqieigyoeyauqa; } if (function_exists("\147\145\164\137\156\x65\164\x77\157\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto ssagcgqaucssyego; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto mqgeseysuwcaqwiy; ssagcgqaucssyego: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\x74\x70\163\x3a\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); mqgeseysuwcaqwiy: ekoqieigyoeyauqa: return $ucaaeyusaoameywi; } }
