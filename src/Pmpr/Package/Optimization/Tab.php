<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0324e0f3b2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const TOP_SPEED = "\x74\157\x70\137\163\x70\145\x65\144"; const FAIL_SAFE = "\146\141\x69\154\x5f\163\141\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ekoqieigyoeyauqa; } if (function_exists("\x67\145\x74\x5f\156\145\x74\x77\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto ssagcgqaucssyego; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto mqgeseysuwcaqwiy; ssagcgqaucssyego: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\160\163\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); mqgeseysuwcaqwiy: ekoqieigyoeyauqa: return $ucaaeyusaoameywi; } }
