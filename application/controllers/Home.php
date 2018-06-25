<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->view('home');
	}

	public function login(){
		$this->load->view('login');
	}

	public function indextes(){
		$this->load->view('indextes');
	}

	public function user_login(){
		$this->output->enable_profiler(TRUE);
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//$query = $this->db->query("SELECT * FROM tbpenghuni WHERE username = '$username' AND password = '$password'");
		$this->load->model('user');
		$query = $this->user->get_user($username, $password);
		if($query->num_rows()>0 ){
			$id_mahasiswa = '';

			foreach ($query->result() as $row){
				$id_mahasiswa = $row->id_penghuni;
			}
			$newdata = array(
				'username'  => $username,
				'password'     => $password,
				'id_mahasiswa' => $id_mahasiswa,
				'logged_in' => TRUE
		);

		$this->session->set_userdata($newdata);
		$this->load->view('indextes');
		}else{
			$this->session->set_flashdata('warning', 'gagal');


			redirect('home/login');
		}
	}

	public function user_logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

	public function tesmbti(){
		$this->output->enable_profiler(TRUE);
		$this->load->model('soal');

		$data['soal_ei'] = $this->soal->get_soal_ei()->result();
		$data['soal_sn'] = $this->soal->get_soal_sn()->result();
		$data['soal_tf'] = $this->soal->get_soal_tf()->result();
		$data['soal_jp'] = $this->soal->get_soal_jp()->result();
	
		$this->load->view('tesmbti', $data);
	}

	public function hasil_tesmbti(){
		$answer1 = $this->input->post('ei_1');
		$answer2 = $this->input->post('ei_2');
		$answer3 = $this->input->post('ei_3');
		$answer4 = $this->input->post('ei_4');
		$answer5 = $this->input->post('ei_5');
		$answer6 = $this->input->post('ei_6');
		$answer7 = $this->input->post('ei_7');
		$answer8 = $this->input->post('ei_8');
		$answer9 = $this->input->post('ei_9');
		$answer10 = $this->input->post('ei_10');
		$answer11 = $this->input->post('ei_11');
		$answer12 = $this->input->post('ei_12');
		$answer13 = $this->input->post('ei_13');
		$answer14 = $this->input->post('ei_14');
		$answer15 = $this->input->post('ei_15');

		$totalE = 0;

		if ($answer1 == "A") { $totalE++; }
		if ($answer2 == "A") { $totalE++; }
		if ($answer3 == "A") { $totalE++; }
		if ($answer4 == "A") { $totalE++; }
		if ($answer5 == "A") { $totalE++; }
		if ($answer6 == "A") { $totalE++; }
		if ($answer7 == "A") { $totalE++; }
		if ($answer8 == "A") { $totalE++; }
		if ($answer9 == "A") { $totalE++; }
		if ($answer10 == "A") { $totalE++; }
		if ($answer11 == "A") { $totalE++; }
		if ($answer12 == "A") { $totalE++; }
		if ($answer13 == "A") { $totalE++; }
		if ($answer14 == "A") { $totalE++; }
		if ($answer15 == "A") { $totalE++; }

		$totalI = 0;

		if ($answer1 == "B") { $totalI++; }
		if ($answer2 == "B") { $totalI++; }
		if ($answer3 == "B") { $totalI++; }
		if ($answer4 == "B") { $totalI++; }
		if ($answer5 == "B") { $totalI++; }
		if ($answer6 == "B") { $totalI++; }
		if ($answer7 == "B") { $totalI++; }
		if ($answer8 == "B") { $totalI++; }
		if ($answer9 == "B") { $totalI++; }
		if ($answer10 == "B") { $totalI++; }
		if ($answer11 == "B") { $totalI++; }
		if ($answer12 == "B") { $totalI++; }
		if ($answer13 == "B") { $totalI++; }
		if ($answer14 == "B") { $totalI++; }
		if ($answer15 == "B") { $totalI++; }

		$answer16 = $this->input->post('sn_1');
		$answer17 = $this->input->post('sn_2');
		$answer18 = $this->input->post('sn_3');
		$answer19 = $this->input->post('sn_4');
		$answer20 = $this->input->post('sn_5');
		$answer21 = $this->input->post('sn_6');
		$answer22 = $this->input->post('sn_7');
		$answer23 = $this->input->post('sn_8');
		$answer24 = $this->input->post('sn_9');
		$answer25 = $this->input->post('sn_10');
		$answer26 = $this->input->post('sn_11');
		$answer27 = $this->input->post('sn_12');
		$answer28 = $this->input->post('sn_13');
		$answer29 = $this->input->post('sn_14');
		$answer30 = $this->input->post('sn_15');

		$totalS = 0;

		if ($answer16 == "A") { $totalS++; }
		if ($answer17 == "A") { $totalS++; }
		if ($answer18 == "A") { $totalS++; }
		if ($answer19 == "A") { $totalS++; }
		if ($answer20 == "A") { $totalS++; }
		if ($answer21 == "A") { $totalS++; }
		if ($answer22 == "A") { $totalS++; }
		if ($answer23 == "A") { $totalS++; }
		if ($answer24 == "A") { $totalS++; }
		if ($answer25 == "A") { $totalS++; }
		if ($answer26 == "A") { $totalS++; }
		if ($answer27 == "A") { $totalS++; }
		if ($answer28 == "A") { $totalS++; }
		if ($answer29 == "A") { $totalS++; }
		if ($answer30 == "A") { $totalS++; }

		$totalN = 0;

		if ($answer16 == "B") { $totalN++; }
		if ($answer17 == "B") { $totalN++; }
		if ($answer18 == "B") { $totalN++; }
		if ($answer19 == "B") { $totalN++; }
		if ($answer20 == "B") { $totalN++; }
		if ($answer21 == "B") { $totalN++; }
		if ($answer22 == "B") { $totalN++; }
		if ($answer23 == "B") { $totalN++; }
		if ($answer24 == "B") { $totalN++; }
		if ($answer25 == "B") { $totalN++; }
		if ($answer26 == "B") { $totalN++; }
		if ($answer27 == "B") { $totalN++; }
		if ($answer28 == "B") { $totalN++; }
		if ($answer29 == "B") { $totalN++; }
		if ($answer30 == "B") { $totalN++; }

		$answer31 = $this->input->post('tf_1');
		$answer32 = $this->input->post('tf_2');
		$answer33 = $this->input->post('tf_3');
		$answer34 = $this->input->post('tf_4');
		$answer35 = $this->input->post('tf_5');
		$answer36 = $this->input->post('tf_6');
		$answer37 = $this->input->post('tf_7');
		$answer38 = $this->input->post('tf_8');
		$answer39 = $this->input->post('tf_9');
		$answer40 = $this->input->post('tf_10');
		$answer41 = $this->input->post('tf_11');
		$answer42 = $this->input->post('tf_12');
		$answer43 = $this->input->post('tf_13');
		$answer44 = $this->input->post('tf_14');
		$answer45 = $this->input->post('tf_15');

		$totalT = 0;

		if ($answer31 == "A") { $totalT++; }
		if ($answer32 == "A") { $totalT++; }
		if ($answer33 == "A") { $totalT++; }
		if ($answer34 == "A") { $totalT++; }
		if ($answer35 == "A") { $totalT++; }
		if ($answer36 == "A") { $totalT++; }
		if ($answer37 == "A") { $totalT++; }
		if ($answer38 == "A") { $totalT++; }
		if ($answer39 == "A") { $totalT++; }
		if ($answer30 == "A") { $totalT++; }
		if ($answer41 == "A") { $totalT++; }
		if ($answer42 == "A") { $totalT++; }
		if ($answer43 == "A") { $totalT++; }
		if ($answer44 == "A") { $totalT++; }
		if ($answer45 == "A") { $totalT++; }

		$totalF = 0;

		if ($answer31 == "B") { $totalF++; }
		if ($answer32 == "B") { $totalF++; }
		if ($answer33 == "B") { $totalF++; }
		if ($answer34 == "B") { $totalF++; }
		if ($answer35 == "B") { $totalF++; }
		if ($answer36 == "B") { $totalF++; }
		if ($answer37 == "B") { $totalF++; }
		if ($answer38 == "B") { $totalF++; }
		if ($answer39 == "B") { $totalF++; }
		if ($answer30 == "B") { $totalF++; }
		if ($answer41 == "B") { $totalF++; }
		if ($answer42 == "B") { $totalF++; }
		if ($answer43 == "B") { $totalF++; }
		if ($answer44 == "B") { $totalF++; }
		if ($answer45 == "B") { $totalF++; }

		$answer46 = $this->input->post('jp_1');
		$answer47 = $this->input->post('jp_2');
		$answer48 = $this->input->post('jp_3');
		$answer49 = $this->input->post('jp_4');
		$answer50 = $this->input->post('jp_5');
		$answer51 = $this->input->post('jp_6');
		$answer52 = $this->input->post('jp_7');
		$answer53 = $this->input->post('jp_8');
		$answer54 = $this->input->post('jp_9');
		$answer55 = $this->input->post('jp_10');
		$answer56 = $this->input->post('jp_11');
		$answer57 = $this->input->post('jp_12');
		$answer58 = $this->input->post('jp_13');
		$answer59 = $this->input->post('jp_14');
		$answer60 = $this->input->post('jp_15');

		$totalJ = 0;

		if ($answer46 == "A") { $totalJ++; }
		if ($answer47 == "A") { $totalJ++; }
		if ($answer48 == "A") { $totalJ++; }
		if ($answer49 == "A") { $totalJ++; }
		if ($answer50 == "A") { $totalJ++; }
		if ($answer51 == "A") { $totalJ++; }
		if ($answer52 == "A") { $totalJ++; }
		if ($answer53 == "A") { $totalJ++; }
		if ($answer54 == "A") { $totalJ++; }
		if ($answer55 == "A") { $totalJ++; }
		if ($answer56 == "A") { $totalJ++; }
		if ($answer57 == "A") { $totalJ++; }
		if ($answer58 == "A") { $totalJ++; }
		if ($answer59 == "A") { $totalJ++; }
		if ($answer50 == "A") { $totalJ++; }

		$totalP = 0;

		if ($answer46 == "B") { $totalP++; }
		if ($answer47 == "B") { $totalP++; }
		if ($answer48 == "B") { $totalP++; }
		if ($answer49 == "B") { $totalP++; }
		if ($answer50 == "B") { $totalP++; }
		if ($answer51 == "B") { $totalP++; }
		if ($answer52 == "B") { $totalP++; }
		if ($answer53 == "B") { $totalP++; }
		if ($answer54 == "B") { $totalP++; }
		if ($answer55 == "B") { $totalP++; }
		if ($answer56 == "B") { $totalP++; }
		if ($answer57 == "B") { $totalP++; }
		if ($answer58 == "B") { $totalP++; }
		if ($answer59 == "B") { $totalP++; }
		if ($answer50 == "B") { $totalP++; }


		$persenE=($totalE/15)*100;
		$data['persenE'] = $persenE;
		$persenI=($totalI/15)*100;
		$data['persenI'] = $persenI;
		$persenS=($totalS/15)*100;
		$data['persenS'] = $persenS;
		$persenN=($totalN/15)*100;
		$data['persenN'] = $persenN;
		$persenT=($totalT/15)*100;
		$data['persenT'] = $persenT;
		$persenF=($totalF/15)*100;
		$data['persenF'] = $persenF;
		$persenJ=($totalJ/15)*100;
		$data['persenJ'] = $persenJ;
		$persenP=($totalP/15)*100;
		$data['persenP'] = $persenP;

		if ($persenE>$persenI) {
			$hasil1="E";
		}else{
			$hasil1="I";
		}

		if ($persenS>$persenN) {
			$hasil2="S";
		}else{
			$hasil2="N";
		}

		if ($persenT>$persenF) {
			$hasil3="T";
		}else{
			$hasil3="F";
		}

		if ($persenJ>$persenP) {
			$hasil4="J";
		}else{
			$hasil4="P";
		}

		$hasil = $hasil1.$hasil2.$hasil3.$hasil4;
		$this->load->model('soal');
		$id_mahasiswa = $_SESSION['id_mahasiswa'];
		$query = $this->soal->input_hasiltes($id_mahasiswa, $totalE, $totalI, $totalS, $totalN, $totalT, $totalF, $totalJ, $totalP, $hasil);

		// $this->load->model('user');
		
		
		$this->load->view('hasiltes', $hasil);

		$this->output->enable_profiler(TRUE);
	}
	
	// public function hasiltes(){
		// $this->load->model->get_hasiltes();
		// $data['tbhasiltes'] = $this->user->get_hasiltes->result();
		// $this->load->view('hasiltes',$data);
		
		// $this->output->enable_profiler(TRUE);


	// }

	public function pengelompokan(){

		$id_mahasiswa = $_SESSION['id_mahasiswa'];

		$this->load->model('user');
		$query = $this->user->get_hasiltes($username, $password);

$tipe_penghuni_butuh_kamar = $rowtipe['tipe_kepribadian'];
$jenis_kelamin_butuh_kamar = $rowtipe['jenis_kelamin'];

$sql_kamar = "SELECT * FROM tbkamar JOIN tbgedung WHERE tbkamar.id_gedung = tbgedung.id_gedung";
$result_kamar = mysqli_query($db, $sql_kamar);

if(mysqli_num_rows($result_kamar) > 0){

if ($jenis_kelamin_butuh_kamar=='Perempuan'){

    $sql_kamar_perempuan="SELECT * FROM tbkamar JOIN tbgedung ON tbkamar.id_gedung=tbgedung.id_gedung WHERE tbgedung.tipe_gedung='Asrama Perempuan'";
    $result_kamar_perempuan = mysqli_query($db, $sql_kamar_perempuan);

        while($row_kamar_perempuan = mysqli_fetch_assoc($result_kamar_perempuan)){
              $jml_cek=0;
              $jml_kriteria=0;
              $id_kamar_perempuan = $row_kamar_perempuan['id_kamar'];

              //GET DATA DARI TBISIKAMAR DIMANA KAMAR DI TBISIKAMAR = IDKAMAR YANG ADA DI TBKAMAR
              $sql_isi_kamar = "SELECT * FROM tbisikamar WHERE id_kamar = '$id_kamar_perempuan' ORDER BY id_kamar ASC";
              $result_isi_kamar = mysqli_query($db, $sql_isi_kamar);
              $jml_orang = mysqli_num_rows($result_isi_kamar);
              $is_penghuni = mysqli_num_rows($result_isi_kamar);
                if ($is_penghuni > 0 && $is_penghuni < 4){

                  while($row_isi_kamar = mysqli_fetch_assoc($result_isi_kamar)){

                    $id_kamar_isi_kamar = $row_isi_kamar['id_kamar'];
                    $id_penghuni_isi_kamar = $row_isi_kamar['id_penghuni'];

                    //QUERY LOOPING PENGHUNI
                    $sql_hasil_tes = "SELECT * FROM tbhasiltes INNER JOIN tbisikamar ON tbhasiltes.id_penghuni = tbisikamar.id_penghuni WHERE tbisikamar.id_penghuni = '$id_penghuni_isi_kamar'";
                    $result_hasil_tes = mysqli_query($db, $sql_hasil_tes);
                    $row_hasil_tes = mysqli_fetch_array($result_hasil_tes);
                    $tipe_kepribadian = $row_hasil_tes['tipe_kepribadian'];

                    $sql_cek= "SELECT * FROM tbkriteria k WHERE k.kriteria1 LIKE SUBSTR('$tipe_penghuni_butuh_kamar',2,2) AND k.kriteria2 IN
                                (SELECT SUBSTR('$tipe_kepribadian',2,2) FROM tbisikamar i JOIN tbhasiltes h ON  i.id_penghuni = h.id_penghuni WHERE i.id_kamar = '$id_kamar_isi_kamar')";
                    $result_cek = mysqli_query($db,$sql_cek);


                    while($row_cek = mysqli_fetch_array($result_cek)){
                      $is_kriteria = $row_cek['is_cocok'];
                      $jml_cek++;
					  $jml_kriteria=$jml_kriteria+$is_kriteria;

                      //kalau kondisinya kriteria 0 dan udh gaada yg dicek
                      if($jml_kriteria==0 && $jml_orang==$jml_cek){
                        break 2;
                      }else if($jml_kriteria==$jml_orang && $jml_orang==$jml_cek){

                        $insert1="INSERT INTO tbisikamar (id_kamar, id_penghuni) VALUES ($id_kamar_perempuan, $id_penghuni_butuh_kamar)";
                        $result4 = mysqli_query($db, $insert1);
                        break 3; //EVALUASI

                      }else{
                        break ; //EVALUASI
                      }


                  } //end while kecocokan

                } //end while cek jumlah penghuni

              }
              if($is_penghuni == 0 ){
                $sql4 = "INSERT INTO tbisikamar (id_kamar, id_penghuni) VALUES ($id_kamar_perempuan, $id_penghuni_butuh_kamar)";
                $result4 = mysqli_query($db, $sql4);
                break; //evaluasi aja

              }else{
                   continue;
                }

            }


}else{
  $sql_kamar_laki="SELECT * FROM tbkamar JOIN tbgedung ON tbkamar.id_gedung=tbgedung.id_gedung WHERE tbgedung.tipe_gedung='Asrama Laki-Laki'";
  $result_kamar_laki = mysqli_query($db, $sql_kamar_laki);

      while($row_kamar_laki = mysqli_fetch_assoc($result_kamar_laki)){
            $jml_cek=0;
            $jml_kriteria=0;
            $id_kamar_laki = $row_kamar_laki['id_kamar'];

            //GET DATA DARI TBISIKAMAR DIMANA KAMAR DI TBISIKAMAR = IDKAMAR YANG ADA DI TBKAMAR
            $sql_isi_kamar = "SELECT * FROM tbisikamar WHERE id_kamar = '$id_kamar_laki' ORDER BY id_kamar ASC";
            $result_isi_kamar = mysqli_query($db, $sql_isi_kamar);
            $jml_orang = mysqli_num_rows($result_isi_kamar);
            $is_penghuni = mysqli_num_rows($result_isi_kamar);
              if ($is_penghuni > 0 && $is_penghuni < 4){

                while($row_isi_kamar = mysqli_fetch_assoc($result_isi_kamar)){

                  $id_kamar_isi_kamar = $row_isi_kamar['id_kamar'];
                  $id_penghuni_isi_kamar = $row_isi_kamar['id_penghuni'];

                  //QUERY LOOPING PENGHUNI
                  $sql_hasil_tes = "SELECT * FROM tbhasiltes INNER JOIN tbisikamar ON tbhasiltes.id_penghuni = tbisikamar.id_penghuni WHERE tbisikamar.id_penghuni = '$id_penghuni_isi_kamar'";
                  $result_hasil_tes = mysqli_query($db, $sql_hasil_tes);
                  $row_hasil_tes = mysqli_fetch_array($result_hasil_tes);
                  $tipe_kepribadian = $row_hasil_tes['tipe_kepribadian'];

                  $sql_cek= "SELECT * FROM tbkriteria k WHERE k.kriteria1 LIKE SUBSTR('$tipe_penghuni_butuh_kamar',2,2) AND k.kriteria2 IN
                              (SELECT SUBSTR('$tipe_kepribadian',2,2) FROM tbisikamar i JOIN tbhasiltes h ON  i.id_penghuni = h.id_penghuni WHERE i.id_kamar = '$id_kamar_isi_kamar')";
                  $result_cek = mysqli_query($db,$sql_cek);


                  while($row_cek = mysqli_fetch_array($result_cek)){
                    $is_kriteria = $row_cek['is_cocok'];
                    // echo $jml_kriteria. '<br/><br/>';
                    $jml_cek++;
                    $jml_kriteria=$jml_kriteria+$is_kriteria;

                    //kalau kondisinya kriteria 0 dan udh gaada yg dicek
                    if($jml_kriteria==0 && $jml_orang==$jml_cek){
                      break 2;
                    }else if($jml_kriteria==$jml_orang && $jml_orang==$jml_cek){

                      $insert1="INSERT INTO tbisikamar (id_kamar, id_penghuni) VALUES ($id_kamar_laki, $id_penghuni_butuh_kamar)";
                      $result4 = mysqli_query($db, $insert1);
                      break 3; //EVALUASI

                    }else{
                      break ; //EVALUASI
                    }


                } //end while kecocokan

              } //end while cek jumlah penghuni

            }
            if($is_penghuni == 0 ){
              $sql4 = "INSERT INTO tbisikamar (id_kamar, id_penghuni) VALUES ($id_kamar_laki, $id_penghuni_butuh_kamar)";
              $result4 = mysqli_query($db, $sql4);
              echo "masuk cowo kosong cuy <br/>";
              break; //evaluasi aja

            }else{
                echo "cari kamar lain ya <br/><br/>";
                 continue;
              }

          }
        }


}else{
  echo "0 results";
}

header("location: ../user_lihatkamar.php");


	}



}

?>
