<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642bcfa634da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\160\x5f\163\160\145\145\144"; const okeoeeywmosegiiy = "\x66\x61\x69\x6c\137\163\x61\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto gkoaeuekqockuoiq; } if (function_exists("\x67\x65\164\137\x6e\145\x74\167\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto kwmiwaecqcgiaqye; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto yqicwmekwuoywyus; kwmiwaecqcgiaqye: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\x70\163\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); yqicwmekwuoywyus: gkoaeuekqockuoiq: return $ucaaeyusaoameywi; } }
