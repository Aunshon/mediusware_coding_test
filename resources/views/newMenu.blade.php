@extends('layouts.app')

@section('content')


<div class="container-fluid app-body settings-page">
	<h3>Recent post sent to buffer</h3>
		<div class="row">
		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text</th> <th>Time</th> </tr> 
				</thead> 
				<tbody> 
				@foreach ($bufferPostingData as $profiles)
					<tr>
                        <td>{{$profiles->groupInfo['name']}}</td>
                        <td>{{$profiles->groupInfo['type']}}</td>
						<td width="350">
							<div class="media">
								<div class="media-left">
									<a href="">
										<span class="fa fa-{{$profiles->groupInfo['type']}}"></span>
										<img width="50" class="media-object img-circle" src="{{$profiles->accountInfo['avatar']}}" alt="">
									</a>
								</div>
								<div class="media-body media-middle" style="width: 180px;">
									{{-- <h4 class="media-heading">{{profile->accountInfo->name}}</h4> --}}
								</div>
							</div>
						</td>
                        <td>{{$profiles['post_text']}}</td>
                        <td>{{$profiles['sent_at']}}</td>
					</tr>
				@endforeach
				</tbody> 
			</table>
		</div>
	</div>

</div>
@endsection
