<?php
$Sonuc = simplexml_load_file('https://www.tcmb.gov.tr/kurlar/today.xml');
?>
<html>
<head>
    <title>TCMB Döviz Kurları</title>
    <style>
        table{
            width: 100%;
        }
        table, th, td {
            text-align: center;
            border-collapse: collapse;
            border: 1px solid black;

        }
    </style>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>CrossOrder</th>
            <th>Isim</th>
            <th>CurrencyName</th>
            <th>ForexBuying</th>
            <th>ForexSelling</th>
            <th>BanknoteBuying</th>
            <th>BanknoteSelling</th>
            <th>CrossRateUSD</th>
            <th>CrossRateOther</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($Sonuc as $item) {
            //Her bir döviz birimi için yapılacak işlemler
            echo '<tr>';
            foreach ($item as $key => $value) {
                //Döviz birimi için sunulan tüm özellikler
                echo '<td>' . $value . '</td>';
            }
            echo '<tr>';
        }
        ?>
        </tbody>
    </table>
</body>
</html>

