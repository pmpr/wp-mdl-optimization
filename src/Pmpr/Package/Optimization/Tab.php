<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c3b079117a4             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\x5f\x73\160\145\145\144"; const okeoeeywmosegiiy = "\146\141\151\154\137\163\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ekoqieigyoeyauqa; } if (function_exists("\x67\x65\x74\137\x6e\145\164\167\x6f\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto ssagcgqaucssyego; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto mqgeseysuwcaqwiy; ssagcgqaucssyego: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\164\160\x73\72\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); mqgeseysuwcaqwiy: ekoqieigyoeyauqa: return $ucaaeyusaoameywi; } }
