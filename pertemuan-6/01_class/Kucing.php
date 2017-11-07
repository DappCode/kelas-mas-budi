<?php 

class Kucing extends IbuKucing {

    private $istriKucing;

    private $namaKucing;

    //contructor 
    public function __construct($nama, $istri)
    {
        $this->namaKucing = $nama;
        $this->istriKucing = $istri;
    } // setiap object akan mengeluarkan ini    


    public function makan()    // --> di sebut Method bukan di sebut function
    {
        return 'makan';
    }    

    public function getAyahKucing() 
    {
        return $this->ayah;  // --> tanda '$this' artinya memanggil di file ini
    }

    public function getNamaKucing()
    {
        return $this->namaKucing;
    }
    public function getIstri()
    {
        return $this->istriKucing;
    }
}

?>