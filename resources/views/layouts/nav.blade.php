<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
								ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
								Perspiciatis.
							</p>
						</div>
					</div>
					<div class="col-md-6 col-md-pull-7">
						<div class="booking-form">
							<form>
								<div class="form-group">
									<span class="form-label">Your Destination</span>
									<input class="form-control" type="text" placeholder="Enter a destination or hotel name">
								</div>
								<div class="form-group{{ $errors->has('towns') ? ' has-error' : '' }}">
                 <label for="town_id" class="col-md-4 control-label">Select a Town</label>
                 <div class="col-md-6">

                      <select class="form-control" name="town_id" id="town_id">
                      <option value="">Select a Town</option>
                     @foreach ($towns as $town)
                      <option value="{{ $town->id }}">{{ ucfirst($town->name) }}</option>
                     @endforeach
                      </select>
                     @if ($errors->has('towns'))
                         <span class="help-block">
                             <strong>{{ $errors->first('towns') }}</strong>
                         </span>
                     @endif
                 </div>
             </div>
								
								<div class="form-btn">
									<button class="submit-btn">Search</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>