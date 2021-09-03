</div> 
</div>
    <!-- /#wrapper -->		
    <!-- jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>		
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
	
    <script src="plugins/owl.carousel/owl.carousel.min.js"></script>
    <script src="plugins/owl.carousel/owl.custom.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script> 
</body>
</html>


<!-- Dashpopup-->
<div id="dash-popup" class="modal fade dashpopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">IDs and Vital Documentation</h4>
			</div>
			<div class="modal-body">
			
			<div class="form-group">
				<label>Type of document or ID:</label>
				<select class="form-control">
					<option>Social Security Card</option>
					<option>Driver's License</option>
					<option>Non-Driver ID</option>
					<option>Birth Certificate</option>
					<option>Department of Defense ID</option>
					<option>Passport</option>
					<option>Other Country National ID</option>
					<option>Other Country Driver's License</option>
					<option>Work Permit or Visa</option>
					<option>Other</option> 
				</select> 
			</div>
			<div class="form-group">
				<label>License Number:</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>State:</label>
				<select class="form-control">
					<option>Alabama</option> 
					<option>Alaska</option> 
					<option>Arizona</option> 
					<option>Arkansas</option> 
					<option>California</option> 
					<option>Colorado</option> 
					<option>Connecticut</option> 
					<option>Delaware</option> 
					<option>District of Columbia</option> 
					<option>Florida</option> 
					<option>Georgia</option> 
					<option>Hawaii</option> 
					<option>Idaho</option> 
					<option>Illinois</option> 
					<option>Indiana</option> 
					<option>Iowa</option> 
					<option>Kansas</option> 
					<option>Kentucky</option> 
					<option>Louisiana</option> 
					<option>Maine</option> 
					<option>Maryland</option> 
					<option>Massachusetts</option> 
					<option>Michigan</option> 
					<option>Minnesota</option> 
				</select> 
			</div>
			<div class="form-group">
				<label>Expiration Date:</label>
				<div class="row">
					<div class="col-sm-3">
						<input type="text" class="form-control" placeholder="MM">
					</div>
					<div class="col-sm-3">
						<input type="text" class="form-control" placeholder="DD">
					</div>
					<div class="col-sm-3">
						<input type="text" class="form-control" placeholder="YYYY">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Location of Driver's License:</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>Upload a scan or photo of document or ID:</label>
				<input type="file" id="input-file-disable-remove" class="dropify" data-show-remove="false" />
			</div>
			
			<div class="form-group">
				<label>Notes & Instructions:</label>
				<textarea class="form-control"></textarea>
			</div>
				 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success" >Save</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- Dashpopup-->


<!-- ViewDashpopup-->
<div id="view-popup" class="modal fade dashpopup added-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Driver's License</h4>
			</div>
			<div class="modal-body">
			
			<div class="form-group">
				<label>Document/ID:</label>
				<p>Driver's License</p>
				
				<div class="set-icons-edit">
					<a href="" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#dash-popup"><i class="ti-pencil"></i></a>
					<a href="" class="btn btn-default"><i class="ti-trash"></i></a>
				</div>
			</div>
			<div class="form-group">
				<label>License Number:</label>
				<p>321654987000</p>
			</div>
			<div class="form-group">
				<label>State:</label>
				<p>Alabama</p>
			</div>
			<div class="form-group">
				<label>Expiration Date:</label>
				<p>May 25, 2021</p>
			</div>
			<div class="form-group">
				<label>Location of Driver's License:</label>
				<p>Indore</p>
			</div>
			<div class="form-group">
				<label>Uploaded Files:</label>
				<p><i class="fa fa-photo"></i> 120x90.png</p>
			</div>
			<div class="form-group">
				<label>Notes & Instructions:</label>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
				 
			</div> 
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- ViewDashpopup-->
<!-- financial-popup-->

