<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Active Directory Manager</title>
<link rel="stylesheet" href="css/bootstrap.min.css">  
<link rel="stylesheet" href="css/main.css">  
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</head>
<body>
		
    <div class="navbar navbar-fixed-top navbar-default " role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Active Directory Manager</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav" id="first-level"> 
            <li class="active"><a  data-path="Users" href="#">Users</a></li>
            <li><a data-path="Computers" href="#">Computers</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container" id="content">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-9 col-sm-9">
		  <a href="#" class="btn btn-primary btn-lg"  id="new" >Add new</a></br></br>
          <div id="loader"></div>
          <div class="row" id="wrapper">
             <div class="table-responsive" id="table">
            <table class="table table-striped">
              <thead>
                <tr> 
                  <th>Name</th> 
                  <th>Actions</th> 
                </tr>
              </thead>
              <tbody id="items">
              </tbody>
            </table>
          </div>
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-3 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group" id="users-last-level"> 
            <a href="#" data-path="Active" class="list-group-item active">Active</a>
            <a href="#" data-path="Disabled" class="list-group-item">Disabled</a>
            <a href="#" data-path="Pending"  class="list-group-item">Pending</a> 
          </div>
          <div class="list-group" id="computers-last-level" style="display:none;"> 
            <a href="#" data-path="Active" class="list-group-item active">Active</a>
            <a href="#" data-path="Disabled" class="list-group-item">Disabled</a> 
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Catalin Giana 2014</p>
      </footer>
<div class="modal fade" id="newUser" tabindex="-1" role="dialog" aria-labelledby="newUser" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Add new</h4>
      </div>
      <div class="modal-body form-horizontal" role="form"> 
	  
	  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="first_name" placeholder="First Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="last_name" placeholder="Last Name">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
      <textarea  class="form-control" id="description" placeholder="Description"></textarea>
    </div>
  </div>
  
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save_user">Save</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="newComputer" tabindex="-1" role="dialog" aria-labelledby="newComputer" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Add new</h4>
      </div>
      <div class="modal-body form-horizontal" role="form"> 
	  
	  <div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="name" placeholder="Name">
		</div>
		  </div> 
	  <div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Description</label>
		<div class="col-sm-10">
		  <textarea  class="form-control" id="description_computer" placeholder="Description"></textarea>
		</div>
	  </div>
	  
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save_computer">Save</button>
      </div>
    </div>
  </div>
</div>
    </div><!--/.container-->


	
</body>
</html>