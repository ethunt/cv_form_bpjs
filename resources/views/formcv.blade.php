<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<!-- start: BODY -->
<body>
<div class="main-wrapper">
	<!-- start: MAIN CONTAINER -->
		<!-- start: PAGE -->
		<div class="main-content">
			<div class="container">
				<!-- start: PAGE CONTENT -->
				<div class="row">
					<div class="col-md-12">
			         <!-- start: FORM 1 PANEL -->
			          <div class="panel panel-white">
			            <div class="panel-body">
			                <h3><i class="fa fa-pencil-square"></i> Personal Details</h3>
			                <hr>
			              <form action="{{URL::to('api/profile')}}" role="form" id="cvForm" method="POST" enctype="multipart/form-data" autocomplete="off">
            				@csrf
			                <div class="row">
                                <div class="col-md-12">
                                    @if ($message = Session::get('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('error') }}
                                    </div>
                                    @endif
                                    @if ($message = Session::get('warning'))
                                    <div class="alert alert-warning" role="alert">
                                        {{ Session::get('warning') }}
                                    </div>
                                    @endif
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="wantedJobTitle" class="form-label">
                                            Wanted Job Title <i class="fa fa-question-circle"></i> <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="" class="form-control @error('wantedJobTitle') is-invalid @enderror" id="wantedJobTitle" name="wantedJobTitle" value="@if(isset($profile)){{ old('wantedJobTitle', $profile['wantedJobTitle']) }}@else{{old('wantedJobTitle')}}@endif" required>
                                        @error('wantedJobTitle')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="firstName" class="form-label">
                                            First Name <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="" class="form-control @error('firstName') is-invalid @enderror" id="firstName" name="firstName" value="@if(isset($profile)){{ old('firstName', $profile['firstName']) }}@else{{old('firstName')}}@endif" required>
                                        @error('firstName')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">
                                            Email <span class="symbol required"></span>
                                        </label>
                                        <input type="email" placeholder="" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="@if(isset($profile)){{ old('email', $profile['email']) }}@else{{old('email')}}@endif" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="country" class="form-label">
                                            Country <span class="symbol required"></span>
                                        </label>
                                        <select class="form-control @error('country') is-invalid @enderror" id="country" name="country" required>
                                            <option value=""> -- </option>
                                            @foreach($countries as $row)
                                            <option value="{{$row->country}}" @if(isset($profile) && old('country',$profile['country']) == $row->country || old('country') == $row->country) selected @endif>{{$row->country}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="form-label">
                                            Address <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="@if(isset($profile)){{ old('address', $profile['address']) }}@else{{old('address')}}@endif" required>
			                        </div>
                                    <div class="form-group">
                                        <label for="drivingLicense" class="form-label">
                                            Driving License <i class="fa fa-question-circle"></i> <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="" class="form-control @error('drivingLicense') is-invalid @enderror" id="drivingLicense" name="drivingLicense" value="@if(isset($profile)){{ old('drivingLicense', $profile['drivingLicense']) }}@else{{old('drivingLicense')}}@endif" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="placeOfBirth" class="form-label">
                                            Place of Birth <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="" class="form-control @error('placeOfBirth') is-invalid @enderror" id="placeOfBirth" name="placeOfBirth" value="@if(isset($profile)){{ old('placeOfBirth', $profile['placeOfBirth']) }}@else{{old('placeOfBirth')}}@endif" required>
                                    </div>
			                    </div>
			                    <div class="col-md-6">
			                        <div class="form-group">
                                        <img src="/assets/images/anonymous.jpg" id="photo" style="cursor:pointer;height: 60px" />
                                        <label for="uploadPhoto" style="cursor:pointer; color:rgb(0, 204, 255)">
                                            Upload Photo <span class="symbol required"></span>
                                        </label>
                                        <input type="file" name="uploadPhoto" id="uploadPhoto" style="display:none">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName" class="form-label">
                                            Last Name <span class="symbol required"></span>
                                        </label>
                                        <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" value="@if(isset($profile)){{ old('lastName', $profile['lastName']) }}@else{{old('lastName')}}@endif" required>
			                        </div>
                                    <div class="form-group">
                                        <label for="phone" class="form-label">
                                            Phone <span class="symbol required"></span>
                                        </label>
                                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="@if(isset($profile)){{ old('phone', $profile['phone']) }}@else{{old('phone')}}@endif" required>
			                        </div>
                                    <div class="form-group">
			                            <label for="city" class="form-label">
			                                City <span class="symbol required"></span>
			                            </label>
			                            <select class="form-control @error('city') is-invalid @enderror" name="city" id="city" required>
			                      	        <option value=""></option>
                                            @foreach($city as $row)
                                            <option value="{{$row->city}}" @if(isset($profile) && old('city',$profile['city']) == $row->city || old('city') == $row->city) selected @endif>{{$row->city}}</option>
                                            @endforeach
			                      	    </select>
			                        </div>
                                    <div class="form-group">
                                        <label for="postalCode" class="form-label">
                                            Postal Code <span class="symbol required"></span>
                                        </label>
                                        <input type="number" class="form-control @error('postalCode') is-invalid @enderror" id="postalCode" name="postalCode" value="@if(isset($profile)){{ old('postalCode', $profile['postalCode']) }}@else{{old('postalCode')}}@endif" required>
			                        </div>
                                    <div class="form-group">
                                        <label for="nationality" class="form-label">
                                            Nationality <i class="fa fa-question-circle"></i> <span class="symbol required"></span>
                                        </label>
                                        <input type="text" class="form-control @error('nationality') is-invalid @enderror" id="nationality" name="nationality" value="@if(isset($profile)){{ old('nationality', $profile['nationality']) }}@else{{old('nationality')}}@endif" required>
			                        </div>
                                    <div class="form-group">
                                        <label for="dateOfBirth" class="form-label">
                                            Date of Birth <i class="fa fa-question-circle"></i> <span class="symbol required"></span>
                                        </label>
                                        <input type="text" class="form-control @error('dateOfBirth') is-invalid @enderror" data-date-format="dd-mm-yyyy" data-provide="datepicker" id="dateOfBirth" name="dateOfBirth" value="@if(isset($profile)){{ old('dateOfBirth', date('d-m-Y', strtotime($profile['dateOfBirth']))) }}@else{{old('dateOfBirth')}}@endif" required>
			                        </div>
                                </div>
			                </div>
                            @if(isset($profile))
                            <div class="col-md-2">
                                <a class="btn btn-grey btn-block" href="{{ URL::to('/api/profile/'.$profile['profileCode']) }}" >
                                    <i class="fa fa-pencil"></i> Update
                                </a>
                            </div>
                            @endif
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-arrow-circle-right"></i>
                                    <span>Submit</span>
                                </button>
                            </div>
                            <hr>
                            <h3>Professional Summary</h3>
                            <p>Write 2-4 short & energetic sentences to interest the reader! Mention your role, experience & most importantly - your biggest achivements, best qualities and skills.</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="x" value="e.g. Passionate science teacher with 8+ years experience and track record of..." type="hidden" name="content">
                                        <trix-editor input="x"></trix-editor>
			                        </div>
                                </div>
			                </div>
                            <hr>
                            <h3>Employment History</h3>
                            <p>"Show your relevant experience (last 10 years). Use bullet point to note your achivements, if possible - use numbers/facts (Achieved X, measured by Y, by doing Z)."</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/"><h5><i class="fa fa-plus"></i> Add Employment</h5></a>
                                </div>
			                </div>
                            <hr>
                            <h3>Education</h3>
                            <p>A varied education on your resume sums up the value that your learnings and background will bring to job.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/"><h5><i class="fa fa-plus"></i> Add Education</h5></a>
                                </div>
			                </div>
                            <hr>
                            <h3>Skill</h3>
                            <p>"Choose 5 of the most important skills to show your talents! Make sure they match the keywords of the job listing if applying via an online system."</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/"><h5><i class="fa fa-plus"></i> Add Skill</h5></a>
                                </div>
			                </div>
			              </form>
			            </div>
			          </div>
                     <!-- end: FORM 1 PANEL -->
			        </div>
				</div>
			</div>
		</div>
		<!-- end: PAGE -->
	<!-- end: MAIN CONTAINER -->
</div>
@include('layouts.scripts')
</body>
<!-- end: BODY -->
<script type="text/javascript">
    $("#photo").click(function () {
        $("#uploadPhoto").trigger('click');
    });

    $('#country').on('change', function() {
        $.ajax({
            url: "/profile/filtercity",
            method: 'GET',
            data: {
                country: $(this).val()
            },
            success: function (json) {
                //alert(json.data);
                $('#city').html(json.data);
            }
        });
    });

    $('#wantedJobTitle').on('blur', function() {
        if($('#wantedJobTitle').val() == '')
        {
            messages: {
                firstName: "Plase enter your Job Title you want!",
            }
        }
    });
</script>

</html>
