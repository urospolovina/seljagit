<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Oporezivanje</title>
    
    
</head>
<body class="bg-blue-50">
    
<div>
    <div class="w-1/5 flex flex-wrap justify-left mt-6 ml-6">
        <img src="logodz.png"  class="object-scale-down w-32 h-auto " />
    </div>
    <h1 class="text-2xl text-center text-black mt-8">Uporedni prikaz obaveza fizičkih lica</h1>
</div>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $a=$_POST['prihod'];
}
else {
    $a = 100000;
}
$c24 = 441140;  #--Maksimalni iznos za obračun doprinosa za 2022. godinu
$b11 = 0.14;    #--PIO na teret poslodavca
$b12 = 0.11;    #--PIO na teret zaposlenog
$b14 = 0.0515;  #--Zdravstrveno na teret poslodavca
$b15 = 0.0515;  #--Zdravstrveno na teret zaposlenog
$b17 = 0.2;     #--Porez


?>
    

<form action='' method='POST'>
<div class="w-full flex mb-10 mt-10">
    <h2 class="mr-8 p-2 ml-8 font-bold">Ukupni priliv (mesečni)</h2>
    <input type="text" name='prihod' class="border rounded-lg mr-8 p-2 ml-8" placeholder="" value="<?php echo number_format("$a",2,",","."); ?>" required>
    <button type='submit' class="bg-[#439fbc] text-white rounded-lg p-2">Izračunaj</button>
</div>
</form>


