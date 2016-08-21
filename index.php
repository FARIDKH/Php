<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3 class="title">Qeydiyyat</h3>
                    <form method="post" action="upload_run.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Uploader">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="place" placeholder="Place">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="img">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-default pull-right" type="submit" value="Upload" name="upload">
                        </div>
                    </form>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Uploader</th>
                                    <th>Place</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>

           
                               <?php
                                
                                    session_start();

                                        { ?>
                                                    
                                            <tr>
                                                <td><?= $_SESSION['name'] ?></td>
                                                <td><?= $_SESSION['place']  ?></td>
                                                <td><img src="<?= $_SESSION['img'] ?>"</td>
                                            </tr>                                                    
                                                    
                                                    
                                    <?php    } ?>
    
                                
                                
            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>