<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665aeae0c9976             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use WP_Error; class Engine extends Common { private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto ywokggauuiosegog; } $this->api = API::symcgieuakksimmu(); ywokggauuiosegog: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto uoewiggumomegksg; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); uoewiggumomegksg: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto sockocsycmkaeosg; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); sockocsycmkaeosg: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ugkwqaywmwqucoeo; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); ugkwqaywmwqucoeo: return $ksaameoqigiaoigg; } public function mikgocywwwusmsas() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ekmacukqumaiaquo = true; $yqqcyigggososiuo = $this->weysguygiseoukqw(Setting::aamcsokqosuccmmw, ''); if (!$yqqcyigggososiuo) { goto syisomgawcsqeemk; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($yqqcyigggososiuo); $ekmacukqumaiaquo = $kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo); syisomgawcsqeemk: if (!$ekmacukqumaiaquo) { goto kwasqmcyiswoaiuu; } $yqqcyigggososiuo = $yqimccamkgmmuuyg->ecciuwqaigwgcgca(); if (!(!$yqqcyigggososiuo || is_wp_error($yqqcyigggososiuo))) { goto asoecuscmsyusmkg; } $yqqcyigggososiuo = ''; asoecuscmsyusmkg: kwasqmcyiswoaiuu: $this->ewqscwwmugoqwomg(Setting::aamcsokqosuccmmw, $yqqcyigggososiuo); return $yqqcyigggososiuo; } public function cwwaoacweogeycuc() { $ksaameoqigiaoigg = false; $suaeeqiusywgcoyy = $this->weysguygiseoukqw(Setting::waigouyyouwkmeak, ''); if (!($suaeeqiusywgcoyy !== '')) { goto aqekkeqmmewoyawu; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($suaeeqiusywgcoyy); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto awuwuuuagqysukku; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto miugmimciywcgswm; awuwuuuagqysukku: $this->ewqscwwmugoqwomg(Setting::waigouyyouwkmeak, ''); $yqqcyigggososiuo = $this->weysguygiseoukqw(Setting::aamcsokqosuccmmw); if (!($yqqcyigggososiuo !== '')) { goto kkmuuoscccmokkiw; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($yqqcyigggososiuo); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto kiskwawumeiiieuk; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto oaqeoqsksuyyggmg; kiskwawumeiiieuk: $this->ewqscwwmugoqwomg(Setting::aamcsokqosuccmmw, ''); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $ksaameoqigiaoigg = true; oaqeoqsksuyyggmg: kkmuuoscccmokkiw: miugmimciywcgswm: aqekkeqmmewoyawu: return $ksaameoqigiaoigg; } public function eigwgcuaamoqkuyw(bool $qegcgsquckcqmkea = false) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto kuuawiosmkgqsscy; } $ksaameoqigiaoigg = false; $ekmacukqumaiaquo = [Setting::waigouyyouwkmeak => false, Setting::aamcsokqosuccmmw => false]; if (!($suaeeqiusywgcoyy = $this->weysguygiseoukqw(Setting::waigouyyouwkmeak, ''))) { goto emeeocqaisksyioq; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($suaeeqiusywgcoyy); if (!($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo))) { goto mcqwuawosciucemq; } $ekmacukqumaiaquo[Setting::waigouyyouwkmeak] = true; mcqwuawosciucemq: emeeocqaisksyioq: $yqqcyigggososiuo = $this->weysguygiseoukqw(Setting::aamcsokqosuccmmw, ''); if (!$yqqcyigggososiuo) { goto csaksaisgawusswg; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($yqqcyigggososiuo); if (!($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo))) { goto maggecymmmesqmqs; } $ekmacukqumaiaquo[Setting::aamcsokqosuccmmw] = true; maggecymmmesqmqs: csaksaisgawusswg: if (!in_array(false, $ekmacukqumaiaquo, true)) { goto aamgqoqyyooimqkm; } $ykweyckckyeqgyew = $yqimccamkgmmuuyg->kioykumgimksiaec(); if (!is_array($ykweyckckyeqgyew)) { goto mcagemacuqyskogs; } foreach ($ykweyckckyeqgyew as $uiwqqmmiwqqqaugc => $ymqmyyeuycgmigyo) { $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($uiwqqmmiwqqqaugc); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto gyskcwykkyakeims; } $this->oaumimwssciwumys("\x52\165\x6c\145\163\145\x74\x20{$uiwqqmmiwqqqaugc}\72{$ymqmyyeuycgmigyo}\x20\162\145\155\x6f\x76\x65\x20\146\141\x69\x6c\x65\x64\x3a\x20{$this->gcsweumukyckmgik($kwogmsuwiyakckuo)}"); goto ossakckwskyqusmm; gyskcwykkyakeims: $this->oaumimwssciwumys("\122\x75\154\x65\x73\x65\164\x20{$uiwqqmmiwqqqaugc}\72{$ymqmyyeuycgmigyo}\x20\162\145\155\x6f\166\x65\x64\40\163\165\143\x63\x65\163\163\146\x75\x6c\154\x79\x2e"); ossakckwskyqusmm: qkiyyywwuiuackao: } ecgwgamiseokmise: mcagemacuqyskogs: aamgqoqyyooimqkm: $this->ewqscwwmugoqwomg(Setting::waigouyyouwkmeak, ''); $this->ewqscwwmugoqwomg(Setting::aamcsokqosuccmmw, ''); $yqqcyigggososiuo = $this->mikgocywwwusmsas(); $suaeeqiusywgcoyy = $yqimccamkgmmuuyg->kykqeyeaysgiqwmm(); if ($suaeeqiusywgcoyy && !is_wp_error($suaeeqiusywgcoyy)) { goto easuiqiooiwgswmm; } if (!$yqqcyigggososiuo) { goto cimascmiesomqgqs; } $ksaameoqigiaoigg = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($yqqcyigggososiuo); cimascmiesomqgqs: goto saiuoomgskwgyeya; easuiqiooiwgswmm: $this->ewqscwwmugoqwomg(Setting::waigouyyouwkmeak, $suaeeqiusywgcoyy); $ksaameoqigiaoigg = true; $yqimccamkgmmuuyg->sqmcyegkigweiwks(); saiuoomgskwgyeya: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $qegcgsquckcqmkea); kuuawiosmkgqsscy: return $ksaameoqigiaoigg; } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function omimwscgequgiaue() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto kwocaqggwcksesce; } return $this->oemauiimmycumcsk(sprintf(__("\x43\x6c\157\165\144\146\154\141\162\x65\x20\45\x73\x20\x6e\157\164\x20\145\156\x74\145\162\145\x64\41", PR__MDL__OPTIMIZATION), __("\145\55\155\x61\x69\x6c", PR__MDL__OPTIMIZATION))); kwocaqggwcksesce: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto bgakaasgwwygosyi; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\x6f\x75\x64\x66\154\141\162\x65\x20\x25\163\40\x6e\157\x74\40\x65\x6e\164\145\x72\x65\144\41", PR__MDL__OPTIMIZATION), __("\x41\120\x49\x20\x54\157\153\145\x6e", PR__MDL__OPTIMIZATION))); bgakaasgwwygosyi: if (!empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { goto aucwccaiqwsmyuaq; } return $this->oemauiimmycumcsk(__("\124\150\x65\162\145\x20\151\x73\40\x61\x20\x70\162\157\x62\x6c\145\155\40\x6f\x6e\x20\x66\x65\164\143\150\x69\x6e\x67\x20\162\x65\154\141\x74\x65\144\x20\144\157\x6d\141\x69\x6e\40\x74\157\x20\x65\x6e\x74\x65\162\x65\144\x20\x61\x70\x69\x20\x74\157\153\145\x6e\56", PR__MDL__OPTIMIZATION)); aucwccaiqwsmyuaq: goto momuweiasiwskekw; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto agyooskogigyayws; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\157\x75\144\146\154\141\162\145\40\45\x73\x20\x6e\x6f\x74\x20\145\x6e\x74\x65\x72\x65\x64\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\111\40\113\x65\171", PR__MDL__OPTIMIZATION))); agyooskogigyayws: if (!empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { goto iiiwsgameuomumgw; } return $this->oemauiimmycumcsk(__("\124\150\145\162\x65\40\x69\x73\x20\x61\x20\x70\x72\x6f\142\154\145\x6d\40\x6f\156\x20\146\145\x74\x63\x68\151\x6e\147\x20\162\x65\x6c\141\x74\x65\144\x20\172\x6f\x6e\145\40\x69\x64\x20\x74\x6f\40\145\156\x74\x65\x72\x65\x64\40\141\x70\x69\x20\153\x65\171\x2e", PR__MDL__OPTIMIZATION)); iiiwsgameuomumgw: goto momuweiasiwskekw; } qaewauyekqucciyc: momuweiasiwskekw: return true; } }
