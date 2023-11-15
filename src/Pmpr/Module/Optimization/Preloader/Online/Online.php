<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554aae47c553             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader\Online; use Pmpr\Module\Optimization\Preloader\Base; use Pmpr\Module\Optimization\Preloader\Manager; class Online extends Base { public function mameiwsayuyquoeq() { Process::symcgieuakksimmu(); } public function start($auwuoyyagaiegwae) { if (!($ekacyecmisewiayg = API::symcgieuakksimmu())) { goto cwikoaeqmmoimmso; } $sogksuscggsicmac = $ekacyecmisewiayg->start($auwuoyyagaiegwae); if (is_numeric($sogksuscggsicmac)) { goto ykwasaaoeeiuomim; } foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->ieskuycqsewokycq($eeamcawaiqocomwy); iwueukqcywkiyqge: } micceocwuwkyusic: goto acggikioyeueeowg; ykwasaaoeeiuomim: if (!($acoioasmiqcwagsa = Process::symcgieuakksimmu())) { goto kqyoakickmseyyeq; } $acoioasmiqcwagsa->mykuoqakuiwsoiss([self::gouqcwikiiygyasc => $sogksuscggsicmac, self::eimuuyqioyqiqwgq => $auwuoyyagaiegwae])->save()->ieyosyaaisyquesq(); kqyoakickmseyyeq: acggikioyeueeowg: cwikoaeqmmoimmso: } public function mgyqciwsceoswuoq(int $gaeqamemwmwsyukm = 0) : bool { $sogksuscggsicmac = Manager::symcgieuakksimmu()->qwmwewiqecwieoue($gaeqamemwmwsyukm); return $sogksuscggsicmac && !is_wp_error($sogksuscggsicmac); } }
