<?php include 'include/header.php'; ?>

	<link href="plugins/jquery-wizard-master/css/wizard.css" rel="stylesheet">
<div id="page-wrapper">
<div class="container-fluid pl-10 pr-10"> 		
	<div class="row">
		<div class="col-md-12">
			<h2 class="main-title"><img src="img/DigiGrave.png" width="25px;"> After I'm Gone</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="white-box slider-box clearfix">
				<h3 class="box-title mb-1">Suggested for you, based on your situation:</h3>	
				<div  class="owl-carousel owl-theme two">
					<!-- loop -->
					<div class="item">
						<div class="set-homebox">
							<div class="box-icon">
								<i class="ti-announcement"></i>
							</div>
							<div class="box-text">
								<h6>YOUR FINAL CELEBRATION</h6>
								<p>What kind of celebration would you want to have? Do you have a plan to pay for it?</p>
								<div class="box-footer">
									<a href="" data-toggle="modal" data-target="#allgone-popup" class="btn btn-black">Take Our Assessment</a> 
								</div>
							</div>
						</div>
					</div>
					<!-- loop -->
					<!-- loop -->
					<div class="item">
						<div class="set-homebox">
							<div class="box-icon">
								<i class="ti-envelope"></i>
							</div>
							<div class="box-text">
								<h6>LETTERS TO LOVED ONES</h6>
								<p>Writing letters to loved ones is the sweetest gift you provide, and will be cherished forever.</p>
								<div class="box-footer">
									<a href="" data-toggle="modal" data-target="#dash-popup" class="btn btn-success">Start</a>
									<span>Takes 10 min</span>
								</div>
							</div>
						</div>
					</div>
					<!-- loop -->
					
					<!-- loop -->
					<div class="item">
						<div class="set-homebox">
							<div class="box-icon">
								<i class="ti-video-camera"></i>
							</div>
							<div class="box-text">
								<h6>VIDEO MESSAGES TO LOVED ONES</h6>
								<p>Record videos to leave for your loved ones, from Birthdays to Christmas, leave a part of your Digi you for them to always cherish</p>
								<div class="box-footer">
									<a href="" data-toggle="modal" data-target="#dash-popup" class="btn btn-success">Start</a>
									<span>Takes 10 min</span>
								</div>
							</div>
						</div>
					</div>
					<!-- loop -->
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="white-box slider-box clearfix mt-2" >
				<h3 class="box-title mb-1">Add to your Digiyou:</h3>
				
				<div class="panel panel-default added-card blak-card" data-toggle="modal" data-target="#health-popup">
					<div class="panel-heading text-lower">
						<i class="fa fa-plus-circle"></i> What I Want Done With My Body
					</div>   
				</div>		
				
				<div class="panel panel-default added-card blak-card" data-toggle="modal" data-target="#dash-popup">
					<div class="panel-heading text-lower">
						<i class="fa fa-plus-circle"></i> Funeral Preferences
					</div>   
				</div>
				
				<div class="panel panel-default added-card blak-card" data-toggle="modal" data-target="#health-popup">
					<div class="panel-heading text-lower">
						<i class="fa fa-plus-circle"></i> Obituary
					</div>   
				</div>
				
				<div class="panel panel-default added-card blak-card" data-toggle="modal" data-target="#health-popup">
					<div class="panel-heading text-lower">
						<i class="fa fa-plus-circle"></i> Letter to Everyone
					</div>   
				</div>
				
				<div class="panel panel-default added-card blak-card" data-toggle="modal" data-target="#health-popup">
					<div class="panel-heading text-lower">
						<i class="fa fa-plus-circle"></i> Letters to My Family and Friends
					</div>   
				</div>
				
				<div class="panel panel-default added-card blak-card" data-toggle="modal" data-target="#health-popup">
					<div class="panel-heading text-lower">
						<i class="fa fa-plus-circle"></i> Memorialization
					</div>   
				</div>
				
				<div class="panel panel-default added-card blak-card" data-toggle="modal" data-target="#health-popup">
					<div class="panel-heading text-lower">
						<i class="fa fa-plus-circle"></i> About My Life (Ethical Will)
					</div>   
				</div>
				
				<div class="panel panel-default added-card blak-card" data-toggle="modal" data-target="#health-popup">
					<div class="panel-heading text-lower">
						<i class="fa fa-plus-circle"></i> Genealogy & Family History
					</div>   
				</div>
				
				<div class="panel panel-default added-card blak-card" data-toggle="modal" data-target="#health-popup">
					<div class="panel-heading text-lower">
						<i class="fa fa-plus-circle"></i> Physical & Antique Photos
					</div>   
				</div>
				
				<div class="panel panel-default added-card blak-card" data-toggle="modal" data-target="#health-popup">
					<div class="panel-heading text-lower">
						<i class="fa fa-plus-circle"></i> Family Recipes
					</div>   
				</div>
				
				
				
				 
			</div>
		</div>
	</div>
	
	
	
