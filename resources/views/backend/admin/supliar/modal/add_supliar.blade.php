

<div id="add_supliar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="studenteditedataTitle" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="text-align: center;" align="center">
                                                            <h5 class="" style="text-align: center;">Profile Edite</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                    <form action="{{ route('SaveSupliar') }}"  method="POST" id="addSupliar">
                                                      @csrf
                                                   


                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">Supliar Name</label>
                                                                    <input type="text" name="name" id="name" class="form-control" placeholder="name..">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">Email</label>
                                                                    <input type="email" name="email" id="email" class="form-control" placeholder="email..">
                                                                </div>
                                                            </div>
                                                        </div>


                                                          <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">Mobile</label>
                                                                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="mobile..">
                                                                </div>
                                                            </div>
                                                        </div>




                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">Address</label>
                                                                    <input type="text" name="address" id="address" class="form-control" placeholder="address..">
                                                                </div>
                                                            </div>
                                                        </div>



                                               
                                                        





                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" id="reset" class="btn btn-warning waves-effect d-none" data-dismiss="modal">Reset</button>
                                                      <button type="submit" class="btn btn-success" >Submit</button>
                                                      <button type="reset" class="btn btn-warning" >reset</button>
                                                        
                                                    </div>

                                                </div>
                                                    </form>
                                            </div>
                                        </div>