@extends('layouts.app')

@section('content')
<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">

                <!-- START PEOPLE AREA -->
				<div class="col-md-4 col-xl-3 chat"><div class="card card-h mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">

							@foreach ($users as $user)
						<li class="user" id="{{ $user->id }}">
						
							<div class="d-flex bd-highlight">
								
								<div class="img_cont">
									@if($user->unread)
										<span class="pending">{{$user->unread}}</span>
									@endif
									<img src="/img/{{ $user->avatar }}" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>{{ $user->name }}</span>
									<p>{{ $user->email }}</p>
									{{-- <p>Kalid is online</p> --}}
								</div>
							</div>
						</li>
						@endforeach
						
						</ui>
					</div>
					<div class="card-footer"></div>
                </div></div>
                
                <!-- END PEPOLE AREA -->

                <!-- START CHAT AREA -->
				<div class="col-md-8 col-xl-6 chat " id="messages">

                </div>
                <!-- START CHAT AREA -->
			</div>
		</div>
@endsection
