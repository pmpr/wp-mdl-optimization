<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63010f2431cc2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\160\x5f\x73\x70\145\x65\x64"; const okeoeeywmosegiiy = "\x66\141\151\154\137\163\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto eysuawiooiswaseq; } if (function_exists("\147\145\x74\x5f\x6e\145\164\x77\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto suscosoukqeyyqgs; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto kiewcwsykccgocuc; suscosoukqeyyqgs: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\160\163\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); kiewcwsykccgocuc: eysuawiooiswaseq: return $ucaaeyusaoameywi; } }