<div id="financial-popup" class="modal fade dashpopup added-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">How do you want to enter your loan information?</h4>
			</div>
			<div class="modal-body">
			 <div class="panel panel-default" data-toggle="modal" data-target="#financial-import" style="box-shadow:0px 0px 10px rgba(00,00,00,0.1); cursor:pointer" data-dismiss="modal">
				<div class="panel-heading text-lower">
					 Import account details from my bank
				</div>   
			</div>
			 <div class="panel panel-default" data-toggle="modal" data-target="#financial-import" style="box-shadow:0px 0px 10px rgba(00,00,00,0.1); cursor:pointer" data-dismiss="modal">
				<div class="panel-heading text-lower">
					 Enter account details manually
				</div>   
			</div>
				 
			</div> 
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- financial-popup-->
<!-- financial-import-->
<div id="financial-import" class="modal fade dashpopup added-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog ">
		<div class="modal-content"> 
			<div class="modal-body">
				<h2 class="modal-title text-center" >Digiyou uses <b> Plaid </b>to link your bank </h2>  
				<hr>				
				<ul class="bank-popup">
					<li><i class="ti-check-box"></i>
						 <h2>Secure</h2>
						 <p>Encryption helps protect your personal financial data</p> 
					</li>
					<li><i class="ti-check-box"></i>
						 <h2>Private</h2>
						 <p>Your credentials will never be made accessible to Digiyou</p> 
					</li>
				</ul>
				<p >By selecting “Continue” you agree to the <u>Plaid End User Privacy Policy</u></p>				 
			</div> 
			
			
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success btn-lg"  data-toggle="modal" data-target="#financial-bank"  data-dismiss="modal">Continue</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- financial-import-->
<!-- financial-bank-->
<div id="financial-bank" class="modal fade dashpopup added-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog ">
		<div class="modal-content"> 
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Select your bank</h4>
			</div>
			<div class="modal-body"> 	

				<div class="input-group">
					<div class="input-group-addon" style="background:none; border-right:0px;"><i class="ti-search"></i></div>
					<input type="text" class="form-control" id="exampleInputuname" placeholder="Search" style="background:none; border-left:0px;">
				</div>
				
				<ul class="back-list">
					<li data-toggle="modal" data-target="#bank-login" data-dismiss="modal">
						<img src="img/bank1.png">
						<h5>Chase</h5>
						<p>www.chase.com</p>
					</li>
					<li data-toggle="modal" data-target="#bank-login" data-dismiss="modal">
						<img src="img/bank2.png">
						<h5>Chase</h5>
						<p>www.chase.com</p>
					</li>
					<li data-toggle="modal" data-target="#bank-login" data-dismiss="modal">
						<img src="img/bank3.png">
						<h5>Chase</h5>
						<p>www.chase.com</p>
					</li>
					<li data-toggle="modal" data-target="#bank-login" data-dismiss="modal">
						<img src="img/bank4.png">
						<h5>Chase</h5>
						<p>www.chase.com</p>
					</li>
				</ul>

				<div class="bank-cenrter">
				Don’t see your bank? Search instead
				</div>				
			</div>  
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- financial-bank-->



<!-- bank-login-->
<div id="bank-login" class="modal fade dashpopup added-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog ">
		<div class="modal-content">  
			<div class="modal-body"> 	 
				
				<ul class="back-list">
					<li>
						<img src="img/bank1.png">
						<h5>Chase</h5>
						<p>www.chase.com</p>
					</li> 
				</ul>
				
				<div class="enter-credentials">
					<h1>Continue to sign in</h1>
					<p>Return to the Chase window to continue linking your account</p>
				</div> 
 				
			</div>  
			
			<div class="modal-footer"> 
				<button type="button" class="btn btn-success btn-lg" >Continue</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- bank-login-->

