@extends('layouts.default')

@section('main')
<style type="text/css">
	body{
		background: #000033;
	}
</style>
	<div class="coming-content h-100 self-center text-center w-100 px-20">
		<div class="inline-block align-middle">
		<p class="text-center text-white mb-3">[COMING SOON]</p>
		<h1 class="text-center text-5xl font-bold text-cyan-100">We are building Bellah Options</h1>
		<p class="text-cyan-200 mt-3">Our engineers are working hard to launch a new experience, Stay Jiggy!</p>4
		@if(session('success'))
			<div class="bg-green-100 p-5 text-center text-green-500 rounded-lg">
				{{ session('success') }}
			</div>
		@endif
		@if($errors->any())
    <div class="bg-red-500 p-5 text-center text-red-600 rounded-lg text-white">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		<form method="post" action="{{ route('newsletter.store') }}" class="px-40 mt-5">
			@csrf
			<div class="my-2">
			<input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" 
			class="bg-transparent text-white w-full border border-cyan-300 p-3 px-4 rounded-lg" required
			>
		</div>
		<div class="my-2">
			<input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" 
			class="bg-transparent text-white w-full border border-cyan-300 p-3 px-4 rounded-lg" required
			>
		</div>
		<div class="my-2">
			<button type="submit"
			class="bg-cyan-300 font-bold w-full p-3 px-4 rounded-lg hover:bg-white" 
			>Join the Waitlist</button>
		</div>
		</form>
			</div>
	</div>
	<div class="sub">

	</div>
@endsection