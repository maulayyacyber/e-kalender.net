<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/bootstrap.css'); ?>"   />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/font-awesome/css/font-awesome.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/custom.css'); ?>"   />
    <script>
        var BASE_URL = '<?php echo base_url() ?>';
    </script>
    <title><?php echo $title; ?></title>
    <link rel="icon" href="<?php echo base_url('resources/images/calendar.png');?>">
</head>
<body style="background-color: #F1F1F1">

<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="text-center" style="font-size: 25px;font-family: Roboto;font-weight: 300">
                <span style="font-weight: 500">Calendar</span> Apps
            </div>
            <div class="card">
                <div class="card-content">
                    <form method="POST" accept-charset="UTF-8" action="<?php echo base_url() ?>index.php/app/login/">
                        <div class="form-group">
                            <label><i class="fa fa-key"></i> Key Authorize</label>
                            <input type="text" name="key" class="form-control" style="border-radius: 0px" value="<?php echo set_value('key') ?>" placeholder="Enter Key Authorization System">
                            <?php echo form_error('key'); ?>
                            <?php if(isset($error)) { echo $error; } ?>
                        </div>
                        <button type="submit" class="btn btn-md btn-success" style="border-radius: 0px"><i class="fa fa-unlock"></i> Login System</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url('resources/js/bootstrap.min.js'); ?>"></script>
<footer>
    <p style="text-align:center;">Copyright &copy; Calendar Apps. All Rights Reserved.</a>
    </p>
</footer>
</body>
</html>