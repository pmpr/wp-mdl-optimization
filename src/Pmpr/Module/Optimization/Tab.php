<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6326c8204f364             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\x5f\163\160\145\145\x64"; const okeoeeywmosegiiy = "\x66\141\x69\x6c\137\x73\x61\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto suscosoukqeyyqgs; } if (function_exists("\147\145\164\137\x6e\145\x74\167\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto cueuscqkicwwicei; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto gcecamucuogcciig; cueuscqkicwwicei: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\164\160\163\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); gcecamucuogcciig: suscosoukqeyyqgs: return $ucaaeyusaoameywi; } }
