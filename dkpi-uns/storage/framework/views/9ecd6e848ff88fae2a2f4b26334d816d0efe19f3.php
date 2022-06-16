<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Selamat Datang!</div>
                   <div class="card-body">
                    
                    <p>Email diterima dari: <?php echo e($email); ?></p>
                    <p>Infromasi Pengguna:</p>
                        
                        Nama : <?php echo $name; ?><br/>
                        
                        Nomor Ponsel : <?php echo $phone; ?><br/>
                        
                        Subjek : <?php echo e($subject); ?><br/>
                        
                        Pesan : <?php echo e($pesan); ?><br/>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/dkpiuns/dkpi-uns/resources/views/contact/contact-template.blade.php ENDPATH**/ ?>