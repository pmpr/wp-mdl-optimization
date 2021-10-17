<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616c16f754a56             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Media; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Package\Optimization\Asset\Setting; class Media extends Common { public function __construct() { parent::__construct(); } public function iemaakgqgqosiecm() { goto sagemooicmgceiug; uqcwyyiykmwygeau: if (!$this->weysguygiseoukqw(Setting::LAZY_LOAD_ENABLE, false)) { goto wcekgciqeggiiwgk; } goto yeiokcoikcysyimu; ekwuycsiuqwycqea: iyceygqsmokgmams: goto iyaugygcsmqqqkmo; iyaugygcsmqqqkmo: wcekgciqeggiiwgk: goto cieumoqayigkoocy; cieumoqayigkoocy: gkwuewqmqeswqukg: goto yggciikgkomgeqsc; sagemooicmgceiug: if (ManipulateAjax::mcgoysmkqsqooceq()) { goto gkwuewqmqeswqukg; } goto uqcwyyiykmwygeau; kkmwwqyesmkescyg: if (!($this->weysguygiseoukqw(Setting::IMAGE_COLOR_DOMINATOR, false) && extension_loaded("\107\104"))) { goto iyceygqsmokgmams; } goto uamuuwkyuqomqyuy; uamuuwkyuqomqyuy: Dominator::symcgieuakksimmu(); goto ekwuycsiuqwycqea; yeiokcoikcysyimu: LazyLoad::symcgieuakksimmu(); goto kkmwwqyesmkescyg; yggciikgkomgeqsc: } }
