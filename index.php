<?php
#bağlanan sunucu = localhost
#root = kullanıcı adı
#boş olan yer şifre
#text = veritabanı
$baglan =mysqli_connect("localhost","root","","test");
#veritabanına bağlanan sorgu
    if (!$baglan) 
    {
        die("connection failed:".mysql_connect_error());
    }
    else {
            echo "Bağlantı gerçekleşti";
    }
?>
<!--//Form olayları için oluşmuş etiketler--->
<form method="post" action=""><br>
    <input type="text" name="ad"><br>
    <input type="text" name="soyad"><br><br>
    <input type="submit" name="buton"> 
</form><br>
<!--//Form olayları için oluşmuş etiketler--->
<?php
    if (isset($_POST ["buton"] ))
    {
        #Bilgiler tablosundan Ad ve Soyad stunları
        $sql ="insert into  bilgiler(ad,soyad) values('".$_POST["ad"]."','".$_POST["soyad"]."')";
        $sonuc=mysqli_query($baglan,$sql);
        #Sorgu çalışma test olayı
        if ($sonuc) 
        {
            echo "Bağlantı oldu";
        }
        else {
        echo "çalışmadı";
        }
    }
?>
