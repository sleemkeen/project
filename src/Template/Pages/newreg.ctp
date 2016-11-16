 <?php include 'webroot/files/header.ctp'; ?>
 <div class="main-wrapper" ng-controller="newintake">
	    <div class="main">
	        <div class="main-inner">

					<div class="content-title">
	<div class="content-title-inner">
		<div class="container">
			<h1>Create Account</h1>

			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li><a href="properties.html">Properties</a></li>
				<li class="active">Standard Detail</li>
			</ol>
		</div><!-- /.container -->
	</div><!-- /.content-title-inner -->
</div><!-- /.content-title -->


	            <div class="content">
	                <div class="container">
	<form method="post">
		<div class="row">
			<div class="col-md-12 col-lg-8 col-lg-offset-2">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Username</label>
							<input type="text" class="form-control" ng-model="formData.username" required>
						</div><!-- /.form-group -->
            <div class="form-group">
							<label for="">Who are you</label>
							<select class="form-control" ng-model="formData.whos" required>
                <option>Agent</option>
                <option>User</option>
              </select>
						</div><!-- /.form-group -->

						<div class="form-group">
							<label for="">E-mail</label>
							<input type="mail" class="form-control" ng-model="formData.email" required>
						</div><!-- /.form-group -->

						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" ng-model="formData.pass" required>
						</div><!-- /.form-group -->

						<div class="form-group">
							<label for="">Retype Password</label>
							<input type="password" class="form-control" ng-model="formData.vpass" required>
						</div><!-- /.form-group -->
					</div><!-- /.col-* -->

					<div class="col-sm-6">
						<div class="form-group">
							<label for="">First Name</label>
							<input type="text" class="form-control" ng-model="formData.fname" required>
						</div><!-- /.form-group -->

						<div class="form-group">
							<label for="">Last Name</label>
							<input type="text" class="form-control" ng-model="formData.lname" required>
						</div><!-- /.form-group -->

						<div class="form-group">
							<label for="">Address</label>
							<textarea class="form-control" rows="5" ng-model="formData.address" required></textarea>
						</div><!-- /.form-group -->
					</div><!-- /.col-* -->
				</div><!-- /.row -->

				<div class="center">
					<div class="checkbox">
						<label>
							<input type="checkbox" required> By signing up, you agree with the <a href="terms-conditions.html">terms and conditions</a>.
						</label>
					</div><!-- /.form-group -->

					<div class="form-group-btn">
						<button type="submit" ng-click="addUser()" class="btn btn-primary">Create Account</button>
					</div><!-- /.form-group-btn -->
				</div><!-- /.center -->

				<div class="form-group-bottom-link">
					<a href="login.html">I already have an account <i class="fa fa-long-arrow-right"></i></a>
				</div><!-- /.form-group-bottom-link -->
			</div><!-- /.col-* -->
		</div><!-- /.row -->
	</form>
</div><!-- /.container -->
	            </div><!-- /.content -->
	        </div><!-- /.main-inner -->
	    </div><!-- /.main -->
    </div><!-- /.main-wrapper -->
    <?php include 'webroot/files/footer.ctp'; ?>
