<html lang="en">
<head>
  <title>View OLD PTR Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.vertical-menu {
  width: 300px;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<div class="container" id = "container1" >
  <h2 class="text-center">Universities Details</h2>


  <table class="table table-bordered table-striped">
    <thead>
      <tr>
<th>Slno</th><th> 	Institution_id </th><th>	Institution_name</th><th> 	Track_id 	</th><th>Legacy_trackid 	</th><th>InstitutionType </th><th>	SSRmanualType </th><th>	Government 	</th><th>Private 	</th><th>Grant_in_aid </th><th>	Self_Financing </th><th>	Address 	</th><th>Pincode </th><th>	InstitutionemailID 	</th><th>Institution_Password </th><th>	MobileNumber </th><th>	DateOfEstablish </th><th>	City </th><th>	Cityother </th><th>	State 	</th><th>Website 	</th><th>Yearpass1 </th><th>	Yearpass2 	</th><th>DateOfIQAC 	</th><th>CollegeMobile2 </th><th>	AltCollegeEmail </th><th>	CollegeSTD </th><th>	CollegePhone </th><th>	CollegeAltSTD </th><th>	CollegealtPhone </th><th>	CollegeFaxStd </th><th>	CollegeFax </th><th>	CollegeProcess 	</th><th>CollegeCycle </th><th>	UniversityNature</th><th>
      </tr>
    </thead>
  <tbody>
    <?php $__currentLoopData = $universitymasterfinal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
</td><td><?php echo e($user->slno); ?>	</td><td><?php echo e($user->institution_id); ?>	</td><td><?php echo e($user->institution_name); ?> 	</td><td> <?php echo e($user->track_id); ?>	</td><td> <?php echo e($user->legacy_trackid); ?>	</td><td> <?php echo e($user->institutiontype); ?> 	</td><td> <?php echo e($user->ssrmanualtype); ?>	</td><td> <?php echo e($user->government); ?> 	</td><td> <?php echo e($user->private); ?>	</td><td> <?php echo e($user->grant_in_aid); ?> </td><td><?php echo e($user->self_financing); ?>	</td><td> <?php echo e($user->address); ?>	</td><td> <?php echo e($user->pincode); ?> 	</td><td><?php echo e($user->institutionemailid); ?></td><td> <?php echo e($user->institution_password); ?> 	</td><td> <?php echo e($user->mobilenumber); ?> 	</td><td> <?php echo e($user->dateofestablish); ?>	</td><td><?php echo e($user->city); ?>	</td><td> <?php echo e($user->cityother); ?>	</td><td> <?php echo e($user->state); ?>	</td><td> <?php echo e($user->website); ?>	</td><td> <?php echo e($user->yearpass1); ?>	</td><td> <?php echo e($user->yearpass2); ?>	</td><td> <?php echo e($user->dateofiqac); ?> 	</td><td> <?php echo e($user->collegemobile2); ?> 	</td><td> <?php echo e($user->altcollegeemail); ?> 	</td><td> <?php echo e($user->collegestd); ?> 	</td><td> <?php echo e($user->collegephone); ?>	</td><td> <?php echo e($user->collegealtstd); ?>	</td><td> <?php echo e($user->collegealtphone); ?> 	</td><td> <?php echo e($user->collegefaxstd); ?>	</td><td> <?php echo e($user->collegefax); ?>	</td><td> <?php echo e($user->collegeprocess); ?> 	</td><td> <?php echo e($user->collegecycle); ?> 	</td><td> <?php echo e($user->universitynature); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody> 
  </table>
</div>

</body>
</html>

<?php /**PATH /var/www/html/project/resources/views/view-universitydetails.blade.php ENDPATH**/ ?>