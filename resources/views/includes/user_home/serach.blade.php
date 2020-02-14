                <form action="{{route('guidebooking.create')}}" method="put">
							@csrf  

							<div class="row">
                            
                                 <div class="col-md-6">
									<div class="form-group">
										<span class="form-label">No.of.people</span>
                                        <input type="text" class="form-control" id="nop" name="nop" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">District</span>
										<select id="district" name="district" class="form-control" required>
											<option>Ampara</option>
											<option>Anuradhapura</option>
											<option>Badulla</option>
                                            <option>Batticaloa</option>
											<option>Colombo</option>
											<option>Galle</option>
                                            <option>Gampaha</option>
											<option>Hambantota</option>
											<option>Jaffna</option>
                                            <option>Kandy</option>
											<option>Kegalle</option>
											<option>Kilinochchi</option>
                                            <option>Kurunegala</option>
                                            <option>Mannar</option>
                                            <option>Matela</option>
                                            <option>Matara</option>
                                            <option>Monaragala</option>
                                            <option>Mullaitivu</option>
                                            <option>Nuwara Eliya</option>
                                            <option>Puttalam</option>
                                            <option>Ratnapura</option>
                                            <option>Trincomalee</option> 
                                            <option>Vavuniya</option>
                                            

										</select>
										<span class="select-arrow"></span>
									</div>
								</div>

								 @error('note')
									   <b>Error</b>
									   @enderror 
                            
								<div class="col-md-3">
									<div class="form-btn">
                                        <button type="submit" class="submit-btn">
                                            
											Book
					
                                        </button>	
									</div>
								</div>
                                								 	                              
							</div>
                    </form>


