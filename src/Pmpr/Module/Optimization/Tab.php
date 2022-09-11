<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631d90d5edea8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\x5f\163\160\x65\145\144"; const okeoeeywmosegiiy = "\146\x61\151\154\137\163\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto suscosoukqeyyqgs; } if (function_exists("\x67\x65\x74\137\156\145\x74\167\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto cueuscqkicwwicei; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto gcecamucuogcciig; cueuscqkicwwicei: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\x70\x73\72\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); gcecamucuogcciig: suscosoukqeyyqgs: return $ucaaeyusaoameywi; } }
