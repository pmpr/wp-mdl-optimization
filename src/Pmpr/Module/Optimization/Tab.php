<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631c3953605e9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\160\137\163\x70\145\x65\x64"; const okeoeeywmosegiiy = "\x66\x61\151\x6c\137\x73\x61\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto suscosoukqeyyqgs; } if (function_exists("\147\x65\164\137\x6e\x65\164\167\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto cueuscqkicwwicei; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto gcecamucuogcciig; cueuscqkicwwicei: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\164\160\x73\x3a\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); gcecamucuogcciig: suscosoukqeyyqgs: return $ucaaeyusaoameywi; } }
