<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\x53\105\x50\101\x54\x48") or exit("\116\x6f\40\144\151\162\x65\x63\164\40\x73\x63\x72\151\160\164\x20\x61\143\143\x65\163\163\x20\141\x6c\154\x6f\x77\145\x64"); class HasilUjian extends CI_Controller { public function __construct() { goto oM779; C29gD: $this->user = $this->ion_auth->user()->row(); goto ikwJQ; tZ29Q: $this->load->model("\x55\x6a\151\141\x6e\137\x6d\157\144\145\x6c", "\165\152\x69\141\x6e"); goto C29gD; OWLlU: $this->load->model("\115\x61\x73\164\145\162\x5f\155\157\x64\x65\x6c", "\155\x61\163\164\145\162"); goto tZ29Q; mKWdz: R9m2S: goto geZSP; WcPsJ: if ($this->ion_auth->logged_in()) { goto R9m2S; } goto vOKnU; oM779: parent::__construct(); goto WcPsJ; vOKnU: redirect("\x61\165\x74\x68"); goto mKWdz; geZSP: $this->load->library(["\x64\x61\164\141\x74\x61\x62\154\x65\163"]); goto OWLlU; ikwJQ: } public function output_json($data, $encode = true) { goto s0Ddl; s0Ddl: if (!$encode) { goto DXywl; } goto rKyc2; rAr0V: $this->output->set_content_type("\141\160\160\154\x69\x63\x61\164\x69\157\156\57\x6a\x73\157\x6e")->set_output($data); goto rwm8x; rKyc2: $data = json_encode($data); goto i3Z6K; i3Z6K: DXywl: goto rAr0V; rwm8x: } public function data() { goto Wu3gx; ZjaLp: oI5YJ: goto fD0nC; fD0nC: $this->output_json($this->ujian->getHasilUjian($nip_guru), false); goto VJJWp; IzuuW: if (!$this->ion_auth->in_group("\147\165\162\x75")) { goto oI5YJ; } goto CovnQ; CovnQ: $nip_guru = $this->user->username; goto ZjaLp; Wu3gx: $nip_guru = null; goto IzuuW; VJJWp: } public function NilaiMhs($id) { $this->output_json($this->ujian->HslUjianById($id, true), false); } public function index() { goto yhveH; Ncdyz: $this->load->view("\x5f\x74\145\155\160\154\x61\164\x65\x73\x2f\144\x61\x73\x68\142\x6f\141\162\x64\57\x5f\146\x6f\x6f\x74\145\x72\56\x70\x68\160"); goto oAeJi; yhveH: $data = ["\x75\x73\x65\162" => $this->user, "\x6a\x75\144\165\154" => "\125\x6a\151\141\x6e", "\163\x75\x62\x6a\165\x64\x75\154" => "\110\141\x73\x69\x6c\40\125\x6a\x69\141\x6e"]; goto fA8Si; dY9f0: $this->load->view("\165\x6a\151\141\156\x2f\x68\141\x73\151\154"); goto Ncdyz; fA8Si: $this->load->view("\137\x74\x65\x6d\x70\154\x61\x74\145\x73\57\144\x61\163\150\x62\157\141\x72\144\x2f\137\x68\x65\x61\x64\145\162\x2e\x70\150\x70", $data); goto dY9f0; oAeJi: } public function detail($id) { goto W6b1h; EqVjW: $this->load->view("\165\152\151\x61\156\57\x64\145\x74\141\151\154\137\x68\141\x73\151\x6c"); goto a6nHh; KaesT: $nilai = $this->ujian->bandingNilai($id); goto o5E24; W6b1h: $ujian = $this->ujian->getUjianById($id); goto KaesT; o5E24: $data = ["\165\163\x65\162" => $this->user, "\152\165\x64\x75\x6c" => "\x55\152\x69\x61\156", "\x73\x75\142\152\x75\144\x75\154" => "\x44\x65\x74\141\151\154\x20\x48\x61\163\x69\x6c\40\125\x6a\151\141\x6e", "\165\x6a\x69\x61\x6e" => $ujian, "\156\151\x6c\x61\151" => $nilai]; goto Cq5bX; a6nHh: $this->load->view("\x5f\164\145\x6d\160\x6c\x61\164\x65\x73\57\144\x61\163\150\x62\157\141\x72\x64\x2f\137\146\x6f\x6f\x74\x65\x72\x2e\160\150\160"); goto GbrQs; Cq5bX: $this->load->view("\x5f\164\145\155\160\154\141\x74\x65\163\x2f\x64\x61\163\x68\142\x6f\x61\x72\x64\x2f\137\150\x65\x61\x64\145\162\x2e\x70\x68\160", $data); goto EqVjW; GbrQs: } public function cetak($id) { goto KmnPb; pphom: $this->load->view("\x75\152\151\x61\156\57\x63\x65\164\x61\x6b", $data); goto Kl9eB; x10_w: $data = ["\x75\x6a\x69\141\x6e" => $ujian, "\150\141\x73\151\x6c" => $hasil, "\155\150\x73" => $mhs]; goto pphom; NCE2O: $ujian = $this->ujian->getUjianById($id); goto x10_w; KmnPb: $mhs = $this->ujian->getIdMahasiswa($this->user->username); goto v42zu; v42zu: $hasil = $this->ujian->HslUjian($id, $mhs->id_siswa)->row(); goto NCE2O; Kl9eB: } public function cetak_detail($id) { goto ctSbF; vYwVC: $this->load->view("\x75\x6a\x69\x61\x6e\57\x63\145\x74\x61\x6b\137\x64\145\x74\x61\x69\154", $data); goto B4Z61; PuBnX: $data = ["\x75\x6a\151\x61\156" => $ujian, "\156\151\154\141\151" => $nilai, "\x68\141\163\151\154" => $hasil]; goto vYwVC; YIPkl: $hasil = $this->ujian->HslUjianById($id)->result(); goto PuBnX; R6dwX: $nilai = $this->ujian->bandingNilai($id); goto YIPkl; ctSbF: $ujian = $this->ujian->getUjianById($id); goto R6dwX; B4Z61: } }
