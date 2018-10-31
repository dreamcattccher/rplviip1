<?php 
$this->load->view("components/head"); 
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4"
            style="margin-top: 15%">
            <form action="beranda">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">Form Login</div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="userid">User ID</label>
                            <input type="text" class="form-control" id="userid"
                                placeholder="masukkan userid anda"> 
                        </div> 
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password"
                                placeholder="masukkan password anda">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <input type="submit" class="btn btn-success btn-block" 
                            value='Login'>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$this->load->view("components/foot"); 
?>