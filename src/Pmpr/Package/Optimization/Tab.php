<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fcad85629             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const TOP_SPEED = "\164\157\160\x5f\x73\160\145\145\144"; const FAIL_SAFE = "\146\141\151\x6c\137\163\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ekoqieigyoeyauqa; } if (function_exists("\147\x65\x74\137\156\145\x74\167\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto ssagcgqaucssyego; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto mqgeseysuwcaqwiy; ssagcgqaucssyego: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\x70\163\x3a\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); mqgeseysuwcaqwiy: ekoqieigyoeyauqa: return $ucaaeyusaoameywi; } }
