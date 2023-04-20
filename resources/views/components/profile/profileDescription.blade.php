<section id="profileDescription" class="hidden">
    <h1>Description</h1>
    <div class="descriptionContainer">
        <form method="POST" class="formWrapper create" id="formSending" action="/updateProfileDescription" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="description" id="formTextarea" value="">

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