<!--POA-popup-->
<div id="POA-popup" class="modal fade dashpopup added-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">   
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Everplans' Guide To Naming A Power Of Attorney</h4>
			</div>
			<div class="modal-body scroll-pop"> 	
				<div class="row">
					<div class="col-sm-8">
						<img src="img/12.jpeg" class="img-responsive">
						<p>A Power of Attorney (POA) is someone you appoint to make legal and financial decisions on your behalf should you become unable to do so yourself.</p>
							
						<div class="set-bankdtext">
							<h1>Why It's So Important</h1>
							<p> If you were to experience a medical emergency—coma, stroke, dementia—who would be looking after your money and property? How would your bills get paid? How would your family get access to your accounts for much needed funds? Who would file your taxes? Appointing a Power Of Attorney can solve this problem, giving someone you trust the legal right to manage your finances when you can't do it yourself.</p>
						</div> 
							
						<div class="set-bankdtext">
							<h1>What Kind Of Power Are We Talking About?</h1>
							<p> A Power of Attorney is indeed very powerful, with complete control over everything involving your finances including:</p>
							
							<ul>
								<li>Bill paying and banking</li>
								<li>Managing or selling assets such as real estate or stocks</li>
								<li>Paying insurance premiums</li>
								<li>Filing tax returns</li>
							</ul>
						</div> 
							
						<div class="set-bankdtext">
							<h1>Different Types of POA</h1>
							<p> There are different kinds of POA for different purposes. For estate planning and end-of-life planning, a Durable Power of Attorney is generally recommended, as the POA immediately goes into effect upon signing and remains in effect if you become incompetent or incapacitated.</p>
							<p> Other types include Springing Power of Attorney, which goes into effect only after you are incapacitated; and Non-Durable Power of Attorney, which goes into effect when signed, but expires if you become incapacitated.</p>
						</div> 
							
						<div class="set-bankdtext">
							<h1>Creating A Power of Attorney Online</h1>
							<p> For someone who wants to create a simple Durable Power of Attorney for themself, the online route can be a good way to go to create a legally valid POA. There are many reputable and inexpensive options. We like LegalNature, as their format is easy to use. Other alternatives are Willing and Law Depot. Keep in mind that your document will need to be signed by witnesses and notarized in order to be valid.</p>
						</div> 
						<div class="set-bankdtext">
							<h1>Working With a Lawyer</h1>
							<p> If your situation is more complex or nuanced, or if you are thinking of creating a Springing Power of Attorney, we recommend finding a qualified estate and trust attorney near you. Talk to friends, family members, and other attorneys to get recommendations. Meet with the lawyer you're considering before hiring him or her.</p>
						</div> 
					</div> 
					<div class="col-sm-4">
					
						<article class="content-box core box gap-filler-call-to-action flex-child flex-container">
						<i class="fa fa-credit-card-alt fa-3x"></i>
						<h2>Create A Power Of Attorney Online In Minutes</h2><p class="tight">Our partners at LegalNature will walk you through each step.</p>
						<button class="btn btn-success" type="button">Get Started Now</button></article>
						
						
					</div>
				</div> 
				
 				
			</div>   
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!--POA-popup-->


<!--health-popup-->
<div id="health-popup" class="modal fade dashpopup added-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content" style="height: calc(100vh - 100px);"> 
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Health Insurance</h4>
			</div>
			<div class="modal-body"> 
				<div class="vtabs customvtab" style="width:100%;">
				<div class="row">
				<div class="col-sm-4">
				<ul class="nav tabs-vertical" style="width:100%;">
					<li class="tab active">
						<a data-toggle="tab" href="#vhome3" aria-expanded="false"> Primary Health Insurance </a>
					</li>
					<li class="tab">
						<a data-toggle="tab" href="#vprofile3" aria-expanded="false">Supplemental Health Insurance</a>
					</li>
				</ul>
				</div>
				<div class="col-sm-8">
				<div class="tab-content" style="width:100%; display:inline-block; margin:0px; padding-top:0px;">
					<div id="vhome3" class="tab-pane active"> 
						<div class="text-center">
							<h4>Primary Health Insurance</h4> 
							<p>Add information about your primary health insurance.</p>
							<a href="" data-dismiss="modal" class="btn btn-black" data-toggle="modal" data-target="#dash-popup"> Start</a>
						</div>
					</div>
					<div id="vprofile3" class="tab-pane">
						<div class="text-center">
							<h4>Supplemental Health Insurance</h4> 
							<p>Add information about your supplemental health insurance.</p>
							<a href="" data-dismiss="modal" class="btn btn-black" data-toggle="modal" data-target="#dash-popup"> Start</a>
						</div>
					</div>
			</div>
			</div> 
			</div> 
			
			
			</div>   
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
</div>
<!--health-popup-->


<!--truestee-popup-->


<div id="truestee-popup" class="modal fade dashpopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Trustee & Grant of probate</h4>
			</div>
			<div class="modal-body">
			 
			<div class="form-group">
				<label>Trustee Person Name:</label>
				<input type="text" class="form-control">
			</div>  
			<div class="form-group">
				<label>Trustee Person Mobile Number:</label>
				<input type="text" class="form-control">
			</div> 
			<div class="form-group">
				<label>Trustee Person Email:</label>
				<input type="text" class="form-control">
			</div>
				 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success">Add</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<!--truestee-popup-->