<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d5223571c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Tab; class Setting extends Tab { const quekmgksoiyceykk = "\x6d\x69\x6e\x69\146\171\x5f"; const eumicecccemicqey = self::quekmgksoiyceykk . "\x6a\163"; const ykqawckyqkmqiamq = self::quekmgksoiyceykk . "\143\x73\x73"; const sikyekqowskqiqga = self::quekmgksoiyceykk . "\x68\164\x6d\154"; const ccoaqmuiqioqaooa = self::iccwcygaeqmomooo . "\x5f\x6d\x69\156\151\x66\171"; const ouysiyiqiqogowwy = "\143\x64\156\137"; const guiakysqekasiwso = self::ouysiyiqiqogowwy . "\146\157\x6e\164"; const ewqwqyyqgaaaeuwu = self::ouysiyiqiqogowwy . "\x66\157\156\164\137\x75\162\154"; const geqkcgkoqqeyuqkg = self::ouysiyiqiqogowwy . "\x66\x6f\x6e\x74\137\156\141\155\x65"; const sewumqkiymkquogk = self::ouysiyiqiqogowwy . "\x65\156\x61\142\154\145\x5f\x6a\163\x64\x65\x6c\151\166\x65\162"; const ggwcgwwicaucowgo = "\x63\162\151\164\151\x63\x61\x6c\137"; const qwmwuwqwwaiiaqou = self::ggwcgwwicaucowgo . "\145\x78\x74\x72\x61\x5f\143\x73\163"; const kuqaeysqaeyocckm = self::iccwcygaeqmomooo . self::ggwcgwwicaucowgo . "\143\x73\163"; const aqywkwyscogcecei = "\x6d\x65\144\151\x61\x5f"; const meciimymegqueigk = self::aqywkwyscogcecei . "\154\141\172\171\137\x6c\157\x61\x64\x5f"; const moosyqmaqgsikgcg = self::meciimymegqueigk . "\x65\x6e\x61\142\x6c\x65"; const uwgswmisuuigoucw = self::meciimymegqueigk . "\151\x6d\x61\x67\x65\x73"; const ekequaesakywuioq = self::aqywkwyscogcecei . "\x69\x6d\141\x67\x65\x5f\x63\157\x6c\157\162\x5f\144\x6f\x6d\151\156\141\164\157\162"; const semmsmiiwgwsqeqi = self::aqywkwyscogcecei . "\x64\x6f\155\x69\156\141\164\x6f\162\137\x64\x65\x66\141\x75\x6c\164\x5f\x63\x6f\154\x6f\x72"; const gowiqmkskqiqsgsc = self::meciimymegqueigk . "\x69\x66\x72\141\x6d\145\137\x61\x6e\x64\137\x76\151\x64\x65\x6f\163"; const twykececsuscsygc = "\143\x6c\x65\141\x6e\165\160\137"; const qoyskaoaaakosmaq = self::twykececsuscsygc . "\x61\144\x64\137\x62\x6c\x61\156\x6b\137\146\x61\166\151\x63\x6f\x6e"; const yaggsqosuggmgykq = self::twykececsuscsygc . "\163\160\x65\143\151\x66\x79\137\144\x69\x6d\x65\156\x73\x69\157\156\x73"; const aysyuueaueiamysu = self::twykececsuscsygc . "\162\145\x6d\x6f\166\145\137\x68\164\164\x70\x5f\x70\162\157\x74\157\143\157\154"; const ookqmecseqmewmeo = self::yaggsqosuggmgykq . "\137\x65\170\164\145\162\x6e\141\x6c\x5f\151\x6d\x61\x67\x65\x73"; const emeseeausaemuoeq = self::twykececsuscsygc . "\170\155\154\162\160\143"; const wkasasawguckeyuc = self::twykececsuscsygc . "\x68\151\x64\x65\x5f\x77\x70\137\x76\145\162\x73\x69\157\x6e"; const wamuucmcqykegkoc = self::twykececsuscsygc . "\162\163\x64\x5f\x6c\x69\x6e\153"; const iqmqemikwcuuiyom = self::twykececsuscsygc . "\x72\x65\163\164\137\141\160\x69"; const sqaukikimiwcqmew = self::twykececsuscsygc . "\163\x68\157\x72\x74\x6c\151\x6e\153"; const aaisgiycykyqiqcm = self::twykececsuscsygc . "\167\154\167\x5f\155\141\x6e\151\146\x65\x73\x74\x5f\x6c\x69\156\x6b"; const oeiwkesueukkqggs = self::twykececsuscsygc . "\x65\x6d\157\x6a\x69\x73"; const owgquqcyoseeeiqg = self::twykececsuscsygc . "\x65\155\142\x65\x64\x73"; const uwcmcaucigmuiugg = self::twykececsuscsygc . "\144\x61\x73\x68\151\143\x6f\x6e\x73"; const gukmqsiumkmukaoe = self::twykececsuscsygc . "\147\x75\164\145\x6e\142\x65\x72\x67\137\x63\163\x73"; const qwcseoyssyaciyqk = self::twykececsuscsygc . "\152\x71\x75\145\x72\x79\137\155\x69\x67\x72\x61\x74\145"; const kcgocyessaswyike = self::twykececsuscsygc . "\x70\141\x73\163\x77\x6f\162\144\x5f\x73\x74\162\145\156\147\x74\x68\x5f\x6d\145\164\x65\162"; const iumuwmusouesuimw = "\154\157\x61\144\x5f\x64\145\154\141\x79\x5f"; const cskegoigeecaayoi = self::iumuwmusouesuimw . "\x6c\157\141\144\137\x73\x74\x79\x6c\145"; const wiggegwgmkakogmg = self::cskegoigeecaayoi . "\x5f\143\144\x6e"; const mogckoqiygeqmiag = self::cskegoigeecaayoi . "\137\145\170\143\x6c\x75\x64\145"; const okycmqykyamqaauy = self::iumuwmusouesuimw . "\154\157\x61\144\137\152\x61\166\x61\163\143\162\x69\x70\164"; const kgcwmmmwagaccsqi = self::okycmqykyamqaauy . "\x5f\143\x64\156"; const sysesaekousoeosu = self::okycmqykyamqaauy . "\137\145\170\143\154\165\144\145"; public function aucimgwswmgaocae($ywoucyskcquysiwc = []) : array { $yuwymayicwwqiske = $this->aakmagwggmkoiiyu() . "\x5f\x61\x73\163\145\x74\x73"; $ywoucyskcquysiwc[] = self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\164\141\142", __("\x41\163\x73\145\x74\163", PR__MDL__OPTIMIZATION))->sikqggwmmykuiymy($this->wseoiekkiwuiuacg($yuwymayicwwqiske))->sikqggwmmykuiymy($this->ecmoqcoyysugcqey($yuwymayicwwqiske))->sikqggwmmykuiymy($this->aiguiusgagaacige($yuwymayicwwqiske))->sikqggwmmykuiymy($this->oyookmikikgkcgas($yuwymayicwwqiske))->sikqggwmmykuiymy($this->quqkimmaaoeumckc($yuwymayicwwqiske))->sikqggwmmykuiymy($this->wywgqayqssuqewyw($yuwymayicwwqiske))->saemoowcasogykak(IconFontawesomeInterface::qymemaukeumsukku)->jyumyyugiwwiqomk(10); return parent::aucimgwswmgaocae($ywoucyskcquysiwc); } public function wseoiekkiwuiuacg($yuwymayicwwqiske) : MetaBox { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\x63\x64\x6e", __("\x43\x6f\x6e\164\145\156\164\40\x44\145\x6c\151\x76\145\x72\x79\40\116\x65\164\x77\x6f\x72\x6b\x20\50\103\104\x4e\x29", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x63\x6e\x64\137\152\163\144\x65\x6c\151\x76\145\x72", __("\112\x53\104\x65\x6c\x69\166\145\x72", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sewumqkiymkquogk, __("\105\x6e\x61\142\154\x65\x20\112\x53\x44\145\154\x69\166\145\162", PR__MDL__OPTIMIZATION), __("\x43\x68\x65\x63\x6b\x20\x74\x68\x69\x73\40\151\164\x65\x6d\x20\x74\x6f\40\162\145\x70\x6c\141\x63\x65\40\x72\x65\163\157\165\162\143\x65\x73\x20\142\171\x20\112\123\104\145\x6c\x69\166\145\x72\40\x63\x64\x6e\56", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim())->saemoowcasogykak(IconFontawesomeInterface::oykyeemoeeyooomc))->saemoowcasogykak(IconFontawesomeInterface::yemsakwkwimksusy); } public function ecmoqcoyysugcqey($yuwymayicwwqiske) { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\x6d\x65\144\151\x61", __("\x4d\145\144\151\x61", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\155\145\x64\151\141\x5f\154\x61\x7a\171\154\157\141\144", __("\x4c\x61\x7a\171\154\x6f\x61\x64", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::moosyqmaqgsikgcg, __("\x45\x6e\x61\142\x6c\x65\40\114\x61\172\171\154\157\141\x64", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy([self::uwgswmisuuigoucw, self::gowiqmkskqiqsgsc]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::uwgswmisuuigoucw, __("\x49\155\141\147\x65\163", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::gowiqmkskqiqsgsc, __("\151\106\x72\x61\x6d\145\40\x61\x6e\144\x20\x56\x69\144\145\157\163", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ewcsmakmqeeueqec))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x6d\x65\144\x69\141\x5f\x64\x6f\x6d\151\156\141\x74\157\x72", __("\x43\157\x6c\x6f\162\x20\x44\x6f\x6d\151\156\x61\164\157\x72", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ekequaesakywuioq, __("\111\155\141\147\x65\40\103\157\154\x6f\x72\x20\104\x6f\155\151\156\x61\x74\157\162", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy(self::semmsmiiwgwsqeqi))->mkksewyosgeumwsa(self::mwmcsiqiwkweayuw(self::semmsmiiwgwsqeqi, __("\104\145\146\x61\165\x6c\164\x20\x44\157\155\151\x6e\x61\164\157\x72\x20\103\x6f\x6c\157\x72", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua("\x23\106\x46\x46"))->saemoowcasogykak(IconFontawesomeInterface::kuicceqcgamkcsuw))->saemoowcasogykak(IconFontawesomeInterface::wauosagckgqiqoio); } public function wywgqayqssuqewyw($yuwymayicwwqiske) : MetaBox { $mkqqqewsokcswckc = __("\103\150\x65\143\153\40\164\x68\x69\x73\x20\151\x74\x65\155\40\151\146\40\x79\x6f\x75\40\167\x61\x6e\x74\40\155\x69\x6e\151\146\x79\x20\x25\163\56", PR__MDL__OPTIMIZATION); return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\x6d\151\x6e\x69\x66\171", __("\115\x69\x6e\151\146\171", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ccoaqmuiqioqaooa, __("\105\156\141\x62\x6c\x65\40\115\151\156\151\x66\x79", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy([self::sikyekqowskqiqga, self::ykqawckyqkmqiamq, self::eumicecccemicqey])->ccmwycqioaicegoc(__("\103\150\145\143\153\x20\x74\x68\151\163\40\x69\x74\x65\155\x20\164\x6f\40\145\x6e\x61\x62\x6c\x65\40\155\151\156\x69\x66\x79\40\x66\165\156\x63\x74\x69\157\156\x61\x6c\x69\164\x79\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sikyekqowskqiqga, __("\x4d\151\x6e\151\146\171\40\110\x54\x4d\114", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\x3c\x63\157\x64\145\x3e\110\124\115\114\74\57\143\157\144\x65\x3e")))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ykqawckyqkmqiamq, __("\115\x69\x6e\x69\146\171\40\103\x53\x53", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\74\x63\157\x64\145\76\103\123\x53\74\57\x63\x6f\x64\x65\76")))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::eumicecccemicqey, __("\115\151\x6e\151\x66\171\40\112\x53", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\74\143\157\x64\x65\76\x4a\x61\x76\141\x53\143\x72\151\x70\x74\74\57\143\157\144\145\x3e")))->saemoowcasogykak(IconFontawesomeInterface::yesiuuqooeauouoq); } public function aiguiusgagaacige($yuwymayicwwqiske) : MetaBox { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\143\x6c\145\141\x6e\165\160", __("\103\154\x65\141\x6e\x75\x70", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x63\154\145\141\x6e\165\x70\x5f\151\155\x61\x67\145", __("\111\x6d\x61\x67\x65\163", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::qoyskaoaaakosmaq, __("\x41\144\144\40\x42\x6c\141\x6e\x6b\x20\106\x61\166\151\143\x6f\x6e", PR__MDL__OPTIMIZATION), __("\101\x64\144\x20\x61\x20\x62\x6c\141\x6e\x6b\40\x66\x61\x76\x69\143\x6f\x6e\x20\x74\157\40\171\157\165\x72\40\x57\157\x72\x64\x50\x72\145\163\x73\x20\150\x65\141\144\x65\162\x20\167\150\x69\143\150\40\x77\151\154\x6c\40\x70\x72\x65\166\x65\x6e\164\x20\x61\40\x4d\x69\x73\163\151\156\147\40\x46\141\x76\x69\143\157\156\40\x6f\x72\40\x34\60\x34\40\145\x72\162\x6f\162\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::yaggsqosuggmgykq, __("\123\x70\145\143\151\x66\x79\x20\x49\x6d\141\147\145\40\104\x69\155\145\x6e\163\151\157\156\163", PR__MDL__OPTIMIZATION), __("\101\x64\144\40\x77\x69\144\164\x68\x20\x61\156\x64\40\x68\x65\x69\147\x68\164\40\141\164\164\162\x69\x62\165\x74\x65\40\164\157\x20\x69\x6d\x61\147\145\x73\40\x69\146\40\x6e\x6f\164\x20\145\170\x69\x73\164\56", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy(self::ookqmecseqmewmeo))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ookqmecseqmewmeo, __("\x45\170\164\x65\162\x6e\141\154\x20\x49\155\x61\147\145\163\x20\104\x69\x6d\145\156\163\151\x6f\156\x73", PR__MDL__OPTIMIZATION), __("\x44\x6f\40\163\x70\x65\143\x69\146\171\x20\x69\155\141\147\x65\x20\144\151\155\x65\156\x73\151\157\x6e\x73\x20\146\157\x72\40\145\x78\164\145\162\156\141\154\x20\x69\x6d\x61\x67\145\163\56", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::sesaeqomsuesouac))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x63\154\x65\141\156\x75\160\137\x6a\163\137\x63\x73\x73", __("\x4a\123\40\46\x20\103\x53\x53\x20\46\40\110\x54\x4d\114", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::oeiwkesueukkqggs, __("\x44\151\163\141\142\154\145\x20\105\155\x6f\x6a\151\163", PR__MDL__OPTIMIZATION), __("\122\x65\x6d\x6f\x76\145\x73\x20\x57\157\162\144\120\x72\145\163\x73\x20\105\155\x6f\152\151\x73\40\x4a\141\x76\x61\123\143\x72\x69\x70\x74\x20\x66\151\154\x65\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::owgquqcyoseeeiqg, __("\x44\x69\x73\x61\142\x6c\145\x20\x45\x6d\x62\x65\x64\163", PR__MDL__OPTIMIZATION), __("\x52\145\155\157\x76\145\x73\40\127\x6f\x72\x64\x50\x72\x65\x73\163\40\105\155\x62\x65\x64\40\x4a\x61\x76\141\x53\143\x72\151\x70\x74\x20\x66\151\154\x65\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::qwcseoyssyaciyqk, __("\122\145\x6d\157\166\145\x20\152\x51\165\x65\x72\x79\x20\115\x69\147\162\141\x74\145", PR__MDL__OPTIMIZATION), __("\122\x65\x6d\x6f\x76\145\x73\x20\x6a\x51\x75\145\162\x79\x20\115\151\x67\162\141\164\x65\x20\112\x61\166\141\123\143\x72\x69\160\x74\40\x66\151\x6c\x65\x2e", PR__MDL__OPTIMIZATION))->ooowowweyusommmm(__("\x54\150\151\x73\x20\143\157\165\154\x64\x20\142\x72\x65\x61\153\40\164\150\x69\156\x67\x73\x21", PR__MDL__OPTIMIZATION), __("\x54\150\151\x73\40\x63\x6f\165\x6c\x64\x20\142\x72\145\141\153\x20\164\150\151\x6e\x67\163\41", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim())->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::uwcmcaucigmuiugg, __("\x44\151\x73\141\142\154\145\x20\104\141\x73\150\x69\143\x6f\156\163", PR__MDL__OPTIMIZATION), __("\104\151\x73\x61\x62\x6c\145\163\40\144\x61\163\x68\151\x63\157\x6e\163\40\157\156\x20\164\x68\x65\40\146\162\157\156\164\x20\145\x6e\144\40\x77\x68\145\156\x20\156\157\164\x20\x6c\x6f\x67\147\145\144\40\x69\x6e\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::gukmqsiumkmukaoe, __("\104\151\163\141\142\x6c\145\40\107\165\164\x65\156\142\145\162\x67\x20\102\154\157\x63\x6b\40\x4c\x69\142\x72\141\162\171", PR__MDL__OPTIMIZATION), __("\x44\x69\163\141\x62\154\x65\163\40\x67\165\x74\x65\156\x62\145\162\x67\40\142\154\x6f\143\153\x20\154\151\x62\162\x61\x72\x79\40\157\x6e\40\x74\150\x65\x20\146\x72\x6f\156\164\40\145\156\144\40\167\150\145\156\40\x6e\x6f\x74\x20\x6c\x6f\147\147\x65\144\x20\x69\156\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kcgocyessaswyike, __("\104\151\163\141\142\x6c\145\40\x50\x61\x73\163\x77\157\x72\144\x20\123\164\162\145\156\x67\164\x68\40\x4d\145\x74\145\162", PR__MDL__OPTIMIZATION), __("\x52\145\155\157\x76\145\163\x20\x57\157\162\x64\x50\x72\145\x73\163\40\x61\x6e\144\x20\x57\x6f\x6f\103\157\155\x6d\145\x72\x63\x65\40\x50\141\x73\163\x77\x6f\x72\144\x20\x53\164\162\145\x6e\x67\x74\x68\x20\115\x65\164\145\x72\40\x73\143\162\x69\160\x74\163\40\146\x72\x6f\155\x20\x6e\157\156\x20\x65\163\x73\145\x6e\x74\x69\x61\x6c\40\160\x61\147\x65\x73\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::aysyuueaueiamysu, __("\122\145\155\157\x76\x65\40\110\124\124\120\x20\x50\162\x6f\x74\x6f\x63\157\x6c", PR__MDL__OPTIMIZATION), sprintf(__("\x52\145\x70\154\141\143\145\x20\x25\x73\x20\167\151\x74\x68\40\45\163\x20\151\x6e\x20\x25\163\40\164\x61\x67\163\56", PR__MDL__OPTIMIZATION), "\74\143\157\144\145\x3e\150\x74\x74\x70\74\x2f\143\x6f\144\145\x3e\174\74\x63\157\x64\145\x3e\x68\164\x74\x70\x73\74\x2f\143\x6f\144\145\76", "\x3c\143\x6f\144\x65\x3e\x2f\x2f\x3c\x2f\x63\157\x64\x65\x3e", "\x3c\143\157\144\x65\x3e\x73\143\162\151\x70\x74\74\x2f\x63\157\144\145\76\x7c\x3c\x63\x6f\x64\145\x3e\154\x69\x6e\153\74\57\x63\x6f\144\145\x3e\x7c\x3c\143\157\x64\145\76\151\155\147\x3c\x2f\x63\x6f\144\x65\76\x7c\x3c\x63\x6f\x64\145\x3e\146\157\x72\x6d\x3c\57\x63\157\144\x65\x3e")))->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\143\154\x65\x61\156\x75\160\137\x68\x65\x61\x64\137\164\141\147\163", __("\110\x65\x61\x64\x20\124\x61\147\x73", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::emeseeausaemuoeq, __("\104\151\x73\141\x62\x6c\x65\40\x58\115\114\x2d\x52\120\103", PR__MDL__OPTIMIZATION), __("\122\x65\155\x6f\x76\145\163\40\x57\157\x72\144\120\162\145\x73\163\x20\130\x4d\x4c\x2d\x52\120\x43\40\146\165\156\143\x74\x69\157\x6e\x61\x6c\151\x74\171\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wamuucmcqykegkoc, __("\x52\145\x6d\157\x76\x65\40\122\x53\104\40\114\x69\156\x6b", PR__MDL__OPTIMIZATION), __("\122\145\x6d\157\x76\x65\x20\122\123\x44\x20\x28\x52\x65\141\x6c\40\123\x69\x6d\x70\x6c\145\40\104\151\163\x63\x6f\166\145\x72\171\51\x20\154\151\156\x6b\x20\x74\141\x67\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wkasasawguckeyuc, __("\x48\x69\x64\145\40\x57\120\x20\x56\145\162\163\x69\157\x6e", PR__MDL__OPTIMIZATION), __("\x54\150\151\163\40\151\x73\40\x67\x6f\157\x64\40\146\157\x72\x20\163\x65\x63\165\x72\151\x74\171\x20\x70\x75\x72\x70\x6f\163\145\x73\x20\141\x73\40\167\145\x6c\x6c\x2c\x20\163\151\156\x63\145\x20\151\164\40\x68\x69\144\x65\163\40\x74\x68\x65\40\x57\x6f\x72\x64\120\162\x65\x73\x73\x20\x76\145\x72\163\x69\157\x6e\40\x79\157\x75\x27\x72\x65\x20\x75\163\x69\x6e\147\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::aaisgiycykyqiqcm, __("\x52\x65\x6d\157\x76\x65\x20\x77\x6c\167\155\x61\x6e\151\146\x65\x73\x74\40\114\x69\x6e\153", PR__MDL__OPTIMIZATION), __("\111\x66\40\171\x6f\165\40\x64\x6f\40\156\157\164\x20\165\x73\x65\40\x57\x69\x6e\x64\157\x77\x73\x20\x4c\151\166\x65\x20\127\x72\151\164\x65\x72\40\x74\157\x20\145\144\x69\164\40\171\x6f\165\162\40\142\154\157\147\x20\x63\157\156\x74\x65\x6e\164\x73\54\x20\164\150\145\156\40\151\x74\47\163\40\163\141\146\145\40\x74\157\40\162\x65\x6d\x6f\x76\x65\x20\x74\x68\x69\163\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sqaukikimiwcqmew, __("\x52\145\155\x6f\x76\x65\x20\x53\x68\157\162\x74\x6c\151\156\x6b", PR__MDL__OPTIMIZATION), __("\x41\x72\145\x20\x79\x6f\x75\x20\165\x73\x69\156\147\x20\x53\x45\117\x20\x66\162\151\x65\156\144\x6c\171\x20\x55\x52\114\163\40\x61\x6e\144\40\x64\x6f\x20\x6e\x6f\164\40\156\145\145\x64\x20\x74\x68\145\x20\144\x65\146\141\165\154\x74\40\127\x6f\162\x64\x50\162\x65\x73\163\x20\163\x68\157\162\164\154\x69\x6e\153\x3f\40\x79\x6f\165\40\143\141\156\40\x72\145\x6d\x6f\166\145\x20\164\150\x69\x73\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::iqmqemikwcuuiyom, __("\122\145\155\x6f\x76\145\x20\122\105\123\x54\x20\101\120\111", PR__MDL__OPTIMIZATION), __("\x41\x72\x65\x20\x79\157\165\x20\141\143\x63\x65\x73\x73\x69\156\147\40\x79\x6f\165\x72\x20\143\x6f\x6e\x74\145\x6e\x74\x20\x74\x68\162\x6f\165\x67\150\40\x65\156\144\160\x6f\x69\156\164\163\x3f\40\x49\x66\x20\x6e\x6f\164\54\40\x79\157\165\40\143\x61\x6e\40\x72\x65\155\x6f\166\x65\x20\164\150\151\163\x2e", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::wyssocuugkyeuyqq))->saemoowcasogykak(IconFontawesomeInterface::kgsuyaquimiyogeo); } public function quqkimmaaoeumckc($yuwymayicwwqiske) : MetaBox { $uamcoiueqaamsqma = __("\x54\150\151\x73\40\163\x65\x74\x74\x69\x6e\147\x20\157\x6e\154\171\40\141\x70\x70\x6c\151\145\163\x20\164\157\x20\114\x65\166\x65\154\40\x32\40\160\141\x67\x65\163\x2e", PR__MDL__OPTIMIZATION); $wksoawcgagcgoask = self::couwksyewgyeooqe(); if (!($wksoawcgagcgoask && $wksoawcgagcgoask->qcgakseyaikigqco())) { goto yksywwikmeksikqc; } $uamcoiueqaamsqma = "{$uamcoiueqaamsqma}\x20" . sprintf(__("\101\x70\160\154\171\x20\164\x6f\40\142\x75\x79\x20\157\162\x20\151\x6e\x63\x72\145\141\163\x65\x20\164\x68\145\40\142\x75\144\147\145\164\40\x74\x68\162\x6f\x75\147\x68\40\x74\x68\145\x20\45\x73\56", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\145\146" => $wksoawcgagcgoask->giiuwsmyumqwwiyq(self::sauwwsocmukoaayu), "\x74\x61\x72\x67\x65\164" => "\x5f\x62\154\x61\156\x6b"], $wksoawcgagcgoask->qcgakseyaikigqco()))); yksywwikmeksikqc: return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\x63\x72\151\164\x69\143\x61\x6c\137\145\170\x74\x72\141\143\x74\x69\x6f\156", __("\x43\x72\x69\x74\x69\x63\141\x6c\40\x45\170\x74\x72\141\143\x74\151\157\156", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x63\162\151\164\x69\x63\141\x6c\x5f\x63\x73\x73", __("\x43\162\x69\164\x69\x63\x61\154\x20\x43\123\123", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kuqaeysqaeyocckm, __("\105\156\141\x62\154\x65\40\103\162\151\164\x69\x63\x61\154\x20\x43\x53\x53", PR__MDL__OPTIMIZATION))->ooowowweyusommmm(__("\x4a\165\163\164\40\146\157\162\x20\x4c\x65\x76\145\x6c\x20\x32\40\120\141\x67\145\x73", PR__MDL__OPTIMIZATION), $uamcoiueqaamsqma, self::ecioqysekgaasegg, true)->agywyaaquwawwuiy(self::qwmwuwqwwaiiaqou))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::qwmwuwqwwaiiaqou, __("\x45\x78\x74\x72\141\40\103\x53\123\40\103\157\x64\x65", PR__MDL__OPTIMIZATION))->wcgckeeiiseccqkc())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->saemoowcasogykak(IconFontawesomeInterface::skqmaokqagyceasc); } public function oyookmikikgkcgas($yuwymayicwwqiske) : MetaBox { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\x64\x65\x6c\141\171\137\x6c\157\141\x64", __("\x44\145\154\x61\171\x20\114\157\x61\144", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\144\145\154\141\x79\x5f\154\x6f\x61\144\137\x73\x74\x79\154\x65", __("\123\x74\171\154\x65\x20\x28\x43\123\x53\x29", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::cskegoigeecaayoi, __("\x4c\x6f\x61\x64\40\x53\x74\171\x6c\145\40\x77\151\x74\150\x20\x44\x65\x6c\x61\x79", PR__MDL__OPTIMIZATION))->ooowowweyusommmm(__("\x43\x72\x69\x74\x69\143\141\154\x20\x43\x53\x53\x20\x52\145\161\x75\x69\162\145\41", PR__MDL__OPTIMIZATION), __("\x59\157\x75\x20\156\x65\x65\x64\x20\x74\x6f\x20\x65\x6e\141\x62\154\145\x20\143\x72\x69\x74\151\x63\x61\154\x20\143\x73\163\40\164\x6f\x6f\x2c\x20\164\157\x20\x67\x65\x74\x20\x61\x20\x62\145\x73\x74\40\162\145\163\x75\x6c\164\x2e", PR__MDL__OPTIMIZATION), "\151\x6e\x66\157")->agywyaaquwawwuiy([self::mogckoqiygeqmiag, self::wiggegwgmkakogmg]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wiggegwgmkakogmg, __("\x44\145\154\141\x79\40\x43\104\116\x20\123\x74\x79\154\x65", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::mogckoqiygeqmiag, __("\x45\170\x63\154\165\x64\145\x20\x53\x74\171\x6c\145", PR__MDL__OPTIMIZATION))->qsecygiycssgacqs(5)->yskkmqiusguummwa())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x64\145\x6c\141\x79\x5f\154\157\141\x64\137\152\x61\166\141\x73\x63\162\x69\x70\164", __("\112\x61\x76\x61\x73\x63\162\x69\160\164", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::okycmqykyamqaauy, __("\x4c\157\x61\x64\40\x4a\141\x76\x61\163\143\x72\x69\x70\x74\40\x77\151\164\150\x20\104\x65\x6c\141\171", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim()->agywyaaquwawwuiy([self::sysesaekousoeosu, self::kgcwmmmwagaccsqi]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kgcwmmmwagaccsqi, __("\104\145\x6c\x61\171\x20\103\x44\x4e\40\x4a\141\x76\x61\163\143\162\151\160\x74", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::sysesaekousoeosu, __("\105\170\143\154\165\144\x65\40\x4a\141\x76\x61\163\x63\x72\151\160\164", PR__MDL__OPTIMIZATION))->qsecygiycssgacqs(5)->yskkmqiusguummwa())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum)); } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { $ggauoeuaesiymgee = []; switch ($uusmaiomayssaecw) { case self::miaqqqiaweeausws: $ggauoeuaesiymgee = [self::eumicecccemicqey => true, self::ykqawckyqkmqiamq => true, self::sikyekqowskqiqga => true, self::ccoaqmuiqioqaooa => true, self::emeseeausaemuoeq => true, self::oeiwkesueukkqggs => true, self::owgquqcyoseeeiqg => true, self::wamuucmcqykegkoc => true, self::wkasasawguckeyuc => true, self::iqmqemikwcuuiyom => true, self::sqaukikimiwcqmew => true, self::uwgswmisuuigoucw => true, self::moosyqmaqgsikgcg => true, self::cskegoigeecaayoi => true, self::qoyskaoaaakosmaq => true, self::uwcmcaucigmuiugg => true, self::yaggsqosuggmgykq => true, self::kuqaeysqaeyocckm => true, self::sewumqkiymkquogk => true, self::aysyuueaueiamysu => true, self::wiggegwgmkakogmg => true, self::ekequaesakywuioq => true, self::okycmqykyamqaauy => true, self::gukmqsiumkmukaoe => true, self::qwcseoyssyaciyqk => true, self::qwcseoyssyaciyqk => true, self::aaisgiycykyqiqcm => true, self::kgcwmmmwagaccsqi => true, self::gowiqmkskqiqsgsc => true, self::kcgocyessaswyike => true, self::ookqmecseqmewmeo => true]; goto yoqsigmoyaaceqky; case self::okeoeeywmosegiiy: $ggauoeuaesiymgee = [self::eumicecccemicqey => false, self::ykqawckyqkmqiamq => true, self::sikyekqowskqiqga => true, self::ccoaqmuiqioqaooa => true, self::emeseeausaemuoeq => false, self::oeiwkesueukkqggs => false, self::owgquqcyoseeeiqg => false, self::wamuucmcqykegkoc => false, self::wkasasawguckeyuc => false, self::iqmqemikwcuuiyom => false, self::sqaukikimiwcqmew => false, self::uwgswmisuuigoucw => true, self::moosyqmaqgsikgcg => true, self::cskegoigeecaayoi => false, self::qoyskaoaaakosmaq => true, self::uwcmcaucigmuiugg => false, self::yaggsqosuggmgykq => false, self::kuqaeysqaeyocckm => false, self::sewumqkiymkquogk => false, self::aysyuueaueiamysu => false, self::wiggegwgmkakogmg => false, self::ekequaesakywuioq => false, self::okycmqykyamqaauy => false, self::gukmqsiumkmukaoe => false, self::qwcseoyssyaciyqk => false, self::qwcseoyssyaciyqk => false, self::aaisgiycykyqiqcm => false, self::kgcwmmmwagaccsqi => false, self::gowiqmkskqiqsgsc => true, self::kcgocyessaswyike => false, self::ookqmecseqmewmeo => false]; goto yoqsigmoyaaceqky; } suqckoccuyeeymww: yoqsigmoyaaceqky: if (!$ggauoeuaesiymgee) { goto giugwaeuwaomossq; } $qiouiwasaauyaaue = array_merge($qiouiwasaauyaaue, $ggauoeuaesiymgee); giugwaeuwaomossq: return parent::aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw); } }
