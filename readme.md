# Install GULP
node -v

npm install --global gulp-cli
npm install

# DropZone
In Ajax request  Dropzone.discover(); is needed
<code>
$.ajax({
            url:url
        }).done(function (data){
            console.log(data);
            $('.dropzone-container').html(data);
            Dropzone.discover();
        });
</code>        