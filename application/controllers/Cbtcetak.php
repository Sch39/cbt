<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtcetak extends CI_Controller { public function __construct() { goto b_J0o; pT2Pb: $this->load->library(["\x64\x61\164\x61\164\x61\142\154\145\163", "\146\157\x72\x6d\x5f\x76\141\154\x69\144\141\164\x69\x6f\156"]); goto l5Xu_; wMgdP: ePLtE: goto pT2Pb; mIHyd: show_error("\x48\141\156\x79\x61\x20\x41\144\155\151\x6e\151\x73\x74\x72\141\164\x6f\x72\40\171\141\x6e\147\40\144\x69\x62\x65\162\151\x20\150\x61\x6b\40\x75\x6e\x74\165\153\x20\x6d\x65\156\x67\141\153\163\145\x73\x20\150\x61\x6c\141\155\x61\x6e\x20\151\156\151\x2c\x20\x3c\x61\x20\150\x72\x65\146\75\x22" . base_url("\144\141\x73\x68\142\157\x61\x72\x64") . "\42\76\x4b\x65\x6d\142\x61\154\151\x20\153\x65\x20\155\x65\156\x75\x20\141\x77\141\x6c\x3c\x2f\x61\x3e", 403, "\101\x6b\x73\145\x73\x20\x54\x65\162\154\141\x72\141\156\147"); goto Ha09a; Bs1AT: redirect("\x61\165\x74\x68"); goto wMgdP; Ha09a: av2tY: goto RfqiA; whOPX: if (!$this->ion_auth->logged_in()) { goto MWU1D; } goto XAgOZ; RfqiA: goto ePLtE; goto dXfAn; dXfAn: MWU1D: goto Bs1AT; b_J0o: parent::__construct(); goto whOPX; l5Xu_: $this->load->library("\x75\x70\x6c\x6f\141\144"); goto BzaSQ; BzaSQ: $this->form_validation->set_error_delimiters('', ''); goto WUnnL; XAgOZ: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\x75"))) { goto av2tY; } goto mIHyd; WUnnL: } public function output_json($data, $encode = true) { goto efNGv; TYpVj: $this->output->set_content_type("\141\x70\160\x6c\x69\x63\x61\x74\x69\x6f\x6e\x2f\x6a\x73\157\156")->set_output($data); goto W_Icu; efNGv: if (!$encode) { goto v6XOh; } goto iFzX8; Qi4Bs: v6XOh: goto TYpVj; iFzX8: $data = json_encode($data); goto Qi4Bs; W_Icu: } public function index() { goto y0Pwq; WARPS: $this->load->view("\137\164\x65\155\160\154\141\x74\x65\163\x2f\144\141\x73\150\x62\x6f\141\162\x64\57\x5f\150\x65\x61\x64\145\x72", $data); goto t3fbN; ZfSkp: foreach ($pengawas as $pws) { goto GiQf0; GiQf0: $ids = explode("\54", $pws->id_guru); goto U5SRj; nqlXQ: o7Guh: goto prZ4L; U5SRj: foreach ($ids as $id) { goto N3TTz; WEfHi: WFp41: goto cuFqX; Wqktq: tB0Eq: goto WEfHi; HJYjE: $ids_pengawas[] = $id; goto Wqktq; N3TTz: if (!(!in_array($id, $ids_pengawas) && $id != '')) { goto tB0Eq; } goto HJYjE; cuFqX: } goto S2wRX; S2wRX: Zftp5: goto nqlXQ; prZ4L: } goto mTZDT; u5XQv: $data["\x70\145\156\147\x61\167\x61\x73"] = $pengawas; goto DpyGq; sDQEJ: $data["\164\160"] = $this->dashboard->getTahun(); goto m_6u6; WXbyd: $data = ["\165\163\x65\162" => $user, "\152\165\144\x75\154" => "\x43\x65\164\x61\153\x20\x44\x61\x74\141\40\x50\x65\x6e\x69\154\x61\151\141\x6e", "\163\165\142\x6a\165\x64\165\x6c" => "\103\x65\x74\x61\153", "\160\162\157\146\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\151\156\x67" => $this->dashboard->getSetting()]; goto WPkLt; KP0G1: $this->load->view("\143\x62\x74\x2f\143\145\164\x61\x6b\x2f\144\x61\164\141"); goto PGj5h; a0v8p: $pengawas = $this->cbt->getPengawasHariIni(date("\x59\x2d\155\x2d\144")); goto u5XQv; tdEM6: $smt = $this->master->getSemesterActive(); goto sDQEJ; JFGBN: goto kCurY; goto eObSm; eObSm: JSxFu: goto WARPS; BIiYh: $this->load->view("\x5f\164\x65\x6d\x70\x6c\x61\164\x65\163\57\144\x61\163\x68\142\x6f\x61\x72\x64\57\137\x66\x6f\x6f\164\145\162"); goto gTh47; gTh47: kCurY: goto q15hm; WPkLt: $tp = $this->master->getTahunActive(); goto tdEM6; t3fbN: $this->load->view("\143\142\164\57\x63\145\164\141\x6b\57\144\141\164\x61"); goto BIiYh; X3tsI: $data["\163\155\164"] = $this->dashboard->getSemester(); goto vNrb0; y0Pwq: $this->load->model("\115\x61\163\x74\x65\162\137\155\157\x64\145\154", "\x6d\141\163\164\145\x72"); goto vo3vm; iR_Jh: $data["\x69\x64\163\137\160\x65\x6e\147\x61\x77\x61\x73"] = $ids_pengawas; goto v6n6i; mTZDT: rbIH7: goto iR_Jh; p4Kps: $data["\153\157\x70"] = $this->cbt->getSettingKopAbsensi(); goto dY6Qw; DpyGq: $ids_pengawas = []; goto ZfSkp; PGj5h: $this->load->view("\x6d\x65\155\x62\x65\x72\163\57\147\x75\x72\165\x2f\164\x65\155\x70\x6c\141\x74\x65\163\x2f\x66\x6f\x6f\x74\145\x72"); goto JFGBN; m_6u6: $data["\164\160\137\x61\143\x74\151\166\x65"] = $tp; goto X3tsI; v6n6i: $this->load->view("\x6d\145\x6d\x62\145\162\163\x2f\147\165\162\x75\57\164\x65\x6d\x70\154\x61\x74\145\x73\57\x68\x65\141\144\145\x72", $data); goto KP0G1; dY6Qw: if ($this->ion_auth->is_admin()) { goto JSxFu; } goto LQvso; Yt1Q3: $user = $this->ion_auth->user()->row(); goto WXbyd; IxbP3: $this->load->model("\x43\142\164\137\x6d\157\x64\x65\x6c", "\143\142\x74"); goto Yt1Q3; LQvso: $data["\147\x75\162\165"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto a0v8p; vNrb0: $data["\163\155\164\x5f\141\143\x74\151\166\145"] = $smt; goto p4Kps; vo3vm: $this->load->model("\x44\141\x73\x68\x62\157\141\162\144\137\x6d\157\144\x65\154", "\144\x61\163\x68\x62\x6f\141\162\144"); goto IxbP3; q15hm: } public function kartuPeserta() { goto EtFfw; EnHqQ: $data = ["\165\163\145\162" => $user, "\152\x75\x64\165\x6c" => "\x43\x65\164\x61\153\x20\x4b\x61\x72\164\x75\40\120\145\x73\145\162\164\141", "\163\x75\142\152\x75\144\165\154" => "\103\145\164\x61\153", "\160\x72\157\x66\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\x74\151\x6e\147" => $this->dashboard->getSetting()]; goto pN7cE; Na4wj: $data["\x74\x70"] = $this->dashboard->getTahun(); goto ITRzf; YKLKr: $this->load->model("\122\x61\x70\157\162\x5f\155\x6f\144\145\154", "\162\141\160\x6f\162"); goto Y1srf; XOzta: $this->load->view("\137\x74\x65\155\x70\154\141\x74\x65\x73\x2f\144\141\163\150\x62\157\x61\162\144\x2f\x5f\150\x65\x61\144\145\x72", $data); goto gf8s8; Y1srf: $user = $this->ion_auth->user()->row(); goto EnHqQ; Y5fS9: $this->load->model("\x43\142\164\137\x6d\x6f\x64\x65\x6c", "\x63\x62\x74"); goto hhKtp; ZLBvd: $this->load->view("\137\164\x65\x6d\160\x6c\x61\164\x65\163\57\x64\141\x73\150\x62\157\141\162\x64\x2f\x5f\146\x6f\x6f\x74\x65\162"); goto FxZoF; hhKtp: $this->load->model("\104\x72\157\x70\x64\157\x77\156\x5f\x6d\157\x64\145\154", "\144\x72\x6f\x70\x64\x6f\x77\x6e"); goto YKLKr; AwihU: $data["\x6b\x65\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto UPIZP; pN7cE: $tp = $this->dashboard->getTahunActive(); goto ei0Lm; ITRzf: $data["\x74\x70\137\141\143\x74\x69\166\145"] = $tp; goto mK92b; JPIPZ: $data["\x6b\141\x72\164\165"] = $this->cbt->getSettingKartu(); goto AwihU; EtFfw: $this->load->model("\x44\141\x73\x68\142\157\x61\x72\x64\x5f\x6d\x6f\144\x65\154", "\144\x61\163\x68\142\x6f\x61\x72\x64"); goto Y5fS9; Qm0s8: $data["\x73\x6d\164\137\141\143\164\151\166\145"] = $smt; goto JPIPZ; UPIZP: $data["\162\165\x61\x6e\x67"] = $this->dropdown->getAllRuang(); goto ppLyj; gf8s8: $this->load->view("\x63\142\x74\57\143\145\x74\x61\153\57\x6b\141\162\x74\165"); goto ZLBvd; ppLyj: $data["\x73\x65\x74\164\151\x6e\147\x5f\x72\141\x70\x6f\162"] = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt); goto XOzta; mK92b: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto Qm0s8; ei0Lm: $smt = $this->dashboard->getSemesterActive(); goto Na4wj; FxZoF: } function uploadFile($logo) { goto SaLET; pSR8D: $data["\x74\x79\160\x65"] = $_FILES["\154\157\147\x6f"]["\x74\x79\160\x65"]; goto bw0V4; uV9jh: $data["\x73\x72\x63"] = base_url() . "\165\x70\154\157\x61\144\x73\57\x73\145\x74\164\151\156\x67\x73\x2f" . $result["\x66\151\x6c\145\137\156\141\x6d\x65"]; goto sU9Fr; LLBl8: MN0Sc: goto foCMk; YxofZ: ANcEG: goto pSR8D; h4SPN: $config["\157\x76\145\162\167\162\151\164\145"] = true; goto vhx9M; Z44qO: $data["\163\x74\x61\164\x75\x73"] = false; goto COnB3; ktYmm: goto ANcEG; goto XZkFC; sU9Fr: $data["\x66\x69\x6c\145\x6e\141\155\x65"] = pathinfo($result["\146\x69\x6c\145\137\x6e\x61\155\145"], PATHINFO_FILENAME); goto H29z5; H29z5: $data["\x73\x74\141\164\165\163"] = true; goto ktYmm; YoHPu: $result = $this->upload->data(); goto uV9jh; FMiS3: $this->upload->initialize($config); goto rJ4Mu; COnB3: $data["\163\x72\143"] = $this->upload->display_errors(); goto YxofZ; vhx9M: $config["\146\x69\x6c\x65\x5f\x6e\141\x6d\x65"] = $logo; goto FMiS3; RVMZM: $data["\163\x72\143"] = ''; goto obUTM; XZkFC: nQvvy: goto Z44qO; GJNaa: $config["\x61\x6c\154\157\x77\145\x64\137\164\171\160\145\x73"] = "\147\151\x66\x7c\x6a\160\x67\174\160\156\x67\174\152\x70\x65\147\174\x4a\120\x45\107\x7c\x4a\x50\107\x7c\120\x4e\x47\174\x47\x49\106"; goto h4SPN; SaLET: if (isset($_FILES["\x6c\x6f\x67\157"]["\x6e\141\x6d\x65"])) { goto pBjUQ; } goto RVMZM; bw0V4: $data["\x73\151\x7a\145"] = $_FILES["\x6c\x6f\x67\157"]["\x73\x69\x7a\145"]; goto LLBl8; rJ4Mu: if (!$this->upload->do_upload("\x6c\x6f\x67\x6f")) { goto nQvvy; } goto YoHPu; obUTM: goto MN0Sc; goto X5ZfG; X5ZfG: pBjUQ: goto BaE0z; BaE0z: $config["\165\160\x6c\157\x61\x64\137\x70\141\x74\x68"] = "\56\57\165\x70\154\x6f\141\x64\x73\x2f\163\x65\x74\x74\x69\x6e\147\x73\x2f"; goto GJNaa; foCMk: $this->output_json($data); goto qz5Zy; qz5Zy: } function deleteFile() { goto bHs5e; WXK4u: $file_name = str_replace(base_url(), '', $src); goto NS8UB; NS8UB: if (!unlink($file_name)) { goto wPP7j; } goto Hm32_; DzCps: wPP7j: goto AQJvV; bHs5e: $src = $this->input->post("\x73\162\x63"); goto WXK4u; Hm32_: echo "\106\151\x6c\x65\x20\x44\x65\154\x65\164\145\40\123\165\x63\x63\145\x73\x73\x66\x75\154\x6c\x79"; goto DzCps; AQJvV: } public function saveKartu() { goto jtx83; oz6Ub: $header_2 = $this->input->post("\x68\145\141\x64\145\x72\137\x32", true); goto WKKOM; BFec3: $insert = ["\151\x64\137\x73\145\x74\x5f\x6b\x61\x72\164\x75" => 123456, "\x68\x65\141\x64\x65\162\137\61" => $header_1, "\x68\x65\x61\144\145\162\x5f\62" => $header_2, "\x68\x65\x61\x64\x65\x72\137\x33" => $header_3, "\x68\145\141\x64\145\x72\137\x34" => $header_4, "\x74\141\x6e\x67\x67\141\x6c" => $tanggal]; goto ot9VW; ntJzx: $tanggal = $this->input->post("\x74\x61\156\x67\147\x61\x6c", true); goto BFec3; ot9VW: $update = $this->db->replace("\143\x62\x74\x5f\x6b\x6f\160\137\x6b\141\162\164\x75", $insert); goto KS_Jt; WKKOM: $header_3 = $this->input->post("\x68\145\141\144\x65\x72\137\63", true); goto HNl2b; HNl2b: $header_4 = $this->input->post("\x68\x65\141\x64\145\162\x5f\x34", true); goto ntJzx; jtx83: $header_1 = $this->input->post("\150\x65\141\144\145\162\x5f\x31", true); goto oz6Ub; KS_Jt: $this->output_json($update); goto BzMcn; BzMcn: } public function getSiswaKelas() { goto jqI9v; kpJza: if ($kelas == "\141\x6c\x6c") { goto teoT8; } goto dYRk9; fHN2S: foreach ($pengawass as $p) { goto G4Dmf; Wzsfs: NOvxZ: goto ruW7I; wSngk: bY0L2: goto Wzsfs; IdIdb: array_push($pengawas, $this->master->getGuruByArrId(explode("\x2c", $p->id_guru))); goto wSngk; G4Dmf: if (!(count(explode("\x2c", $p->id_guru)) > 0)) { goto bY0L2; } goto IdIdb; ruW7I: } goto FXhvz; FXhvz: IUqg5: goto Jqtn7; TpYfY: $this->output_json($data); goto yxdJC; u2IpY: $tp = $this->dashboard->getTahunActive(); goto d_tMO; EtWdo: $pengawas = []; goto fHN2S; X3oXu: $tp = $this->dashboard->getTahunActive(); goto Ry5bE; wgBmc: $pengawas = []; goto WMY91; vbnQt: $isesi = $this->cbt->getSesiById($s); goto IVaJ9; jqI9v: $this->load->model("\x4d\x61\x73\164\x65\162\x5f\x6d\x6f\144\145\154", "\155\x61\163\164\145\162"); goto lOUek; IVaJ9: o9XP7: goto t2ReX; lOUek: $this->load->model("\x4b\145\x6c\x61\x73\137\x6d\x6f\144\145\154", "\x6b\x65\x6c\x61\163"); goto H1tbR; dYRk9: $ikelas = $this->master->getKelasById($kelas); goto A7bkz; BQ1kQ: QzjSr: goto ctXwv; jl23Q: if (!($s != null)) { goto o9XP7; } goto vbnQt; t2ReX: $ijadwal = null; goto wgBmc; oMgnU: $isesi = null; goto jl23Q; Ry5bE: $smt = $this->dashboard->getSemesterActive(); goto hOiBP; ctXwv: $s = !$sesi ? null : $sesi; goto oMgnU; H1tbR: $this->load->model("\104\x61\163\x68\142\x6f\x61\x72\x64\137\x6d\x6f\x64\145\x6c", "\x64\x61\163\x68\142\157\x61\162\x64"); goto auXUc; RRDQ0: $jadwal = $this->input->get("\152\141\x64\x77\141\154"); goto X3oXu; b3kj7: $siswas = $this->cbt->getRuangSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas, $s); goto XVAPc; d_tMO: $smt = $this->dashboard->getSemesterActive(); goto UlDfv; oSfuu: $kelas = $ikelas; goto BQ1kQ; WMY91: if (!($jadwal != null && $jadwal != "\156\x75\154\x6c")) { goto rugcy; } goto u2IpY; auXUc: $this->load->model("\x43\142\x74\x5f\155\x6f\144\145\x6c", "\x63\142\164"); goto Fh94E; Fh94E: $sesi = $this->input->get("\163\x65\163\151"); goto RRDQ0; XVAPc: foreach ($siswas as $siswa) { array_push($data["\x73\x69\163\x77\x61"], $siswa); Hodbm: } goto lXw4C; lXw4C: XuEzj: goto b9DFJ; UlDfv: $pengawass = $this->cbt->getPengawasByJadwal($tp->id_tp, $smt->id_smt, $jadwal, $sesi); goto EtWdo; A7bkz: goto QzjSr; goto Q8sff; ty4p2: rugcy: goto NxuSP; hOiBP: $kelas = $this->input->get("\153\145\x6c\x61\x73"); goto kpJza; NxuSP: $data["\x73\151\163\x77\x61"] = []; goto b3kj7; Jqtn7: $ijadwal = $this->cbt->getJadwalById($jadwal, $s); goto ty4p2; Q8sff: teoT8: goto lSzCb; lSzCb: $ikelas = $this->kelas->getIdKelas($tp->id_tp, $smt->id_smt); goto oSfuu; b9DFJ: $data["\x69\156\146\x6f"] = ["\x6b\x65\154\x61\163" => $ikelas, "\x73\145\163\x69" => $isesi, "\152\x61\144\x77\141\x6c" => $ijadwal, "\160\x65\156\x67\x61\x77\x61\163" => $pengawas]; goto TpYfY; yxdJC: } public function getSiswaRuang() { goto nGvGh; TOLQt: $this->load->model("\104\141\x73\150\142\157\141\162\x64\x5f\x6d\157\144\145\x6c", "\x64\141\x73\150\x62\157\x61\162\x64"); goto X2OEL; p4Yep: QgHO3: goto ftREm; NWGiO: $pengawass = $this->cbt->getPengawas($tp->id_tp . $smt->id_smt . $jadwal . $ruang . $sesi); goto F9_Mz; EmCN_: $data["\x73\151\163\167\141"] = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $s); goto bka02; ftREm: $ijadwal = null; goto Y7LL9; v40a4: $iruang = $this->cbt->getRuangById($ruang); goto LN7EN; IztGw: $tp = $this->dashboard->getTahunActive(); goto xlWKl; bka02: $data["\151\156\146\x6f"] = ["\x72\165\x61\156\x67" => $iruang, "\163\x65\x73\x69" => $isesi, "\x6a\141\x64\x77\141\154" => $ijadwal, "\160\145\x6e\147\x61\167\x61\163" => $pengawas]; goto kxlkl; u9391: $isesi = null; goto YfJa1; s9V5Q: W0pS8: goto NWGiO; udT47: $ruang = $this->input->get("\x72\165\141\156\147"); goto Pj16n; xlWKl: $smt = $this->dashboard->getSemesterActive(); goto v40a4; X2OEL: $this->load->model("\103\142\x74\137\x6d\157\144\145\154", "\143\x62\164"); goto udT47; Rywrb: inP3k: goto EmCN_; Y7LL9: if (!($jadwal != null && $jadwal != "\156\165\154\x6c")) { goto W0pS8; } goto wA8cY; kxlkl: $this->output_json($data); goto exYHx; YfJa1: if (!($s != null)) { goto QgHO3; } goto VPsEO; wA8cY: $ijadwal = $this->cbt->getJadwalById($jadwal, $s); goto s9V5Q; F9_Mz: $pengawas = []; goto Fmso3; Pj16n: $sesi = $this->input->get("\x73\145\x73\x69"); goto XSoZl; PJlgo: $pengawas = $this->master->getGuruByArrId(explode("\x2c", $pengawass->id_guru)); goto Rywrb; VPsEO: $isesi = $this->cbt->getSesiById($s); goto p4Yep; nGvGh: $this->load->model("\x4d\141\x73\164\x65\162\x5f\x6d\157\x64\145\x6c", "\155\x61\163\164\145\162"); goto TOLQt; LN7EN: $s = $sesi == "\156\165\x6c\x6c" ? null : $sesi; goto u9391; Fmso3: if (!($pengawass != null && count(explode("\x2c", $pengawass->id_guru)) > 0)) { goto inP3k; } goto PJlgo; XSoZl: $jadwal = $this->input->get("\152\141\144\x77\x61\154"); goto IztGw; exYHx: } public function saveKop() { goto Km2Nn; wJ0EC: $pengawas_1 = $this->input->post("\x70\145\x6e\x67\x61\x77\141\x73\x5f\x31", true); goto bjZAL; bjZAL: $pengawas_2 = $this->input->post("\160\145\x6e\147\141\x77\x61\x73\137\x32", true); goto X1pMq; H22hb: $proktor = $this->input->post("\160\x72\x6f\153\164\x6f\x72", true); goto wJ0EC; vIadl: $header_2 = $this->input->post("\x68\x65\141\x64\x65\162\x5f\62", true); goto CuA8n; CuA8n: $header_3 = $this->input->post("\150\145\141\144\145\162\137\63", true); goto YozWh; X2tXB: $update = $this->db->replace("\x63\x62\x74\137\153\157\x70\x5f\141\x62\x73\x65\156\163\151", $insert); goto WXLCZ; Km2Nn: $header_1 = $this->input->post("\x68\145\141\144\145\162\x5f\61", true); goto vIadl; YozWh: $header_4 = $this->input->post("\150\x65\141\x64\x65\162\137\x34", true); goto H22hb; X1pMq: $insert = ["\x69\144\137\x6b\157\160" => 123456, "\x68\x65\141\144\145\162\137\x31" => $header_1, "\x68\145\141\144\145\162\x5f\x32" => $header_2, "\150\145\141\144\145\x72\x5f\x33" => $header_3, "\x68\x65\x61\x64\145\162\137\64" => $header_4, "\160\x72\157\x6b\x74\x6f\162" => $proktor, "\x70\145\x6e\x67\141\167\x61\x73\137\61" => $pengawas_1, "\160\x65\x6e\147\141\167\141\163\137\x32" => $pengawas_2]; goto X2tXB; WXLCZ: $this->output_json($update); goto jupi1; jupi1: } public function absenPeserta() { goto sDr5A; nZ3cf: $data = ["\x75\163\145\x72" => $user, "\152\165\x64\x75\154" => "\x43\145\164\141\153\40\104\141\x66\164\141\x72\x20\x4b\145\x68\x61\144\151\162\141\156", "\x73\165\x62\152\165\144\x75\154" => "\x43\x65\164\x61\x6b", "\x70\x72\x6f\146\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto wajwg; rvx8E: $this->load->view("\x5f\x74\145\x6d\160\x6c\x61\164\145\163\57\144\141\163\x68\142\157\141\162\144\57\x5f\150\145\141\x64\x65\162", $data); goto jUp_8; LtXvW: $data["\164\x70"] = $this->dashboard->getTahun(); goto p16AM; wajwg: $tp = $this->dashboard->getTahunActive(); goto dWXmR; YiLGA: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto NILZV; dWXmR: $smt = $this->dashboard->getSemesterActive(); goto LtXvW; fLJQL: $this->load->model("\103\x62\164\x5f\x6d\157\144\x65\x6c", "\143\x62\164"); goto rjfds; RwtMS: $data["\x73\145\x73\151"] = $this->dropdown->getAllSesi(); goto cE3s3; rjfds: $this->load->model("\x44\162\157\160\144\157\167\156\x5f\155\157\144\145\154", "\x64\162\x6f\160\x64\x6f\x77\156"); goto T_sBw; qXC3T: $this->load->view("\137\164\145\x6d\x70\154\x61\x74\145\163\x2f\144\x61\x73\x68\x62\x6f\x61\162\x64\57\x5f\146\x6f\x6f\x74\145\162"); goto gsVpD; OrDIS: $data["\162\165\x61\156\x67"] = $this->dropdown->getAllRuang(); goto RwtMS; cE3s3: $data["\x6b\x6f\160"] = $this->cbt->getSettingKopAbsensi(); goto rvx8E; sDr5A: $this->load->model("\x44\141\x73\x68\x62\157\x61\x72\x64\137\x6d\157\x64\x65\154", "\144\x61\163\x68\x62\x6f\x61\162\144"); goto fLJQL; NILZV: $data["\x73\x6d\164\x5f\141\143\x74\x69\x76\x65"] = $smt; goto HXtaq; HXtaq: $data["\x6a\x61\144\167\141\x6c"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto DFq_0; p16AM: $data["\x74\160\137\141\x63\164\151\166\x65"] = $tp; goto YiLGA; jUp_8: $this->load->view("\x63\142\164\x2f\143\x65\164\141\153\x2f\x61\142\163\x65\156"); goto qXC3T; T_sBw: $user = $this->ion_auth->user()->row(); goto nZ3cf; DFq_0: $data["\x6b\x65\154\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto OrDIS; gsVpD: } public function beritaAcara() { goto els1v; TNIvk: $data["\164\160\x5f\x61\x63\x74\151\166\145"] = $tp; goto qLqIn; S6NDY: $this->load->model("\x43\x62\x74\x5f\155\157\x64\145\154", "\x63\142\164"); goto sFDBz; ppS1p: $this->load->view("\137\x74\145\x6d\160\154\x61\x74\145\163\57\x64\141\163\150\x62\x6f\x61\162\x64\x2f\137\x66\x6f\157\x74\145\162"); goto Vi80J; CtA85: $this->load->view("\137\164\x65\x6d\160\154\141\x74\x65\x73\57\144\141\x73\x68\x62\x6f\141\x72\144\x2f\x5f\150\145\141\144\145\x72", $data); goto uHQbO; d8efw: $data["\x73\155\x74\137\141\x63\x74\x69\x76\x65"] = $smt; goto y264k; K0q_e: $data["\x72\x75\141\x6e\x67"] = $this->dropdown->getAllRuang(); goto onqtE; HlN0K: $user = $this->ion_auth->user()->row(); goto i9WfT; i9WfT: $data = ["\165\x73\x65\x72" => $user, "\152\165\x64\165\x6c" => "\x43\x65\x74\141\x6b\x20\x42\x65\162\151\x74\141\40\x41\x63\x61\162\x61", "\163\165\x62\152\x75\x64\x75\154" => "\x43\x65\x74\x61\x6b", "\160\162\157\146\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\x69\x6e\147" => $this->dashboard->getSetting()]; goto aZD08; onqtE: $data["\163\x65\x73\151"] = $this->dropdown->getAllSesi(); goto kWHPL; xQ9dA: $data["\153\145\x6c\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto K0q_e; y264k: $data["\x6a\141\x64\167\x61\154"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto xQ9dA; kWHPL: $data["\153\157\160"] = $this->cbt->getSettingKopBeritaAcara(); goto CtA85; els1v: $this->load->model("\x44\141\163\150\142\157\141\162\144\137\155\157\x64\x65\154", "\x64\x61\x73\x68\142\x6f\141\x72\x64"); goto S6NDY; M_HSj: $data["\x74\x70"] = $this->dashboard->getTahun(); goto TNIvk; aZD08: $tp = $this->dashboard->getTahunActive(); goto AmcIT; AmcIT: $smt = $this->dashboard->getSemesterActive(); goto M_HSj; uHQbO: $this->load->view("\x63\x62\x74\57\x63\x65\x74\x61\153\57\142\x65\x72\x69\x74\141\x61\x63\x61\162\141"); goto ppS1p; sFDBz: $this->load->model("\104\162\x6f\160\x64\157\167\x6e\137\x6d\157\x64\145\154", "\144\x72\x6f\x70\x64\157\x77\x6e"); goto HlN0K; qLqIn: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto d8efw; Vi80J: } public function saveKopBerita() { goto Zet9T; kjBSj: $this->output_json($update); goto gc5sj; PJ9Dk: $insert = ["\x69\x64\137\x6b\x6f\x70" => 123456, "\x68\x65\x61\144\145\x72\137\61" => $header_1, "\150\x65\x61\x64\x65\162\x5f\x32" => $header_2, "\150\145\141\144\x65\162\137\63" => $header_3, "\x68\145\x61\x64\x65\162\x5f\64" => $header_4]; goto RxuDR; vbNCn: $header_4 = $this->input->post("\x68\x65\141\x64\145\162\x5f\x34", true); goto PJ9Dk; RxuDR: $update = $this->db->replace("\x63\x62\164\137\x6b\x6f\160\137\142\x65\x72\x69\x74\x61", $insert); goto kjBSj; r_lQw: $header_2 = $this->input->post("\x68\145\x61\144\x65\162\137\62", true); goto EKSHA; EKSHA: $header_3 = $this->input->post("\150\x65\x61\x64\x65\162\137\63", true); goto vbNCn; Zet9T: $header_1 = $this->input->post("\150\145\x61\x64\x65\162\137\x31", true); goto r_lQw; gc5sj: } public function pesertaUjian($mode = null) { goto PXUfn; UcfxQ: $user = $this->ion_auth->user()->row(); goto TuGi1; hqCRl: $data["\163\155\x74\137\x61\x63\164\151\x76\145"] = $smt; goto krgOU; C0ccn: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto hqCRl; QfHER: $data["\162\x75\141\x6e\x67\163"] = $this->dropdown->getAllRuang(); goto mDatg; mDatg: $data["\163\145\x73\x69\163"] = $this->cbt->getAllKodeSesi(); goto Z91M1; wMfbK: $this->load->model("\103\x62\164\137\x6d\x6f\x64\x65\154", "\143\x62\164"); goto itZzD; DvliU: $data["\163\x69\163\167\141"] = $this->cbt->getAllPesertaByRuang($tp->id_tp, $smt->id_smt); goto K7ItA; zD7AM: $tp = $this->dashboard->getTahunActive(); goto TZfLp; itZzD: $this->load->model("\x44\162\x6f\x70\x64\157\167\x6e\x5f\155\157\144\x65\x6c", "\x64\x72\157\x70\144\157\x77\156"); goto UcfxQ; Jzu7G: $data["\155\157\x64\x65"] = $mode; goto DrMIg; ywesI: $data["\x74\x70\x5f\141\143\x74\x69\x76\x65"] = $tp; goto C0ccn; PXUfn: $this->load->model("\x44\x61\x73\150\142\x6f\x61\162\x64\x5f\155\157\x64\x65\x6c", "\x64\141\x73\150\x62\x6f\x61\x72\x64"); goto wMfbK; tqpHi: $data["\x74\x70"] = $this->dashboard->getTahun(); goto ywesI; KKnuK: $this->load->view("\x5f\164\145\x6d\160\x6c\x61\164\x65\x73\57\x64\x61\x73\x68\x62\x6f\141\162\x64\57\137\150\x65\141\144\145\x72", $data); goto T6nuV; T6nuV: $this->load->view("\143\x62\164\x2f\x63\x65\x74\x61\x6b\57\x70\145\x73\x65\162\x74\x61\x75\152\x69\141\156"); goto LeSnD; K7ItA: VZb_q: goto KKnuK; LeSnD: $this->load->view("\137\164\145\x6d\x70\154\141\164\x65\x73\57\144\x61\x73\150\x62\x6f\x61\x72\x64\57\x5f\x66\157\157\164\x65\162"); goto KmQAe; Z91M1: $data["\153\157\x70"] = $this->dashboard->getSetting(); goto iQq0p; TuGi1: $data = ["\x75\163\x65\x72" => $user, "\x6a\x75\x64\165\x6c" => "\x43\145\x74\x61\153\40\x44\x61\146\x74\x61\162\x20\120\145\163\x65\x72\x74\x61", "\163\x75\x62\152\165\144\x75\x6c" => "\103\x65\x74\x61\153", "\160\x72\157\x66\x69\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\164\164\x69\x6e\x67" => $this->dashboard->getSetting()]; goto zD7AM; krgOU: $data["\153\145\154\x61\x73\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto QfHER; nQliI: zbMJL: goto DvliU; iQq0p: $data["\165\x6a\151\141\156"] = $this->dropdown->getAllJenisUjian(); goto Jzu7G; fT8sZ: $data["\163\x69\x73\x77\x61"] = $this->cbt->getAllPesertaByKelas($tp->id_tp, $smt->id_smt); goto Ot0x6; Ot0x6: goto VZb_q; goto nQliI; DrMIg: if ($mode == "\x31" || $mode == null) { goto zbMJL; } goto fT8sZ; TZfLp: $smt = $this->dashboard->getSemesterActive(); goto tqpHi; KmQAe: } public function pengawas() { goto X856z; uAGve: Kk8fY: goto N35L2; Gua58: $jadwals = $this->cbt->getJadwalByJenis($jenis_selected, "\x30", $dari_selected, $sampai_selected); goto DCt3Y; tahOf: $dari_selected = $this->input->get("\144\x61\x72\151", true); goto kV8FL; rv6o8: $data["\x72\x75\141\x6e\x67"] = $ruangs; goto TCBUC; bPeeW: $data["\163\155\x74\x5f\x61\143\x74\x69\166\145"] = $smt; goto S5ipb; Hm7Yg: lPaAS: goto ZMnYB; VhQVc: $setting = $this->dashboard->getSetting(); goto yN5Y6; TCBUC: foreach ($ruangs as $id_ruang => $ruang) { goto CYJff; CYJff: foreach ($ruang as $id_sesi => $sesi) { goto z9zxj; Du2o_: Zvs2X: goto BaD3t; TXmcB: KpxKt: goto Du2o_; z9zxj: foreach ($kelas_level as $kl) { goto PiIgX; nqlZJ: uCrxQ: goto rXfy8; PiIgX: foreach ($jadwals as $jadwal) { goto cdYjk; cdYjk: if (!($jadwal->bank_level == $kl->level_id)) { goto GuB_W; } goto z27ui; z27ui: $jadwal_pengawas[$jadwal->tgl_mulai][$id_ruang][$id_sesi][$jadwal->kode] = $jadwal; goto SeUl4; iLJGU: Fnqqq: goto FbKgA; SeUl4: GuB_W: goto iLJGU; FbKgA: } goto nqlZJ; rXfy8: lhmGr: goto x_ckX; x_ckX: } goto TXmcB; BaD3t: } goto NakPs; NakPs: SrAwp: goto byNAt; byNAt: mj4Y9: goto FZ9pX; FZ9pX: } goto Hm7Yg; gUx7v: $data["\153\x65\x6c\141\x73\x5f\154\x65\x76\x65\154"] = $kelas_level; goto nCl4n; wIRyj: foreach ($id_jenis as $jenis) { array_push($ids, $jenis->id_jenis); dRaja: } goto wEIUb; cMMRk: $gurus = $this->dropdown->getAllGuru(); goto XFaV0; rNGpZ: $perRuang = []; goto dHRO5; GUGTJ: $jadwal_pengawas = []; goto pje46; uyh5D: goto xmaoe; goto voq2q; SE277: $filter_selected = $this->input->get("\x66\151\x6c\164\145\x72", true); goto tahOf; T_56g: if (!(count($id_jenis) > 0)) { goto YFzbF; } goto wIRyj; cqfTc: $data["\x70\x65\x6e\147\141\x77\x61\163"] = $pengawas; goto cMMRk; mZUCj: $data["\160\162\157\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto t07c2; gCVTe: $arrKls = []; goto iGKvH; nCl4n: R28Da: goto gCVTe; q94MV: $data["\x66\151\154\164\x65\162"] = ["\60" => "\123\145\155\165\141", "\x31" => "\124\141\x6e\x67\147\141\x6c"]; goto DUcX2; yN5Y6: $jenis_selected = $this->input->get("\x6a\145\156\151\163", true); goto fR6md; XHo1c: $ids = []; goto T_56g; t07c2: $data["\x72\x75\141\156\147\x5f\x73\x65\163\151"] = $this->cbt->getRuangSesi($tp->id_tp, $smt->id_smt); goto hP3Am; wEIUb: KeaBy: goto vXBbj; GV5Fg: $data["\146\x69\x6c\x74\145\162\x5f\x73\145\x6c\x65\143\164\x65\x64"] = $filter_selected; goto KB8Gu; cjzcg: $arrLevel = []; goto dqngY; DMov6: $this->load->view("\143\142\x74\x2f\143\145\164\141\x6b\x2f\x70\145\156\147\x61\x77\141\x73"); goto wCFCe; KB8Gu: $data["\144\141\x72\x69\137\x73\x65\x6c\145\143\x74\145\144"] = $dari_selected; goto m1Pib; yOEle: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto bPeeW; kV8FL: $sampai_selected = $this->input->get("\x73\x61\155\160\x61\151", true); goto q94MV; BOqj6: $user = $this->ion_auth->user()->row(); goto VhQVc; XoFnM: $data["\x6a\145\156\x69\163"] = $this->cbt->getAllJenisUjianByArrJenis($ids); goto DSaYe; wCFCe: $this->load->view("\137\164\x65\x6d\x70\x6c\x61\164\x65\163\x2f\x64\x61\163\x68\x62\157\x61\x72\x64\x2f\x5f\x66\157\157\164\x65\x72"); goto tafAc; jVK1d: $data["\x6a\x65\x6e\x69\x73"] = ['' => "\x62\145\154\x75\x6d\x20\x61\144\x61\40\152\x61\x64\x77\141\x6c\40\165\152\151\x61\156"]; goto uyh5D; YwDV8: $data["\x6a\141\x64\x77\141\x6c\x73\x5f\x72\165\141\x6e\x67"] = $perRuang; goto mZUCj; klbl4: kHuo6: goto GUGTJ; dqngY: foreach ($jadwals as $jadwal) { goto oyPZO; hFNr6: array_push($arrLevel, $jadwal->bank_level); goto eYuHZ; eYuHZ: QQON3: goto VxVzH; VxVzH: aE5M5: goto LW7hc; oyPZO: if (in_array($jadwal->bank_level, $arrLevel)) { goto QQON3; } goto hFNr6; LW7hc: } goto od22v; dHRO5: $result = []; goto Agyrv; cxv3v: $this->load->view("\137\164\145\x6d\x70\154\141\164\145\x73\57\x64\141\163\150\x62\157\x61\x72\144\x2f\x5f\x68\x65\x61\x64\145\162", $data); goto DMov6; hP3Am: $data["\163\145\163\x69"] = $this->dropdown->getAllSesi(); goto cxv3v; IWGCp: $kelas_level = []; goto CF9aC; D66JQ: $kelas_level = $this->cbt->getDistinctKelasLevel($tp->id_tp, $smt->id_smt, $arrLevel); goto gUx7v; vXBbj: YFzbF: goto Y1k1e; hKC9x: $ruangs = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, $arrKls); goto rv6o8; wmPps: $pengawas = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt); goto UuKjZ; Y1k1e: if (count($ids) > 0) { goto aMpnk; } goto jVK1d; CF9aC: if (!(count($arrLevel) > 0)) { goto R28Da; } goto D66JQ; ZMnYB: hPZ5f: goto rNGpZ; S5ipb: $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt); goto XHo1c; DCt3Y: krZt9: goto cjzcg; FOUFn: $this->load->model("\103\x62\164\x5f\155\x6f\144\145\x6c", "\x63\x62\164"); goto DTTUH; Agyrv: foreach ($jadwal_pengawas as $jadwal_pengawa) { goto nEUi5; gC1gV: Px0Sj: goto gT7In; gT7In: GDAKn: goto S4hSy; nEUi5: foreach ($jadwal_pengawa as $r => $jp) { goto pPe7Z; pPe7Z: foreach ($jp as $s => $j) { goto cSeB8; U3pUA: PhfKK: goto acrws; E9iZq: Z3VXk: goto U3pUA; cSeB8: foreach ($j as $m => $km) { goto oQZmA; WAfmJ: Nlazx: goto Outii; H_W8M: array_push($perRuang[$forAdd->ruang], $forAdd); goto ZVhgN; R0qCy: if (isset($perRuang[$forAdd->ruang])) { goto Nlazx; } goto rIA_L; rIA_L: $perRuang[$forAdd->ruang] = []; goto H_W8M; Vvt_f: $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ir, $is); goto sMRHl; NBcOe: rePc_: goto Vvt_f; H8Z4e: $jpp = count($sel); goto FEM2A; t7Wwm: $ir = $ruangs[$r][$s]->ruang_id; goto bpG1T; eQ9kD: $sel = isset($pengawas[$km->id_jadwal]) && isset($pengawas[$km->id_jadwal][$ir]) && isset($pengawas[$km->id_jadwal][$ir][$is]) ? explode("\x2c", $pengawas[$km->id_jadwal][$ir][$is]->id_guru) : []; goto ZLRoX; qTh8y: foreach ($sel as $p) { goto FNXoG; QNsoa: G3Zxa: goto CCDlA; CCDlA: ZrWjt: goto dLIAN; dLIAN: IPS_v: goto n8IzT; FNXoG: if (!isset($gurus[$p])) { goto ZrWjt; } goto Cqq5s; e9mqy: $pw .= "\74\142\162\76"; goto QNsoa; A2Gfy: $jp += 1; goto A5lVG; A5lVG: if (!($jp < $jpp)) { goto G3Zxa; } goto e9mqy; Cqq5s: $pw .= $gurus[$p]; goto A2Gfy; n8IzT: } goto NBcOe; bpG1T: $is = $ruangs[$r][$s]->sesi_id; goto eQ9kD; Outii: array_push($perRuang[$forAdd->ruang], $forAdd); goto LJ22W; Yq15S: array_push($result, $forAdd); goto R0qCy; ZVhgN: goto LILyq; goto WAfmJ; ezRq5: $ns = $ruangs[$r][$s]->nama_sesi; goto t7Wwm; LJ22W: LILyq: goto aYagT; sMRHl: $forAdd = json_decode(json_encode(["\152\155\154\x5f\x73\151\163\x77\x61" => count($siswas), "\164\x61\x6e\147\147\141\154" => $km->tgl_mulai, "\162\x75\x61\x6e\147" => $nr, "\x73\x65\163\151" => $ns, "\x6d\141\160\x65\x6c" => $km->nama_mapel, "\x77\141\153\x74\165" => $km->jam_ke, "\x70\145\x6e\x67\141\167\141\x73" => $pw])); goto Yq15S; FEM2A: $pw = ''; goto qTh8y; ZLRoX: $jp = 0; goto H8Z4e; oQZmA: $nr = $ruangs[$r][$s]->nama_ruang; goto ezRq5; aYagT: cR2xV: goto sc6os; sc6os: } goto E9iZq; acrws: } goto KTe2s; Lm0ll: SzKJJ: goto f0f3S; KTe2s: fkyJE: goto Lm0ll; f0f3S: } goto gC1gV; S4hSy: } goto uAGve; DTTUH: $this->load->model("\x44\x72\x6f\x70\x64\157\x77\x6e\137\155\x6f\x64\x65\x6c", "\x64\162\157\x70\144\x6f\167\156"); goto BOqj6; XFaV0: $jadwals = []; goto pfPUm; iGKvH: foreach ($kelas_level as $kl) { array_push($arrKls, $kl->id_kelas); FxafW: } goto klbl4; JTtVE: $data["\x6a\145\156\151\x73\137\165\152\151\x61\x6e"] = $jenis_ujian; goto GV5Fg; fR6md: $jenis_ujian = $this->cbt->getJenisById($jenis_selected); goto BCtin; od22v: QSnzX: goto IWGCp; UuKjZ: ebTn0: goto cqfTc; pfPUm: if (!($jenis_selected != null)) { goto krZt9; } goto Gua58; u0ubc: $data["\164\160"] = $this->dashboard->getTahun(); goto DxPO0; voq2q: aMpnk: goto XoFnM; DUcX2: $data["\x6a\x65\x6e\x69\x73\137\163\145\154\145\x63\x74\145\144"] = $jenis_selected; goto JTtVE; pje46: if (!(count($arrKls) > 0)) { goto hPZ5f; } goto hKC9x; DSaYe: xmaoe: goto SE277; DxPO0: $data["\x74\x70\x5f\141\x63\164\x69\166\145"] = $tp; goto yOEle; wZ5_X: $smt = $this->dashboard->getSemesterActive(); goto u0ubc; y6AIK: $pengawas = []; goto ETWyi; X856z: $this->load->model("\x44\x61\163\x68\142\x6f\141\x72\144\x5f\x6d\x6f\144\145\154", "\x64\x61\163\x68\142\157\141\x72\144"); goto FOUFn; ETWyi: if (!($jenis_selected != null)) { goto ebTn0; } goto wmPps; xK2IP: $tp = $this->dashboard->getTahunActive(); goto wZ5_X; m1Pib: $data["\163\141\155\x70\141\x69\137\163\x65\x6c\x65\x63\164\x65\144"] = $sampai_selected; goto y6AIK; BCtin: $data = ["\165\163\x65\x72" => $user, "\152\165\144\165\x6c" => "\112\141\x64\x77\141\154\40\x50\145\x6e\x67\x61\167\x61\x73", "\163\165\x62\x6a\165\x64\165\x6c" => "\x43\x65\x74\141\153\40\x4a\x61\144\167\141\x6c\x20\x50\145\x6e\x67\141\167\141\x73", "\x73\145\164\x74\x69\156\147" => $setting]; goto xK2IP; N35L2: $data["\152\x61\144\167\141\154\163"] = $result; goto YwDV8; tafAc: } }
