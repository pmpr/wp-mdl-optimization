<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665ad9ca28a94             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use WP_Error; class Engine extends Common { private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto ywokggauuiosegog; } $this->api = API::symcgieuakksimmu(); ywokggauuiosegog: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto uoewiggumomegksg; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); uoewiggumomegksg: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto sockocsycmkaeosg; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); sockocsycmkaeosg: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ugkwqaywmwqucoeo; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); ugkwqaywmwqucoeo: return $ksaameoqigiaoigg; } public function mikgocywwwusmsas() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ekmacukqumaiaquo = true; $yqqcyigggososiuo = $this->weysguygiseoukqw(Setting::aamcsokqosuccmmw, ''); if (!$yqqcyigggososiuo) { goto syisomgawcsqeemk; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($yqqcyigggososiuo); $ekmacukqumaiaquo = $kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo); syisomgawcsqeemk: if (!$ekmacukqumaiaquo) { goto kwasqmcyiswoaiuu; } $yqqcyigggososiuo = $yqimccamkgmmuuyg->ecciuwqaigwgcgca(); if (!(!$yqqcyigggososiuo || is_wp_error($yqqcyigggososiuo))) { goto asoecuscmsyusmkg; } $yqqcyigggososiuo = ''; asoecuscmsyusmkg: kwasqmcyiswoaiuu: $this->ewqscwwmugoqwomg(Setting::aamcsokqosuccmmw, $yqqcyigggososiuo); return $yqqcyigggososiuo; } public function cwwaoacweogeycuc() { $ksaameoqigiaoigg = false; $suaeeqiusywgcoyy = $this->weysguygiseoukqw(Setting::waigouyyouwkmeak, ''); if (!($suaeeqiusywgcoyy !== '')) { goto aqekkeqmmewoyawu; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($suaeeqiusywgcoyy); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto awuwuuuagqysukku; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto miugmimciywcgswm; awuwuuuagqysukku: $this->ewqscwwmugoqwomg(Setting::waigouyyouwkmeak, ''); $yqqcyigggososiuo = $this->weysguygiseoukqw(Setting::aamcsokqosuccmmw); if (!($yqqcyigggososiuo !== '')) { goto kkmuuoscccmokkiw; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($yqqcyigggososiuo); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto kiskwawumeiiieuk; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto oaqeoqsksuyyggmg; kiskwawumeiiieuk: $this->ewqscwwmugoqwomg(Setting::aamcsokqosuccmmw, ''); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $ksaameoqigiaoigg = true; oaqeoqsksuyyggmg: kkmuuoscccmokkiw: miugmimciywcgswm: aqekkeqmmewoyawu: return $ksaameoqigiaoigg; } public function eigwgcuaamoqkuyw(bool $qegcgsquckcqmkea = false) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto kuuawiosmkgqsscy; } $ksaameoqigiaoigg = false; $ekmacukqumaiaquo = [Setting::waigouyyouwkmeak => false, Setting::aamcsokqosuccmmw => false]; if (!($suaeeqiusywgcoyy = $this->weysguygiseoukqw(Setting::waigouyyouwkmeak, ''))) { goto emeeocqaisksyioq; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($suaeeqiusywgcoyy); if (!($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo))) { goto mcqwuawosciucemq; } $ekmacukqumaiaquo[Setting::waigouyyouwkmeak] = true; mcqwuawosciucemq: emeeocqaisksyioq: $yqqcyigggososiuo = $this->weysguygiseoukqw(Setting::aamcsokqosuccmmw, ''); if (!$yqqcyigggososiuo) { goto csaksaisgawusswg; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($yqqcyigggososiuo); if (!($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo))) { goto maggecymmmesqmqs; } $ekmacukqumaiaquo[Setting::aamcsokqosuccmmw] = true; maggecymmmesqmqs: csaksaisgawusswg: if (!in_array(false, $ekmacukqumaiaquo, true)) { goto aamgqoqyyooimqkm; } $ykweyckckyeqgyew = $yqimccamkgmmuuyg->kioykumgimksiaec(); if (!is_array($ykweyckckyeqgyew)) { goto mcagemacuqyskogs; } foreach ($ykweyckckyeqgyew as $uiwqqmmiwqqqaugc => $ymqmyyeuycgmigyo) { $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($uiwqqmmiwqqqaugc); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto gyskcwykkyakeims; } $this->oaumimwssciwumys("\122\x75\x6c\145\163\145\x74\x20{$uiwqqmmiwqqqaugc}\72{$ymqmyyeuycgmigyo}\x20\162\145\155\157\x76\x65\40\x66\x61\x69\154\145\x64\72\40{$this->gcsweumukyckmgik($kwogmsuwiyakckuo)}"); goto ossakckwskyqusmm; gyskcwykkyakeims: $this->oaumimwssciwumys("\122\165\x6c\x65\x73\145\164\x20{$uiwqqmmiwqqqaugc}\x3a{$ymqmyyeuycgmigyo}\x20\x72\145\x6d\157\x76\145\144\x20\163\x75\x63\x63\x65\163\x73\x66\165\x6c\x6c\171\x2e"); ossakckwskyqusmm: qkiyyywwuiuackao: } ecgwgamiseokmise: mcagemacuqyskogs: aamgqoqyyooimqkm: $this->ewqscwwmugoqwomg(Setting::waigouyyouwkmeak, ''); $this->ewqscwwmugoqwomg(Setting::aamcsokqosuccmmw, ''); $yqqcyigggososiuo = $this->mikgocywwwusmsas(); $suaeeqiusywgcoyy = $yqimccamkgmmuuyg->kykqeyeaysgiqwmm(); if ($suaeeqiusywgcoyy && !is_wp_error($suaeeqiusywgcoyy)) { goto easuiqiooiwgswmm; } if (!$yqqcyigggososiuo) { goto cimascmiesomqgqs; } $ksaameoqigiaoigg = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($yqqcyigggososiuo); cimascmiesomqgqs: goto saiuoomgskwgyeya; easuiqiooiwgswmm: $this->ewqscwwmugoqwomg(Setting::waigouyyouwkmeak, $suaeeqiusywgcoyy); $ksaameoqigiaoigg = true; $yqimccamkgmmuuyg->sqmcyegkigweiwks(); saiuoomgskwgyeya: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $qegcgsquckcqmkea); kuuawiosmkgqsscy: return $ksaameoqigiaoigg; } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function omimwscgequgiaue() { if (!empty($this->weysguygiseoukqw(Setting::yeeemccgmikyeiqq))) { goto kwocaqggwcksesce; } return $this->oemauiimmycumcsk(sprintf(__("\103\x6c\157\165\144\x66\x6c\141\162\145\x20\x25\x73\x20\x6e\x6f\x74\x20\x65\x6e\164\145\x72\x65\144\x21", PR__MDL__OPTIMIZATION), __("\x65\55\x6d\x61\x69\x6c", PR__MDL__OPTIMIZATION))); kwocaqggwcksesce: switch ($this->weysguygiseoukqw(Setting::uksumkeyuauyuiqm, Setting::fsekswokoseswcqm)) { case Setting::eywauigiwgqckygk: if (!empty($this->weysguygiseoukqw(Setting::uwkciiskgyqaigqe))) { goto bgakaasgwwygosyi; } return $this->oemauiimmycumcsk(sprintf(__("\x43\154\157\165\144\x66\154\x61\162\x65\40\45\163\x20\156\x6f\164\x20\x65\156\x74\x65\162\x65\144\41", PR__MDL__OPTIMIZATION), __("\101\x50\x49\40\x54\157\153\x65\x6e", PR__MDL__OPTIMIZATION))); bgakaasgwwygosyi: if (!empty($this->weysguygiseoukqw(Setting::kiuyeswmgaikeiuo))) { goto aucwccaiqwsmyuaq; } return $this->oemauiimmycumcsk(__("\x54\150\x65\x72\145\x20\151\x73\x20\x61\x20\160\162\x6f\142\154\x65\155\x20\157\156\40\x66\x65\164\x63\x68\151\156\x67\x20\162\145\154\x61\x74\145\144\40\x64\157\155\x61\x69\x6e\40\164\x6f\40\x65\156\x74\x65\x72\x65\x64\x20\x61\160\x69\x20\164\157\x6b\145\x6e\56", PR__MDL__OPTIMIZATION)); aucwccaiqwsmyuaq: goto momuweiasiwskekw; case Setting::fsekswokoseswcqm: if (!empty($this->weysguygiseoukqw(Setting::ekecawsykcwisikm))) { goto agyooskogigyayws; } return $this->oemauiimmycumcsk(sprintf(__("\x43\x6c\157\165\x64\146\154\x61\162\145\x20\x25\163\40\156\x6f\164\x20\x65\x6e\164\x65\162\x65\x64\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\x49\x20\113\145\171", PR__MDL__OPTIMIZATION))); agyooskogigyayws: if (!empty($this->weysguygiseoukqw(Setting::iqksqseqeqmaukkk))) { goto iiiwsgameuomumgw; } return $this->oemauiimmycumcsk(__("\x54\150\x65\162\x65\x20\x69\x73\40\x61\40\160\x72\157\x62\154\x65\155\40\157\x6e\40\x66\x65\164\143\x68\x69\x6e\147\40\162\145\x6c\x61\164\x65\x64\40\172\157\x6e\145\x20\x69\x64\40\164\157\40\145\156\x74\145\162\x65\x64\40\141\160\151\x20\x6b\x65\x79\56", PR__MDL__OPTIMIZATION)); iiiwsgameuomumgw: goto momuweiasiwskekw; } qaewauyekqucciyc: momuweiasiwskekw: return true; } }
