<div class="row"    >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Dropzone
                </div>
                <div class="panel-body">
                    {!! Form::open(['route'=> 'file.store', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                    <div class="dz-message" style="height:200px;">
                        Drop your files here
                    </div>
                    <div class="dropzone-previews"></div>
                    <button type="submit" class="btn btn-success" id="submit">Save</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>