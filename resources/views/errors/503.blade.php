@extends('layouts.default')
@section('title', 'Error - 404')
@section('main')
<div class="bg-blue-500 md:p-20 p-10 w-full overflow-clip">
	<div class="text-center text-white">
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 block text-white text-7xl w-100">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>
	</div>
	<div>
		<h1 class="text-white text-6xl mb-5">We're Upgrading your experience</h1>
		<p class="text-white">We are currently upgrading this website to serve you better</p>
		<p class="bg-blue-100 text-blue-500 p-3 rounded-lg"><a href="mailto:hello@bellahoptions.com">You can shoot us a mail by clicking this text</a></p>
	</div>
	
</div>
@endsection