<?php
$itemIDs = $data[0];
$img = $data[1];
$price = $data[2];
$description = $data[3];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>telaS</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/index.js"></script>

</head>
<body>



<div class="container-fluid padding">
                <div class="row padding">

<?php
for ($x=0;$x < 8;$x++){
    ?>

                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-imd-top" height="200" width="300" src="<?=$img[$x]?>">
                            <div class="card-body">
                                <h4 class="card-title"><?=$price[$x]?></h4>
                                <p class="card-text"><?=$description[$x]?></p>
                                <form  action="" method="post">                                
                                <button type="submit" class="btn btn-success btn-block" name='itemID' value="<?=$itemIDs[$x]?>">check</button>
                                </form> 
                            </div>
                        </div>
                    </div>


            <?php //onclick="showDetail(<?=$x

            
            
        
     
    }
?>

</div>
            </div>


</body>
</html>