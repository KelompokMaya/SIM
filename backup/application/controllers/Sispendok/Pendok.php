<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendok extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_dokumen');
		$this->load->model('M_dashboard');
		
		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('admin/v_redirect_login');
			return;
		}
	}

	public function index() {
		$data['jml_teknisi']=$this->M_dashboard->jmlUser();
		$data['jml_dokumen']=$this->M_dokumen->jmlDokumen();
		$data['jml_term']=$this->M_dokumen->jmlTerm();
		$data['dokumen']=$this->M_dokumen->select_all();
		$data['user']=$this->M_admin->select_all();

		$this->load->view('admin/v_dashboard_pendok', $data);
	}
	public function cari(){
		$query = $this->input->post('query');

		//$this->load->view('admin/v_contoh',$data);
		//menghilangkan tanda baca
		$query=preg_replace("/[[:punct:]]+/"," ",$query);

		//agar kecil semua
		$query=strtolower($query);

		//menghitung keseluruhan kata dan menjadikan array
		$kata=explode (" ",$query);
		//pencocokan kata atau stopwords
		$file_stopword= base_url().'assets/file/stopword.txt';
		$stopwords=file($file_stopword, FILE_IGNORE_NEW_LINES);
		$stopword=array_values(array_diff($kata,$stopwords));

		//Stemming					
		$jum_kata=count($stopword);
		if ($jum_kata==0) {
			$term='zxcd';
		}

		//echo $jum_kata_unik;
			$i=0;
			while ( $i< $jum_kata) {
					$this->load->library('stemmingg');
					$teksAsli = $stopword[$i];
					//echo "Teks asli : ".$teksAsli.'<br/>';
					$stemming = $this->stemmingg->stemming($teksAsli);
					if ($stemming=='') {
					$term[$i] = $stopword[$i];
					}
					else{
					$term[$i] = $stemming;
					}
					
					$i++;
		 		}


		 $this->bm25($term,$jum_kata);
		 // $data['term']=$term;
		 // $this->load->view('admin/v_contoh',$data);

	}

	public function bm25($term,$jum_kata){
		$cek_pencarian_kosong=0;
		$b=0.75; //parameter b
		$k1=1.2; //parameter k1
		
		//lakukan pembobotan dokumen menggunakan algoritama BM25
		$i=0;
		
		$jum_dokumen= $this->M_dokumen->jmlDokumen();
		$id_dokumen= $this->M_dokumen->select_ALLidDokumen();

			while ( $i< $jum_dokumen) {
				$BM25_hasil=0;
				$j=0;
				while ( $j< $jum_kata) {
					$cek= $this->M_dokumen->cekterm($term[$j],$id_dokumen[$i]);

						if ($cek== false) {
							$BM25_hasil=$BM25_hasil+0;
							$cek_pencarian_kosong++;
							$j++;
						}
						if ($cek== true){
							$tf=$this->M_dokumen->select_termIndex($id_dokumen[$i],$term[$j]);//tf term
							$D= $this->M_dokumen->select_panjangDokumen($id_dokumen[$i]); // panjang dokumen
							$df= $this->M_dokumen->select_df($term[$j]);
							$avdl=($this->M_dokumen->ALLpanjangDok())/$jum_dokumen;

				            $BM25_1=((($k1+1)*$tf)/($k1*(1-$b+$b*($D/$avdl))+$tf));
				            $BM25_2=log10($jum_dokumen/$df);
				            $BM25_hasil=$BM25_hasil+$BM25_1*$BM25_2;


				            $j++;
			        	}
			 	}
			 	//$BM25_2=($jum_dokumen-($df+0.5))/($df+0.5);
			 	//$BM25_hasilx[$id_dokumen[$i]]=$BM25_hasil;

			 	$dokumen=$this->M_dokumen->select($id_dokumen[$i])->row_array(); 

			 	$bobot = array(
        			'bobot' => $BM25_hasil,         
	            );
			 	$BM25_hasilx[$i]= array_merge($bobot,$dokumen);

			 	$i++;
		 	}


		 if (($jum_dokumen*$jum_kata)==$cek_pencarian_kosong) {
		 	 $data['term']=0;
		 } else{
		 	 arsort($BM25_hasilx);

			  
			// for ($x = 0; $x <= 10; $x++) {
			//     echo "The number is: $x <br>";
			// } 



		 	 $data['term']=$BM25_hasilx;
		 	 //$data['jum_dokumen']=$jum_dokumen;
		 }

		
		 //$data['bm2']=$BM25_2;
		 $this->load->view('admin/hasil_cari',$data);

	}




}