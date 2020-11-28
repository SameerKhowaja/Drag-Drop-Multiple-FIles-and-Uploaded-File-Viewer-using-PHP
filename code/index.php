<!DOCTYPE html>
<html>

<head>
    <title>File Uploader</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="js/multiupload.js"></script>
    <script src="js/config.js"></script>
</head>

<body style="background-color: cadetblue;">

    <div class="container" style="margin-top: 23px;margin-bottom: 23px;">
        <div class="text-center">
            <a href="files.php"><button id="files" type="button" class="btn btn-primary">View Uploaded Files</button></a>
        </div>
        <h1 class="text-center title">Multiple Drag and Drop File Upload</h1>

        <div id="dragAndDropFiles" class="uploadArea">
            <h1 id="h11">Drop Files Here</h1>
        </div>

        <form name="demoFiler" id="demoFiler" enctype="multipart/form-data">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <input type="file" name="multiUpload" id="multiUpload" class="btn btn-secondary btn-lg active" multiple />
                <input type="submit" name="submitHandler" id="submitHandler" value="Upload" class="btn btn-primary btn-lg" />
            </div>
        </form>

        <div class="progressBar">
            <div class="status"></div>
        </div>
    </div>

</body>

</html>