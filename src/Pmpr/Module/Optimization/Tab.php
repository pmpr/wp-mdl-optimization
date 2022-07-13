<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf0451942c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\160\137\163\x70\x65\x65\x64"; const okeoeeywmosegiiy = "\146\x61\151\x6c\137\x73\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto wmywuusgukmmaams; } if (function_exists("\x67\145\164\137\x6e\x65\x74\167\x6f\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto ewymsmkkiksgwysk; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\x74\x70\163\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cmegwsegsosyqcai: wmywuusgukmmaams: return $ucaaeyusaoameywi; } }
