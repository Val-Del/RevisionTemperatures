<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Météo</title>
    <link rel="stylesheet" href="./Styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <?php include 'includes/header.php' ?>
    
    
        <?php

    $tabLundi = [
       'Nord' => ['10°','12°','10°','15°'],
       'Sud' => ['10°','12°','10°','15°'],
       'Est' => ['10°','12°','10°','15°'],
       'Ouest' => ['10°','12°','10°','15°']

    ];

    $tabMardi = [
        'Nord' => ['10°','12°','10°','15°'],
        'Sud' => ['10°','12°','10°','15°'],
        'Est' => ['10°','12°','10°','15°'],
        'Ouest' => ['10°','12°','10°','15°']
    ];

    $tabMercredi = [
        'Nord' => ['10°','12°','10°','15°'],
        'Sud' => ['10°','12°','10°','15°'],
        'Est' => ['10°','12°','10°','15°'],
        'Ouest' => ['10°','12°','10°','15°']
 
     ];

     $tabJeudi = [
        'Nord' => ['10°','12°','10°','15°'],
        'Sud' => ['10°','12°','10°','15°'],
        'Est' => ['10°','12°','10°','15°'],
        'Ouest' => ['10°','12°','10°','15°']
 
     ];

     $tabVendredi = [
        'Nord' => ['10°','12°','10°','15°'],
        'Sud' => ['10°','12°','10°','15°'],
        'Est' => ['10°','12°','10°','15°'],
        'Ouest' => ['10°','12°','10°','15°']
 
     ];

     $tabSamedi = [
        'Nord' => ['10°','12°','10°','15°'],
        'Sud' => ['10°','12°','10°','15°'],
        'Est' => ['10°','12°','10°','15°'],
        'Ouest' => ['10°','12°','10°','15°']
 
     ];

     $tabDimanche = [
        'Nord' => ['10°','12°','10°','15°'],
        'Sud' => ['10°','12°','10°','15°'],
        'Est' => ['10°','12°','10°','15°'],
        'Ouest' => ['10°','12°','10°','15°']
 
     ];


    
switch($_SERVER['QUERY_STRING']) {
    case 'lundi':
        foreach ($tabLundi as $key => $value )  {
            echo '<div class="temp">'.$key.'';

            foreach($value as $value11){
                echo '<div class="'.$key.'"> '.$value11.' </div>';  
            }

            echo '</div>';
    }
        break;

    case 'mardi':
        foreach ($tabMardi as $key => $value )  {
            echo '<div class="temp">'.$key.'';

            foreach($value as $value11){
                echo '<div class="'.$key.'"> '.$value11.' </div>';  
            }

            echo '</div>';
    }
        break;


    case 'mercredi':
        foreach ($tabMercredi as $key => $value )  {
            echo '<div class="temp">'.$key.'';

            foreach($value as $value11){
                echo '<div class="'.$key.'"> '.$value11.' </div>';  
            }

            echo '</div>';
    }
        break;


    case 'jeudi':
        foreach ($tabJeudi as $key => $value )  {
            echo '<div class="temp">'.$key.'';

            foreach($value as $value11){
                echo '<div class="'.$key.'"> '.$value11.' </div>';  
            }

            echo '</div>';
    }
        break;





    case 'vendredi':
        foreach ($tabVendredi as $key => $value )  {
            echo '<div class="temp">'.$key.'';

            foreach($value as $value11){
                echo '<div class="'.$key.'"> '.$value11.' </div>';  
            }

            echo '</div>';
    }
        break;



    case 'samedi':
        foreach ($tabSamedi as $key => $value )  {
            echo '<div class="temp">'.$key.'';

            foreach($value as $value11){
                echo '<div class="'.$key.'"> '.$value11.' </div>';  
            }

            echo '</div>';
    }
        break;



    case 'dimanche':
        foreach ($tabDimanche as $key => $value )  {
            echo '<div class="temp">'.$key.'';

            foreach($value as $value11){
                echo '<div class="'.$key.'"> '.$value11.' </div>';  
            }

            echo '</div>';
    }
        break;

        
}
    
    

?>
    
    <img src="./image/cartedefrance.gif" alt=""> 

    <?php include './includes/footer.php' ?>
</body>
</html>