<?php var_dump($data_user['email']); ?>


<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Add User</h3>
        </div>

        <?php 
            $session = session();

            $errors = $session->getFlashdata('error');
            
            // dd($errors);



            $email = isset($errors['email']) == true  ? $errors['email'] : null;
            $username = isset($errors['username']) == true  ? $errors['username'] : null;
            $fullname = isset($errors['fullname']) == true  ? $errors['fullname'] : null;
            $password = isset($errors['password']) == true  ? $errors['password'] : null;


            $success = $session->getFlashdata('success');
        ?>


        <?php if ($success) { ?>
            <div class="raw" style="margin: 20px;">
                <div class="alert alert-success">
                <?php echo($success) ?>
                </div>
            </div>
        <?php } ?>
        


        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= base_url('user/prosessimpan')?>" method="post" >
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" readonly value="bama">

            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" 
                name="username" readonly value="">

                <?= $data_users['email'] ?>
                        
                <?php if($username){ ?>
                <p style="color:red"><?php echo $username?></p>
                <?php } ?> 
            

            </div>
            <div class="form-group">
                <label for="exampleInputFullname1">Fullname</label>
                <input type="text" class="form-control" id="exampleInputFullname1" placeholder="Fullname" name="fullname">

                <?php if($fullname){ ?>
                <p style="color:red"><?php echo $fullname?></p>
                <?php } ?> 



            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">

                <?php if($password){ ?>
                <p style="color:red"><?php echo $password?></p>
                <?php } ?>





            </div>
            <!-- <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </form>
    </div>
    <!-- /.card -->
</div>