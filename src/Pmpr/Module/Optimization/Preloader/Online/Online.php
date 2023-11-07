<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a156d8f54b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader\Online; use Pmpr\Module\Optimization\Preloader\Base; use Pmpr\Module\Optimization\Preloader\Manager; class Online extends Base { public function mameiwsayuyquoeq() { Process::symcgieuakksimmu(); } public function start($auwuoyyagaiegwae) { if (!($ekacyecmisewiayg = API::symcgieuakksimmu())) { goto acggikioyeueeowg; } $sogksuscggsicmac = $ekacyecmisewiayg->start($auwuoyyagaiegwae); if (is_numeric($sogksuscggsicmac)) { goto iwueukqcywkiyqge; } foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->ieskuycqsewokycq($eeamcawaiqocomwy); micceocwuwkyusic: } kqyoakickmseyyeq: goto ykwasaaoeeiuomim; iwueukqcywkiyqge: if (!($acoioasmiqcwagsa = Process::symcgieuakksimmu())) { goto aukucaieceiwesmm; } $acoioasmiqcwagsa->mykuoqakuiwsoiss([self::gouqcwikiiygyasc => $sogksuscggsicmac, self::eimuuyqioyqiqwgq => $auwuoyyagaiegwae])->save()->ieyosyaaisyquesq(); aukucaieceiwesmm: ykwasaaoeeiuomim: acggikioyeueeowg: } public function mgyqciwsceoswuoq(int $gaeqamemwmwsyukm = 0) : bool { $sogksuscggsicmac = Manager::symcgieuakksimmu()->qwmwewiqecwieoue($gaeqamemwmwsyukm); return $sogksuscggsicmac && !is_wp_error($sogksuscggsicmac); } }
