<form action="{{ route('bai-viet.store')}}" method="POST">
    @csrf
    {{--   Tạo ra 1 token mã hóa để gửi đi --}}
    <div>
        <label for="title">
        Tiêu đề bài viết:
    </label>
    <br>
    <input type="text" name="title">
    @error('title')
        <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div>
        <label for="">
        Nội dung bài viết:
    </label>
    <br>
    <textarea  cols="40" rows="10" name="content"></textarea>
    </div>
    <button type="submit" >Đăng bài</button>
</form>