<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1693fe2664             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; class Subscription extends Container { use SubscriptionEngineTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu(Process::coeiogimesmgases, [$this, 'aiamukikcuowsiku'])->qcsmikeggeemccuu(Process::yagmsygwcocaqmqy, [$this, 'kkoiekimueuqikom']); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . 'update_coins', [$this, 'yocmccikmcckiegu']); } public function mameiwsayuyquoeq() { Page::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function yeyiguyegmmyusea() { Process::symcgieuakksimmu()->gqgseoowsgqemmgu(); } public function yocmccikmcckiegu($imeywacwecgemcco) { if (is_numeric($imeywacwecgemcco) && $imeywacwecgemcco > 0) { $qwgquweoiskugckg = $this->cqscwmqsgomkogoq()->ewgciagyquksawee(); $qgeeqyucwycemwmo = [Constants::eoigaocgcaekssuw, Constants::mayesweykoooyugy]; foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { if ($imeywacwecgemcco <= 0) { break; } $megmggkiokqkcwou = $qwgquweoiskugckg[$sqeykgyoooqysmca][Constants::ALL] ?? 0; $sqsyqsscqaauwyyy = $qwgquweoiskugckg[$sqeykgyoooqysmca][Constants::gikauwqcswqcsmqw] ?? 0; if ($megmggkiokqkcwou > 0 && $sqsyqsscqaauwyyy < $megmggkiokqkcwou) { $bsgyawiqyuquqmyy = $megmggkiokqkcwou - $sqsyqsscqaauwyyy; if ($bsgyawiqyuquqmyy > $imeywacwecgemcco) { $sqsyqsscqaauwyyy += $imeywacwecgemcco; $imeywacwecgemcco = 0; } else { $sqsyqsscqaauwyyy = $megmggkiokqkcwou; $imeywacwecgemcco -= $bsgyawiqyuquqmyy; } $qwgquweoiskugckg[$sqeykgyoooqysmca][Constants::gikauwqcswqcsmqw] = $sqsyqsscqaauwyyy; } } $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Engine::mkciamyomkiccoes, $qwgquweoiskugckg); } } public function kkoiekimueuqikom() { $this->cqscwmqsgomkogoq()->acgeiccowcqiwmqa(); $this->aiamukikcuowsiku(); } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) { if ($this->cqscwmqsgomkogoq()->aiamukikcuowsiku($suaemuyiacqyugsm)) { Process::symcgieuakksimmu()->gposkkqsquyqiguk($suaemuyiacqyugsm + 1); } } }
