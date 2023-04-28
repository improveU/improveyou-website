<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/toastui-editor-improved.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <title>Form</title>
</head>

<body>
<x-header/>

<h1>courses</h1>
@foreach($courses as $course)
    <div class="courseCard">
        <a href="/course/{{ $course->id }}">
            <img src="{{ asset('storage/' . $course->image_path) }}" alt="">
            <div class="courseInfo">
                {{ $course->title }} <br>
                {{ $course->created_at->format('Y-m-d') }} <br>
                {{ $course->views }} <br>
            </div>
        </a>
    </div>
@endforeach

<h1>users</h1>
@foreach($users as $user)
    <div class="courseCard">
            <div class="courseInfo">
                {{ $user->username }} <br>
            </div>
    </div>
@endforeach


<div class="c">
    <x-formLogin/>
</div>

<div class="c">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis dolorum ea quam ipsum ipsa sint similique voluptatum
    iure distinctio, consequuntur placeat, quae fugiat atque perferendis qui, aspernatur hic ducimus quod. Iure vitae
    illo neque possimus incidunt! Nihil, voluptatibus mollitia quaerat sed neque voluptatum maiores, perferendis ducimus
    accusamus ex odio consectetur nobis incidunt, autem cum laborum ratione dignissimos magni atque exercitationem
    assumenda quam alias saepe. Excepturi, blanditiis aliquid rerum molestias a debitis nihil enim officia ea quisquam
    quos, placeat explicabo quibusdam at sequi ad beatae eius repudiandae quis expedita modi velit. Aliquid maiores
</div>

<div class="c">
    <button class="btn" id="button">
        Send
    </button>
    <br>
    <button class="btn discard">Discard</button>
    <br>
    <button class="btn danger">Logout</button>
    <br>

</div>
<div class="c">
    <div class="file-drop-area">
        <div class="cover-svg">
            <img src="{{ asset('svg/logoUploadFile.svg') }}">
        </div>
        <span class="fake-btn"> <strong> Upload files </strong> </span>
        <span class="file-msg">or drag and drop files here</span>
        <input class="file-input" type="file" multiple>
    </div>
</div>
<div class="c">
    <div class="credit-card-info--form">
        <div class="input_container">
            <label for="password_field" class="input_label">Card holder full name</label>
            <input id="password_field" class="input_field" type="password" name="input-name"
                   title="Inpit title" placeholder="Enter your full name">
        </div>
    </div>
</div>

<div class="c orange">
    <h2>
        Title
    </h2>
    <p>
        placeat explicabo quibusdam at sequi ad beatae eius repudiandae quis expedita modi velit. Aliquid
        maiores
    </p>

    placeat explicabo quibusdam at sequi ad beatae eius repudiandae quis expedita modi velit. Aliquid
    maiores
</div>
<div class="container teal">
    Title
    <br>
    placeat explicabo quibusdam at sequi ad beatae eius repudiandae quis expedita modi velit. Aliquid
    maiores
</div>


<div class="container">
    <div id="editor"></div>
</div>

<x-footer/>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    document.addEventListener('click', event => {
        if (event.target.matches('button')) {
            event.target.focus()
        }
    })


    var $fileInput = $('.file-input');
    var $droparea = $('.file-drop-area');

    // highlight drag area
    $fileInput.on('dragenter focus click', function () {
        $droparea.addClass('is-active');
    });

    // back to normal state
    $fileInput.on('dragleave blur drop', function () {
        $droparea.removeClass('is-active');
    });

    // change inner text
    $fileInput.on('change', function () {
        var filesCount = $(this)[0].files.length;
        var $textContainer = $(this).prev();

        if (filesCount === 1) {
            // if single file is selected, show file name
            var fileName = $(this).val().split('\\').pop();
            $textContainer.text(fileName);
        } else {
            // otherwise show number of files
            $textContainer.text(filesCount + ' files selected');
        }
    });

</script>
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
<script>
    const Editor = toastui.Editor;

    const editor = new Editor({
        el: document.querySelector('#editor'),
        height: 'auto',
        initialValue: '',
        initialEditType: 'wysiwyg',
        previewStyle: 'vertical'
    });

    editor.getMarkdown();

</script>
</body>

</html>
