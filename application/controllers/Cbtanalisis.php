<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtanalisis extends CI_Controller { public function __construct() { goto ZEkKs; lf97k: redirect("\x61\165\164\x68"); goto kn6Q3; NlrYj: if (!$this->ion_auth->logged_in()) { goto sRCvp; } goto ekr3e; tVt68: ytUia: goto PTf2s; le08a: show_error("\110\x61\x6e\x79\141\40\x41\144\x6d\151\x6e\x69\x73\164\x72\141\x74\x6f\162\x20\x79\x61\156\147\x20\144\151\x62\x65\x72\151\40\150\x61\x6b\x20\165\156\164\x75\153\40\x6d\145\x6e\x67\x61\x6b\x73\x65\x73\x20\x68\x61\154\x61\x6d\141\156\x20\x69\x6e\151\x2c\40\74\141\40\150\x72\x65\146\75\42" . base_url("\x64\x61\x73\150\x62\157\141\162\x64") . "\42\x3e\x4b\145\x6d\x62\141\154\x69\x20\x6b\145\x20\155\x65\x6e\165\x20\x61\167\x61\x6c\74\x2f\x61\76", 403, "\101\x6b\x73\145\x73\x20\124\x65\162\154\141\162\x61\156\147"); goto tVt68; V0OEq: $this->load->model("\x44\x72\157\x70\x64\157\x77\x6e\137\x6d\x6f\144\x65\x6c", "\x64\x72\x6f\160\144\x6f\x77\156"); goto aqunr; ZEkKs: parent::__construct(); goto NlrYj; x9MIt: $this->load->model("\114\x6f\x67\137\x6d\157\x64\145\x6c", "\x6c\157\147\x67\x69\x6e\x67"); goto V0OEq; PTf2s: goto ujGTK; goto q2kS6; Epl2t: $this->load->model("\103\142\164\137\155\x6f\144\145\x6c", "\x63\x62\164"); goto x9MIt; kn6Q3: ujGTK: goto tCyWP; ekr3e: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\165"))) { goto ytUia; } goto le08a; aqunr: $this->form_validation->set_error_delimiters('', ''); goto ZTA7g; Mp254: $this->load->model("\x44\x61\163\150\142\157\x61\162\144\137\155\x6f\144\x65\x6c", "\x64\x61\x73\150\x62\157\x61\162\144"); goto Epl2t; vg6gz: $this->load->model("\115\141\163\x74\145\x72\137\x6d\157\144\x65\154", "\x6d\x61\163\x74\x65\162"); goto Mp254; tCyWP: $this->load->library(["\x64\141\164\x61\164\141\142\154\x65\163", "\146\157\162\x6d\137\166\x61\154\x69\144\141\x74\151\x6f\x6e"]); goto vg6gz; q2kS6: sRCvp: goto lf97k; ZTA7g: } public function output_json($data, $encode = true) { goto DI48H; umDZ4: $this->output->set_content_type("\141\160\160\x6c\151\x63\x61\164\x69\157\156\x2f\152\163\157\x6e")->set_output($data); goto MosMr; DI48H: if (!$encode) { goto EXfAQ; } goto WKVXK; EaXeO: EXfAQ: goto umDZ4; WKVXK: $data = json_encode($data); goto EaXeO; MosMr: } public function index() { goto DcF8A; Nl8Nr: j6lmU: goto lbl4U; IP8JM: $data["\x6a\x61\144\x77\141\154\137\163\145\x6c\x65\143\164\145\144"] = $jadwal; goto t1YiY; W8LQL: $jawabans_siswa = []; goto xrNSX; XakX1: $data["\x6b\157\144\145\152\x61\x64\167\141\154"] = $this->dropdown->getAllJadwalGuru($thn_sel, $smt_sel, $guru->id_guru); goto XTdHk; ZmVip: $data["\163\x6d\x74\137\163\145\x6c\x65\x63\164\145\x64"] = $smt_sel; goto IP8JM; XlO0k: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto KQnlZ; z8ibJ: $this->load->view("\155\x65\x6d\x62\x65\162\163\57\x67\165\x72\165\57\x74\x65\x6d\x70\154\x61\164\145\163\57\x66\157\157\164\145\162"); goto L0hR3; Y3yZp: $nguru[$guru->id_guru] = $guru->nama_guru; goto G4oDR; erXzd: foreach ($all_jawaban as $jawaban_siswa) { goto wDynn; wDynn: array_push($ids, $jawaban_siswa->id_siswa); goto Er0eV; Er0eV: $jawabans_siswa[$jawaban_siswa->jenis_soal][$jawaban_siswa->nomor_soal][$jawaban_siswa->id_siswa] = $jawaban_siswa->jawaban_siswa; goto h_y1x; h_y1x: N2Z7p: goto kQW23; kQW23: } goto B6ZGT; B6ZGT: wQvi0: goto YwqDF; KQnlZ: $data["\x73\x6d\x74\137\141\x63\164\x69\166\x65"] = $smt; goto X9H_1; lbl4U: $data["\160\x72\157\x66\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto IcjQv; DbCAR: $this->load->view("\x5f\x74\x65\155\x70\154\141\164\x65\x73\57\x64\141\x73\150\142\x6f\141\x72\x64\57\x5f\x66\157\157\x74\145\162"); goto gDtQv; gDtQv: Jz9Np: goto w7OJp; qnXkc: $data["\x69\156\x66\x6f"] = $info; goto FK_13; G1SAY: foreach ($all_soals[1] as $no => $soal) { goto A6qqv; Mhp28: if ($daya_pembeda >= 0.2) { goto c_ri5; } goto udFM5; AAiYf: $y = []; goto FDh9Q; J0uAa: if (!($jml_siswa > 0)) { goto JitFE; } goto vuKJF; UYFnV: hkTca: goto ewJ26; JxZnZ: P0jPH: goto t5aXa; ZiING: Nt8vH: goto HOkJM; ZewQ3: oa9X7: goto OF8Rm; vuKJF: $kesukaran = round($benar / $jml_siswa, 2); goto tPRC8; wMxOR: $daya_pembeda = $yng_benar_golonganatas / $bagi_daya; goto rrzac; udFM5: $soal->status_daya = "\x4a\x65\x6c\x65\153"; goto fBXCm; SBSz5: $yng_benar_golonganbawah = 0; goto cY5w_; Ak2Kd: $benar = $soal->jumlah_benar; goto dRzFZ; Xu8AU: $status_soal = ''; goto J0uAa; VhzKZ: oiRJe: goto SMKNi; YK6tf: $status_soal = "\163\x65\x64\x61\156\x67"; goto VhzKZ; vPLf4: if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah == 0) { goto hkTca; } goto BlIBw; nifGN: bvtD1: goto ddAiT; yGa0M: FL3UG: goto Ak2Kd; Y11g7: $soal->skor_siswa = []; goto GKfGB; FDh9Q: $yng_benar_golonganatas = 0; goto SBSz5; fBXCm: goto HWI0x; goto JWGjW; i0W3R: D_g_t: goto A9UYO; vMpHc: if ($kesukaran >= 0.3) { goto gWoww; } goto XZslS; V1pdN: goto bBbuB; goto nifGN; ja39I: $soal->tingkat_kesukaran = $kesukaran; goto d0X_v; nUR_H: $x = []; goto rZDUa; gas1O: $jml_siswa--; goto XqR9j; ewJ26: $daya_pembeda = 0; goto SK2uv; mzCRY: $total_siswa = 0; goto nUR_H; oYxWv: goto Z5qxO; goto XvzwG; XZslS: $status_soal = "\163\x75\x6b\x61\162"; goto iHL8C; d0X_v: $soal->status_kesukaran = $status_soal; goto M6MSz; t4DIs: if ($yng_benar_golonganatas != 0 && $yng_benar_golonganbawah == 0) { goto sxij6; } goto vPLf4; wzhpF: $soal->status_daya = "\x42\141\x69\153"; goto bSnAL; Ao92s: foreach ($jwbn_siswa as $id => $jawab_siswa) { goto kzhkl; O7_5G: if ($jawab_siswa == "\x44") { goto h5s3u; } goto kfBqs; Rd4q6: if ($jawab_siswa == "\101") { goto QbPv8; } goto AJln1; IbAHk: goto Pxx4y; goto kIVg3; aaHW2: HJtYn: goto dN_Wk; kIVg3: jjdEf: goto tNSfF; kPT9v: beumL: goto AS2U2; i616g: array_push($x, 0); goto HMgaO; SjYyW: array_push($x, 1); goto qFxnD; Xcgee: $soal->jumlah_benar++; goto SjYyW; xpK8X: h5s3u: goto nwFLV; oKiSS: goto Pxx4y; goto qXUd4; I5ZfG: goto Pxx4y; goto aaHW2; qFxnD: CItdh: goto Rd4q6; aIMq4: xI3Rc: goto c8Hmw; kzhkl: $total_siswa++; goto aJ0k3; AJln1: if ($jawab_siswa == "\x42") { goto HJtYn; } goto Z4u0u; Z4u0u: if ($jawab_siswa == "\x43") { goto beumL; } goto O7_5G; vnFg4: goto Pxx4y; goto xpK8X; xsUnQ: Pxx4y: goto aIMq4; KLczT: $soal->jawaban_siswa["\x6a\141\167\141\142\137\x61"][$id] = $jawab_siswa; goto I5ZfG; AS2U2: $soal->jawaban_siswa["\152\141\x77\141\x62\x5f\143"][$id] = $jawab_siswa; goto vnFg4; nwFLV: $soal->jawaban_siswa["\152\141\167\x61\x62\x5f\x64"][$id] = $jawab_siswa; goto IbAHk; qXUd4: QbPv8: goto KLczT; HMgaO: goto CItdh; goto PkxOs; PkxOs: tO74L: goto Xcgee; tNSfF: $soal->jawaban_siswa["\152\x61\167\141\x62\137\x65"][$id] = $jawab_siswa; goto xsUnQ; dN_Wk: $soal->jawaban_siswa["\x6a\141\x77\x61\142\137\142"][$id] = $jawab_siswa; goto FXe2R; FXe2R: goto Pxx4y; goto kPT9v; kfBqs: if ($jawab_siswa == "\x45") { goto jjdEf; } goto oKiSS; LjYLm: $soal->jumlah_salah++; goto i616g; aJ0k3: if ($jawab_siswa == $soal->jawaban) { goto tO74L; } goto LjYLm; c8Hmw: } goto yGa0M; XqR9j: xyS3h: goto AAwST; gqIRo: bBbuB: goto JxZnZ; l2UE7: gWoww: goto YK6tf; HOkJM: $soal->total_siswa = $total_siswa; goto XB12K; FV_ZC: goto eEtYh; goto ZewQ3; rZDUa: $jwbn_siswa = isset($jawabans_siswa[1][$no]) && isset($jawabans_siswa[1][$no]) ? $jawabans_siswa[1][$no] : []; goto Ao92s; KFJrk: eEtYh: goto i2dpm; o6qk_: $bagi_daya = $bagi > 0 ? $bagi : 1; goto n4Pq8; BlIBw: $daya_pembeda = $yng_benar_golonganatas / $bagi_daya - $yng_benar_golonganbawah / $bagi_daya; goto TadRh; Uly5b: $pos_b = $bagi; goto AAiYf; nTjx1: $pearson = $this->pearson($x, $y); goto COXbV; ACqPD: $pos_a = 0; goto Uly5b; GKfGB: $soal->jumlah_benar = 0; goto EREKR; VEZ3f: if ($daya_pembeda >= 0.4) { goto WbsdF; } goto Mhp28; XvzwG: sxij6: goto wMxOR; EREKR: $soal->jumlah_salah = 0; goto mzCRY; XB12K: $soal->benar_atas = $yng_benar_golonganatas; goto w1_At; HbGIy: goto bWEj0; goto Mi0RB; dRzFZ: $salah = $soal->jumlah_salah; goto Sb3ZS; Sb3ZS: $jml_siswa = $total_siswa; goto SFkUh; PbiDm: JitFE: goto ja39I; Mi0RB: WbsdF: goto wzhpF; W1CQs: $soal->table_r = $this->nilaiSignifikansi($total_siswa); goto Ixdmv; M6MSz: $cek = $jml_siswa % 2; goto IekRR; COXbV: $soal->nilai_valid = $pearson; goto W1CQs; Rfeum: if ($daya_pembeda >= 0.7) { goto bvtD1; } goto VEZ3f; ECkNO: foreach ($nilai_pg as $id => $nilai) { goto dfY40; Bc8uQ: mzXON: goto IdPpD; PD0d7: if (!isset($jwbn_siswa[$id])) { goto YQEmf; } goto hvp3z; n0nyq: dzWq4: goto XIBLM; Tuq1E: goto mzXON; goto QbVgx; aHbqz: $yng_benar_golonganbawah++; goto muvF0; jnvx0: if ($no <= $bagi) { goto j_eAJ; } goto IoKcQ; hvp3z: $siswa_menjawab = $jwbn_siswa[$id]; goto jnvx0; IdPpD: YQEmf: goto a28o5; aKjc4: if (!($siswa_menjawab == $soal->jawaban)) { goto UN3JP; } goto inZVC; dfY40: array_push($y, $nilai->pg_benar); goto PD0d7; inZVC: $yng_benar_golonganatas++; goto ia02O; muvF0: nRzKk: goto Tuq1E; QbVgx: j_eAJ: goto aKjc4; a28o5: $no++; goto n0nyq; ia02O: UN3JP: goto Bc8uQ; IoKcQ: if (!($siswa_menjawab == $soal->jawaban)) { goto nRzKk; } goto aHbqz; XIBLM: } goto ZiING; QWogo: $soal->status_valid = $validitas; goto o6qk_; A6qqv: $soal->jawaban_siswa = []; goto Y11g7; n4Pq8: if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah != 0) { goto oa9X7; } goto t4DIs; Sv7ow: gAsgF: goto PbiDm; SK2uv: h3pBk: goto oYxWv; SMKNi: goto gAsgF; goto i0W3R; ddAiT: $soal->status_daya = "\x42\x61\x69\153\40\x53\145\x6b\x61\x6c\151"; goto gqIRo; w1_At: $soal->benar_bawah = $yng_benar_golonganbawah; goto nTjx1; AAwST: $bagi = $jml_siswa / 2; goto ACqPD; TadRh: goto h3pBk; goto UYFnV; SFkUh: $kesukaran = 0; goto Xu8AU; lUaXT: HWI0x: goto HbGIy; OF8Rm: $daya_pembeda = 0 - $yng_benar_golonganbawah / $bagi_daya; goto KFJrk; i2dpm: $soal->daya_pembeda = $daya_pembeda; goto Rfeum; bSnAL: bWEj0: goto V1pdN; IekRR: if (!($cek == 1)) { goto xyS3h; } goto gas1O; tPRC8: if ($kesukaran >= 0.7) { goto D_g_t; } goto vMpHc; iHL8C: goto oiRJe; goto l2UE7; rrzac: Z5qxO: goto FV_ZC; JWGjW: c_ri5: goto LQo4t; Ixdmv: $validitas = $this->nilaiSignifikansi($total_siswa) <= $pearson ? "\126\x61\x6c\151\x64" : "\124\x69\x64\x61\153\40\x76\x61\154\x69\144"; goto QWogo; cY5w_: $no = 1; goto ECkNO; LQo4t: $soal->status_daya = "\103\x75\x6b\165\x70"; goto lUaXT; A9UYO: $status_soal = "\155\165\x64\141\150"; goto Sv7ow; t5aXa: } goto C43j6; DyS9H: $this->load->view("\x5f\x74\x65\155\x70\x6c\141\164\145\x73\x2f\x64\x61\x73\x68\x62\157\x61\162\x64\x2f\x5f\x68\x65\141\144\x65\162", $data); goto MF0dI; FK_13: $data["\x73\157\x61\x6c\x73"] = $all_soals; goto D0L9E; YwqDF: $nilai_pg = $this->cbt->getAllNilaiSiswa($jadwal); goto AiHvO; rbLi_: $guru = $this->dashboard->getDataGuruByUserId($user->id, $thn_sel, $smt_sel); goto Y3yZp; bgpPT: $smt_sel = $this->input->get("\x73\155\164"); goto z8Hq9; XTdHk: $this->load->view("\x6d\x65\x6d\142\145\x72\x73\x2f\147\x75\x72\165\x2f\164\145\155\160\x6c\141\x74\x65\163\57\x68\x65\x61\x64\x65\162", $data); goto Ucum5; AiHvO: $all_soals = $this->cbt->getSoalByBank($info->id_bank); goto Rbppy; L0hR3: goto Jz9Np; goto Nl8Nr; z8Hq9: $thn_sel = $thn_sel == null ? $tp->id_tp : $thn_sel; goto M9XP3; S_aNm: $thn_sel = $this->input->get("\164\150\x6e"); goto bgpPT; Ucum5: $this->load->view("\143\x62\x74\x2f\141\x6e\x61\x6c\x69\163\151\x73\x2f\x64\141\x74\x61"); goto z8ibJ; M9XP3: $smt_sel = $smt_sel == null ? $smt->id_smt : $smt_sel; goto hEXt2; Tmqfl: $info = $this->cbt->getJadwalById($jadwal); goto I3pk0; Rbppy: if (!isset($all_soals[1])) { goto i7lmf; } goto G1SAY; I3pk0: $all_jawaban = $this->cbt->getJawabanByBank($info->id_bank); goto W8LQL; xyBmi: $data["\164\x70"] = $this->dashboard->getTahun(); goto eHhK8; D0L9E: $data["\156\151\154\141\151"] = $nilai_pg; goto pNwtn; eHhK8: $data["\x74\160\137\141\143\x74\151\166\x65"] = $tp; goto XlO0k; jFYJ2: $tp = $this->dashboard->getTahunActive(); goto AQSKS; pNwtn: VVkUa: goto p56XY; t1YiY: if (!($jadwal != null)) { goto VVkUa; } goto Tmqfl; xrNSX: $ids = []; goto erXzd; IcjQv: $data["\x6b\157\x64\x65\x6a\x61\144\167\141\x6c"] = $this->dropdown->getAllJadwal($thn_sel, $smt_sel); goto DyS9H; G4oDR: $data["\x67\165\x72\165"] = $guru; goto XakX1; mDoI2: i7lmf: goto qnXkc; DcF8A: $user = $this->ion_auth->user()->row(); goto HLQ1c; C43j6: rqCbb: goto mDoI2; X9H_1: $jadwal = $this->input->get("\152\x61\144\x77\x61\x6c"); goto S_aNm; AQSKS: $smt = $this->dashboard->getSemesterActive(); goto xyBmi; hEXt2: $data["\x74\160\137\x73\145\154\x65\143\x74\145\x64"] = $thn_sel; goto ZmVip; p56XY: if ($this->ion_auth->is_admin()) { goto j6lmU; } goto rbLi_; MF0dI: $this->load->view("\x63\142\x74\x2f\x61\156\x61\154\151\163\151\163\x2f\144\x61\164\x61"); goto DbCAR; HLQ1c: $data = ["\165\163\x65\162" => $user, "\x6a\x75\144\x75\154" => "\x41\x6e\x61\154\151\x73\141\x20\123\x6f\141\x6c", "\x73\x75\142\152\x75\144\x75\x6c" => "\x41\x6e\141\x6c\x69\x73\x61\x20\123\157\x61\154\40\x55\x6a\x69\x61\156", "\x73\145\164\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto jFYJ2; w7OJp: } private function pearson($x, $y) { goto NDRoj; HGseX: $bx = 0; goto d1C64; cRr68: goto WwiUN; goto xCzlm; CPdqW: $ret = -1; goto F7Vzh; py9vo: xC3fK: goto Y7l8I; uxX3f: $yr = $y[$i] - $ys; goto TzS9t; WZqPE: x_W8D: goto rvH_r; l0GQO: array_pop($x); goto r1UdX; Us6Nj: $ret = $a / $b; goto S56JE; FdKmS: $ys = array_sum($y) / count($y); goto J3kRN; rvH_r: if (!($i < $d)) { goto UGIKn; } goto p12HE; DrecW: $xs = array_sum($x) / count($x); goto FdKmS; RexOI: return -1; goto py9vo; NDRoj: $cx = count($x); goto CHbEY; Rtmqp: if (!($i < $d)) { goto u2rsT; } goto l0GQO; DgXS2: $d = $cy - $cx; goto wJ62o; lJlJ9: $d = $cx - $cy; goto WBF3N; HW9AZ: if (!($i < count($x))) { goto nC2kS; } goto R1cga; p12HE: array_pop($y); goto froOA; d0MU7: $bx += pow($xr, 2); goto rG3cz; rRhI3: $b = sqrt($bx * $by); goto CPdqW; J3kRN: $a = 0; goto HGseX; fso4d: WwiUN: goto HW9AZ; qiX_U: $i = 0; goto fso4d; rG3cz: $by += pow($yr, 2); goto V_lwN; p13ZF: if (!($cx > $cy)) { goto bn2rn; } goto lJlJ9; QV9uf: $i++; goto sSr7l; d1C64: $by = 0; goto qiX_U; dYiN1: FMyGw: goto Rtmqp; FTVim: return $ret; goto gx2cI; TzS9t: $a += $xr * $yr; goto d0MU7; WBF3N: $i = 0; goto dYiN1; R1cga: $xr = $x[$i] - $xs; goto uxX3f; RHis3: if (!($cx === 0 || $cy === 0)) { goto QqBCK; } goto pbmo1; tN3Sw: if (!(count($x) !== count($y))) { goto xC3fK; } goto RexOI; r1UdX: zyIhu: goto QV9uf; tYBIU: $y = array_values($y); goto DrecW; Y7l8I: $x = array_values($x); goto tYBIU; jjztv: $i++; goto cRr68; pbmo1: return -1; goto C9d6c; V_lwN: hlt6b: goto jjztv; C9d6c: QqBCK: goto joqVK; froOA: UyuNu: goto pQlMk; CHbEY: $cy = count($y); goto RHis3; sSr7l: goto FMyGw; goto RBkqG; pQlMk: $i++; goto Kncqb; F7Vzh: if (!($b > 0)) { goto Eb5W8; } goto Us6Nj; joqVK: if (!($cx < $cy)) { goto rGpBo; } goto DgXS2; EIWVY: bn2rn: goto tN3Sw; f5WHe: UGIKn: goto XdRDe; Kncqb: goto x_W8D; goto f5WHe; xCzlm: nC2kS: goto rRhI3; XdRDe: rGpBo: goto p13ZF; S56JE: Eb5W8: goto FTVim; wJ62o: $i = 0; goto WZqPE; RBkqG: u2rsT: goto EIWVY; gx2cI: } public function getNilaiKelas() { goto KQqlo; KQqlo: $kelas = $this->input->get("\x6b\x65\x6c\141\163"); goto dE8fW; LAYrd: $this->output_json($data); goto kpbLv; dXm4Q: $jadwal = $this->input->get("\x6a\141\x64\x77\141\154"); goto nnLFO; J3dFD: $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas); goto WriP4; PnuP8: $data["\x73\151\163\x77\141"] = $siswas; goto tX7qi; dE8fW: $sesi = $this->input->get("\x73\145\163\151"); goto dXm4Q; tX7qi: $data["\152\141\x77\x61\142\x61\156"] = $arrDur; goto D9zco; nnLFO: $tp = $this->dashboard->getTahunActive(); goto tqP22; mnNWQ: T9F01: goto PnuP8; T0Atu: $info = $this->cbt->getJadwalById($jadwal, $sesi); goto J3dFD; tqP22: $smt = $this->dashboard->getSemesterActive(); goto T0Atu; D9zco: $data["\x69\x6e\x66\157"] = $info; goto LAYrd; WriP4: $arrDur = []; goto Ds8e2; Ds8e2: foreach ($siswas as $siswa) { goto DzNfo; Vbl_J: CvnRi: goto ozvAE; Bj8Ik: $jawaban = $this->cbt->getJawabanSiswa($siswa->id_siswa . "\x30" . $jadwal . $info->id_bank . 2 . ($j + 1)); goto dShuM; VOypZ: Yiy9b: goto ZI2Dv; btLQp: b5ZyT: goto YD6R0; DqVQa: pvuY3: goto AXhz2; AXhz2: if (!($j < $info->tampil_esai)) { goto xkApG; } goto Bj8Ik; hk2Ta: $arrJawab_essai = []; goto y18zN; BoNSV: if (!($i < $info->tampil_pg)) { goto qhkrT; } goto tRSkt; ShHPg: qhkrT: goto FdPJ0; hrtPK: xkApG: goto LA96Q; cEv3t: goto CvnRi; goto VOypZ; dShuM: if ($jawaban != null) { goto Yiy9b; } goto SGK2K; FJkG1: $j++; goto SQ6G_; FdPJ0: $j = 0; goto DqVQa; n2U2u: vgcic: goto tf6l7; ZCjIW: goto rFw8V; goto ShHPg; y18zN: $i = 0; goto c6qwR; YD6R0: $i++; goto ZCjIW; ZI2Dv: $arrJawab_essai[$siswa->id_siswa][] = $jawaban; goto Vbl_J; ozvAE: iGykn: goto FJkG1; DzNfo: $arrJawab_pg = []; goto hk2Ta; TQXa6: $arrDur[$siswa->id_siswa] = ["\x64\x75\162" => $this->cbt->getDurasiSiswa($siswa->id_siswa . "\60" . $jadwal), "\x6a\141\x77\x61\x62\x5f\160\x67" => $arrJawab_pg[$siswa->id_siswa], "\x6a\x61\167\x61\x62\137\145\163\x73\141\x69" => $jawab_essai, "\154\x6f\147" => $this->cbt->getLogUjian($siswa->id_siswa, $jadwal)]; goto n2U2u; SGK2K: $arrJawab_essai[$siswa->id_siswa][] = array("\x69\144\x5f\152\141\x77\x61\x62\x61\156" => 0, "\x6a\x61\x77\141\142\x61\x6e" => '', "\x6a\x61\x77\x61\x62\141\x6e\137\142\145\x6e\141\x72" => '', "\153\x6f\162\x65\x6b\163\x69" => 0); goto cEv3t; LA96Q: $jawab_essai = isset($arrJawab_essai[$siswa->id_siswa]) ? $arrJawab_essai[$siswa->id_siswa] : []; goto TQXa6; SQ6G_: goto pvuY3; goto hrtPK; c6qwR: rFw8V: goto BoNSV; tRSkt: $arrJawab_pg[$siswa->id_siswa][] = $this->cbt->getJawabanSiswa($siswa->id_siswa . "\60" . $jadwal . $info->id_bank . 1 . ($i + 1)); goto btLQp; tf6l7: } goto mnNWQ; kpbLv: } public function getJadwalUjianByJadwal() { goto pCOf2; gUXm7: $info = $this->cbt->getJadwalById($jadwal); goto LbhOf; w75um: $this->output_json($kelases); goto pfBxe; pCOf2: $jadwal = $this->input->get("\152\x61\144\167\141\x6c"); goto bVxs8; iGt54: $smt = $this->input->get("\x73\x6d\x74"); goto gUXm7; LbhOf: $kelas = unserialize($info->bank_kelas); goto RSiER; bVxs8: $tp = $this->input->get("\x74\150\156"); goto iGt54; m8Ngu: t0maA: goto w75um; pe8Ea: foreach ($kelas as $key => $value) { $kelases[$value["\153\x65\154\141\x73\137\x69\144"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\153\x65\154\x61\163\x5f\151\144"]); I8Eo5: } goto m8Ngu; RSiER: $kelases = []; goto pe8Ea; pfBxe: } public function kalkulasi() { goto ui4pI; m9Y3T: $this->output_json($update); goto xVhxi; ui4pI: $jadwal = $this->input->get("\x6a\x61\144\167\x61\x6c"); goto H3CFl; H3CFl: $update = $this->generateNilaiUjian($jadwal); goto m9Y3T; xVhxi: } public function generateNilaiUjian($jadwal) { goto pdJze; EUjyP: $siswas = $this->cbt->getSiswaByKelas($info->id_tp, $info->id_smt, $kelases); goto LxrmE; dlF95: $bobot_jodoh = $info->bobot_jodohkan / 100; goto NqpD3; LxrmE: $ids = []; goto YIcvY; ZPvRa: $bobot_pg2 = $info->bobot_kompleks / 100; goto KXTvm; IIE8h: $insets = []; goto ycaiU; pdJze: $info = $this->cbt->getJadwalById($jadwal); goto NSVWx; ycaiU: foreach ($siswas as $siswa) { goto oQlZ4; QoLc5: $jawaban_jodoh = $ada_jawaban_jodoh ? $jawabans_siswa[$siswa->id_siswa]["\63"] : []; goto WEpE_; ILruM: $jawaban_pg = $ada_jawaban_pg ? $jawabans_siswa[$siswa->id_siswa]["\61"] : []; goto FKBQi; r1WAG: $benar_es = 0; goto NrJQz; Nzl0D: MYIjK: goto Tveog; cWPEK: $insert["\151\163\x69\x61\156\137\x6e\151\x6c\141\151"] = round($skor_is, 2); goto FgFZj; eQspj: rYQlN: goto CB6AJ; Tveog: sioDI: goto ocXSp; W0JL2: $input_es = 0; goto NKY1m; z85vH: $skor_koreksi_is = 0.0; goto Jj5pC; FKBQi: $benar_pg = 0; goto qTArh; FnD0W: $s_is = $bagi_isian == 0 ? 0 : $benar_is / $bagi_isian * $bobot_isian; goto vdzSS; wfAn5: if (!(count($jawaban_pg) > 0)) { goto KSP1K; } goto p0h2A; zKBkO: if (!($info->tampil_pg > 0)) { goto ZcUuH; } goto wfAn5; NtXKm: $ada_jawaban_essai = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x35"]); goto Asc6x; sXytv: $benar_pg2 = 0; goto ver6_; jmG1x: j0U_3: goto nWNzr; sRqiX: $s_es = $bagi_essai == 0 ? 0 : $benar_es / $bagi_essai * $bobot_essai; goto W0JL2; PLb4N: if (!(count($jawaban_jodoh) > 0)) { goto oAhYQ; } goto MRT6I; sPomI: if (!($info->tampil_jodohkan > 0)) { goto kdW8R; } goto PLb4N; oMIoI: J2W8g: goto z_r9Z; Jj5pC: $otomatis_is = 0; goto ft3BY; UxiZA: L46US: goto eQspj; oJmoP: $benar_is = 0; goto z85vH; a9025: $otomatis_jod = 0; goto sPomI; lF9ep: $skor_pg2 = $input_pg2 != 0 ? $input_pg2 : ($otomatis_pg2 == 0 ? $s_pg2 : $skor_koreksi_pg2); goto QoLc5; S64Sh: ILTM1: goto oZoQK; GiW61: BOpn4: goto UxiZA; EKchs: $insert["\152\x6f\144\157\x68\153\141\x6e\137\156\151\x6c\x61\x69"] = round($skor_jod, 2); goto cWPEK; vrDsT: $ada_jawaban_jodoh = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x33"]); goto aEs8g; qAEYu: sBoLB: goto cY5Rx; WUECI: foreach ($jawaban_pg2 as $num => $jawab_pg2) { goto sMiyQ; YKwoQ: $skor_koreksi_pg2 += $jawab_pg2->nilai_koreksi; goto xM0U5; zGwCc: MiD6f: goto y1T8d; sMiyQ: $otomatis_pg2 = $jawab_pg2->nilai_otomatis; goto YKwoQ; WTrUU: foreach ($jawab_pg2->jawaban_siswa as $js) { goto US1gj; US1gj: if (!in_array($js, $jawab_pg2->jawaban_benar)) { goto EGcGz; } goto rbSP8; rbSP8: array_push($arr_benar, true); goto h7w05; h7w05: EGcGz: goto GExzk; GExzk: GjXop: goto NcSDe; NcSDe: } goto zGwCc; zbqBw: FXkpC: goto R3GIZ; y1T8d: $benar_pg2 += 1 / count($jawab_pg2->jawaban_benar) * count($arr_benar); goto zbqBw; xM0U5: $arr_benar = []; goto WTrUU; R3GIZ: } goto GiW61; Igy1e: $otomatis_es = 0; goto ldU4O; iEt_F: kdW8R: goto ABJxf; aEs8g: $ada_jawaban_isian = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\64"]); goto NtXKm; y524L: if (!($nilai_input != null && $nilai_input->jodohkan_nilai != null)) { goto j0U_3; } goto VRoII; Wv459: $insert["\153\157\x6d\x70\x6c\145\153\163\x5f\156\151\x6c\x61\151"] = round($skor_pg2, 2); goto EKchs; BxORG: if (!(count($jawaban_is) > 0)) { goto sioDI; } goto vz4i4; VNhc9: ZcUuH: goto VI6so; D1wCa: array_push($insets, $insert); goto qAEYu; yAGGa: if (!(count($jawaban_es) > 0)) { goto yxIQc; } goto U4Iz2; ldU4O: if (!($info->tampil_esai > 0)) { goto P9jKF; } goto yAGGa; pe0ck: $insert["\x69\144\137\152\x61\144\x77\x61\154"] = $jadwal; goto o4cPY; NKY1m: if (!($nilai_input != null && $nilai_input->isian_nilai != null)) { goto ILTM1; } goto fg0HQ; z_r9Z: KSP1K: goto VNhc9; NrJQz: $skor_koreksi_es = 0.0; goto Igy1e; X3ASw: $insert["\x69\144\137\163\151\x73\167\141"] = $siswa->id_siswa; goto pe0ck; Od_Ph: if (!($nilai_input != null && $nilai_input->kompleks_nilai != null)) { goto TB_Rn; } goto avBor; avBor: $input_pg2 = $nilai_input->kompleks_nilai; goto JYsJN; sPbKa: $otomatis_pg2 = 0; goto M6bDv; kNUGx: $skor_koreksi_jod = 0.0; goto a9025; vz4i4: foreach ($jawaban_is as $num => $jawab_is) { goto J8n_F; YlU1Z: $otomatis_is = $jawab_is->nilai_otomatis; goto DzsEa; DzsEa: EMsxz: goto Roz9L; pBmM2: u1O_p: goto YlU1Z; RIhXS: $benar = $jawab_is != null && strtolower($jawab_is->jawaban_siswa) == strtolower($jawab_is->jawaban_benar); goto cHDrG; J8n_F: $skor_koreksi_is += $jawab_is->nilai_koreksi; goto RIhXS; cHDrG: if (!$benar) { goto u1O_p; } goto hWy4q; hWy4q: $benar_is++; goto pBmM2; Roz9L: } goto Nzl0D; CB6AJ: $s_pg2 = $bagi_pg2 == 0 ? 0 : $benar_pg2 / $bagi_pg2 * $bobot_pg2; goto B6etr; qTArh: $salah_pg = 0; goto zKBkO; VI6so: $skor_pg = $bagi_pg == 0 ? 0 : $benar_pg / $bagi_pg * $bobot_pg; goto uHQKB; nWNzr: $skor_jod = $input_jod != 0 ? $input_jod : ($otomatis_jod == 0 ? $s_jod : $skor_koreksi_jod); goto uZ3Hp; JYsJN: TB_Rn: goto lF9ep; U4Iz2: foreach ($jawaban_es as $num => $jawab_es) { goto nvTt3; oBTTN: Mod9l: goto yssXX; zfiaX: $benar_es++; goto oBTTN; v0k99: XrJrB: goto OgfYk; yssXX: $otomatis_es = $jawab_es->nilai_otomatis; goto v0k99; twAtA: $benar = $jawab_es != null && strtolower($jawab_es->jawaban_siswa) == strtolower($jawab_es->jawaban_benar); goto TiVOw; nvTt3: $skor_koreksi_es += $jawab_es->nilai_koreksi; goto twAtA; TiVOw: if (!$benar) { goto Mod9l; } goto zfiaX; OgfYk: } goto t54kQ; oQlZ4: $ada_jawaban = isset($jawabans_siswa[$siswa->id_siswa]); goto pub03; vFbdH: $ada_jawaban_pg2 = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\62"]); goto vrDsT; VRoII: $input_jod = $nilai_input->jodohkan_nilai; goto jmG1x; uHQKB: $jawaban_pg2 = $ada_jawaban_pg2 ? $jawabans_siswa[$siswa->id_siswa]["\x32"] : []; goto sXytv; ocXSp: lfet4: goto FnD0W; MV8VC: UWQ02: goto NP5M6; p0h2A: foreach ($jawaban_pg as $jwb_pg) { goto svxVV; lVM9d: t_CED: goto ENBey; C6SKB: if (strtoupper($jwb_pg->jawaban_siswa) == strtoupper($jwb_pg->jawaban_benar)) { goto cADWl; } goto hOL_E; r8p7E: cADWl: goto W18I5; K7uXf: goto IEs53; goto r8p7E; ENBey: P4G3R: goto oS9i1; mV4Ez: IEs53: goto lVM9d; svxVV: if (!($jwb_pg != null && $jwb_pg->jawaban_siswa != null)) { goto t_CED; } goto C6SKB; hOL_E: $salah_pg += 1; goto K7uXf; W18I5: $benar_pg += 1; goto mV4Ez; oS9i1: } goto oMIoI; FgFZj: $insert["\x65\x73\163\141\x69\x5f\x6e\x69\x6c\x61\151"] = round($skor_es, 2); goto D1wCa; oZoQK: $skor_es = $input_es != 0 ? $input_es : ($otomatis_es == 0 ? $s_es : $skor_koreksi_es); goto DRvPM; fg0HQ: $input_es = $nilai_input->essai_nilai; goto S64Sh; uZ3Hp: $jawaban_is = $ada_jawaban_isian ? $jawabans_siswa[$siswa->id_siswa]["\64"] : []; goto oJmoP; t54kQ: QFgzu: goto u0xzg; Asc6x: $nilai_input = $this->cbt->getNilaiSiswaByJadwal($jadwal, $siswa->id_siswa); goto ILruM; MRT6I: foreach ($jawaban_jodoh as $num => $jawab_jod) { goto vAya_; eWsne: foreach ($arrSoal as $kolSoal) { goto ZDA7Q; HfRDc: fJXAl: goto cEYJ_; sfJhP: $jwb->title = array_shift($kolSoal); goto Tc_41; ZWut0: foreach ($kolSoal as $pos => $kol) { goto cc1EP; FGs45: $items++; goto heZLJ; XP_9L: ObcQE: goto s8ooP; cc1EP: if (!($kol == "\61")) { goto m22EH; } goto QIex7; heZLJ: m22EH: goto XP_9L; QIex7: $jwb->subtitle[] = $headSoal[$pos]; goto FGs45; s8ooP: } goto hDupE; Tc_41: array_push($arrJwbSoal, $jwb); goto HfRDc; ZDA7Q: $jwb = new stdClass(); goto ZWut0; hDupE: N4x91: goto sfJhP; cEYJ_: } goto OTraY; QArag: foreach ($arrJawab as $kolJawab) { goto Jglz3; hpgAe: array_push($arrJwbJawab, $jwbs); goto pex1A; pex1A: kojJ4: goto sTt0v; Hx2s8: foreach ($kolJawab as $po => $kol) { goto DKxsv; LBJrN: YOlJc: goto V0HsO; x8_29: $jwbs->subtitle[] = $sub; goto eYs0H; eYs0H: yQ18C: goto LBJrN; DKxsv: if (!($kol == "\61")) { goto yQ18C; } goto ZiSD7; ZiSD7: $sub = $headJawab[$po]; goto x8_29; V0HsO: } goto fFNXV; fFNXV: O9MQm: goto hpgAe; Jglz3: $jwbs = new stdClass(); goto Hx2s8; sTt0v: } goto utqa3; xGGHH: $arrJwbSoal = []; goto Ci0Ee; FOUE2: $benar_jod += 1 / $items * $item_benar; goto R1kWS; aM9Uj: $headJawab = array_shift($arrJawab); goto Nn1K3; cM8Vm: $headSoal = array_shift($arrSoal); goto xGGHH; utqa3: Ri_2S: goto TFPan; FWSqa: $arrJawab = $jawab_jod->jawaban_siswa->jawaban; goto aM9Uj; G1vGR: $arrSoal = $jawab_jod->jawaban_benar->jawaban; goto cM8Vm; eYXTL: n2x1m: goto jf7FT; vAya_: $skor_koreksi_jod += $jawab_jod->nilai_koreksi; goto G1vGR; TFPan: $item_benar = 0; goto QcRN3; Nn1K3: $arrJwbJawab = []; goto QArag; R1kWS: $otomatis_jod = $jawab_jod->nilai_otomatis; goto eYXTL; Ci0Ee: $items = 0; goto eWsne; JauzJ: foreach ($arrJwbJawab as $p => $ajjs) { goto P2Jha; P2Jha: foreach ($ajjs->subtitle as $pp => $ajs) { goto BMeTg; BOAjE: goto TyBOD; goto jBNQY; eZTg0: TyBOD: goto N4cUA; N4cUA: AWLWs: goto tcegG; WKm7S: $item_benar++; goto eZTg0; sDDyE: $item_salah++; goto BOAjE; BMeTg: if (in_array($ajs, $arrJwbSoal[$p]->subtitle)) { goto paFHt; } goto sDDyE; jBNQY: paFHt: goto WKm7S; tcegG: } goto v4j_W; ZufQd: ya0EJ: goto t8qIY; v4j_W: NlDWC: goto ZufQd; t8qIY: } goto uu6BP; QcRN3: $item_salah = 0; goto JauzJ; OTraY: b8QMz: goto FWSqa; uu6BP: q38E6: goto FOUE2; jf7FT: } goto MV8VC; DRvPM: $insert["\151\144\x5f\156\151\x6c\x61\151"] = $siswa->id_siswa . "\x30" . $jadwal; goto X3ASw; d1zCl: $input_is = $nilai_input->isian_nilai; goto h0TfR; fNwv6: $skor_is = $input_is != 0 ? $input_is : ($otomatis_is == 0 ? $s_is : $skor_koreksi_is); goto cqI6P; jGGfV: if (!($nilai_input != null && $nilai_input->isian_nilai != null)) { goto A_38D; } goto d1zCl; M6bDv: if (!($info->tampil_kompleks > 0)) { goto rYQlN; } goto eK4GF; vdzSS: $input_is = 0; goto jGGfV; o4cPY: $insert["\x70\x67\137\142\x65\156\x61\162"] = $benar_pg; goto yrkZ6; ft3BY: if (!($info->tampil_isian > 0)) { goto lfet4; } goto BxORG; OUG1w: P9jKF: goto sRqiX; eK4GF: if (!(count($jawaban_pg2) > 0)) { goto L46US; } goto WUECI; u0xzg: yxIQc: goto OUG1w; NHWFb: $input_jod = 0; goto y524L; ABJxf: $s_jod = $bagi_jodoh == 0 ? 0 : $benar_jod / $bagi_jodoh * $bobot_jodoh; goto NHWFb; NP5M6: oAhYQ: goto iEt_F; yrkZ6: $insert["\x70\x67\x5f\x6e\x69\x6c\141\x69"] = round($skor_pg, 2); goto Wv459; B6etr: $input_pg2 = 0; goto Od_Ph; pub03: $ada_jawaban_pg = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\61"]); goto vFbdH; cqI6P: $jawaban_es = $ada_jawaban_essai ? $jawabans_siswa[$siswa->id_siswa]["\x35"] : []; goto r1WAG; h0TfR: A_38D: goto fNwv6; WEpE_: $benar_jod = 0; goto kNUGx; ver6_: $skor_koreksi_pg2 = 0.0; goto sPbKa; cY5Rx: } goto LGCMG; KXTvm: $bagi_jodoh = $info->tampil_jodohkan / 100; goto dlF95; c42va: foreach ($kelas_bank as $key => $value) { array_push($kelases, $value["\x6b\145\x6c\141\163\x5f\151\144"]); q8QK9: } goto tC2s1; ddq_e: $kelas_bank = unserialize($info->bank_kelas); goto Icrhi; w5slx: e7AeF: goto bnriL; bnriL: $jawabans = $this->cbt->getJawabanByBank($info->id_bank); goto cSStB; LvcGB: $bobot_pg = $info->bobot_pg / 100; goto RYPC_; juJah: $bagi_essai = $info->tampil_esai / 100; goto DrXYE; iDeZM: SbpsF: goto IIE8h; pblJ4: $update = $this->db->update_batch("\x63\142\164\x5f\156\151\x6c\141\151", $insets, "\x69\x64\x5f\x6e\x69\154\141\x69"); goto YbKTz; cSStB: $soal = []; goto HZpzj; HZpzj: $jawabans_siswa = []; goto KvdQv; NqpD3: $bagi_isian = $info->tampil_isian / 100; goto Vom3f; RYPC_: $bagi_pg2 = $info->tampil_kompleks / 100; goto ZPvRa; YbKTz: return $update; goto DZkJr; Vom3f: $bobot_isian = $info->bobot_isian / 100; goto juJah; KvdQv: foreach ($jawabans as $jawaban_siswa) { goto BKndc; hVEvX: $jawaban_siswa->opsi_a = @unserialize($jawaban_siswa->opsi_a); goto Gk3fx; AJmrX: $jawaban_siswa->jawaban_benar = array_map("\163\x74\162\x74\157\x75\x70\x70\145\162", $jawaban_siswa->jawaban_benar); goto rJW5Y; ingH9: $jawaban_siswa->jawaban_siswa = json_decode(json_encode($jawaban_siswa->jawaban_siswa)); goto yJGZp; JQA_R: $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar); goto AJmrX; BKndc: if (!($jawaban_siswa->jenis_soal == "\x32")) { goto OkKFv; } goto hVEvX; IN8pb: if (!($jawaban_siswa->jenis_soal == "\63")) { goto iLo02; } goto KByRx; ACWDa: $jawabans_siswa[$jawaban_siswa->id_siswa][$jawaban_siswa->jenis_soal][] = $jawaban_siswa; goto OvzUb; JWlDM: $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar); goto ingH9; O0zTt: iLo02: goto ACWDa; Uoohy: OkKFv: goto IN8pb; KByRx: $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa); goto JWlDM; Gk3fx: $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa); goto JQA_R; yJGZp: $jawaban_siswa->jawaban_benar = json_decode(json_encode($jawaban_siswa->jawaban_benar)); goto O0zTt; OvzUb: $soal[$jawaban_siswa->jenis_soal][] = $jawaban_siswa; goto e63uH; rJW5Y: $jawaban_siswa->jawaban_benar = array_filter($jawaban_siswa->jawaban_benar, "\163\x74\162\x6c\x65\156"); goto Uoohy; e63uH: Vk1Mi: goto yKNpS; yKNpS: } goto iDeZM; YIcvY: foreach ($siswas as $key => $value) { array_push($ids, $value->id_siswa); OhrPd: } goto w5slx; DrXYE: $bobot_essai = $info->bobot_esai / 100; goto ddq_e; LGCMG: kEdOl: goto pblJ4; Icrhi: $kelases = []; goto c42va; NSVWx: $bagi_pg = $info->tampil_pg / 100; goto LvcGB; tC2s1: H1_DB: goto EUjyP; DZkJr: } private function nilaiSignifikansi($jml) { goto r33yN; RJ3cZ: xD9xA: goto mVVB7; CPsmz: goto xxugL; goto aYiCC; Y4yrM: if (isset($list[$jml]["\65"])) { goto BY5Zk; } goto zQ0oA; KjHyI: $keys = 4; goto r9mhq; u1wNV: return $list[$jml]["\65"]; goto RJ3cZ; s27WE: if (isset($list[$keys]["\x35"])) { goto yBNEy; } goto TEN1r; ydX5U: BY5Zk: goto u1wNV; aYiCC: HEjte: goto Y4yrM; r9mhq: ahJCP: goto s27WE; sJAfy: if (!($keys < 4)) { goto ahJCP; } goto KjHyI; zQ0oA: return $list[$jml]["\61"]; goto lH7NP; r33yN: $list = [3 => [5 => 0.997], [1 => 0.999], 4 => [5 => 0.95], [1 => 0.99], 5 => [5 => 0.878], [1 => 0.959], 6 => [5 => 0.8110000000000001], [1 => 0.917], 7 => [5 => 0.754], [1 => 0.874], 8 => [5 => 0.707], [1 => 0.834], 9 => [5 => 0.666], [1 => 0.798], 10 => [5 => 0.632], [1 => 0.765], 11 => [5 => 0.602], [1 => 0.735], 12 => [5 => 0.576], [1 => 0.708], 13 => [5 => 0.553], [1 => 0.6840000000000001], 14 => [5 => 0.532], [1 => 0.661], 15 => [5 => 0.514], [1 => 0.641], 16 => [5 => 0.497], [1 => 0.623], 17 => [5 => 0.482], [1 => 0.606], 18 => [5 => 0.468], [1 => 0.59], 19 => [5 => 0.456], [1 => 0.575], 20 => [5 => 0.444], [1 => 0.5610000000000001], 21 => [5 => 0.433], [1 => 0.549], 22 => [5 => 0.423], [1 => 0.537], 23 => [5 => 0.413], [1 => 0.526], 24 => [5 => 0.404], [1 => 0.515], 25 => [5 => 0.396], [1 => 0.505], 26 => [5 => 0.388], [1 => 0.496], 27 => [5 => 0.381], [1 => 0.487], 28 => [5 => 0.374], [1 => 0.478], 29 => [5 => 0.367], [1 => 0.47], 30 => [5 => 0.361], [1 => 0.463], 31 => [5 => 0.355], [1 => 0.456], 32 => [5 => 0.349], [1 => 0.449], 33 => [5 => 0.344], [1 => 0.442], 34 => [5 => 0.339], [1 => 0.436], 35 => [5 => 0.334], [1 => 0.43], 36 => [5 => 0.329], [1 => 0.424], 37 => [5 => 0.325], [1 => 0.418], 38 => [5 => 0.32], [1 => 0.413], 39 => [5 => 0.316], [1 => 0.408], 40 => [5 => 0.312], [1 => 0.403], 41 => [5 => 0.308], [1 => 0.398], 42 => [5 => 0.304], [1 => 0.393], 43 => [5 => 0.301], [1 => 0.389], 44 => [5 => 0.297], [1 => 0.384], 45 => [5 => 0.294], [1 => 0.38], 46 => [5 => 0.291], [1 => 0.376], 47 => [5 => 0.288], [1 => 0.372], 48 => [5 => 0.284], [1 => 0.368], 49 => [5 => 0.281], [1 => 0.364], 50 => [5 => 0.279], [1 => 0.361], 55 => [5 => 0.266], [1 => 0.345], 60 => [5 => 0.254], [1 => 0.33], 65 => [5 => 0.244], [1 => 0.317], 70 => [5 => 0.235], [1 => 0.306], 75 => [5 => 0.227], [1 => 0.296], 80 => [5 => 0.22], [1 => 0.286], 85 => [5 => 0.213], [1 => 0.278], 90 => [5 => 0.207], [1 => 0.27], 95 => [5 => 0.202], [1 => 0.263], 100 => [5 => 0.195], [1 => 0.256], 125 => [5 => 0.176], [1 => 0.23], 150 => [5 => 0.159], [1 => 0.21], 175 => [5 => 0.149], [1 => 0.194], 200 => [5 => 0.138], [1 => 0.191], 300 => [5 => 0.113], [1 => 0.181], 400 => [5 => 0.098], [1 => 0.148], 500 => [5 => 0.08799999999999999], [1 => 0.128], 600 => [5 => 0.08], [1 => 0.115], 700 => [5 => 0.074], [1 => 0.105], 800 => [5 => 0.07000000000000001], [1 => 0.091], 900 => [5 => 0.065], [1 => 0.08599999999999999], 1000 => [5 => 0.062], [1 => 0.081]]; goto PoEZR; lH7NP: goto xD9xA; goto ydX5U; TEN1r: return $list[$keys]["\61"]; goto Jmh2i; Jmh2i: goto VhN63; goto R6N5X; PoEZR: if (isset($list[$jml])) { goto HEjte; } goto vPQtU; R6N5X: yBNEy: goto FL_Sx; dfBob: VhN63: goto CPsmz; mVVB7: xxugL: goto t_TkO; vPQtU: $keys = $this->getClosest($jml, array_keys($list)); goto sJAfy; FL_Sx: return $list[$keys]["\x35"]; goto dfBob; t_TkO: } function getClosest($search, $arr) { goto WeVAV; WeVAV: $closest = null; goto dUUxA; oucAO: return $closest; goto UHKwD; RVUDC: GHUpU: goto oucAO; dUUxA: foreach ($arr as $item) { goto JB0b_; vuLCl: lh0rL: goto oK0I6; gIwNw: $closest = $item; goto vuLCl; JB0b_: if (!($closest === null || abs($search - $closest) > abs($item - $search))) { goto lh0rL; } goto gIwNw; oK0I6: cqS_Z: goto DsLr3; DsLr3: } goto RVUDC; UHKwD: } }
