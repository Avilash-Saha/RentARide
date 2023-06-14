<?php
include 'connect.php';
error_reporting(0)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Available Cars</title>
    <style>
       form{
            padding: 30px;
            border: 2px solid #fefecb;
            background: #fefecb;
            font-family: Courier;
           
        }
        h1{
            padding: 20px;
            background: #520000;
            margin-top: 30px;
            margin-left: 30px;
            font-family:Courier;
            color: white;
        }
        h2{
            padding: 20px;
            color: #520000;
            margin-top: 10px;
            margin-left: 30px;
            font-family:Courier;
            

        }
       
    </style>
</head>
<body>
    
    <h1>Available Cars</h1>
    <div class="my-5 form-group">
   
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cars</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    


                       
                       
                        
                        $query = "SELECT ID, Cars, Price FROM cars WHERE Status = 0 ";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $items)
                            {
                                ?>
                                <tr>
                                    <td><?= $items['ID']; ?></td>
                                    <td><?= $items['Cars']; ?></td>
                                    <td><?= $items['Price']; ?></td>
                                                
                                </tr>
                                <?php
                            }
                        }
                       
                    
                ?>
            </tbody>
        </table>
    </div>

    
    
</body>
</html>