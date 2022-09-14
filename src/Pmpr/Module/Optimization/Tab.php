<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6321c656ef420             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\x5f\163\160\145\145\144"; const okeoeeywmosegiiy = "\x66\141\x69\x6c\x5f\163\x61\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto suscosoukqeyyqgs; } if (function_exists("\147\x65\x74\x5f\156\145\x74\x77\x6f\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto cueuscqkicwwicei; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto gcecamucuogcciig; cueuscqkicwwicei: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\x74\160\x73\x3a\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); gcecamucuogcciig: suscosoukqeyyqgs: return $ucaaeyusaoameywi; } }
