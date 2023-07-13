function previewImage(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function() {
      var thumbnailPreview = document.getElementById('thumbnailPreview');
      thumbnailPreview.src = reader.result;
      thumbnailPreview.style.display = 'block';
    };
    
    reader.readAsDataURL(input.files[0]);
 }