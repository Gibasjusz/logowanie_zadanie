<?php

    if (isset($_POST['checkbox']))
        {
            echo "zaznaczony";
            $id_polaczenia = mysqli_connect('localhost','root','','baza');
            $data = $_POST['data'];
            $liczba_os = $_POST['ilosc'];
            $telefon = $_POST['tel'];
            $zapytanie = "INSERT INTO `rezerwacje`(`nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES ('1','$data','$liczba_os','$telefon');";
            $wynik_zapytanie = mysqli_query($id_polaczenia, $zapytanie);
            header('Location: restauracja.html');
        }
    else 
       echo 'Zaznacz checkbox !!!';
?>