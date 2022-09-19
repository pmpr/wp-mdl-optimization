<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281a1ecd5e6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\x70\x5f\x73\160\x65\145\x64"; const okeoeeywmosegiiy = "\x66\x61\x69\x6c\137\x73\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto suscosoukqeyyqgs; } if (function_exists("\x67\145\x74\x5f\x6e\x65\164\x77\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto cueuscqkicwwicei; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto gcecamucuogcciig; cueuscqkicwwicei: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\x74\160\163\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); gcecamucuogcciig: suscosoukqeyyqgs: return $ucaaeyusaoameywi; } }
