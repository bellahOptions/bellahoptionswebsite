@extends('layouts.default')
@section('title', 'Contact Us')

@section('main')
	<div class="w-full py-10 px-2 bg-sky-100 overflow-wrap">
		<h1 class="text-3xl font-bold mb-2 text-center text-gray-600">Contact Bellah Options</h1>
		<p class="text-center text-gray-600 mb-3"> Hi, Let's get to you and what you have for us. You'll get a response in few minutes</p>
		<div class="flex flex-col md:flex-row">
		<div class="mt-1 m-5 bg-sky-100 rounded-lg w-auto">
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
			<form action="{{ route('contact.save') }}" method="post">
				@csrf
				<div class="mb-3">
					<label class="text-gray-600 block">Full Name</label>
					<input type="text" name="full_name" class="p-1 rounded-lg border border-gray-200 w-full" required>
				</div>
				<div class="mb-3">
					<label class="text-gray-600 block">Phone/Whatsapp</label>
					<input type="tel" name="phone" class="p-1 rounded-lg border border-gray-200 w-full" required>
				</div>
				<div class="mb-3">
					<label class="text-gray-600 block">Email</label>
					<input type="email" name="email" class="p-1 rounded-lg border border-gray-200 w-full" required>
				</div>
				<div class="mb-3">
					<label class="text-gray-600 block">Email</label>
					<textarea name="message" class="p-1 rounded-lg border border-gray-200 w-full">			
					</textarea>
				</div>
				<div class="mb-3">
					<button class="p-3 text-center bg-blue-800 text-white rounded-lg w-full">Contact Us </button>
				</div>
			</form>
		</div>
		<div class="map-view w-full">
			<div class="p-5 rounded-lg bg-blue-100">
				<p>Map here</p>
			</div>
		</div>

	</div>

	</div>
@endsection