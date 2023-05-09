@extends('layouts.dashboard.app')

    @push('css')
<style>
	form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		input[type="file"] {
			display: none;
		}
		label {
			display: block;
			width: 200px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			border-radius: 5px;
			background-color: #4CAF50;
			color: white;
			font-weight: bold;
			cursor: pointer;
			margin-bottom: 10px;
			transition: background-color 0.3s ease;
		}
		label:hover {
			background-color: #3e8e41;
		}
		.selected-files {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}
		.selected-files img {
			margin: 10px;
			height: 100px;
			object-fit: cover;
			object-position: center;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0,0,0,0.3);
		}
	</style>

       @endpush
@section('content')
<h1>Upload Multiple Images Example</h1>
	<form action="{{ route('dashboard.gallaries.store') }}" method="post" enctype="multipart/form-data">
		 @csrf
        <label for="file-input">Choose files</label>
		<input id="file-input" type="file" name="images[]" multiple>
		<input type="submit" value="Upload">
	</form>
	<div class="selected-files">
		<!-- selected files will be displayed here -->
	</div>
	<script>
		// display selected images after file input change
		const fileInput = document.getElementById('file-input');
		fileInput.addEventListener('change', (event) => {
			const selectedFiles = Array.from(event.target.files);
			const selectedFilesContainer = document.querySelector('.selected-files');
			selectedFilesContainer.innerHTML = '';
			selectedFiles.forEach(file => {
				const reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload = () => {
					const img = document.createElement('img');
					img.src = reader.result;
					selectedFilesContainer.appendChild(img);
				};
			});
		});
	</script>
@endsection