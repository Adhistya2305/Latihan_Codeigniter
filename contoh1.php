
<?php
//contoh 1
class contoh1 extends CI_Controller
{
    public function index()
    {
        echo "selamat datanng.. selamat belajar web";
    }
    

    //contoh 2
    /*
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
       
    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_latihan1');
        $hasil = $this->model_latihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari" . $n1 . " + " . $n2 . " = "
            . $hasil;
    }
    */




    //contoh 3
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_latihan1');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan', $data);
    }
}



?>