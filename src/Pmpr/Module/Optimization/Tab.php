<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65198726e209e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\x5f\x73\160\145\145\144"; const okeoeeywmosegiiy = "\146\141\x69\154\x5f\163\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto eiicmcasqikiyasw; } if (function_exists("\147\x65\164\137\x6e\x65\164\167\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto aqksouwmeckaqyaq; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto gmsyoscesymiwwue; aqksouwmeckaqyaq: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\x74\160\x73\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); gmsyoscesymiwwue: eiicmcasqikiyasw: return $ucaaeyusaoameywi; } }
