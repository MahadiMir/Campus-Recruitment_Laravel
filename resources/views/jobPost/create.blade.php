@extends('layouts.admin')

@section('content')
<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Job Post Create</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
           
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <label class="control-label" for="first-name">Job Title <span class="required">*</span>
                        </label>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input type="text" id="first-name" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label" for="last-name">Company Name <span class="required">*</span>
                        </label>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-12 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <textarea cols="60" rows="15" id="ckeExample">Job Post</textarea>
                    <input type="hidden" onclick="javascript:fnConsolePrint();" />
                </div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
</div>       
@endsection
