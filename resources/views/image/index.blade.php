<form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
@csrf
    <input id="image" type="file" name="image">
    <button type="submit">
       アップロード
    </button>
</form>
@foreach($images as $image)
    <div>
        <img src="data:image/png;base64,{{ $image->image) }}" alt="image" style="width: 30%; height: auto;"/>
    </div>
@endforeach
