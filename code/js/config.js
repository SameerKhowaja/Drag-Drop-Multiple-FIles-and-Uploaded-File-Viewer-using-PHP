var config = {
    support: "application/vnd.oasis.opendocument.text,application/vnd.oasis.opendocument.spreadsheet,application/vnd.oasis.opendocument.presentation,audio/ogg,application/rtf,application/zip,application/x-httpd-php,audio/wav,audio/mpeg,video/mpeg,image/vnd.microsoft.icon,application/java-archive,application/json,application/vnd.rar,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,text/plain,image/jpg,text/html,text/css,text/javascript,image/png,image/bmp,image/jpeg,image/gif", // Valid file formats
    // Include more File Formats : https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types#:~:text=Two%20primary%20MIME%20types%20are,value%20for%20all%20other%20cases.
    form: "demoFiler", // Form ID
    dragArea: "dragAndDropFiles", // Upload Area ID
    uploadUrl: "upload.php" // Server side upload url
}
$(document).ready(function() {
    initMultiUploader(config);
});