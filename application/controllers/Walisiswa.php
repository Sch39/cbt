<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walisiswa extends CI_Controller { public function __construct() { goto Fa4nT; fqLYx: $this->load->model("\x44\x61\x73\x68\x62\157\141\162\144\137\x6d\x6f\x64\x65\154", "\144\141\x73\x68\x62\x6f\x61\162\144"); goto Z6_9t; LU7l0: redirect("\x61\165\x74\150"); goto wYuch; wYuch: Gq7ZO: goto EkhTf; U60TI: eSE6K: goto bw5QL; wZslq: show_error("\110\x61\156\x79\141\40\x41\x64\155\151\156\x69\x73\164\x72\x61\x74\x6f\162\x20\x64\141\156\x20\147\x75\x72\x75\40\171\141\156\147\40\144\151\x62\x65\x72\151\40\x68\x61\x6b\40\x75\156\164\165\153\x20\155\145\x6e\147\141\153\163\x65\x73\40\x68\141\x6c\x61\x6d\x61\156\x20\x69\156\151\x2c\40\74\x61\x20\x68\162\x65\146\x3d\42" . base_url("\x64\x61\x73\150\x62\x6f\141\x72\x64") . "\42\76\x4b\145\155\x62\141\x6c\151\40\153\145\x20\x6d\x65\x6e\165\x20\141\167\141\x6c\x3c\57\141\x3e", 403, "\101\153\x73\x65\x73\40\x54\x65\x72\x6c\x61\x72\141\156\147"); goto U60TI; bw5QL: goto Gq7ZO; goto C1qiY; Z6_9t: $this->load->model("\103\142\164\137\x6d\157\144\145\x6c", "\x63\142\x74"); goto zP5CX; EkhTf: $this->load->library(["\144\141\x74\x61\x74\141\x62\x6c\x65\x73", "\146\157\x72\x6d\x5f\166\141\154\x69\144\141\164\x69\157\156"]); goto KUIkY; K5cNZ: if (!$this->ion_auth->logged_in()) { goto I_k23; } goto sATC0; KUIkY: $this->load->model("\x4d\x61\x73\164\x65\162\137\155\157\144\145\154", "\x6d\x61\163\164\145\162"); goto fqLYx; Fa4nT: parent::__construct(); goto K5cNZ; C1qiY: I_k23: goto LU7l0; zP5CX: $this->form_validation->set_error_delimiters('', ''); goto eYn9d; sATC0: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\162\165"))) { goto eSE6K; } goto wZslq; eYn9d: } public function output_json($data, $encode = true) { goto Gv0KV; Gv0KV: if (!$encode) { goto G0hkp; } goto Pbspg; Pbspg: $data = json_encode($data); goto iTO7A; iTO7A: G0hkp: goto ZoFV5; ZoFV5: $this->output->set_content_type("\x61\x70\160\x6c\151\143\141\164\x69\157\x6e\57\152\163\157\x6e")->set_output($data); goto cdFGb; cdFGb: } public function index() { goto n6TUD; HREnk: $this->load->view("\155\145\155\x62\x65\162\163\57\147\x75\162\165\57\x74\145\155\x70\154\141\x74\x65\163\x2f\x66\157\x6f\x74\145\x72"); goto ckqEZ; BvWQn: $data["\x67\165\162\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Hj7m9; tVLwt: $tp = $this->master->getTahunActive(); goto wlwKY; wlwKY: $smt = $this->master->getSemesterActive(); goto kE_pN; xKbWM: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto fp0PD; ugReu: $data = ["\165\x73\x65\162" => $user, "\152\x75\x64\x75\x6c" => "\x44\x61\x66\164\x61\162\x20\x53\151\x73\x77\x61", "\163\x75\x62\152\x75\x64\165\154" => "\123\151\163\167\x61\x20\x4b\145\x6c\x61\x73\x20\x41\x6e\144\141", "\163\x65\164\164\x69\156\147" => $this->dashboard->getSetting()]; goto tVLwt; kE_pN: $data["\x74\160"] = $this->dashboard->getTahun(); goto ylqfm; Hj7m9: $this->load->view("\155\145\155\x62\145\162\x73\x2f\x67\x75\x72\165\57\x74\145\x6d\160\x6c\141\164\x65\163\57\150\x65\141\144\x65\x72", $data); goto ARe90; fp0PD: $data["\163\x6d\x74\137\141\x63\x74\151\166\x65"] = $smt; goto BvWQn; ylqfm: $data["\x74\160\137\x61\x63\x74\x69\166\x65"] = $tp; goto xKbWM; n6TUD: $user = $this->ion_auth->user()->row(); goto ugReu; ARe90: $this->load->view("\x6d\145\155\x62\x65\162\163\x2f\147\x75\162\x75\x2f\167\x61\x6c\x69\57\x6b\x65\x6c\x61\163"); goto HREnk; ckqEZ: } public function dataKelas() { goto bS38O; E53BS: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto pZmff; bS38O: $user = $this->ion_auth->user()->row(); goto SSRHz; csTeg: $smt = $this->dashboard->getSemesterActive(); goto E53BS; pZmff: $this->output_json($this->master->getDataSiswaByKelas($tp->id_tp, $smt->id_smt, $guru->wali_kelas), false); goto KKrgE; SSRHz: $tp = $this->dashboard->getTahunActive(); goto csTeg; KKrgE: } public function edit($id) { goto z7bUu; vMP6T: $data["\x73\x6d\164\x5f\141\x63\164\x69\x76\145"] = $smt; goto eEQcX; q0Ezr: $this->load->view("\x6d\x65\155\x62\145\x72\x73\57\147\x75\162\x75\57\x77\x61\x6c\151\57\145\x64\151\164"); goto We2LJ; JspjN: $inputWali = [["\x6e\x61\x6d\x65" => "\156\x61\155\x61\x5f\x77\141\x6c\x69", "\154\141\x62\x65\154" => "\116\x61\155\x61\x20\x57\141\154\x69", "\x76\x61\x6c\165\145" => $siswa->nama_wali, "\x69\143\157\156" => "\146\x61\162\x20\x66\x61\x2d\x75\x73\x65\162", "\164\x79\x70\145" => "\x74\145\x78\164"], ["\x6e\x61\x6d\145" => "\x70\145\156\144\x69\144\x69\153\x61\x6e\137\167\x61\x6c\x69", "\x6c\141\142\145\x6c" => "\120\x65\x6e\x64\151\x64\151\153\x61\156\40\127\x61\x6c\151", "\166\x61\154\165\145" => $siswa->pendidikan_wali, "\151\143\157\156" => "\x66\141\x72\x20\146\x61\x2d\165\163\145\162", "\164\171\x70\145" => "\164\x65\170\164"], ["\x6e\x61\x6d\x65" => "\160\x65\x6b\x65\162\x6a\x61\141\156\137\x77\141\x6c\x69", "\x6c\141\x62\145\154" => "\x50\145\153\x65\x72\x6a\x61\x61\x6e\40\127\141\x6c\151", "\166\x61\x6c\x75\145" => $siswa->pekerjaan_wali, "\x69\x63\x6f\x6e" => "\146\141\x72\40\146\141\x2d\165\x73\145\162", "\x74\171\160\145" => "\164\x65\170\x74"], ["\156\141\x6d\145" => "\141\x6c\x61\x6d\141\x74\137\x77\x61\154\151", "\154\141\142\x65\x6c" => "\101\154\141\155\141\x74\40\x57\x61\154\151", "\166\141\154\165\145" => $siswa->alamat_wali, "\151\x63\x6f\156" => "\x66\x61\x72\40\x66\x61\x2d\x75\163\x65\162", "\164\x79\x70\x65" => "\x74\x65\170\x74"], ["\156\x61\x6d\x65" => "\x6e\x6f\150\x70\137\x77\141\154\151", "\x6c\141\x62\x65\154" => "\116\157\x2e\40\x48\x50\x20\127\141\154\x69", "\166\141\154\x75\145" => $siswa->nohp_wali, "\151\x63\x6f\156" => "\146\x61\162\x20\x66\141\x2d\x75\x73\145\162", "\x74\x79\160\x65" => "\x6e\x75\x6d\142\145\162"]]; goto pHZq0; ljdAz: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto vMP6T; w9Xm8: $data["\164\160\137\x61\x63\x74\x69\166\145"] = $tp; goto ljdAz; R1YTT: $inputData = [["\x6c\x61\142\x65\154" => "\116\141\155\141\x20\x4c\145\x6e\x67\153\x61\x70", "\x6e\x61\x6d\145" => "\x6e\x61\155\x61", "\x76\141\154\x75\x65" => $siswa->nama, "\151\x63\157\x6e" => "\146\141\x72\40\146\x61\x2d\165\x73\145\162", "\x72\145\x71" => "\x72\x65\x71\165\x69\x72\x65\144", "\x63\x6c\141\163\x73" => '', "\164\171\160\145" => "\164\145\x78\164"], ["\154\x61\x62\145\x6c" => "\116\111\x53", "\x6e\141\x6d\x65" => "\x6e\x69\x73", "\166\141\x6c\165\145" => $siswa->nis, "\x69\x63\157\156" => "\x66\141\x72\40\146\x61\x2d\x69\x64\x2d\x63\x61\x72\x64", "\x72\145\x71" => "\x72\145\x71\165\x69\x72\145\x64", "\x63\x6c\x61\x73\163" => '', "\164\171\x70\x65" => "\156\x75\155\142\x65\x72"], ["\x6e\x61\155\145" => "\x6e\x69\163\x6e", "\154\141\142\145\154" => "\116\x49\x53\x4e", "\x76\x61\154\x75\145" => $siswa->nisn, "\151\x63\x6f\156" => "\146\x61\162\x20\x66\141\55\151\x64\x2d\x63\x61\x72\x64", "\x72\x65\161" => '', "\143\x6c\x61\x73\x73" => '', "\x74\x79\160\x65" => "\x74\x65\x78\x74"], ["\154\141\x62\145\x6c" => "\112\145\156\151\x73\40\113\x65\154\x61\x6d\151\156", "\x6e\x61\155\x65" => "\x6a\145\156\151\163\x5f\x6b\145\x6c\x61\x6d\151\156", "\x76\x61\x6c\165\x65" => $siswa->jenis_kelamin, "\151\143\x6f\x6e" => "\x66\x61\163\x20\146\x61\55\166\145\x6e\165\163\x2d\x6d\141\162\x73", "\162\x65\161" => "\162\145\161\x75\x69\162\x65\144", "\x63\x6c\141\163\163" => '', "\x74\171\x70\x65" => "\x74\145\x78\164"], ["\x6e\141\155\x65" => "\x6b\145\x6c\x61\163\137\x61\x77\141\x6c", "\x6c\x61\x62\x65\x6c" => "\x44\151\164\145\x72\151\x6d\x61\40\x64\151\x20\153\145\x6c\141\163", "\x76\141\154\165\145" => $siswa->kelas_awal, "\x69\143\157\156" => "\146\x61\163\40\146\141\55\x67\x72\x61\144\x75\141\164\151\x6f\x6e\x2d\x63\141\160", "\162\x65\x71" => "\x72\x65\x71\165\x69\162\145\144", "\143\154\141\163\x73" => '', "\x74\x79\160\145" => "\164\x65\170\164"], ["\156\141\x6d\145" => "\164\x61\150\x75\156\x5f\x6d\141\163\165\x6b", "\x6c\x61\142\145\x6c" => "\x54\147\x6c\40\144\x69\164\x65\162\151\x6d\141", "\x76\141\x6c\x75\145" => $siswa->tahun_masuk, "\x69\143\x6f\x6e" => "\164\141\150\165\x6e\40\x66\x61\x72\40\146\x61\x2d\143\x61\154\x65\156\144\141\x72\55\x61\154\164", "\162\x65\161" => "\162\x65\x71\x75\x69\162\145\144", "\143\x6c\141\163\163" => "\x74\141\x68\x75\156", "\164\x79\x70\145" => "\164\x65\x78\x74"], ["\x6e\x61\155\145" => "\163\x65\153\x6f\x6c\x61\150\137\x61\x73\141\154", "\x6c\141\142\145\154" => "\123\x65\x6b\157\x6c\141\x68\40\x41\163\x61\x6c", "\166\141\154\165\x65" => $siswa->sekolah_asal, "\x69\x63\157\x6e" => "\x66\x61\163\40\146\141\x2d\147\162\x61\144\x75\x61\164\x69\x6f\156\x2d\143\x61\x70", "\x72\x65\161" => '', "\x63\154\141\x73\x73" => '', "\x74\x79\160\x65" => "\164\x65\170\x74"]]; goto O4Rpn; z7bUu: $siswa = $this->master->getSiswaById($id); goto R1YTT; CdWZe: $data["\x69\156\x70\x75\x74\137\x6f\162\x74\165"] = json_decode(json_encode($inputOrtu), FALSE); goto U2hMu; eEQcX: $data["\151\156\160\x75\164\137\x64\141\x74\141"] = json_decode(json_encode($inputData), FALSE); goto G10Dc; We2LJ: $this->load->view("\155\145\x6d\142\x65\162\163\57\x67\x75\162\165\57\x74\x65\x6d\x70\154\x61\x74\x65\x73\x2f\x66\x6f\x6f\x74\145\162"); goto YDBQ_; U2hMu: $data["\x69\156\x70\x75\x74\x5f\x77\141\154\151"] = json_decode(json_encode($inputWali), FALSE); goto YWQZm; fBcJ2: $smt = $this->master->getSemesterActive(); goto t0uJo; k2A7t: $inputOrtu = [["\156\141\x6d\x65" => "\x6e\141\x6d\141\x5f\141\171\x61\150", "\154\141\142\x65\x6c" => "\x4e\141\155\x61\40\101\171\141\150", "\166\x61\x6c\165\x65" => $siswa->nama_ayah, "\x69\143\157\x6e" => "\x66\x61\162\x20\146\141\x2d\165\163\x65\x72", "\x74\171\x70\x65" => "\164\145\x78\164"], ["\x6e\x61\155\x65" => "\x70\x65\156\x64\x69\x64\x69\x6b\x61\x6e\x5f\x61\x79\141\x68", "\154\x61\x62\145\154" => "\x50\145\x6e\144\x69\x64\x69\153\141\x6e\x20\x41\x79\141\x68", "\x76\x61\154\x75\145" => $siswa->pendidikan_ayah, "\151\x63\x6f\x6e" => "\x66\141\x72\x20\146\x61\x2d\165\x73\145\x72", "\x74\x79\160\x65" => "\164\145\170\x74"], ["\x6e\141\x6d\145" => "\160\145\x6b\x65\162\152\141\141\x6e\137\x61\171\x61\x68", "\x6c\141\x62\x65\154" => "\x50\145\153\145\x72\152\x61\x61\156\x20\101\171\x61\150", "\166\x61\154\165\145" => $siswa->pekerjaan_ayah, "\x69\143\157\x6e" => "\146\141\x72\40\x66\x61\x2d\x75\x73\145\162", "\x74\x79\160\145" => "\x74\x65\170\x74"], ["\156\141\155\x65" => "\x6e\157\x68\x70\x5f\x61\171\141\x68", "\154\141\142\145\x6c" => "\116\x6f\56\40\110\x50\40\101\x79\x61\x68", "\166\141\x6c\x75\x65" => $siswa->nohp_ayah, "\x69\x63\x6f\156" => "\x66\x61\x72\40\146\x61\55\x75\163\145\162", "\164\171\x70\145" => "\156\x75\155\x62\x65\162"], ["\156\x61\x6d\x65" => "\141\154\x61\155\x61\164\137\x61\x79\141\150", "\x6c\x61\x62\145\x6c" => "\x41\154\141\155\141\x74\x20\x41\x79\141\150", "\166\141\154\x75\x65" => $siswa->alamat_ayah, "\151\x63\157\x6e" => "\146\x61\162\40\x66\141\x2d\x75\163\x65\x72", "\164\x79\160\x65" => "\164\x65\x78\164"], ["\x6e\x61\x6d\x65" => "\156\x61\x6d\x61\x5f\x69\142\165", "\154\x61\142\145\x6c" => "\116\x61\155\x61\40\111\x62\165", "\166\x61\154\x75\145" => $siswa->nama_ibu, "\151\x63\157\x6e" => "\x66\141\162\x20\146\x61\55\165\x73\x65\x72", "\x74\x79\x70\145" => "\164\x65\170\x74"], ["\156\x61\155\145" => "\160\x65\x6e\x64\x69\x64\x69\x6b\x61\x6e\x5f\x69\x62\165", "\154\x61\x62\x65\154" => "\120\x65\156\x64\151\144\151\x6b\141\x6e\x20\111\142\x75", "\x76\x61\154\x75\145" => $siswa->pendidikan_ibu, "\x69\143\x6f\x6e" => "\x66\141\x72\40\x66\141\55\x75\x73\145\162", "\x74\171\x70\x65" => "\164\x65\x78\164"], ["\x6e\x61\x6d\145" => "\x70\x65\153\145\162\152\141\141\x6e\x5f\x69\x62\x75", "\x6c\x61\142\145\154" => "\x50\145\153\x65\x72\x6a\141\x61\156\40\x49\x62\x75", "\166\x61\x6c\x75\145" => $siswa->pekerjaan_ibu, "\151\143\157\156" => "\x66\x61\x72\x20\146\x61\x2d\165\163\145\x72", "\x74\171\x70\x65" => "\164\145\x78\x74"], ["\156\141\x6d\145" => "\x6e\x6f\150\160\x5f\151\142\165", "\154\x61\x62\145\x6c" => "\116\x6f\x2e\40\110\x50\40\111\x62\165", "\x76\141\x6c\x75\145" => $siswa->nohp_ibu, "\x69\x63\157\x6e" => "\146\x61\162\40\146\x61\x2d\165\x73\x65\162", "\x74\171\160\145" => "\156\165\x6d\142\x65\162"], ["\x6e\141\x6d\x65" => "\141\154\x61\155\x61\x74\137\x69\x62\165", "\x6c\141\142\x65\x6c" => "\x41\x6c\141\x6d\141\164\40\111\142\165", "\x76\x61\154\165\145" => $siswa->alamat_ibu, "\151\x63\x6f\x6e" => "\146\x61\x72\40\146\x61\55\x75\163\145\x72", "\x74\171\160\145" => "\x74\145\170\x74"]]; goto JspjN; t0uJo: $data["\164\160"] = $this->dashboard->getTahun(); goto w9Xm8; O4Rpn: $inputBio = [["\156\x61\155\145" => "\x73\x74\141\164\x75\x73\137\x6b\x65\154\x75\x61\162\147\141", "\x6c\x61\x62\145\x6c" => "\x53\x74\141\x74\165\x73\40\144\141\x6c\141\155\x20\113\x65\154\x75\x61\x72\147\141", "\166\141\154\165\145" => $siswa->status_keluarga == '' ? "\x31" : $siswa->status_keluarga, "\x69\x63\x6f\x6e" => "\146\x61\x72\x20\146\141\x2d\165\x73\145\162", "\143\154\x61\x73\163" => '', "\x74\x79\160\145" => "\x74\145\170\x74"], ["\156\141\155\x65" => "\141\156\141\153\137\x6b\145", "\x6c\x61\142\145\154" => "\x41\x6e\x61\x6b\x20\153\x65", "\x76\141\154\x75\x65" => $siswa->anak_ke, "\151\x63\157\x6e" => "\146\x61\162\40\146\x61\55\x75\x73\145\162", "\x63\x6c\x61\x73\x73" => '', "\x74\x79\160\145" => "\156\165\155\142\x65\x72"], ["\156\141\x6d\145" => "\164\145\155\160\141\x74\x5f\x6c\x61\150\x69\x72", "\154\x61\x62\145\x6c" => "\124\x65\x6d\160\x61\164\40\x4c\x61\x68\151\x72", "\x76\x61\154\x75\145" => $siswa->tempat_lahir, "\x69\x63\x6f\156" => "\x66\141\162\40\x66\x61\x2d\155\x61\x70", "\143\x6c\x61\x73\x73" => '', "\x74\x79\x70\x65" => "\x74\145\x78\x74"], ["\156\141\155\145" => "\164\141\x6e\x67\x67\141\x6c\x5f\x6c\x61\x68\151\162", "\x6c\x61\142\145\x6c" => "\124\x61\156\147\x67\141\x6c\40\x4c\141\x68\x69\x72", "\x76\141\x6c\x75\x65" => $siswa->tanggal_lahir, "\x69\x63\x6f\156" => "\x66\141\x72\x20\146\x61\x2d\x63\x61\x6c\145\156\144\141\x72", "\x63\154\x61\x73\x73" => "\x74\x61\x68\165\x6e", "\164\171\x70\145" => "\x74\x65\x78\x74"], ["\x63\x6c\141\x73\x73" => '', "\156\141\x6d\145" => "\x61\147\x61\x6d\x61", "\x6c\x61\142\x65\154" => "\x41\147\x61\x6d\141", "\166\141\x6c\x75\145" => $siswa->agama, "\x69\143\157\x6e" => "\x66\141\162\40\x66\x61\x2d\x63\x61\x6c\x65\x6e\144\141\x72", "\164\x79\160\145" => "\x74\145\170\x74"], ["\143\x6c\x61\x73\163" => '', "\156\141\155\145" => "\x61\154\x61\155\141\164", "\x6c\x61\x62\x65\154" => "\101\x6c\141\155\141\x74", "\166\141\x6c\165\x65" => $siswa->alamat, "\151\143\x6f\x6e" => "\146\141\x72\40\x66\x61\55\x75\163\145\x72", "\x74\171\x70\x65" => "\164\x65\x78\x74"], ["\143\x6c\x61\x73\163" => '', "\x6e\141\155\145" => "\162\164", "\x6c\141\x62\145\154" => "\x52\164", "\166\x61\154\x75\145" => $siswa->rt, "\151\143\x6f\x6e" => "\x66\x61\x72\40\146\x61\55\165\163\x65\x72", "\x74\171\160\x65" => "\x74\x65\170\164"], ["\143\x6c\141\163\163" => '', "\156\x61\155\x65" => "\162\x77", "\154\x61\x62\145\x6c" => "\x52\x77", "\166\141\x6c\x75\x65" => $siswa->rw, "\151\x63\157\x6e" => "\146\x61\162\x20\x66\x61\x2d\165\x73\x65\162", "\x74\171\160\145" => "\164\x65\170\164"], ["\143\x6c\x61\x73\163" => '', "\156\x61\x6d\145" => "\x6b\x65\x6c\x75\162\141\x68\141\x6e", "\x6c\141\142\x65\154" => "\113\145\154\165\162\141\150\141\x6e\x2f\104\x65\163\x61", "\166\x61\154\x75\x65" => $siswa->kelurahan, "\151\x63\x6f\156" => "\x66\141\x72\x20\146\141\x2d\165\163\x65\x72", "\164\x79\x70\x65" => "\164\145\x78\164"], ["\143\154\x61\x73\163" => '', "\x6e\141\155\x65" => "\x6b\x65\x63\x61\155\x61\164\141\156", "\x6c\x61\x62\x65\154" => "\x4b\145\x63\x61\155\141\164\x61\156", "\x76\141\154\165\x65" => $siswa->kecamatan, "\x69\x63\157\156" => "\146\x61\162\40\x66\x61\55\165\163\145\x72", "\164\171\160\145" => "\x74\x65\x78\x74"], ["\x63\154\x61\x73\x73" => '', "\x6e\x61\x6d\145" => "\x6b\x61\x62\165\x70\141\164\145\x6e", "\154\141\142\x65\154" => "\113\141\142\x75\160\141\x74\x65\x6e\57\113\x6f\164\141", "\166\141\154\165\145" => $siswa->kabupaten, "\151\143\157\156" => "\x66\x61\162\x20\146\x61\55\x75\x73\x65\162", "\164\x79\160\x65" => "\164\145\x78\x74"], ["\143\154\x61\163\163" => '', "\156\x61\155\145" => "\160\162\157\166\151\x6e\163\x69", "\154\141\x62\145\154" => "\x50\162\x6f\166\x69\156\163\x69", "\x76\141\x6c\x75\145" => $siswa->provinsi, "\x69\x63\157\156" => "\x66\141\162\x20\x66\x61\x2d\165\163\145\162", "\164\171\x70\x65" => "\164\145\x78\164"], ["\x63\x6c\141\x73\x73" => '', "\x6e\141\x6d\145" => "\153\x6f\144\x65\x5f\160\x6f\163", "\x6c\141\x62\x65\x6c" => "\113\x6f\144\145\40\x50\x6f\x73", "\166\141\154\165\145" => $siswa->kode_pos, "\x69\143\157\156" => "\146\141\x72\40\x66\x61\55\165\163\145\x72", "\x74\x79\160\145" => "\x74\x65\x78\164"], ["\x63\x6c\141\163\x73" => '', "\x6e\141\x6d\145" => "\150\x70", "\154\141\x62\145\x6c" => "\x48\x70", "\x76\141\154\165\145" => $siswa->hp, "\x69\x63\x6f\x6e" => "\x66\x61\x72\40\x66\x61\x2d\165\163\x65\162", "\x74\x79\x70\x65" => "\164\x65\x78\x74"]]; goto k2A7t; pHZq0: $user = $this->ion_auth->user()->row(); goto NFmN4; JxpHF: $tp = $this->master->getTahunActive(); goto fBcJ2; G10Dc: $data["\x69\x6e\x70\x75\x74\137\142\151\x6f"] = json_decode(json_encode($inputBio), FALSE); goto CdWZe; NFmN4: $data = ["\165\163\145\162" => $user, "\x6a\165\x64\x75\154" => "\x53\151\163\x77\x61", "\163\165\142\152\165\x64\165\x6c" => "\105\144\x69\164\40\104\141\164\x61\40\x53\151\x73\x77\x61", "\x73\x69\x73\x77\x61" => $siswa, "\163\145\164\x74\x69\156\147" => $this->dashboard->getSetting()]; goto JxpHF; SQKY3: $this->load->view("\x6d\x65\x6d\x62\145\162\x73\x2f\147\165\162\165\57\164\x65\155\160\x6c\x61\x74\145\163\x2f\150\145\x61\144\145\x72", $data); goto q0Ezr; YWQZm: $data["\147\165\x72\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto SQKY3; YDBQ_: } public function updateData() { goto TD8gC; y8s_Q: $this->form_validation->set_rules("\156\151\x73", "\116\x49\123", "\162\x65\161\165\151\162\145\144\x7c\x6e\165\x6d\x65\162\151\143\174\x74\162\151\x6d\x7c\x6d\x69\156\137\x6c\x65\x6e\x67\x74\x68\133\x36\135\x7c\155\141\170\x5f\154\145\x6e\147\164\x68\x5b\x33\x30\135" . $u_nis); goto P53uh; rTstb: $nisn = $this->input->post("\156\x69\x73\x6e", true); goto T7OqJ; yizZ5: $action = $this->master->update("\x6d\141\x73\x74\x65\162\x5f\163\x69\163\167\x61", $input, "\x69\144\x5f\163\151\163\x77\141", $id_siswa); goto ug3WM; T7OqJ: $siswa = $this->master->getSiswaById($id_siswa); goto PvOnu; MkxP1: TCtHA: goto E3l7T; TD8gC: $id_siswa = $this->input->post("\151\x64\137\163\x69\x73\x77\141", true); goto XNpG1; E3l7T: $data["\x69\x6e\163\145\x72\164"] = false; goto k0H7O; x5ddf: $this->output_json($data); goto k4WBk; iYWQS: $input = ["\156\x69\x73\x6e" => $this->input->post("\156\x69\x73\x6e", true), "\x6e\x69\x73" => $this->input->post("\156\151\x73", true), "\156\x61\x6d\x61" => $this->input->post("\x6e\x61\x6d\x61", true), "\152\145\156\151\x73\137\153\145\154\141\155\151\156" => $this->input->post("\x6a\145\x6e\x69\x73\x5f\x6b\x65\x6c\141\155\151\156", true), "\164\145\155\x70\141\x74\x5f\x6c\141\150\x69\x72" => $this->input->post("\x74\x65\x6d\160\x61\x74\137\154\141\150\x69\162", true), "\x74\141\156\147\x67\141\x6c\137\x6c\x61\150\151\162" => $this->input->post("\x74\x61\x6e\x67\x67\x61\x6c\x5f\154\x61\x68\x69\x72", true), "\141\x67\x61\x6d\141" => $this->input->post("\141\147\141\x6d\141", true), "\163\164\141\x74\165\x73\137\x6b\145\154\165\x61\162\147\x61" => $this->input->post("\x73\x74\x61\x74\x75\x73\x5f\x6b\x65\154\x75\x61\x72\x67\141", true), "\x61\x6e\141\153\x5f\x6b\145" => $this->input->post("\x61\156\141\153\x5f\x6b\145", true), "\x61\x6c\141\155\141\164" => $this->input->post("\x61\154\x61\x6d\141\164", true), "\x72\x74" => $this->input->post("\x72\164", true), "\162\x77" => $this->input->post("\162\167", true), "\153\145\154\165\162\x61\x68\x61\x6e" => $this->input->post("\x6b\145\x6c\x75\x72\x61\x68\x61\x6e", true), "\x6b\145\x63\141\155\141\164\141\x6e" => $this->input->post("\x6b\x65\x63\141\x6d\x61\164\x61\156", true), "\x6b\141\142\x75\x70\x61\x74\145\156" => $this->input->post("\x6b\x61\x62\165\160\141\164\x65\156", true), "\160\162\157\166\151\156\x73\151" => $this->input->post("\x70\162\x6f\x76\x69\x6e\x73\151", true), "\x6b\157\x64\145\137\160\x6f\x73" => $this->input->post("\153\x6f\144\145\137\160\x6f\x73", true), "\150\160" => $this->input->post("\150\x70", true), "\x6e\141\155\141\x5f\141\x79\x61\x68" => $this->input->post("\156\141\155\x61\x5f\x61\x79\141\150", true), "\x6e\x6f\150\x70\137\x61\171\141\x68" => $this->input->post("\x6e\157\150\160\x5f\x61\x79\x61\150", true), "\160\x65\x6e\x64\x69\x64\151\153\x61\156\x5f\x61\x79\x61\x68" => $this->input->post("\160\145\156\x64\x69\x64\151\153\x61\x6e\137\141\x79\x61\150", true), "\x70\x65\153\145\162\152\141\x61\x6e\137\141\171\x61\150" => $this->input->post("\160\145\153\x65\162\x6a\141\x61\156\x5f\x61\171\x61\x68", true), "\141\154\x61\x6d\x61\164\x5f\141\171\x61\x68" => $this->input->post("\141\x6c\141\x6d\141\x74\137\x61\x79\x61\150", true), "\x6e\x61\155\141\137\x69\x62\165" => $this->input->post("\x6e\141\x6d\141\137\x69\x62\165", true), "\156\x6f\150\x70\x5f\x69\142\x75" => $this->input->post("\156\x6f\150\x70\x5f\x69\x62\165", true), "\160\x65\x6e\x64\151\x64\151\153\x61\x6e\x5f\x69\142\x75" => $this->input->post("\x70\145\156\144\x69\x64\x69\153\141\156\x5f\x69\142\x75", true), "\160\145\x6b\x65\x72\x6a\x61\x61\x6e\x5f\x69\142\x75" => $this->input->post("\x70\x65\x6b\x65\x72\152\x61\x61\x6e\137\151\142\165", true), "\x61\154\x61\155\141\164\x5f\151\x62\165" => $this->input->post("\x61\154\x61\155\141\x74\137\151\x62\x75", true), "\x6e\x61\155\141\x5f\x77\x61\154\x69" => $this->input->post("\156\x61\x6d\x61\137\167\x61\154\151", true), "\160\x65\x6e\144\151\x64\x69\x6b\x61\156\137\x77\141\x6c\x69" => $this->input->post("\x70\x65\156\144\x69\x64\x69\x6b\141\156\x5f\167\x61\154\x69", true), "\x70\x65\x6b\x65\162\x6a\x61\141\156\137\x77\x61\154\151" => $this->input->post("\160\145\153\x65\x72\x6a\141\141\156\x5f\x77\141\154\151", true), "\156\x6f\150\x70\137\x77\141\154\151" => $this->input->post("\156\x6f\x68\x70\137\167\x61\x6c\151", true), "\141\x6c\141\155\x61\164\x5f\x77\x61\x6c\151" => $this->input->post("\x61\x6c\x61\x6d\141\x74\x5f\167\x61\154\x69", true), "\164\141\150\165\x6e\x5f\x6d\x61\163\x75\153" => $this->input->post("\x74\x61\150\x75\x6e\137\155\141\x73\165\153", true), "\153\x65\x6c\141\x73\137\x61\167\x61\x6c" => $this->input->post("\153\145\x6c\x61\x73\137\x61\167\x61\x6c", true), "\164\147\154\x5f\154\141\x68\x69\162\137\141\x79\x61\150" => $this->input->post("\164\x67\x6c\x5f\x6c\x61\150\x69\x72\137\x61\x79\141\x68", true), "\x74\x67\x6c\137\154\x61\150\151\x72\137\x69\x62\165" => $this->input->post("\164\147\x6c\137\154\141\x68\151\x72\137\x69\x62\x75", true), "\164\x67\x6c\x5f\154\x61\150\x69\162\x5f\x77\141\154\151" => $this->input->post("\x74\x67\x6c\x5f\x6c\141\150\x69\x72\x5f\x77\x61\x6c\x69", true), "\x73\x65\x6b\157\154\141\x68\137\x61\x73\141\154" => $this->input->post("\x73\145\153\157\154\x61\150\x5f\141\x73\x61\154", true), "\146\157\x74\157" => "\x75\x70\x6c\x6f\141\x64\163\x2f\x66\157\x74\x6f\137\x73\x69\163\167\x61\57" . $nis . "\x2e\152\x70\147"]; goto yizZ5; XNpG1: $nis = $this->input->post("\x6e\151\163", true); goto rTstb; ug3WM: $data["\x69\x6e\x73\x65\x72\164"] = $input; goto LpI9H; j6TFO: goto UyOeq; goto MkxP1; LpI9H: $data["\164\x65\x78\164"] = "\x53\x69\x73\x77\x61\x20\142\145\162\150\x61\163\x69\x6c\x20\144\151\160\145\162\142\x61\150\141\162\165\x69"; goto j6TFO; P53uh: if ($this->form_validation->run() == FALSE) { goto TCtHA; } goto iYWQS; k0H7O: $data["\164\145\x78\164"] = "\x44\141\164\x61\x20\123\165\x64\x61\x68\x20\x61\x64\x61\54\x20\120\141\x73\x74\x69\x6b\x61\156\40\x4e\111\x53\54\x20\x64\141\x6e\x20\116\111\123\116\40\x62\x65\154\x75\x6d\40\144\151\x67\x75\x6e\141\153\141\156\x20\x73\151\163\167\x61\40\154\141\151\156"; goto GCbiU; PvOnu: $u_nis = $siswa->nis === $nis ? '' : "\x7c\151\x73\137\165\156\151\x71\x75\145\133\155\141\x73\164\x65\162\x5f\x73\151\x73\167\141\56\x6e\x69\163\135"; goto y8s_Q; GCbiU: UyOeq: goto x5ddf; k4WBk: } function uploadFile($id_siswa) { goto g61MU; BKLUG: tcXuq: goto oorBS; oorBS: $config["\x75\x70\154\x6f\x61\x64\x5f\x70\x61\164\x68"] = "\x2e\x2f\x75\x70\x6c\157\x61\144\163\57\x66\x6f\164\157\x5f\x73\x69\163\167\141\x2f"; goto NZ_Td; EHWZJ: if (isset($_FILES["\x66\x6f\164\157"]["\156\141\x6d\x65"])) { goto tcXuq; } goto K_40C; Htkn2: $this->db->set("\146\157\164\157", "\x75\160\x6c\x6f\141\144\x73\x2f\x66\157\164\157\137\163\151\x73\167\x61\57" . $result["\146\x69\x6c\145\137\156\141\x6d\145"]); goto J7JHp; lO4fq: $result = $this->upload->data(); goto VLOSh; gDLku: $this->output_json($data); goto dfX5g; hx87q: $config["\x66\151\154\x65\x5f\x6e\x61\x6d\145"] = $siswa->nis; goto B5CCv; J7JHp: $this->db->where("\151\x64\137\x73\x69\163\x77\x61", $id_siswa); goto OHR5V; K_40C: $data["\163\x72\x63"] = ''; goto lAXXv; OAuyw: $data["\x73\162\143"] = $this->upload->display_errors(); goto yAZQG; FB11O: $data["\x73\x74\141\x74\165\163"] = true; goto Htkn2; B5CCv: $this->upload->initialize($config); goto UUdT8; UUdT8: if (!$this->upload->do_upload("\x66\157\164\x6f")) { goto ZKQ1m; } goto lO4fq; VLOSh: $data["\163\162\143"] = base_url() . "\x75\x70\154\157\x61\x64\163\x2f\146\x6f\x74\x6f\137\x73\151\x73\x77\x61\x2f" . $result["\146\x69\154\145\137\x6e\x61\155\145"]; goto KD6Aa; TAsUH: ruiC4: goto gDLku; ROE4S: ZKQ1m: goto f52tQ; k5H3B: $data["\x74\x79\x70\x65"] = $_FILES["\x66\x6f\164\157"]["\x74\171\160\145"]; goto vme5V; g61MU: $siswa = $this->master->getSiswaById($id_siswa); goto EHWZJ; vme5V: $data["\163\x69\x7a\x65"] = $_FILES["\146\x6f\x74\x6f"]["\163\151\x7a\145"]; goto TAsUH; lAXXv: goto ruiC4; goto BKLUG; NZ_Td: $config["\141\x6c\154\x6f\167\145\x64\x5f\164\171\160\145\163"] = "\147\x69\x66\x7c\152\160\147\x7c\x70\x6e\x67\174\152\160\145\x67\x7c\x4a\x50\105\x47\x7c\112\120\107\x7c\120\x4e\x47\x7c\x47\x49\106"; goto jpbBj; KD6Aa: $data["\146\x69\154\145\156\x61\x6d\145"] = pathinfo($result["\146\x69\x6c\x65\x5f\x6e\x61\x6d\x65"], PATHINFO_FILENAME); goto FB11O; jpbBj: $config["\x6f\x76\145\x72\x77\162\151\164\145"] = true; goto hx87q; yAZQG: tZ0Nb: goto k5H3B; f52tQ: $data["\x73\x74\141\164\x75\x73"] = false; goto OAuyw; r6LeA: goto tZ0Nb; goto ROE4S; OHR5V: $this->db->update("\x6d\x61\163\164\x65\162\137\163\x69\x73\167\141"); goto r6LeA; dfX5g: } function deleteFile($id_siswa) { goto RG0cx; KbKZj: if (!($file_name != "\x61\x73\163\x65\164\163\57\151\x6d\147\57\163\151\x73\x77\x61\x2e\x70\156\x67")) { goto Jzi9w; } goto WHJMw; gzVSu: $file_name = str_replace(base_url(), '', $src); goto KbKZj; p27ah: z23RZ: goto DTB7N; V5Ng8: $this->db->update("\155\141\x73\x74\145\x72\137\163\x69\163\167\141"); goto Betpc; WHJMw: if (!unlink($file_name)) { goto z23RZ; } goto WjaEO; WjaEO: $this->db->set("\x66\x6f\x74\157", ''); goto GTUcb; GTUcb: $this->db->where("\x69\x64\x5f\163\x69\x73\x77\141", $id_siswa); goto V5Ng8; Betpc: echo "\106\151\x6c\145\x20\104\x65\x6c\x65\x74\145\x20\123\x75\x63\143\145\163\x73\146\165\x6c\x6c\171"; goto p27ah; RG0cx: $src = $this->input->post("\x73\162\x63"); goto gzVSu; DTB7N: Jzi9w: goto n0xM8; n0xM8: } public function delete() { goto GGc1T; CCUYl: VK_n4: goto bxc16; VDvFM: $this->output_json(["\163\164\x61\164\165\x73" => false]); goto CCUYl; GGc1T: $chk = $this->input->post("\143\x68\145\x63\153\145\x64", true); goto pqEgE; xFNHG: f6R1x: goto VDvFM; AvAbM: $this->master->delete("\142\x75\153\165\137\151\156\144\x75\x6b", $chk, "\x69\x64\x5f\163\151\x73\167\x61"); goto Y3N8m; ZSKsQ: goto VK_n4; goto xFNHG; pqEgE: if (!$chk) { goto f6R1x; } goto ayUPV; woJ2O: gyW8U: goto ZSKsQ; ayUPV: if (!$this->master->delete("\155\141\x73\x74\145\x72\137\163\x69\163\x77\x61", $chk, "\151\144\x5f\163\151\x73\x77\141")) { goto gyW8U; } goto AvAbM; Y3N8m: $this->output_json(["\x73\x74\x61\164\165\x73" => true, "\x74\x6f\164\141\154" => count($chk)]); goto woJ2O; bxc16: } }
