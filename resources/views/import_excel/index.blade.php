<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 Import Excel to database - W3Adda</title>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</head>
 
<body>
    
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Laravel 6 Import Excel to database - W3Adda
        </div>
            @if ($errors->any())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
        <div class="card-body">
 
            <form action="{{ url('import-excel') }}" method="POST" name="importform" enctype="multipart/form-data">
                @csrf
                
              
                <div class="form-group">
                    <label for="subject" class="col-md-4 control-label">Matiere :</label>
                    <div class="col-md-6">
                        <select name="subject" id="subject" class="form-control">
                            @foreach($subjects as $subjects)
                                <option value="{{ $subjects->id }}">{{ $subjects->name }}</option>
                             @endforeach
                            </select>
                        </div>
                </div>
 
                <div class="form-group">
                    <label for="type" class="col-md-4 control-label">CC n° :</label>
                    <div class="col-md-6">
                        <select name="type" id="type" class="form-control">
                            
                                <option value="type-1">1</option>
                                <option value="type-2">2</option>
 
                        </select>
                    </div>
                </div>
 
                <div class="form-group">
                    <label for="competences" class="col-md-4 control-label">Competence 1 :</label>
                    <div class="col-md-6">
                        <select name="competences" id="competences" class="form-control">
                            @foreach($competences as $competences)
                                <option value="01">{{ $competences->name }}</option>
                             @endforeach
                        </select>
                    </div>
                </div>
                <input type="file" name="import_file" class="form-control">
                <br>
                <button class="btn btn-success">Import File</button>
            </form>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Student Data</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Exo1</th>
                    <th>Exo2</th>
                    <th>Exo3</th>
                    <th>Exo4</th>
                    <th>Exo5</th>
               </tr>
                 @foreach($Student as $c)
                 <tr>
                    <td>{{ $c->nomStudent }}</td>
                    <td>{{ $c->exo1 }}</td>
                    <td>{{ $c->exo2 }}</td>
                    <td>{{ $c->exo3 }}</td>
                    <td>{{ $c->exo4 }}</td>
                    <td>{{ $c->exo5 }}</th>
                </tr>
                @endforeach
                </table>
                <button class="btn btn-danger"><a href="/PDF1">Generer PDF</a></button>
 
            </div>
        </div>
    </div>
 
</div>
    
</body>
</html>