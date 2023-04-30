<section id="profileDescriptionEdit" class="hidden">
    <h1>Edit description</h1>
    <div class="descriptionContainer">
        <form method="POST" class="formWrapper create" id="formSending" action="/updateProfileDescription" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="activeTab" value="{{ session('activeTab', 'profileOverview') }}">
            <input type="hidden" name="description" id="formTextarea" value="{{ auth()->user()->description }}">

            <div class="inputContainer">
                <label class="inputLabel" for="editor">Describe yourself (Others can read this)</label>
                <div id="editor"></div>
            </div>
            <div class="submitContainerRight">
                <button class="btn" type="submit">Safe</button>
            </div>
        </form>
    </div>
</section>
