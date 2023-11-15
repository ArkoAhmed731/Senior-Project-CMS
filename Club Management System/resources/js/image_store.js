document.getElementById('file-upload').addEventListener('change', function (e) {
    var file = e.target.files[0];

    if (file && file.type.startsWith('image/')) {
        var formData = new FormData();
        formData.append('file', file);

        // Send the file to the server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/upload', true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // Update the UI or perform any other actions on successful upload
                    // For example, display the file name in a div
                    document.getElementById('notimage').innerHTML = response.filename;
                } else {
                    // Handle the error
                    console.error(response.error);
                }
            }
        };
        xhr.send(formData);
    } else {
        // Display an error message for unsupported file types
        document.getElementById('notimage').innerHTML = 'Please select an image file';
    }
});