</div>
           
<?php include 'include/footer.php'; ?>

<!--health-popup-->
<div id="allgone-popup" class="modal fade dashpopup added-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content" > 
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel"> FINAL CELEBRATION COST ESTIMATOR</h4>
			</div>
<div class="modal-body">
			<div id="exampleBasic" class="wizard">
				<ul class="wizard-steps" role="tablist">
					<li role="tab" class="active"><h4></h4></li>
					<li role="tab"><h4></h4></li>
					<li role="tab"><h4></h4></li>
					<li role="tab"><h4></h4></li>
					<li role="tab"><h4></h4></li>
					<li role="tab"><h4></h4></li>
					<li role="tab"><h4></h4></li> 
				</ul>
				<div class="wizard-content">
					<div class="wizard-pane active" role="tabpanel">
						<div class="text-center">
							<h4>Do you know how much your final celebration might cost?</h4>
								<p>It's not something people usually talk about, but it's something every family will face at some point. We think it's better to be informed than to be surprised.</p>
						</div>
						
						<div class="row">
							<div class="col-sm-4">
								<div class="radio radio-custom">
									<input type="radio" name="radio" id="radio2" value="option2">
									<label for="radio2"> 1. Explore your wishes </label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="radio radio-custom">
									<input type="radio" name="radio" id="radio3" value="option2">
									<label for="radio3"> 2. Understand the cost </label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="radio radio-custom">
									<input type="radio" name="radio" id="radio4" value="option2">
									<label for="radio4"> 3. Find a way to fund your celebration </label>
								</div>
							</div>
						</div>
					</div>
					<div class="wizard-pane" role="tabpanel">
						<div class="text-left">
							<h4>What kind of celebration do you want?</h4>
							<div class="custome-radio">
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="celebration" id="celebration1" value="option2">
											<label for="celebration1"> A grand affair with every possible funeral event you can imagine</label>
										</div>
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="celebration" id="celebration2" value="option2">
											<label for="celebration2">An intimate ceremony with a personal touch</label>
										</div>
										
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="celebration" id="celebration3" value="option2">
											<label for="celebration3"> I want it as low-key as possible</label>
										</div>
										
									</div>   
								</div> 
								
							</div>
						</div>
					</div>
					<div class="wizard-pane" role="tabpanel">
						<div class="text-left">
							<h4>What kind of music best suits your celebration?</h4>
							<div class="custome-radio">
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="music" id="music1" value="option2">
											<label for="music1"> A Spotify playlist of my favorites</label>
										</div>
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="music" id="music2" value="option2">
											<label for="music2"> Something small or solo (like a harp or organ)</label>
										</div>
										
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="music" id="music3" value="option2">
											<label for="music3"> A big band</label>
										</div>
										
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="music" id="music4" value="option2">
											<label for="music4"> Silence is music to my ears</label>
										</div>
										
									</div>   
								</div> 
								
							</div>
						</div>
					</div>
					<div class="wizard-pane" role="tabpanel">
						<div class="text-left">
							<h4>What's the ideal setting for your main service?</h4>
							<div class="custome-radio">
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="service" id="service" value="option2">
											<label for="service"> Somewhere spiritual (church, synagogue, temple, mosque)</label>
										</div>
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="service" id="service1" value="option2">
											<label for="service1"> Out in nature (mountains, ocean, beach, park)</label>
										</div>
										
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="service" id="service2" value="option2">
											<label for="service2"> Modern or unusual (public space,  sporting event, museum)</label>
										</div>
										
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="service" id="service3" value="option2">
											<label for="service3"> Somewhere private (a person's home, undisclosed location)</label>
										</div>
										
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="service" id="service4" value="option2">
											<label for="service4"> <div>I'm good with a funeral home</div></label>
										</div>
										
									</div>   
								</div> 
								
							</div>
						</div>
					</div>
					<div class="wizard-pane" role="tabpanel">					
						<div class="text-left">
							<h4>How close to home would this take place?</h4>
							<div class="custome-radio">
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="place" id="place" value="option2">
											<label for="place"> Not far at all</label>
										</div>
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="place" id="place1" value="option2">
											<label for="place1">We got some ground to cover</label>
										</div>										
									</div>   
								</div>								
							</div>
						</div>
					</div>
					
					
					
					
					<div class="wizard-pane" role="tabpanel">					
						<div class="text-left">
							<h4>Does the thought of being buried give you peace?</h4>
							<div class="custome-radio">
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="peace" id="peace" value="option2">
											<label for="peace"> Yes, I like my family to be able to visit me</label>
										</div>
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="peace" id="peace1" value="option2">
											<label for="peace1">I'm open to it if it's done in a certain way</label>
										</div>										
									</div>   
								</div>
								<div class="panel panel-default added-card blak-card" >
									<div class="panel-heading text-lower">
										<div class="radio radio-custom">
											<input type="radio" name="peace" id="peace2" value="option2">
											<label for="peace2">No, I'd prefer to be cremated</label>
										</div>										
									</div>   
								</div>								
							</div>
						</div>
					</div>
					
					
					
					
					
					<div class="wizard-pane" role="tabpanel">					
						<div class="text-left">
							<h4>How Much Will Your Final Celebration Cost?</h4>
							<p>Now that you've put some thought into the type of celebration you want, here's a breakdown of all the costs so you know what you're up against. It's not set in stone so feel free to play around with the options. The key is to plan ahead.</p>
							
							
							<div class="row">
								<div class="col-sm-6">
									<div class="lefdt-form">
										<div class="form-group">
											<label>Type of service:</label>
											<select class="form-control"> 
												<option>A grand affair</option> 
												<option>An intimate ceremony</option> 
												<option>A low-key celebration</option> 
											</select> 
										</div>
										<div class="form-group">
											<label>Venue:</label>
											<select class="form-control"> 
												<option>A place of worship</option>  
												<option>An outdoor location</option>  
												<option>At a funeral home</option>  
												<option>A public space</option>  
												<option>At home</option>  
											</select> 
										</div>
										<div class="form-group">
											<label>Venue:</label>
											<select class="form-control"> 
												<option></option>
											</select> 
										</div>
										<div class="form-group">
											<label>Type of music:</label>
											<select class="form-control"> 
												<option>My favorite Spotify playlist</option>
												<option>A small band or a solo musician</option>
												<option>A big band</option>
												<option>I prefer no music</option>
											</select> 
										</div>
										<div class="form-group">
											<label>Burial or cremation?</label>
											<select class="form-control"> 
												<option>I prefer to be cremated</option>
												<option>I prefer to be buried</option>  
											</select> 
										</div>
										<div class="form-group">
											<label>What you want done with the ashes:</label>
											<select class="form-control"> 
												<option>Buried in the ground</option>
												<option>Scattered at my favorite place</option>
												<option>Returned to my family</option>
												<option>Something creative</option>
											</select> 
										</div>
										<div class="form-group">
											<label>Additional Expenses:</label>
											
											<div class="checkbox checkbox-primary">
												<input id="checkbox" type="checkbox">
												<label for="checkbox"> Viewing or visitation </label>
											</div>
											<div class="checkbox checkbox-primary">
												<input id="checkbox1" type="checkbox">
												<label for="checkbox1"> Post ceremony reception </label>
											</div>
											<div class="checkbox checkbox-primary">
												<input id="checkbox2" type="checkbox">
												<label for="checkbox2"> Death certificates </label>
											</div>
											<div class="checkbox checkbox-primary">
												<input id="checkbox3" type="checkbox">
												<label for="checkbox3"> Obituary </label>
											</div>
											<div class="checkbox checkbox-primary">
												<input id="checkbox4" type="checkbox">
												<label for="checkbox4"> Flowers </label>
											</div>
											<div class="checkbox checkbox-primary">
												<input id="checkbox5" type="checkbox">
												<label for="checkbox5"> Stationery (Guest Book, Cards) </label>
											</div>
											<div class="checkbox checkbox-primary">
												<input id="checkbox6" type="checkbox">
												<label for="checkbox6"> Officiant (Either Donation or Payment) </label>
											</div>
											<div class="checkbox checkbox-primary">
												<input id="checkbox7" type="checkbox">
												<label for="checkbox7"> Hearse</label>
											</div>
											<div class="checkbox checkbox-primary">
												<input id="checkbox8" type="checkbox">
												<label for="checkbox8"> Limousine / car service</label>
											</div>
											<div class="checkbox checkbox-primary">
												<input id="checkbox9" type="checkbox">
												<label for="checkbox9">Air transportation of the body</label>
											</div>
										</div>
										
										
										<div class="form-group">
											<label>Something else we didn't ask about?</label>
											<p>(Example: fireworks, rent Yankee stadium, paid appearance by The Rock)</p>
											<input class="form-control" type="number">  
										</div>
										
									</div>		
								</div>
								<div class="col-sm-6">
									<div class="roght-form">
									
										<div class="text-center">
											<h4>Estimated Cost Breakdown</h4>
											<div class="table-responsive">
												<table class="table text-left">
													<tr>
														<th>Item</th>
														<th class="text-right">Price</th>
													</tr>
													<tr>
														<td>Air transportation of the body</td>
														<td class="text-right">$3000</td>
													</tr>
													<tr>
														<td>Basic Service Fee</td>
														<td class="text-right">$2195</td>
													</tr>
													<tr>
														<td>Cremation casket</td>
														<td class="text-right">$1200</td>
													</tr>
													<tr>
														<td>Inurnment</td>
														<td class="text-right">$1200</td>
													</tr>
													<tr>
														<td>Service venue</td>
														<td class="text-right">$500</td>
													</tr>
													<tr>
														<td>Transfer of the body</td>
														<td class="text-right">$350</td>
													</tr>
													<tr>
														<td>Cremation fee</td>
														<td class="text-right">$350</td>
													</tr>
													<tr>
														<td>Miscellaneous</td>
														<td class="text-right">$0</td>
													</tr>
													<tr>
														<th>TOTAL</th>
														<th class="text-right">$8,795</th>
													</tr>
												</table>
											</div>
											<p>
											A final celebration can be expensive, but there are ways to pay for it without your family going broke. We'll walk you through options to properly set aside some money so that everything you want becomes a reality.
											</p>
											
											<div class="text-center">
												<p><a href="" class="btn btn-success">Show me how I can fund it</a></p>
												<p><a href="" class="btn btn-default">Which prepaid arrangements have you made?</a></p> 
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<p>This calculator is designed to be an informational tool only and the results provided may not cover the entire cost of your funeral at the time of your death. This is a listing of U.S. national average prices; prices may vary based on location and specific circumstances. This information is supplied from sources we believe to be reliable but we cannot guarantee its accuracy.</p>
							<p>Sources: 2015 National Funeral Directors Association General Price List Survey; Federal Trade Commission Consumer Information; Everplans [1][2][3]</p>
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


<style>
.wizard-content{
	border:0px;
	padding-bottom:20px;
}
.wizard-buttons {
    margin-top: 10px;
    display: inline-block;
    width: 100%;
    margin-bottom: 30px;
}
.wizard-finish{
	display:none;
}
.wizard-buttons > a {
    margin-right: 5px;
    padding: 8px 16px;
    border: 1px solid #aaa;
    border-radius: 20px;
    font-size: 17px;
}
.wizard-steps > li {
    display: inline-block;
    padding: 0px 0;
    color: #666;
    width: 13%;
}
.wizard-steps > li.current, .wizard-steps > li.done{
	background:#00c292;
}
.wizard-steps > li.current{
	background:#000;
}
</style>
    <script src="plugins/jquery-wizard-master/dist/jquery-wizard.min.js"></script>


    <!-- FormValidation -->
    <link rel="stylesheet" href=" plugins/jquery-wizard-master/libs/formvalidation/formValidation.min.css">
    <!-- FormValidation plugin and the class supports validating Bootstrap form -->
    <script src="plugins/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
    <script src="plugins/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
    (function() {
        $('#exampleBasic').wizard({
            onFinish: function() {
                swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        });
        $('#exampleBasic2').wizard({
            onFinish: function() {
                swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        });
        $('#exampleValidator').wizard({
            onInit: function() {
                $('#validation').formValidation({
                    framework: 'bootstrap',
                    fields: {
                        username: {
                            validators: {
                                notEmpty: {
                                    message: 'The username is required'
                                },
                                stringLength: {
                                    min: 6,
                                    max: 30,
                                    message: 'The username must be more than 6 and less than 30 characters long'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z0-9_\.]+$/,
                                    message: 'The username can only consist of alphabetical, number, dot and underscore'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'The email address is required'
                                },
                                emailAddress: {
                                    message: 'The input is not a valid email address'
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'The password is required'
                                },
                                different: {
                                    field: 'username',
                                    message: 'The password cannot be the same as username'
                                }
                            }
                        }
                    }
                });
            },
            validator: function() {
                var fv = $('#validation').data('formValidation');

                var $this = $(this);

                // Validate the container
                fv.validateContainer($this);

                var isValidStep = fv.isValidContainer($this);
                if (isValidStep === false || isValidStep === null) {
                    return false;
                }

                return true;
            },
            onFinish: function() {
                $('#validation').submit();
                swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        });

        $('#accordion').wizard({
            step: '[data-toggle="collapse"]',

            buttonsAppendTo: '.panel-collapse',

            templates: {
                buttons: function() {
                    var options = this.options;
                    return '<div class="panel-footer"><ul class="pager">' +
                        '<li class="previous">' +
                        '<a href="#' + this.id + '" data-wizard="back" role="button">' + options.buttonLabels.back + '</a>' +
                        '</li>' +
                        '<li class="next">' +
                        '<a href="#' + this.id + '" data-wizard="next" role="button">' + options.buttonLabels.next + '</a>' +
                        '<a href="#' + this.id + '" data-wizard="finish" role="button">' + options.buttonLabels.finish + '</a>' +
                        '</li>' +
                        '</ul></div>';
                }
            },

            onBeforeShow: function(step) {
                step.$pane.collapse('show');
            },

            onBeforeHide: function(step) {
                step.$pane.collapse('hide');
            },

            onFinish: function() {
                swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        });
    })();
    </script>

