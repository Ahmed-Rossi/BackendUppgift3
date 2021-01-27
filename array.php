<?php

// 1. Skapa en HTTP-header med innehållstypen JSON (Content-Type).
header("Content-Type: application/json; charset=UTF-8");

// 2. Skapa två PHP-arrayer för att lagra förnamn och efternamn.
$kitchenProducts = ["Blender", "Brödrost", "Citrus juicer", "Gjutjärnsgryta",  "Köksvåg", "Liten kastrull",
 "Lökblender", "Smörgåsgrill", "Stor kastrull", "Vattenkokare"];
$kitchenDescription = ["En enkel blender som kommer att göra din vardag sundare.", 
"Starta dagen med nyrostat bröd.", 
"C-vitamin är bra för kropp och själ.",
 "Robust gryta som passar till alla hushåll, små som stora. Grytan är tillverkad i emaljerat gjutjärn med jämn värmefördelning som bevarar värmen ända upp till kanten. ",
 "Väg maten du tillagar för att kunna räkna kalorier.", 
 "Perfekt till att koka vatten.",
 "Undvik att gråta varje gång du har med lök att göra.",
 "Perfekt till mackor.", 
 "Laga mat till hela familjen.", 
 "Bäst prestanda i marknaden enligt Ahmed och Omar.",];
 $kitchenPrice =["200","350","150","700","250","180","70","320","380","190"];
 $kitchenImage = ["http://localhost\Uppgift3\image\Blender.jpg","http://localhost\Uppgift3\image\Brödrost.jpg",
 "http://localhost\Uppgift3\image\CitrusJuicer.jpg","http://localhost\Uppgift3\image\Gjutjärnsgryta.jpg",
 "http://localhost\Uppgift3\image\Köksvåg.jpg","http://localhost\Uppgift3\image\LitenKastrull.jpg",
 "http://localhost\Uppgift3\image\Lökblender.jpg","http://localhost\Uppgift3\image\Smörgåsgrill.jpg",
 "http://localhost\Uppgift3\image\StorKastrull.jpg","http://localhost\Uppgift3\image\Vattenkokare.jpg"];
 

$products = array();   

for ($i=0; $i < 10 ; $i++) { 

    $product = array(
        "product" => $kitchenProducts[$i],
        "description" => $kitchenDescription[$i],
        "price" =>$kitchenPrice[$i],
        "image" =>$kitchenImage[$i],
        "lagersaldo" =>rand(0,50)
      
    );

    array_push($products, $product);

}

// 4. Konvertera PHP-arrayen till en JSON-string.
$json = json_encode($products, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

// Skicka JSON till klienten.
echo $json;