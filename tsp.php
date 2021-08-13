
<script>
    function previewImage() {
        var file = document.getElementById("file").files;
        if (file.length > 0) {
            var fileReader = new FileReader();
 
            fileReader.onload = function (event) {
                document.getElementById("preview").setAttribute("src", event.target.result);
            };
 
            fileReader.readAsDataURL(file[0]);
        }
    }
</script>
 
<form method="POST" action="/" enctype="multipart/form-data">
    <input type="file" name="file" id="file" accept="image/*" onchange="previewImage();">
 
    <img id="preview">
    <img id="preview" class="rounded-circle">
</form>