<p>
    Hello {{ $user->name }},<br>
    this is your personal avatar:
</p>
<img src="{{ $message->embed(base_path().'/public/storage/' . $user->id . '/avatar.jpg') }}" style="width:300px;height:300px">
