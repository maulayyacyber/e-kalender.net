<div class="container" style="margin-top:40px;">

    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar-o"></i> Task Calendar Baru</h4>
                </div>
                <div class="modal-body">
                    <div id="testmodal" style="padding: 5px 20px;">
                        <form id="antoform" class="form-horizontal calender" role="form">


                            <input type="hidden" disabled="true" class="form-control" id="txtDate" name="txtDate">



                            <div class="form-group">
                                <label class="col-sm-3 control-label">Judul Task</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="6" id="descr" name="descr"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default antoclose" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="button" id="btnAddTask" class="btn btn-primary antosubmit"><i class="fa fa-save"></i> Save Task</button>
                </div>
            </div>
        </div>
    </div>

    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-calendar-o"></i> Edit Task Calendar</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="task_id" name="task_id" value="" />
                    <div id="testmodal2" style="padding: 5px 20px;">
                        <form id="antoform2" class="form-horizontal calender" role="form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Judul Task</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title2" name="title2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Katerangan</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="6" id="descr2" name="descr"></textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" id="btnUpdateTask" class="btn btn-primary antosubmit2"><i class="fa fa-save"></i> Update Task</button>
                    <button type="button" id="btnDeleteTask" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Delete Task</button>
                    <button type="button" class="btn btn-default antoclose2" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content text-center">
                    <img src="<?php echo base_url() ?>resources/images/calendar.png" style="width: 40px;margin-bottom: 3px">
                    <br>
                    <span style="font-family: Roboto;font-weight: 300;font-size: 25px">Bisma Labs - History Task Worker</span>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div id="calendar">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

