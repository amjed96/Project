<?php
if(file_exists('views/avatars/amjed96.png')) {
    chmod('views/avatars/amjed96.png',0755); //Change the file permissions if allowed
    unlink('views/avatars/amjed96.png'); //remove the file
}

//move_uploaded_files($_FILES['image']['tmp_name'], 'your-filename.ext');
?>