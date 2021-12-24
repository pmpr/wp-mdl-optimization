<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c623ad3a21f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\160\x5f\x73\x70\145\145\x64"; const okeoeeywmosegiiy = "\146\x61\151\154\137\163\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ekoqieigyoeyauqa; } if (function_exists("\147\145\164\x5f\x6e\x65\164\x77\x6f\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto ssagcgqaucssyego; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto mqgeseysuwcaqwiy; ssagcgqaucssyego: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\x74\160\x73\72\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); mqgeseysuwcaqwiy: ekoqieigyoeyauqa: return $ucaaeyusaoameywi; } }
