$("#fileInput").change(function(){
    $("button").prop("disabled", this.files.length == 0);
});