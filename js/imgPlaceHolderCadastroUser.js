function changePlaceholder(id_file, id_thumb){

    let fileInput = document.getElementById(id_file); 

    let file = fileInput.files[0];

    if(file){
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.addEventListener('load', function(){
            document.getElementById(id_thumb).src = this.result;
        })
    }

}