<?php
//(inheritance) pewarisan/turunan
//PARENT CLASS
class Sepatu {
   public $nama;
   public $info ;
   public $ket;
   public $contoh;

   public function __construct($nama,$info,$ket,$contoh){
       $this->nama = $nama;
       $this->info = $info;
       $this->ket = $ket;
       $this->contoh = $contoh;
     }
   //method untuk class 
   function proses(){
       return "hardware membantu proses kinerja komputer";
    }
    public function infoL(){
        echo '<script>alert("klik || YA ")</script>';
    }
    public function lihatInfo(){
        return "Jenis Sepatu : $this->nama , '<br/>' , Info Sepatu : $this->info , '<br/>' , Keterangan : $this->ket , '<br/>', Contoh Sepatu : $this->contoh";
    }
}


//pewarisan adalah sebuah mekanisme yang mengizinkan seorang child memiliki/meniru sifat dan kelakuan parent
//tanpa harus membuat ulang sifat atau kelakuan tersebut (inheritance)
//CHILD class 
class Sneakers extends Sepatu{
 
   function input(){
       echo " inputan data";
   }
   
}


class Nike extends Sepatu{
    
    
   function prosesdev(){
       echo " proses data";
   }
}

class Adidas extends Sepatu{
    function ouput(){
        echo"ouput data";
    }
    
}

class Asics extends Sepatu{
    
  function storage(){
      echo " storage data";
  }
}
?>