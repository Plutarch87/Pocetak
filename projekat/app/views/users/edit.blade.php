<h1>EDIT PROFILE</h1>

@if($id = Auth::id())
{{ $user = User::find($id) }}
@else
{{ 'fuck off nigger' }}
@endif


<a href="#">Save</a>
<a href="#">Cancel</a>
<a href="{{ URL::route('login-user') }}" action="{{ Auth::logout() }}">Logout</a>