<div class="">  
<table class="w-full xl:w-4/5 text-sm text-center text-black  ml-8 mr-8 ">
  <tr>
    <th class="w-64"></th>
    <th class="w-36 bg-[#439fbc] ">UGOVOR O DELU</th>                                              <!--prva kolona-->
    <th class="w-36 bg-[#439fbc] ">AUTORSKI I</th>                                                 <!--druga kolona-->
    <th class="w-36 bg-[#439fbc] ">AUTORSKI II</th>                                                <!--treca kolona-->
    <th class="w-36 bg-[#439fbc] ">AUTORSKI III</th>                                               <!--cetvrta kolona-->
    <th class="w-36 bg-[#439fbc] ">OSTALI PRIHODI</th>                                             <!--peta kolona-->
    <th class="w-36 bg-[#439fbc] ">OSTALI PRIHODI <br>(prelazni režim)</th>                            <!--sesta kolona-->
  </tr>
    <tr>
        <tr>
        <td class="text-left border-dotted border-b-2 border-gray-300 h-12 align-bottom">OSNOVICA</td>
        <td class="font-bold border-dotted border-b-2 border-gray-300 align-bottom"><?php  $c7 = $a-($a*0.2); echo number_format("$c7",2,",",".");?></td>                           <!--prva kolona-->
        <td class="font-bold border-dotted border-b-2 border-gray-300 align-bottom"><?php  $d7 = $a-($a*0.34); echo number_format("$d7",2,",",".");?></td>                      <!--druga kolona-->
        <td class="font-bold border-dotted border-b-2 border-gray-300 align-bottom"><?php  $e7 = $a-($a*0.43); echo number_format("$e7",2,",",".");?></td>                        <!--treca kolona-->
        <td class="font-bold border-dotted border-b-2 border-gray-300 align-bottom"><?php  $f7 = $a-($a*0.5); echo number_format("$f7",2,",",".");?></td>                         <!--cetvrta kolona-->
        <td class="font-bold border-dotted border-b-2 border-gray-300 align-bottom"><?php  $g7 = $a-($a*0.2); echo number_format("$g7",2,",",".");?></td>                         <!--peta kolona-->
        <td class="font-bold border-dotted border-b-2 border-gray-300 align-bottom">                                                            <!--sesta kolona-->
        <?php
            if((($a-($a*0.5))-32000)<=0){
                $h7 = 0;
                echo number_format("$h7",2,",",".");
            }
            else{
                $h7 = (($a-($a*0.5))-32000);
                echo number_format("$h7",2,",",".");
            }

        ?>
        </td>
        </tr>
        <tr>
        <td class="text-left border-dotted border-b-2 border-gray-300">NORMIRANI TROŠAK</td>
        <td class="font-bold border-dotted border-b-2 border-gray-300">20%</td>                                                    <!--prva kolona-->
        <td class="font-bold border-dotted border-b-2 border-gray-300">34%</td>                                                    <!--druga kolona-->
        <td class="font-bold border-dotted border-b-2 border-gray-300">43%</td>                                                    <!--treca kolona-->
        <td class="font-bold border-dotted border-b-2 border-gray-300">50%</td>                                                    <!--cetvrta kolona-->
        <td class="font-bold border-dotted border-b-2 border-gray-300">20%</td>                                                    <!--peta kolona-->
        <td class="font-bold border-dotted border-b-2 border-gray-300">50%</td>                                                    <!--sesta kolona-->
        </tr> 
        <tr>
        <td class="text-left border-b border-black">BESTERETNI IZNOS</td>
        <td class="font-bold border-b border-black">0.00</td>                                                   <!--prva kolona-->
        <td class="font-bold border-b border-black">0.00</td>                                                   <!--druga kolona-->
        <td class="font-bold border-b border-black">0.00</td>                                                   <!--treca kolona-->
        <td class="font-bold border-b border-black">0.00</td>                                                   <!--cevrta kolona-->
        <td class="font-bold border-b border-black">0.00</td>                                                   <!--peta kolona-->
        <td class="font-bold border-b border-black"><?php echo number_format("32000",2,",","."); ?></td>                                                  <!--sesta kolona-->
        </tr>
        <tr>
        <td class="text-left font-bold bg-[#439fbc] border-r border-black">PIO</td>
        </tr>
        <tr>
        <td class="bg-blue-50 text-sm border-r border-black text-left">Na teret poslodavca <span class="font-bold">14.00%</span></td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--prva kolona-->
        <?php
            if($c7<=$c24){
                $c11 = $c7*$b11;
                echo number_format("$c11",2,",",".");
            }
            else{
                $c11 = $c24*$b11;
                echo number_format("$c11",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--druga kolona-->
        <?php
            if($d7<=$c24){
                $d11 = $d7*$b11;
                echo number_format("$d11",2,",",".");
            }
            else{
                $d11 = $c24*$b11;
                echo number_format("$d11",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--treca kolona-->
        <?php
            if($e7<=$c24){
                $e11 = $e7*$b11;
                echo number_format("$e11",2,",",".");
            }
            else{
                $e11 = $c24*$b11;
                echo number_format("$e11",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--cetvrta kolona-->
        <?php
            if($f7<=$c24){
                $f11 = $f7*$b11;
                echo number_format("$f11",2,",",".");
            }
            else{
                $f11 = $c24*$b11;
                echo number_format("$f11",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--peta kolona-->
        <?php
            if($g7<=$c24){
                $g11 = $g7*$b11;
                echo number_format("$g11",2,",",".");
            }
            else{
                $g11 = $c24*$b11;
                echo number_format("$g11",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--sesta kolona-->
        <?php
            if($h7<=$c24){
                $h11 = $h7*$b11;
                echo number_format("$h11",2,",",".");
            }
            else{
                $h11 = $c24*$b11;
                echo number_format("$h11",2,",",".");
            }
        ?>
        </td>
        </tr>
        <tr>
        <td class="text-left bg-blue-50 border-r border-black">Na teret zaposlenog  <span class="font-bold">11.00%</span></td>
        <td class="border-dotted border-b-2 border-gray-300">                                                            <!--prva kolona-->
        <?php
            if($c7<=$c24){
                $c12 = $c7*$b12;
                echo number_format("$c12",2,",",".");
            }
            else{
                $c12 = $c24*$b12;
                echo number_format("$c12",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-gray-300">                                                            <!--druga kolona-->
        <?php
            if($d7<=$c24){
                $d12 = $d7*$b12;
                echo number_format("$d12",2,",",".");
            }
            else{
                $d12 = $c24*$b12;
                echo number_format("$d12",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-gray-300">                                                            <!--treca kolona-->
        <?php
            if($e7<=$c24){
                $e12 = $e7*$b12;
                echo number_format("$e12",2,",",".");
            }
            else{
                $e12 = $c24*$b12;
                echo number_format("$e12",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-gray-300">                                                            <!--cetvrta kolona-->
        <?php
            if($f7<=$c24){
                $f12 = $f7*$b12;
                echo number_format("$f12",2,",",".");
            }
            else{
                $f12 = $c24*$b12;
                echo number_format("$f12",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--peta kolona-->
        <?php
            if($g7<=$c24){
                $g12 = $g7*$b12;
                echo number_format("$g12",2,",",".");
            }
            else{
                $g12 = $c24*$b12;
                echo number_format("$g12",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--sesta kolona-->
        <?php
            if($h7<=$c24){
                $h12 = $h7*$b12;
                echo number_format("$h12",2,",",".");
            }
            else{
                $h12 = $c24*$b12;
                echo number_format("$h12",2,",",".");
            }
        ?>
        </td>
        </tr>
        <tr>
        <td class="text-left font-bold bg-[#439fbc] border-r border-black">ZDRAVSTVENO</td>
        </tr>
        <tr>
        <td class="text-left bg-blue-50 border-r border-black">Na teret poslodavca  <span class="font-bold">5.15%</span></td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--prva kolona-->
        <?php
            if($c7<=$c24){
                $c14 = $c7*$b14;
                echo number_format("$c14",2,",",".");
            }
            else{
                $c14 = $c24*$b14;
                echo number_format("$c14",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--druga kolona-->
        <?php
            if($d7<=$c24){
                $d14 = $d7*$b14;
                echo number_format("$d14",2,",",".");
            }
            else{
                $d14 = $c24*$b14;
                echo number_format("$d14",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--treca kolona-->
        <?php
            if($e7<=$c24){
                $e14 = $e7*$b14;
                echo number_format("$e14",2,",",".");
            }
            else{
                $e14 = $c24*$b14;
                echo number_format("$e14",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--cetvrta kolona-->
        <?php
            if($f7<=$c24){
                $f14 = $f7*$b14;
                echo number_format("$f14",2,",",".");
            }
            else{
                $f14 = $c24*$b14;
                echo number_format("$f14",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--peta kolona-->
        <?php
            if($g7<=$c24){
                $g14 = $g7*$b14;
                echo number_format("$g14",2,",",".");
            }
            else{
                $g14 = $c24*$b14;
                echo number_format("$g14",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--sesta kolona-->
        <?php
            if($h7<=$c24){
                $h14 = $h7*$b14;
                echo number_format("$h14",2,",",".");
            }
            else{
                $h14 = $c24*$b14;
                echo number_format("$h14",2,",",".");
            }
        ?>
        </td>
        </tr>
        <tr>
        <td class="text-left bg-blue-50 border-r border-black">Na teret zaposlenog  <span class="font-bold">5.15%</span></td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--prva kolona-->
        <?php
            if($c7<=$c24){
                $c15 = $c7*$b15;
                echo number_format("$c15",2,",",".");
            }
            else{
                $c15 = $c24*$b15;
                echo number_format("$c15",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--druga kolona-->
        <?php
            if($d7<=$c24){
                $d15 = $d7*$b15;
                echo number_format("$d15",2,",",".");
            }
            else{
                $d15 = $c24*$b15;
                echo number_format("$d15",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--treca kolona-->
        <?php
            if($e7<=$c24){
                $e15 = $e7*$b15;
                echo number_format("$e15",2,",",".");
            }
            else{
                $e15 = $c24*$b15;
                echo number_format("$e15",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--cetvrta kolona-->
        <?php
            if($f7<=$c24){
                $f15 = $f7*$b15;
                echo number_format("$f15",2,",",".");
            }
            else{
                $f15 = $c24*$b15;
                echo number_format("$f15",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--peta kolona-->
        <?php
            if($g7<=$c24){
                $g15 = $g7*$b15;
                echo number_format("$g15",2,",",".");
            }
            else{
                $g15 = $c24*$b15;
                echo number_format("$g15",2,",",".");
            }
        ?>
        </td>
        <td class="border-dotted border-b-2 border-t-2 border-gray-300">                                                            <!--sesta kolona-->
        <?php
            if($h7<=$c24){
                $h15 = $h7*$b15;
                echo number_format("$h15",2,",",".");
            }
            else{
                $h15 = $c24*$b15;
                echo number_format("$h15",2,",",".");
            }
        ?>
        </td>
        </tr>
        <tr>
        <td class="text-left font-bold bg-[#439fbc] border-r border-black">POREZ</td>
        </tr>
        <tr>
        <td class="text-right bg-blue-50 border-b border-r border-black">    <span class="font-bold">20.00%</span></td>
        <td class="border-b border-black"><?php    $c17=$c7*$b17; echo number_format("$c17",2,",",".");   ?></td>                        <!--prva kolona-->
        <td class="border-b border-black"><?php    $d17=$d7*$b17; echo number_format("$d17",2,",",".");   ?></td>                        <!--druga kolona-->
        <td class="border-b border-black"><?php    $e17=$e7*$b17; echo number_format("$e17",2,",",".");   ?></td>                        <!--treca kolona-->
        <td class="border-b border-black"><?php    $f17=$f7*$b17; echo number_format("$f17",2,",",".");   ?></td>                        <!--cetvrta kolona-->
        <td class="border-b border-black"><?php    $g17=$g7*$b17; echo number_format("$g17",2,",",".");   ?></td>                        <!--peta kolona-->
        <td class="border-b border-black"><?php    $h17=$h7*$b17; echo number_format("$h17",2,",",".");   ?></td>                        <!--peta kolona-->
        </tr>
        <tr>
        <td class="text-left font-bold border-r border-black">UKUPNI DOPRINOSI I POREZ</td>
        <td><?php    $c18=$c11+$c12+$c14+$c15+$c17; echo number_format("$c18",2,",",".");   ?></td>        <!--prva kolona-->
        <td><?php    $d18=$d11+$d12+$d14+$d15+$d17; echo number_format("$d18",2,",",".");   ?></td>        <!--druga kolona-->
        <td><?php    $e18=$e11+$e12+$e14+$e15+$e17; echo number_format("$e18",2,",",".");   ?></td>        <!--treca kolona-->
        <td><?php    $f18=$f11+$f12+$f14+$f15+$f17; echo number_format("$f18",2,",",".");   ?></td>        <!--cetvrta kolona-->
        <td><?php    $g18=$g11+$g12+$g14+$g15+$g17; echo number_format("$g18",2,",",".");   ?></td>        <!--peta kolona-->
        <td><?php    $h18=$h11+$h12+$h14+$h15+$h17; echo number_format("$h18",2,",",".");   ?></td>        <!--sesta kolona-->
        </tr>
        <tr>
        <td class="text-left font-bold bg-orange-200 border-r border-black">NETO</td>
        <td class="font-bold bg-orange-200"><?php    $c19=$a-$c18; echo number_format("$c19",2,",",".");  ?></td>                         <!--prva kolona-->
        <td class="font-bold bg-orange-200"><?php    $d19=$a-$d18; echo number_format("$d19",2,",",".");  ?></td>                         <!--druga kolona-->
        <td class="font-bold bg-orange-200"><?php    $e19=$a-$e18; echo number_format("$e19",2,",",".");  ?></td>                         <!--treca kolona-->
        <td class="font-bold bg-orange-200"><?php    $f19=$a-$f18; echo number_format("$f19",2,",",".");  ?></td>                         <!--cetvrta kolona-->
        <td class="font-bold bg-orange-200"><?php    $g19=$a-$g18; echo number_format("$g19",2,",",".");  ?></td>                         <!--peta kolona-->
        <td class="font-bold bg-orange-200"><?php    $h19=$a-$h18; echo number_format("$h19",2,",",".");  ?></td>                         <!--sesta kolona-->
        </tr>
        <tr>
        <td class="text-left border-b border-r border-black"><?php echo "<br>" ?></td>
        <td class="text-left border-b border-black"></td>                                                                                       <!--prva kolona-->
        <td class="text-left border-b border-black"></td>                                                                                       <!--druga kolona-->
        <td class="text-left border-b border-black"></td>                                                                                       <!--treca kolona-->
        <td class="text-left border-b border-black"></td>                                                                                       <!--cetvrta kolona-->
        <td class="text-left border-b border-black"></td>                                                                                       <!--peta kolona-->
        <td class="text-left border-b border-black"></td>                                                                                       <!--sesta kolona-->
        </tr>
        <tr>
        <td class="text-left font-bold border-r border-black">%</td>
        <td class="font-bold"><?php   $c21=100*($c18/$a); echo number_format($c21, 2)."%"   ?></td>               <!--prva kolona-->
        <td class="font-bold"><?php   $d21=100*($d18/$a); echo number_format($d21, 2)."%"   ?></td>               <!--druga kolona-->
        <td class="font-bold"><?php   $e21=100*($e18/$a); echo number_format($e21, 2)."%"   ?></td>               <!--treca kolona-->
        <td class="font-bold"><?php   $f21=100*($f18/$a); echo number_format($f21, 2)."%"   ?></td>               <!--cetvrta kolona-->
        <td class="font-bold"><?php   $g21=100*($g18/$a); echo number_format($g21, 2)."%"   ?></td>               <!--peta kolona-->
        <td class="font-bold"><?php   $h21=100*($h18/$a); echo number_format($h21, 2)."%"   ?></td>               <!--sesta kolona-->
        </tr>
    </tr>
</table>
</div>
<div class="ml-8 italic text-xs mt-6">
    <p>
    Maksimalni iznos za obračun doprinosa za 2022. godinu iznosi <span class="font-bold"><?php echo number_format("441140", 2)   ?> </span>
    </p>
</div>
<div class="w-full text-sm flex">
    <div class="w-1/6 ml-8 mt-6 text-justify">
        <p>
        <p class="font-bold inline">Ugovor o delu:</p> poslodavac može sa fizičkim licem da zaključi ugovor o delu, radi obavljanja poslova
        koji su van delatnosti poslodavca, a koji imaju za predmet izradu ili opravku određene stvari, samostalno izvršenje određenog fizičkog ili 
        intelektualnog posla. Poslodavac ne može angažovati lice na osnovu ugovora o delu za posao u okviru njegove pretežne delatnosti. Licima angažovanim
        preko ugovora o delu priznaju se <p class="font-bold inline">normirani troškovi u visini od 20% bruto prihoda.</p>
        </p>
    </div>
    <div class="w-1/6 ml-8 mt-6 text-justify">
        <p>
        <p class="font-bold inline">Autorski I:</p> autorima koji ostvare prihod za interpretaciju, odnosno izvođenje estradnih programa zabave i narodne muzike, 
        proizvodnju fonograma, proizvodnju videograma, proizvodnju emisije, proizvodnju baze podataka i za druga autorska i srodna 
        prava se priznaju <p class="font-bold inline">normirani troškovi u visini od 34% bruto prihoda.</p>
        </p>
    </div>
    <div class="w-1/6 ml-8 mt-6 text-justify">
        <p>
        <p class="font-bold inline">Autorski II:</p> autorima koji ostvare prihod za slikarska dela, grafička dela, industrijsko oblikovanje sa izradom modela i maketa,
        sitnu plastiku, radove vizuelnih komunikacija, radove u oblasti unutrašnje arhitekture i obrade fasada, oblikovanje prostora, 
        radove na području hortikulture, vršenje umetničkog nadzora nad izvođenjem radova u oblasti unutrašnje i fasadne arhitekture, 
        oblikovanja prostora i hortikulture sa izradom modela i maketa, umetnička rešenja za scenografiju, naučna, stručna, književna i 
        publicistička dela, prevođenje, odnosno prevodi, muzička i kinematografska dela i restauratorska i konzervatorska dela u oblasti 
        kulture i umetnosti, za izvođenje umetničkih dela (sviranje i pevanje, pozorišna i filmska gluma, recitovanje), snimanje filmova i 
        idejne skice za tapiseriju i kostimografiju kad se ne izvode u materijalu se priznaju<p class="font-bold inline"> normirani troškovi u visini od 43% bruto prihoda.</p>
        </p>
    </div>
    <div class="w-1/6 ml-8 mt-6 text-justify">
        <p>
        <p class="font-bold inline">Autorski III:</p> autorima koji ostvare prihod za vajarska dela, tapiserije, umetničku keramiku, keramoplastiku, mozaik i vitraž, za umetničku 
        fotografiju, zidno slikarstvo i slikarstvo u prostoru u tehnikama: freska, grafika, intarzija, emajl, intarzirane i emajlirane predmete, 
        kostimografiju, modno kreatorstvo i umetničku obradu tekstila (tkani tekstil, štampani tekstil i sl.) se priznaju <p class="font-bold inline"> normirani troškovi
        u visini od 50% bruto prihoda.</p>
        </p>
    </div>
    <div class="w-1/6 ml-8 mt-6 text-justify">
        <p>
        <p class="font-bold inline">Ostali prihodi:</p> ovaj model oporezivanja je namenjen fizičkim licima za transakcije koje se ne mogu podvesti ni pod jednu drugu kategoriju.
        Licima koja posluju preko ostalih prihoda, priznaju se <p class="font-bold inline">normirani troškovi u visini od 20% bruto prihoda.</p> 
        <br><br><p class="font-bold inline">Ostali prihodi - prelazni režim:</p> prelazno rešenje za oporezivanje frilensera predviđeno u članu 5. stav 2. Zakona o izmenama i dopunama 
        Zakona o porezu na dohodak građana („Sl. glasnik RS“, br. 44/2021 i br. 118/2021) predviđa <p class="font-bold inline"> neoporezivi iznos u kalendarskoj godini od 
        384.000 dinara i priznavanje normiranih troškova u visini 50% ostvarenih prihoda.</p> Ovaj režim će biti na snazi do kraja 2022. godine.
        </p>
    </div>
</div>


</body>
</html>