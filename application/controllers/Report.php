<?php
Class Report extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('Item_model');
    }
    
    function index(){
        $pdf = new FPDF('L','mm','legal');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->setTopMargin(22);
        $pdf->setLeftMargin(5);
        
        // Logo
        $pdf->Image(base_url('assets/img/Brand/Flash.png'),10,15,55);
        $pdf->Cell(100);
        $pdf->SetTextColor(0,0,128);
        $pdf->SetFont('Times','B',20);
        $pdf->Cell(420,7,'Send Exprezz',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(345,7,'Kampus Ancol',0,1,'R');
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(345,7,'Jl. Lodan Raya No. 2, Ancol, Jakarta Utara 14430',0,1,'R');
        $pdf->SetTextColor(0,0,128);
        $pdf->Cell(345,7,'Kampus Serpong',0,1,'R');
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(345,7,'Jl. Jalur Sutera Barat Kav. 7-9, Alam Sutera, Tangerang 15143',0,1,'R');
        $pdf->Cell(345,7,'(021) 440 4080 | www.send-exprezz.com',0,1,'R');
        $pdf->Ln(15);

        // mencetak string 
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Times','B',18);
        $pdf->Cell(350,7,'DAFTAR BARANG MASUK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','B',11);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(25,6,'Layanan',1,0,'C');
        $pdf->Cell(50,6,'Pengirim',1,0,'C');
        $pdf->Cell(50,6,'Penerima',1,0,'C');
        $pdf->Cell(40,6,'Asal',1,0,'C');
        $pdf->Cell(40,6,'Tujuan',1,0,'C');
        $pdf->Cell(20,6,'Berat',1,0,'C');
        $pdf->Cell(20,6,'Ukuran',1,0,'C');
        $pdf->Cell(40,6,'Tanggal Masuk',1,1);
        
        $pdf->SetFont('Times','',11);
        $data_barang = $this->Item_model->getItemMasuk();
        $count = 0;
        foreach ($data_barang as $row){
            $count++;
            $pdf->Cell(10,6,$count,1,0);
            $pdf->Cell(25,6,$row['layanan'],1,0);
            $pdf->Cell(50,6,$row['pengirim'],1,0);
            $pdf->Cell(50,6,$row['penerima'],1,0);
            $pdf->Cell(40,6,$row['asal'],1,0);
            $pdf->Cell(40,6,$row['tujuan'],1,0);
            $pdf->Cell(20,6,$row['berat'],1,0);
            $pdf->Cell(20,6,$row['ukuran'],1,0);
            $pdf->Cell(40,6,$row['tgl_masuk'],1,1);
        }
        $pdf->Cell(0,20,NULL,0,1);
        // mencetak string 
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Times','B',18);
        $pdf->Cell(350,7,'DAFTAR BARANG MASUK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','B',11);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(25,6,'Layanan',1,0,'C');
        $pdf->Cell(50,6,'Pengirim',1,0,'C');
        $pdf->Cell(50,6,'Penerima',1,0,'C');
        $pdf->Cell(40,6,'Asal',1,0,'C');
        $pdf->Cell(40,6,'Tujuan',1,0,'C');
        $pdf->Cell(20,6,'Berat',1,0,'C');
        $pdf->Cell(20,6,'Ukuran',1,0,'C');
        $pdf->Cell(40,6,'Tanggal Masuk',1,1);
        
        $pdf->SetFont('Times','',11);
        $data_barang_keluar = $this->Item_model->getItemKeluar();
        $count = 0;
        foreach ($data_barang_keluar as $row){
            $count++;
            $pdf->Cell(10,6,$count,1,0);
            $pdf->Cell(25,6,$row['layanan'],1,0);
            $pdf->Cell(50,6,$row['pengirim'],1,0);
            $pdf->Cell(50,6,$row['penerima'],1,0);
            $pdf->Cell(40,6,$row['asal'],1,0);
            $pdf->Cell(40,6,$row['tujuan'],1,0);
            $pdf->Cell(20,6,$row['berat'],1,0);
            $pdf->Cell(20,6,$row['no_kurir'],1,0);
            $pdf->Cell(40,6,$row['tgl_keluar'],1,1);
        }
        $pdf->Output();
    }
}