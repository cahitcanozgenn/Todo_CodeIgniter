<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <!-- CSS only -->
    <?php $this->load->view("dependencies/style"); ?>

<!-- JavaScript Bundle with Popper -->

<link rel="stylesheet" href="/Todo/assets/switchery.min.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="/Todo/assets/switchery.js"></script>
<script src="/Todo/assets/custom.js"></script>
   

</script>
    
</head>
<body>
<div class="container mt-5">
    <h3 class="text-center">Todo List</h3>
    <div class="row">
<div class="col-md-12">
    <form action="<?php echo base_url("Todo/insert") ?>" method="post">
        <div class="row">
        <div class="form-group col-md-9">
            <input type="text" class="form-control" name="title">
        </div>
        <div class="col-md-1">
            <button class="btn btn-success">Kaydet</button>
        </div>
        </div>
    </form>
</div>
    </div>
    <div class="row mt-5">
        <div class="div col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <th>Açıklama</th>
                    <th>Durum</th>
                    <th>Sil</th>
                </thead>
                <tbody>
                    <?php  foreach($todo as $todo) { ?>  
                    <tr>
                        <td><?php echo  $todo->title ?></td>
                        <td style="width:100px ;">
                       
                    <input type="checkbox" data-url="<?php echo base_url("Todo/statusSetter/$todo->id") ?>" name="status" class="js-switch" <?php echo ($todo->status) ? "checked" : "" ?>>
                    </td>
                        <td style="width:100px ;">
                    <a href="<?php echo base_url("Todo/delete/$todo->id")?>" class="btn btn-danger">SİL</a>
                    </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php $this->load->view("dependencies/script"); ?>
</body>
</html>
