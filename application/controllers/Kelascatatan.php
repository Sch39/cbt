<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelascatatan extends CI_Controller { public function __construct() { goto w0hjQ; wleFr: k2JmS: goto FM_zJ; eLS3i: goto OXsVT; goto wleFr; YUUOZ: show_error("\x48\x61\x6e\x79\141\40\x41\144\155\x69\x6e\x69\x73\x74\162\x61\x74\x6f\x72\x20\171\141\156\147\x20\x64\x69\x62\x65\x72\x69\40\150\x61\153\x20\165\156\x74\165\153\40\155\145\156\147\141\x6b\163\x65\163\x20\150\141\154\x61\x6d\x61\x6e\40\x69\156\x69\54\40\74\141\40\150\162\x65\x66\75\42" . base_url("\144\x61\x73\x68\142\x6f\x61\162\144") . "\42\x3e\x4b\145\155\x62\x61\x6c\151\40\x6b\x65\x20\155\145\156\165\x20\x61\167\141\154\x3c\57\x61\76", 403, "\x41\153\x73\x65\x73\x20\124\x65\162\x6c\x61\x72\x61\x6e\147"); goto qmG6H; nZSL5: $this->load->model("\104\x61\163\x68\142\157\x61\x72\144\x5f\155\x6f\x64\145\x6c", "\144\x61\x73\x68\x62\157\x61\x72\x64"); goto v7wM8; qmG6H: kTnfD: goto eLS3i; m3xg8: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\162\x75"))) { goto kTnfD; } goto YUUOZ; AjjMc: if (!$this->ion_auth->logged_in()) { goto k2JmS; } goto m3xg8; w0hjQ: parent::__construct(); goto AjjMc; yssmt: $this->load->model("\115\141\x73\164\145\162\x5f\155\157\x64\x65\154", "\x6d\141\163\x74\x65\162"); goto nZSL5; rlur2: $this->load->model("\x4b\x65\x6c\141\x73\x5f\x6d\x6f\x64\x65\154", "\153\145\x6c\x61\x73"); goto iR2dr; v7wM8: $this->load->model("\x44\x72\157\160\x64\157\x77\x6e\137\155\x6f\x64\145\154", "\144\162\x6f\x70\x64\x6f\x77\x6e"); goto rlur2; FM_zJ: redirect("\x61\165\x74\x68"); goto M3V9s; iR2dr: $this->form_validation->set_error_delimiters('', ''); goto YcFUw; M3V9s: OXsVT: goto hltp6; hltp6: $this->load->library(["\144\141\164\141\x74\141\142\154\145\163", "\x66\x6f\x72\155\137\x76\x61\154\151\x64\141\x74\x69\157\x6e"]); goto yssmt; YcFUw: } public function output_json($data, $encode = true) { goto uLcI7; Ow4pT: $data = json_encode($data); goto Z6cmT; Z6cmT: eMl8J: goto r_Evh; uLcI7: if (!$encode) { goto eMl8J; } goto Ow4pT; r_Evh: $this->output->set_content_type("\x61\160\160\x6c\x69\143\x61\164\x69\157\156\x2f\x6a\163\x6f\156")->set_output($data); goto P3Xjn; P3Xjn: } public function index() { goto ZvrYt; vADgi: $data["\x63\141\164\137\153\x65\x6c\x61\x73"] = $cat_kelas; goto rzKic; cXayI: $data["\x6d\141\x70\x65\154\x5f\163\x65\154\145\143\x74\145\x64"] = $id_mapel; goto KlFZn; zOGx9: if (!($mapel != null)) { goto e48M2; } goto iRZ2J; fvfaH: e48M2: goto utwfu; P8TH_: $data["\147\x75\x72\x75"] = $guru; goto uWQEc; MNCmN: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto R4zqz; xkuPR: $arrKelas = []; goto zOGx9; ZvrYt: $user = $this->ion_auth->user()->row(); goto Jdzv6; jHfAO: $this->load->view("\155\145\x6d\142\x65\162\163\x2f\147\165\x72\165\57\x74\x65\155\160\154\141\x74\x65\x73\57\x66\157\157\164\145\x72"); goto Nv5Bp; ApuDD: $data["\153\145\154\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto W16wh; KlFZn: if (!($id_kelas != null)) { goto vEK0y; } goto pG0Xa; yr8uP: $data["\155\x61\x70\145\x6c"] = $this->dropdown->getAllMapel(); goto ApuDD; EyfmV: foreach ($mapel as $mpl) { goto gsI_4; OSZvq: cCEgD: goto rSuDA; gsI_4: foreach ($mpl->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); es7gG: } goto OSZvq; rSuDA: wR3vf: goto P_cjc; P_cjc: } goto q8L45; rzKic: $data["\143\141\164\137\163\151\163\x77\x61"] = $this->kelas->getCatatanMapelSiswa($tp->id_tp, $smt->id_smt, $id_kelas, $id_mapel); goto mMWrd; q8L45: Ei2rX: goto xrLNm; Zjwws: $kelasses = []; goto Yn1ow; B46Jc: if (!($mapel != null)) { goto dLKak; } goto EyfmV; kxGJj: $arrId = []; goto B46Jc; knGwk: $data["\163\155\164"] = $this->dashboard->getSemester(); goto TH1st; utwfu: $data["\155\x61\160\145\x6c"] = $arrMapel; goto DZzbu; dyuGg: $data["\164\x70"] = $this->dashboard->getTahun(); goto BeWXd; UYjat: $kelasses = $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId); goto sG8xQ; W16wh: $this->load->view("\137\164\145\x6d\x70\x6c\141\164\145\163\57\x64\x61\x73\x68\142\157\141\x72\x64\x2f\137\150\x65\141\144\145\162", $data); goto jG2HL; A3Z1O: I90rE: goto fvfaH; TH1st: $data["\163\x6d\164\x5f\x61\143\x74\x69\166\x65"] = $smt; goto qasKc; xrLNm: dLKak: goto Zjwws; F_NP8: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto P8TH_; b2LGG: ubJFo: goto vADgi; jG2HL: $this->load->view("\155\145\x6d\x62\x65\x72\x73\x2f\x67\x75\x72\165\57\153\145\x6c\141\x73\x2f\x63\x61\164\141\164\141\x6e\57\144\141\x74\x61"); goto LHFiw; ypgmJ: $data["\x70\162\x6f\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto yr8uP; tvQan: $arrMapel = []; goto xkuPR; q_6wJ: $this->load->view("\155\145\x6d\142\145\x72\x73\57\x67\x75\162\165\57\153\145\x6c\x61\163\x2f\143\141\x74\141\x74\141\156\57\144\x61\164\x61"); goto jHfAO; QY3yx: $data["\153\x65\154\141\163\137\163\145\x6c\145\143\164\145\144"] = $id_kelas; goto cXayI; j5sP5: foreach ($cat_kelas as $ck) { $ck->reading = unserialize($ck->reading); BDBkq: } goto b2LGG; Gv8mH: if ($this->ion_auth->is_admin()) { goto Lg3NP; } goto F_NP8; pG0Xa: $cat_kelas = $this->kelas->getCatatanMapelKelas($id_kelas, $id_mapel, $tp->id_tp, $smt->id_smt); goto j5sP5; sN5Oi: $data = ["\x75\163\x65\162" => $user, "\x6a\165\144\165\x6c" => "\103\141\164\141\x74\x61\156\40\107\165\x72\x75", "\x73\165\x62\x6a\x75\144\165\x6c" => "\103\141\164\x61\x74\x61\156\x20\123\x65\x6c\141\x6d\141\x20\x50\145\x6d\x62\145\x6c\141\x6a\x61\x72\141\156", "\x73\145\164\164\x69\156\147" => $setting]; goto zdhE3; BBvRB: Pem9k: goto B6wTf; LHFiw: $this->load->view("\137\x74\x65\x6d\x70\x6c\141\x74\145\163\x2f\x64\x61\163\x68\142\x6f\x61\162\144\57\137\146\x6f\157\164\x65\x72"); goto BBvRB; jhGNS: Lg3NP: goto ypgmJ; d6cAv: $id_mapel = $this->input->get("\x6d\x61\x70\145\154", true); goto QY3yx; qasKc: $id_kelas = $this->input->get("\x6b\145\154\x61\163", true); goto d6cAv; Nv5Bp: goto Pem9k; goto jhGNS; sG8xQ: lqhIz: goto tvQan; uWQEc: $data["\151\x64\x5f\147\165\x72\x75"] = $guru->id_guru; goto MNCmN; BeWXd: $data["\x74\160\137\141\x63\x74\x69\166\145"] = $tp; goto knGwk; Yn1ow: if (!(count($arrId) > 0)) { goto lqhIz; } goto UYjat; mMWrd: vEK0y: goto Gv8mH; DZzbu: $data["\x6b\145\154\141\x73"] = $arrKelas; goto BuLAx; iRZ2J: foreach ($mapel as $m) { goto LF72G; LF72G: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto ExiTx; RQ1og: sDy8k: goto AHzFC; k0uE8: BLvP_: goto RQ1og; ExiTx: foreach ($m->kelas_mapel as $kls_mapel) { goto pwprp; pwprp: foreach ($kelasses as $key => $kelass) { goto MbW5Q; MbW5Q: if (!($kls_mapel->kelas == $key)) { goto dlpAx; } goto kaU_5; JC8hi: dlpAx: goto Y97fb; Y97fb: hD2oo: goto L3NvZ; kaU_5: $arrKelas[$m->id_mapel][$key] = $kelass; goto JC8hi; L3NvZ: } goto AAprj; AAprj: d5twx: goto w7Ifn; w7Ifn: HgGRR: goto kmWzq; kmWzq: } goto k0uE8; AHzFC: } goto A3Z1O; R4zqz: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto kxGJj; BuLAx: $this->load->view("\155\145\155\142\x65\x72\x73\57\147\165\x72\x75\57\164\145\x6d\160\x6c\141\x74\145\x73\57\x68\x65\141\x64\145\x72", $data); goto q_6wJ; Jdzv6: $setting = $this->dashboard->getSetting(); goto sN5Oi; zdhE3: $tp = $this->dashboard->getTahunActive(); goto ElJRY; ElJRY: $smt = $this->dashboard->getSemesterActive(); goto dyuGg; B6wTf: } public function siswa() { goto zbBi0; lqZuo: $data["\164\160\x5f\141\143\164\x69\x76\x65"] = $tp; goto hNk7x; YWRjr: $data["\143\x61\x74\141\x74\141\x6e\x5f\x73\151\163\x77\141"] = $this->kelas->getAllCatatanMapelSiswa($id_siswa, $id_mapel, $tp->id_tp, $smt->id_smt); goto zrsey; FlJPg: $data = ["\x75\x73\145\162" => $user, "\152\165\x64\165\154" => "\x43\141\x74\141\x74\x61\156\40\x53\151\163\167\x61", "\x73\165\x62\152\165\x64\x75\154" => "\x43\x61\x74\x61\x74\x61\x6e\40\123\151\163\167\x61", "\163\145\164\x74\151\156\147" => $this->dashboard->getSetting()]; goto rAR8Z; rAR8Z: $tp = $this->master->getTahunActive(); goto Z_FJT; J8DnY: AZbPt: goto Tpf1P; JUEKV: goto AZbPt; goto dcI2M; zrsey: $data["\155\141\160\145\x6c"] = $id_mapel; goto bfZ44; phThR: $this->load->view("\155\x65\x6d\x62\145\x72\163\x2f\147\x75\x72\x75\x2f\164\145\155\160\x6c\x61\164\145\x73\57\146\x6f\157\164\145\x72"); goto JUEKV; dcI2M: cICpS: goto bUJ22; uSw6H: $id_mapel = $this->input->get("\155\x61\x70\x65\154"); goto XnFVY; keHwq: $this->load->view("\155\x65\x6d\x62\145\x72\x73\x2f\147\165\162\x75\57\x74\x65\x6d\x70\x6c\141\x74\145\163\x2f\150\145\x61\144\145\162", $data); goto Ywzq1; RKG1A: $data["\x74\160"] = $this->dashboard->getTahun(); goto lqZuo; PJq7k: $this->load->view("\137\164\x65\155\160\x6c\141\x74\x65\163\57\x64\141\163\x68\x62\157\141\x72\144\57\x5f\150\145\x61\144\145\x72", $data); goto kOq1Y; ZlKlg: $data["\163\155\164\x5f\x61\143\x74\x69\166\x65"] = $smt; goto deX8s; XnFVY: $id_kelas = $this->input->get("\153\x65\154\141\163"); goto w9Gjm; TMa0g: $this->load->view("\137\164\145\x6d\160\x6c\141\x74\x65\x73\57\x64\x61\163\150\x62\x6f\141\162\144\57\137\146\x6f\157\164\145\x72"); goto J8DnY; bfZ44: $data["\x6b\145\x6c\x61\163"] = $id_kelas; goto G4Gi5; Z_FJT: $smt = $this->master->getSemesterActive(); goto RKG1A; bUJ22: $data["\x70\x72\157\146\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto PJq7k; Ywzq1: $this->load->view("\155\145\x6d\x62\x65\162\163\57\x67\165\x72\165\57\153\x65\154\141\163\x2f\143\141\x74\141\x74\x61\156\57\160\145\x72\x73\x69\163\x77\141"); goto phThR; hNk7x: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto ZlKlg; zbBi0: $id_siswa = $this->input->get("\x69\144"); goto uSw6H; UUEU1: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto ftnh5; ftnh5: $data["\147\x75\x72\165"] = $guru; goto keHwq; G4Gi5: if ($this->ion_auth->is_admin()) { goto cICpS; } goto UUEU1; w9Gjm: $user = $this->ion_auth->user()->row(); goto FlJPg; deX8s: $data["\x73\151\163\x77\x61"] = $this->master->getSiswaById($id_siswa); goto YWRjr; kOq1Y: $this->load->view("\x6d\x65\155\142\x65\x72\x73\57\147\x75\x72\165\57\x6b\x65\x6c\x61\163\x2f\143\x61\x74\141\x74\141\x6e\x2f\160\x65\162\163\151\x73\167\141"); goto TMa0g; Tpf1P: } public function saveCatatanKelas() { goto kkHmK; Q2elu: $text = $this->input->post("\164\145\x78\164", true); goto VXBmY; zQs_A: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto XGkfI; XGkfI: $id_kelas = $this->input->post("\x69\x64\137\x6b\x65\154\141\x73"); goto umno4; VXBmY: $level = $this->input->post("\154\x65\x76\x65\154", true); goto tBAlB; tBAlB: $tgl = date("\x59\x2d\155\x2d\x64"); goto J6_y4; umno4: $id_mapel = $this->input->post("\x69\144\137\x6d\x61\160\145\154", true); goto Q2elu; J6_y4: $data = ["\151\144\x5f\164\x70" => $tp->id_tp, "\x69\x64\137\163\155\x74" => $smt->id_smt, "\164\x79\x70\x65" => "\61", "\x69\x64\x5f\x6d\x61\160\x65\154" => $id_mapel, "\151\x64\137\x6b\x65\154\141\x73" => $id_kelas, "\x69\x64\x5f\x67\165\x72\x75" => $guru->id_guru, "\x6c\145\x76\x65\x6c" => $level, "\x74\145\x78\x74" => $text, "\162\x65\141\144\x69\156\147" => serialize([])]; goto EenTQ; uTL48: $smt = $this->dashboard->getSemesterActive(); goto LBYU0; kkHmK: $tp = $this->dashboard->getTahunActive(); goto uTL48; EenTQ: $insert = $this->master->create("\x6b\x65\154\141\x73\x5f\x63\x61\x74\141\x74\141\x6e\137\155\x61\x70\145\x6c", $data); goto jhzxa; jhzxa: $this->output_json($insert); goto vpn4V; LBYU0: $user = $this->ion_auth->user()->row(); goto zQs_A; vpn4V: } public function saveCatatanSiswa() { goto JXJpC; uCOgw: $this->output_json($insert); goto msnFA; jO9z3: $user = $this->ion_auth->user()->row(); goto vsw7M; OrXwm: $level = $this->input->post("\154\x65\x76\x65\x6c", true); goto T_Q6o; JXJpC: $tp = $this->dashboard->getTahunActive(); goto W7tx3; T_Q6o: $data = ["\151\x64\137\164\160" => $tp->id_tp, "\151\x64\x5f\x73\x6d\x74" => $smt->id_smt, "\164\171\x70\x65" => "\x32", "\x69\x64\x5f\x6d\141\160\145\x6c" => $id_mapel, "\151\144\x5f\x73\x69\x73\x77\141" => $id_siswa, "\x69\144\137\147\165\x72\165" => $guru->id_guru, "\x6c\x65\x76\x65\x6c" => $level, "\164\x65\x78\x74" => $text, "\x72\x65\141\144\x69\156\x67" => serialize([])]; goto jz1ZV; F3Qoo: $text = $this->input->post("\164\x65\170\x74", true); goto OrXwm; W7tx3: $smt = $this->dashboard->getSemesterActive(); goto jO9z3; VoHb1: $id_mapel = $this->input->post("\x69\144\137\x6d\x61\160\x65\x6c", true); goto F3Qoo; grtos: $id_siswa = $this->input->post("\151\144\x5f\163\x69\x73\x77\x61"); goto VoHb1; vsw7M: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto grtos; jz1ZV: $insert = $this->master->create("\x6b\x65\154\x61\163\137\143\x61\x74\x61\x74\x61\156\x5f\x6d\141\160\145\x6c", $data); goto uCOgw; msnFA: } public function hapus($id_catatan) { $delete = $this->master->delete("\x6b\145\154\141\x73\x5f\143\x61\164\141\x74\141\x6e\137\x6d\x61\x70\x65\x6c", $id_catatan, "\151\x64\137\x63\141\164\141\x74\141\156"); $this->output_json($delete); } }
